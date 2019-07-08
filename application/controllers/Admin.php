<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Admin extends CI_Controller
{
	private $session_data;
	function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('rekening_model');
		$this->load->model('user_model');
		$this->load->helper('download');
		$this->session_data = $this->session->userdata('logged_in_pengelola');

		if(!$this->session_data) redirect('login');
		// else redirect('login');
	}
	
	function index()
	{
		$this->load->view('admin/beranda.php');
	}
	
	function daftarproduk()
	{
		$data['produk'] = $this->produk_model->daftar_produk();
		$this->load->view('admin/daftarproduk',$data);
	}
	
	function tambahproduk()
	{
		$data['kategori'] = $this->produk_model->getAllKategori();
		$this->load->view('admin/tambah_barang', $data);
	}
	
	function proses_tambah_produk()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload())
		{
			redirect('admin/tambahproduk');
		}
		else
		{
			$gambar = $this->upload->data();
			
			$data['kategori'] = $this->input->post('kategori',true);
			$data['nama_produk'] = $this->input->post('nama_produk',true);
			$data['ukuran'] = $this->input->post('ukuran',true);
			$data['berat'] = $this->input->post('berat',true);
			$data['keterangan'] = $this->input->post('keterangan',true);
			$data['harga'] = $this->input->post('harga',true);
			$data['gambar'] = $gambar['file_name'];
			$data['ishapus'] = 0;

			$this->produk_model->tambah_produk($data);
			redirect('admin/daftarproduk');
		}
	}
	
	function editproduk($id)
	{
		$data['produk'] = $this->produk_model->select_by_id($id);
		$data['kategori'] = $this->produk_model->getAllKategori();
		$this->load->view('admin/edit_barang',$data);
	}
	
	function proseseditproduk()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload())
		{
			$id = $this->input->post('id');
			redirect('admin/editproduk/'.$id);
		}
		else
		{
			$gambar = $this->upload->data();
			
			$data['kategori'] = $this->input->post('kategori',true);
			$data['nama_produk'] = $this->input->post('nama_produk',true);
			$data['ukuran'] = $this->input->post('ukuran',true);
			$data['keterangan'] = $this->input->post('keterangan',true);
			$data['harga'] = $this->input->post('harga',true);
			$data['gambar'] = $gambar['file_name'];
			
			$id=$this->input->post('id');

			$this->produk_model->edit_produk($id,$data);
			redirect('admin/daftarproduk');
		}
	}
	
	function hapusproduk($id)
	{
		$data['ishapus'] = 1;
		$this->produk_model->edit_produk($id,$data);
		// $this->produk_model->delete_produk($id);
		redirect('admin/daftarproduk');
	}
	
	function invoices()
	{
		$data['invoices'] = $this->produk_model->all_invoices();
		$this->load->view('admin/daftarinvoices',$data);
	}
	
	function detailinvoices($id_invoices)
	{
		$data['invoices'] = $this->produk_model->detailinvoices($id_invoices);
		$this->load->view('admin/detailinvoices',$data);
	}
	
	function konfirmasi()
	{
		$data['konfirmasi'] = $this->produk_model->all_konfirmasi();
		$this->load->view('admin/daftarkonfirmasi',$data);
	}
	
	function detailkonfirmasi($invoice_id)
	{
		$data['konfirmasi'] = $this->produk_model->detail_konfirmasi($invoice_id);
		$this->load->view('admin/detail_konfirmasi',$data);
	}

	function verifikasibayar($invoice_id)
	{
		$data['status'] = "PAID";
		$this->produk_model->editinvoices($invoice_id, $data);		
		$this->sendEmailKonfirmasiBayar($invoice_id);
		$this->konfirmasi();
	}
	
	function download($nama)
	{
		$name = $nama;
		$data = file_get_contents('uploads/konfirmasi/'.$nama);
		force_download($name, $data);
	}

	function rekening()
	{
		$data['rekening'] = $this->rekening_model->listRekening();
		$this->load->view('admin/daftarrekening',$data);
	}

	function tambahrekening()
	{
		if ($_SERVER ['REQUEST_METHOD']=="POST") 
		{
			$this->form_validation->set_rules('bank', 'Bank', 'trim|required');
			$this->form_validation->set_rules('norek', 'Norek', 'trim|required');
			$this->form_validation->set_rules('atasnama', 'Atasnama', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				echo '<script language="javascript">alert("Silahkan lengkapi pengisian")</script>';
				redirect('admin/tambahrekening','refresh');
			}
			else
			{
				$data = array(
					'nama_bank' => $this->input->post('bank'),
					'no_rekening' => $this->input->post('norek'),
					'atasnama' => $this->input->post('atasnama'),
				);

				$this->rekening_model->input_data($data);
				echo '<script language="javascript">alert("Rekening ditambahkan !")</script>';
				redirect('admin/rekening','refresh');
			}

		}
		else 
		{
			$this->load->view('admin/tambah_rekening');
		}
	}

	public function ubahrekening($idrekening)
	{
		$data['rekening'] = $this->rekening_model->getRekeningById($idrekening);

		if ($_SERVER ['REQUEST_METHOD']=="POST") 
		{
			$this->form_validation->set_rules('bank', 'Bank', 'trim|required');
			$this->form_validation->set_rules('norek', 'Norek', 'trim|required');
			$this->form_validation->set_rules('atasnama', 'Atasnama', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				echo '<script language="javascript">alert("Silahkan lengkapi pengisian")</script>';
				redirect('admin/ubahrekening','refresh');
			}
			else
			{
				$id_data['id'] = $idrekening;
				$in_data['nama_bank'] = $this->input->post('bank');
				$in_data['no_rekening'] = $this->input->post('norek');
				$in_data['atasnama'] = $this->input->post('atasnama');

				$this->rekening_model->ubahRekening($in_data, $id_data);
				echo '<script language="javascript">alert("Rekening telah diubah !")</script>';
				redirect('admin/rekening','refresh');
			}

		}
		else {
			$this->load->view('admin/ubah_rekening', $data);
		}
	}

	public function hapusrekening($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->rekening_model->hapusRekening($id)) {
			redirect('admin/rekening', 'refresh');
		}
	}

	public function profil()
	{
		$profil = $this->user_model->getPenggunaById($this->session_data['id']);
		// print_r($profil->id); die();
		$data['profil'] = $profil;
		// print_r($this->session_data['id']); die();

		if ($_SERVER ['REQUEST_METHOD']=="POST") 
		{
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('kontak', 'Kontak', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				echo '<script language="javascript">alert("Silahkan lengkapi pengisian")</script>';
				redirect('admin/profil','refresh');
			}
			else
			{
				$id_data['id'] = $profil->id;
				$in_data['nama'] = $this->input->post('nama');
				$in_data['username'] = $this->input->post('username');
				$in_data['email'] = $this->input->post('email');
				$in_data['kontak'] = $this->input->post('kontak');
				$in_data['instagram'] = $this->input->post('instagram');
				$in_data['facebook'] = $this->input->post('facebook');
				$in_data['twitter'] = $this->input->post('twitter');

				$this->user_model->ubahPengguna($in_data, $id_data);
				echo '<script language="javascript">alert("Pengguna telah diubah !")</script>';
				redirect('admin/profil','refresh');
			}

		}
		else {
			$this->load->view('admin/profil', $data);
		}
	}

	public function ubahpassword()
	{
		$old_pass = $this->session_data['password'];

		if ($_SERVER ['REQUEST_METHOD']=="POST") 
		{
			$this->form_validation->set_rules('old_password', 'Password Lama', 'trim|required');
			$this->form_validation->set_rules('new_password', 'Password Baru', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				echo '<script language="javascript">alert("Password Tidak Boleh Kosong")</script>';
				redirect('admin/ubahpassword', 'refresh');
			}
			else
			{
				if($old_pass == MD5($this->input->post('old_password')))
				{
					if($this->input->post('new_password') == $this->input->post('konfirm_new_password')){
						$id_data['id'] = $this->session_data['id'];
						$in_data['password'] = MD5($this->input->post('new_password'));

						$this->user_model->ubahPengguna($in_data, $id_data);
						echo '<script language="javascript">alert("Password Telah Diganti. Silahkan login kembali!")</script>';
						redirect('logout', 'refresh');
					}
					else
					{
						echo '<script language="javascript">alert("Konfirmasi Password lama tidak sesuai")</script>';
					}
				}
				else
				{
					echo '<script language="javascript">alert("Password lama tidak sesuai")</script>';
				}

				redirect('admin/ubahpassword', 'refresh');
			}
		}
		else {
			$this->load->view('admin/ubah_password');
		}
	}

	private function sendEmailKonfirmasiBayar($id_invoices)
	{		
		$pemesanan = $this->produk_model->detailinvoices($id_invoices);
		$data['invoices'] = $pemesanan;
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'dharma.bekti16696@gmail.com',
			'smtp_pass' => '16696-raava',
			'mailtype' => 'html',
			'wordwrap' => TRUE,
			'charset' => 'iso-8859-1',
			'newline' => "\r\n"
		);
		
		$body = $this->load->view('v_emailkonfirmasibayar',$data,TRUE);
     // $this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('no-reply@mail.com', 'Pesanan Diproses');
		$this->email->to($pemesanan[0]->email);
		$this->email->subject('OnlineShop');
		$this->email->message($body);
		if (!$this->email->send())
		{
			show_error($this->email->print_debugger());
			return false;
		}
		else
		{
			return true;
		}
	}
}
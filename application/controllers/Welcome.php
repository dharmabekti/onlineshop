<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	private $api_key = "c3b92147328ad31d1e80e8277e7e5aff";

	function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->library('cart');
	}
	
	public function index()
	{
		$data['produk'] = $this->produk_model->daftar_produk();
		$this->load->view('welcome_message',$data);
	}
	
	function kategori($kategori)
	{
		$data['produk'] = $this->produk_model->select_kategori($kategori);
		$this->load->view('welcome_message',$data);
	}
	
	function add_to_cart($id)
	{
		$produk = $this->produk_model->select_by_id($id);

		$nama = $produk->nama_produk;
		$data = array(
			'id' => $produk->id,
			'name' => $nama,
			'qty' => 1,
			'price' => $produk->harga,
			'weight' => $produk->berat
		);
		
		$this->cart->insert($data);
		redirect(base_url());
	}
	
	function add_to_cartdetail($id)
	{
		$produk = $this->produk_model->select_by_id($id);
		$nama = $produk->nama_produk;
		$data = array(
			'id' => $produk->id,
			'name' => $nama,
			'qty' => 1,
			'price' => $produk->harga,
			'weight' => $produk->berat
		);
		
		$this->cart->insert($data);
		redirect('welcome/detailproduk/'.$id);
	}
	
	function cart()
	{
		$this->load->view('show_cart');
	}
	
	function destroy_cart()
	{
		$this->cart->destroy();
		$this->load->view('show_cart');
	}
	
	function email()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$json = json_decode($response);
			$data['kota'] = $json->rajaongkir->results;

			$this->load->view('confirm_email', $data);
			// echo '<pre>';
			// print_r($data->rajaongkir->results);
			// echo '</pre>';
		}
	}
	
	function prosestransaksi()
	{
		$this->produk_model->process();
	}

	function reviewtransaksi()
	{
		$origin = 419;
		$destination = $this->input->post('kota',true);
		$courier = $this->input->post('kurir',true);
		$weight = $this->input->post('berat',true);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$pemesan = array(
				'nama' => $this->input->post('nama',true),
				'nope' => $this->input->post('nope',true),
				'email' => $this->input->post('email',true),
				'alamat' => $this->input->post('alamat',true),
				'kota' => $this->input->post('kota',true),
				'kurir' => $this->input->post('kurir',true),
				'berat' => $this->input->post('berat',true),
			);

			$json = json_decode($response);
			$data['pemesan'] = $pemesan;
			$data['cost'] = $json->rajaongkir->results[0]->costs;
			// var_dump($json->rajaongkir->results[0]->costs);

			$this->load->view('review_email',$data);
		}

		// $data['pemesan'] = array(
		// 	'nama' => $this->input->post('nama',true),
		// 	'nope' => $this->input->post('nope',true),
		// 	'email' => $this->input->post('email',true),
		// 	'alamat' => $this->input->post('alamat',true),
		// 	'kota_tujuan' => $this->input->post('kota',true),
		// 	'kurir' => $this->input->post('kurir',true),
		// );
		// $this->load->view('review_email',$data);
	}
	
	function test()
	{
		$cartContentString = serialize($this->cart->contents());
		echo $cartContentString;
	}
	
	function konfirmasi()
	{
		$this->load->view('konfirmasi');
	}
	
	function detailproduk($id)
	{
		$data['produk'] = $this->produk_model->select_by_id($id);
		$this->load->view('detail_produk',$data);
	}
	
	function proses_konfirmasi()
	{
		$config['upload_path']          = './uploads/konfirmasi/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload())
		{
			$this->load->view('konfirmasi');
		}
		else
		{
			$gambar = $this->upload->data();
			
			$data['invoice_id'] = $this->input->post('invoice_id',true);
			$data['gambar'] = $gambar['file_name'];

			$this->produk_model->insert_konfirmasi($data);
			$this->load->view('confirm_success');
		}
	}
	
	function cariproduk()
	{
		$kategori = $this->input->post('kategori',true);
		$str = $this->input->post('str',true);
		
		$data['produk'] = $this->produk_model->cariproduk($kategori,$str);
		$this->load->view('welcome_message',$data);
	}
}

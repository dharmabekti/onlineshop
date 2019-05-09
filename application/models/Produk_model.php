<?php
defined('BASEPATH') OR EXIT('No direct access allowed');

class Produk_model extends CI_Model
{
	private $_table = "produk";
	private $_table_kategori = "kategori_produk";
	private $_table_invoice = "invoices";

	function __construct()
	{
		parent::__construct();
	}
	
	function daftar_produk()
	{
		// return $this->db->get($this->_table)->result();
		return $this->db->query("SELECT p.*, kp.nama_kategori FROM produk p 
			JOIN kategori_produk kp ON kp.id_kategori = p.kategori
			WHERE ishapus = 0")->result();
	}

	function getAllKategori()
	{
		return $this->db->get($this->_table_kategori)->result();
	}
	
	function select_by_id($id)
	{
		return $this->db->query("SELECT p.*, kp.nama_kategori FROM produk p 
			JOIN kategori_produk kp ON kp.id_kategori = p.kategori
			WHERE ishapus = 0 AND p.id = '$id'")->row();

		// $this->db->where('id',$id);
		// return $this->db->get($this->_table)->row();
	}
	
	function tambah_produk($data)
	{
		$this->db->insert($this->_table,$data);
	}
	
	function edit_produk($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->_table,$data);
	}
	
	function delete_produk($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->_table);
	}
	
	function select_kategori($kategori)
	{
		$this->db->where('kategori',$kategori);
		$this->db->where('ishapus',0);
		return $this->db->get($this->_table)->result();
	}
	
	function insert_order($data)
	{
		$this->db->insert('order',$data);
	}
	
	function process()
	{
		$invoice = array(
			'date' => date('Y-m-d H:i:s'),
			'due_date' => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
			'status' => 'UNPAID',
			'nama' => $this->input->post('nama',true),
			'nope' => $this->input->post('nope',true),
			'email' => $this->input->post('email',true),
			'alamat' => $this->input->post('alamat',true),
			);
		$this->db->insert('invoices', $invoice);
		$invoice_id = $this->db->insert_id();
		
		foreach($this->cart->contents() as $item)
		{
			$data = array(
				'invoice_id' => $invoice_id,
				'product_id' => $item['id'],
				'product_name' => $item['name'],
				'qty' 		=> $item['qty'],
				'price' 	=> $item['price'],
				);
			$this->db->insert('orders',$data);
		}
		
		$this->cart->destroy();
		
		$this->load->view('order_success',$data);
		
		return TRUE;
	}
	
	function all_invoices()
	{
		return $this->db->get('invoices')->result();
	}
	
	function detailinvoices($id_invoices)
	{
		return $this->db->query("SELECT * FROM orders o
			JOIN invoices i ON i.id = o.invoice_id
			WHERE o.invoice_id = '$id_invoices'")->result();

		// $this->db->where('invoice_id',$id_invoices);
		// return $this->db->get('orders')->result();
	}
	
	function cek_user($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get('admin')->row();
	}
	
	function insert_konfirmasi($data)
	{
		$this->db->insert('konfirmasi',$data);
	}
	
	function all_konfirmasi()
	{
		// return $this->db->get('konfirmasi')->result();
		return $this->db->query("SELECT k.*, i.nama, i.email, i.nope, i.alamat, i.date, i.status FROM konfirmasi k
			JOIN invoices i ON i.id = k.invoice_id")->result();
	}
	
	function detail_konfirmasi($invoice_id)
	{
		// $this->db->where('invoice_id',$invoice_id);
		// return $this->db->get('orders')->result();
		return $this->db->query("SELECT * FROM orders o JOIN invoices i ON i.id = o.invoice_id
			WHERE o.invoice_id = '$invoice_id'")->result();
	}

	function editinvoices($invoice_id, $data)
	{
		$this->db->where('id',$invoice_id);
		$this->db->update($this->_table_invoice, $data);
	}
	
	function cariproduk($kategori,$str)
	{
		$this->db->like('model',$str);
		$this->db->or_like('brand',$str);
		$this->db->where('kategori',$kategori);
		return $this->db->get($this->_table)->result();
	}
}
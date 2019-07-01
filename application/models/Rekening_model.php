<?php
defined('BASEPATH') OR EXIT('No direct access allowed');

class Rekening_model extends CI_Model
{
	private $_table = "ref_rekening";

	function __construct()
	{
		parent::__construct();
	}

	function listRekening()
	{
		return $this->db->get($this->_table)->result();
	}

	public function input_data($data){
		$this->db->insert($this->_table, $data);
	}

	public function getRekeningById($idrekening)
	{
		return $this->db->get_where($this->_table, ["id" => $idrekening])->row();
	}

	public function ubahRekening($data,$id_data)
	{
		$this->db->update($this->_table,$data,$id_data);
	}

	public function hapusRekening($id)
	{
		return $this->db->delete($this->_table, array("id" => $id));
	}
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	private $_table = "users";

    public function getUserLogin($username, $password)
    {
        // return $this->db->get_where($this->_table, ["username" => $username, "password" => MD5($password)])->result();
        return $this->db->query("SELECT * FROM users u WHERE u.username = '$username' AND 
            u.password = MD5('$password')")->result();
    }

    public function ubahPengguna($data, $id_data)
    {
        $this->db->update($this->_table, $data, $id_data);
    }
}
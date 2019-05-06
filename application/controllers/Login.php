<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
	}

	public function index()
	{
		$session = $this->session->userdata('logged_in_pengelola');
		if($session)
		{
			redirect('admin');
		}
		else
		{
			$this->load->view('v_login');
		}
	}
	
	public function login_pengguna()
	{
		if(!$this->session->userdata('logged_in_pengelola'))
		{
			//This method will have the credentials validation
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
			$this->form_validation->set_message('required', 'Username atau Password tidak boleh kosong');
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.  User redirected to login page
				echo '<script language="javascript">alert("Username atau Password Salah")</script>';
				redirect('login', 'refresh');
			}
			else
			{
				// var_dump($this->session->userdata('logged_in_pengelola')); die();
				redirect('admin');
			}
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		//query the database
		$result = $this->user_model->getUserLogin($username, $password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'nama' => $row->nama,
					'username' => $row->username,
					'password' => $row->password,
					'email' => $row->email,
					'kontak' => $row->kontak,
					'instagram' => $row->instagram,
					'facebook' => $row->facebook,
					'twitter' => $row->twitter
					);
				$this->session->set_userdata('logged_in_pengelola', $sess_array);
			}
			return TRUE;
		}
		else
		{
				// $this->form_validation->set_message('check_database', 'Username atau Password Salah');
			$this->session->set_flashdata('error', 'Username atau Password Salah');
			return FALSE;
		}
	}
}
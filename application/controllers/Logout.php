<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Logout extends CI_Controller
{
	function index()
	{
		$this->session->unset_userdata('logged_in_pengguna');
		session_destroy();
		redirect('', 'refresh');
	}
}

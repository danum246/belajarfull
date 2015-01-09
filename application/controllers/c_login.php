<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username=$this->input->post('username', TRUE);
		$password=$this->input->post('password', TRUE);

		$cek=$this->login_model->cekuser($username,$password);

		if (count($cek)==0) {
			echo "gagal";
		} else {
			echo "berhasil";
		}
		
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */
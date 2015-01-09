<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	function cekuser($user,$pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', sha1(md5($pass.key)));
		$cek=$this->db->get('tbl_user_login')->result();

		return $cek;
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
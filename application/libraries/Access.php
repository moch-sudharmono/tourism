<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Access
{
	public $user;
	/**
	*constructor
	*/
	function __construct()
	{
		$this->CI =& get_instance();
		$auth = $this->CI->config->item('auth');
		$this->CI->load->helper('cookie');
		$this->CI->load->model('m_login');
		$this->m_login =& $this->CI->m_login;
	}

	function login ($email, $password)
	{
		$result = $this->m_login->get($email);
		if($result)// result found
		{
			$password = md5($password);
			if($password === $result->password)
			{
				//start session
				$this->CI->session->set_userdata('id',$result->id);
				$this->CI->session->set_userdata('email',$result->email);
				$this->CI->session->set_userdata('name',$result->name);
				redirect("mapping/point");
			}
		}
		redirect("admin/login");
	}

	function is_login()
	{
	return (($this->CI->session->userdata('id')) ? TRUE : FALSE);
	}

	function logout()
	{
	$this->CI->session->unset_userdata('id');
	$this->CI->session->unset_userdata('email');
	$this->CI->session->unset_userdata('name');
	}
}
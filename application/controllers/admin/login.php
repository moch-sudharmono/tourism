<?php
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');

		}

		function index()
		{
			$this->load->view('admin/login');
		}

		function doLogin()
		{
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			$this->access->login($email,$password);			
		}

		function logout()
		{
			$this->access->logout();
			redirect("admin/login");
		}

	}
?>
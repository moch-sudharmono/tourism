<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public $modul="Profile";
	
	public function __construct() {        
		parent::__construct();
		$this->load->model("Pr_saranaprasarana");		
		$this->load->model("Pr_kategorisarana");
	}

	public function index()
	{
		$data['title'] 			= "Profile";
		$data['small_title']	= "Profile mengenai tujuan wisata";
<<<<<<< HEAD
		$data["modul"]			= $this->modul;
=======

>>>>>>> origin/master
		$this->load->view('profile', $data);
	}
}

?>
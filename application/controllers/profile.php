<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Profile";
		$data['small_title']	= "Profile mengenai tujuan wisata";

		$this->load->view('profile', $data);
	}
}

?>
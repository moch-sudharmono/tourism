<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Gallery";
		$data['small_title']	= "Galeri Photo";
		$this->load->view('gallery', $data);
	}
}

?>
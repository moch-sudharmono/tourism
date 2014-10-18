<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Testimonial";
		$data['small_title']	= "Testimonial dari pengunjung";
		$this->load->view('testimonial', $data);
	}
}

?>
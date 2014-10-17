<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Potential Attraction";
		$data['small_title']	= "Potensi Wisata";
		$this->load->view('attraction', $data);
	}
}

?>
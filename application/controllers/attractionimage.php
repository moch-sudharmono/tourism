<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AttractionImage extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Potential Attraction Image";
		$data['small_title']	= "Photo Potensi Wisata";
		$this->load->view('attraction_image', $data);
	}
}

?>
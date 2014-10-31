<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AttractionImage extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "attractionImage";
	
	public function index()
	{
		$data['title'] 			= "Potential Attraction Image";
		$data['small_title']	= "Photo Potensi Wisata";
		//$this->load->view('admin/attractionImage', $data);
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/attraction/attractionImage.php";
		$this->load->view($this->route, $data);
	}
}

?>
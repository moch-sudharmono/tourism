<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller {
	private $modul = "Testimonial";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("Pr_testimoniwisata");	
	}
	
	public function index()
	{
		$data['title'] 			= "Testimonial";
		$data['small_title']	= "Testimonial dari pengunjung";
		$data['modul']			= $this->modul;
		$data['query']			= $this->Pr_testimoniwisata->get_all();
		$this->load->view('testimonial', $data);
	}
	
	public function approve()
	{
		//query to approve testimonial
	}
}

?>
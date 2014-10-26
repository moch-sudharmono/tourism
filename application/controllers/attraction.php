<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Controller {
	private $modul = "Attraction";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("Pr_paketwisata");	
	}

	public function index()
	{
		$data['title'] 			= "Potential Attraction";
		$data['small_title']	  = "Potensi Wisata";
		$data['modul']			= $this->modul;
		$data['query']			= $this->Pr_paketwisata->get_all();
		$this->load->view('attraction', $data);
	}
	
	public function add()
	{
		$data['title'] 			= "Potential Attraction";
		$data['small_title']	  = "Potensi Wisata";
		$data['modul']			= $this->modul;

		$this->load->view('attractionForm', $data);
	}
	
	public function edit()
	{
		$data['title'] 			= "Potential Attraction";
		$data['small_title']	  = "Potensi Wisata";
		$data['modul']			= $this->modul;
		$data['value']			= $this->Pr_paketwisata->get_by_id($_GET['id']);
		$this->load->view('attractionForm', $data);
	}
	
	public function addImage()
	{
		$data['title'] 			= "Potential Attraction";
		$data['small_title']	= "Potensi Wisata";
		$data['modul']			= $this->modul;

		$this->load->view('attraction_image', $data);
	}
	
	public function insert()
	{
		$task = $_POST['submit'];

		if($task=="insert"){			
			$this->Pr_paketwisata->validate();		
					
			redirect('Attraction');					
		}
		
	}
	
	
}

?>
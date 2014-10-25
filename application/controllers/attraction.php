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
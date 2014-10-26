<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	public $modul	 ="Infrastructure";
	public $submodul = "Categories";
	
	public function __construct() {        
		parent::__construct();
		$this->load->model("Pr_saranaprasarana");		
		$this->load->model("Pr_kategorisarana");
	}
		

	public function index()
	{
		$data['title'] 			= "Infrastructure";
		$data['small_title']	  = "Sarana dan Prasarana";	
		$data['modul']			= $this->modul;
		$data['query']			= $this->Pr_saranaprasarana->get_all();
		$data['query_kat']			= $this->Pr_kategorisarana->get_all();
		$this->load->view('infrastructure', $data);
	}
	
	public function categories()
	{
		$data['title'] 			= "Infrastructure Category";
		$data['small_title']	  = "Kategori Sarana dan Prasarana";
		$data['modul']			= $this->modul;
		$data['submodul']			= $this->submodul;
		$data['query']			= $this->Pr_kategorisarana->get_all();
		$this->load->view('categoriesForm', $data);
	}
	
	public function insert_categories()
	{
		$task = $_POST['submit'];

		if($task=="insert"){			
			$this->Pr_kategorisarana->validate();		
					
			redirect('infrastructure/categories');					
		}
	}
	
	public function insert_infrastructure()
	{
		$task = $_POST['submit'];

		if($task=="insert"){			
			$this->Pr_saranaprasarana->validate();		
					
			redirect('infrastructure');					
		}
	}
	
}

?>
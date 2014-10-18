<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	private $modul = "News";

	public function __contruct(){
		//function check access		
		
	}
	
	
	public function index()
	{
		$data['title'] 			= "News";
		$data['small_title']	  = "Berita Terkini";
		$data['modul']			= $this->modul;
		$data['action']			= "insert";
		$this->load->view('news', $data);
	}
	
	public function insert()
	{
		$task = $_POST['submit'];

		if($task=="save"){		
			$this->load->model("Pr_berita");	
			$this->Pr_berita->validate();		
			
			
			redirect('home');					
		}
		
	}
	
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
	private $modul = "News";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("Pr_berita");	
	}
	
	
	public function index()
	{
		$data['title'] 			= "News";
		$data['small_title']	  = "Berita Terkini";		
		$data['modul']			= $this->modul;
		$data['query']			= $this->Pr_berita->get_all();
		$this->load->view('news', $data);
	}
	
	public function form()
	{
		$data['title'] 			= "News";
		$data['small_title']	= "Berita Terkini";		
		$data['modul']			= $this->modul;
		if(isset($_GET['id'])){
			$data['id'] 			= $_GET['id'];
			$data['value']			= $this->Pr_berita->get_by_id($_GET['id']);
		}
		$this->load->view('newsForm', $data);
	}
	
	public function load_data()
	{
		$data['modul']			= $this->modul;
		$data['action']			= "insert";
	}
	
	public function insert()
	{
		$task = $_POST['submit'];

		if($task=="save"){			
			$this->Pr_berita->validate();		
					
			redirect('home');					
		}
		
	}
	
	public function update()
	{
		$data['action']			= "update";
		$task = $_POST['submit'];
	}
	
}

?>
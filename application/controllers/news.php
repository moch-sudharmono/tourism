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
		$data['small_title']	  = "Berita Terkini";		
		$data['modul']			= $this->modul;
		$data['action']		   = "insert";	
		if(isset($_GET['id'])){
			$data['id'] 			= $_GET['id'];
			$data['value']		= $this->Pr_berita->get_by_id($_GET['id']);
			$data['action']		= "Update";
		}
		$this->load->view('newsForm', $data);
	}
	
	public function load_data()
	{
		$data['modul']			= $this->modul;
		$data['action']			= "insert";
	}
	
	public function add()
	{
		$data['title'] 			= "News";
		$data['small_title']	= "Berita Terkini";		
		$data['modul']			= $this->modul;
		$data['action']			= "insert";
		$this->load->view('newsForm', $data);
	}

	public function insert()
	{
		$task = $_POST['submit'];
		$id="";

		if($task=="save"){	
			$title_eng 	= $this->input->post('title_eng');
            $title_ind 	= $this->input->post('title_ind');			
            $isi_eng 	  = $this->input->post('isi_eng');			
            $isi_ind 	  = $this->input->post('isi_ind');
			$tanggal		 = $this->input->post('tanggal');
			
            $data = array(
                   'judul_berita_eng'=>$title_eng,
                   'judul_berita_ina'=>$title_ind,
				   'isi_berita_eng'=>$isi_eng,
				   'isi_berita_ina'=>$isi_ind,
				   'tanggal_berita'=>$tanggal                   
                    );
				
			$this->Pr_berita->validate($data,$id);		
					
			redirect('News');					
		}
		
	}
	
	public function edit()
	{
		$data['title'] 			= "News";
		$data['small_title']	= "Berita Terkini";		
		$data['modul']			= $this->modul;
		$data['action']			= "update";
		$data['value']			= $this->Pr_berita->get_by_id($_GET['id']);
		$this->load->view('newsForm', $data);
	}
	
	public function update()
	{
		$task = $_POST['submit'];
		$id = $_POST['id_news'];

		if($task=="save"){	
			$title_eng 	= $this->input->post('title_eng');
            $title_ind 	= $this->input->post('title_ind');			
            $isi_eng 	= $this->input->post('isi_eng');			
            $isi_ind 	= $this->input->post('isi_ind');
			$tanggal	= $this->input->post('datepicker');
			
            $data = array(
                   'judul_berita_eng'=>$title_eng,
                   'judul_berita_ina'=>$title_ind,
				   'isi_berita_eng'=>$isi_eng,
				   'isi_berita_ina'=>$isi_ind,
				   'tanggal_berita'=>$tanggal                   
                    );
				
			$this->Pr_berita->validate($data,$id);		
			//echo $id.$tanggal;
			redirect('News');					
		}
	}
	
	public function delete()
	{
		$id=$_GET['id'];
		$this->Pr_berita->delete($id);
		redirect('News');	
	}
	
}

?>
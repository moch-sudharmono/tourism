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
	
<<<<<<< HEAD

=======
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
	
>>>>>>> origin/master
	public function insert()
	{
		$task = $_POST['submit'];

		if($task=="insert"){	
			$title_eng 	= $this->input->post('title_eng');
            $title_ind 	= $this->input->post('title_ind');			
            $isi_eng 	  = $this->input->post('isi_eng');			
            $isi_ind 	  = $this->input->post('isi_ind');
			$date		 = $this->input->post('datepicker');
			
            $data = array(
                   'judul_berita_eng'=>$title_eng,
                   'judul_berita_ina'=>$title_ind,
				   'isi_berita_eng'=>$isi_eng,
				   'isi_berita_ina'=>$isi_ind,
				   'tanggal_berita'=>$date                   
                    );
				
			$this->Pr_berita->validate($data);		
					
			redirect('News');					
		}
		
	}
	

	
	public function update()
	{
		$data['action']			= "update";
		$task = $_POST['submit'];
	}
	
}

?>
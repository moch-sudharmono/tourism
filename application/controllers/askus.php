<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Askus extends CI_Controller {
	private $modul = "AskUs";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("Pr_tanyakami");	
	}
	public function index()
	{
		$data['title'] 			= "Ask Us";
		$data['small_title']	= "Tanya Kami";
		$data['modul']			= $this->modul;
		$data['query']			= $this->Pr_tanyakami->get_all();
		$this->load->view('askus', $data);
	}
	
	public function answer()
	{
		$data['title'] 			= "Ask Us";
		$data['small_title']	= "Tanya Kami";
		$data['value']			= $this->Pr_tanyakami->get_by_id($_GET['id']);
		$this->load->view('askusForm', $data);
	}
	
	public function sendAnswer()
	{
		//send mail
	}
}

?>
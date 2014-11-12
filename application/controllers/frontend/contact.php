<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public $route = "frontend/index";
	private $class = "contact";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Tanya_kami");
		$this->load->model("admin/Lokasi_wisata_kategori");
		$this->load->model("admin/Tabglobal");
	}
	
	public function index()
	{
		$map = $this->Tabglobal->displaySelectedMap();
		$config = $this->Tabglobal->displaySystemConfig();
		
		$data["config"] = $config;
		$data["map"] = $map;
		$data["class"] = $this->class;
		$data["konten"] = "frontend/contact/contact.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function send()
	{
		$email = $this->input->post("email");
		$pertanyaan = $this->input->post("pertanyaan");
		
		$data = array(
			"email"=>$email,
			"pertanyaan"=>$pertanyaan
		);
		
		print_r($data);
		
		$result = $this->Tanya_kami->insert($data);
		
		if( $result ):
			redirect("frontend/contact");
		else:
			echo "Gagal";
		endif;
	}
}
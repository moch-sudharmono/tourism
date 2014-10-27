<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_helper extends CI_Controller {
	
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Lokasi_wisata_kategori");
		$this->load->helper("data_helper");
	}
	
	public function navigation()
	{
		
		$data["lokasi_wisata_kategori"] = $this->Lokasi_wisata_kategori->display();
		
		return $data;
	}
	
}

?>
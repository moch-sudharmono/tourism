<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation_lib extends CI_Controller {
	
	protected $ci;
	
	public function __construct(){
		//function check access			
		$this->ci =& get_instance();
		$this->ci->load->model("admin/Lokasi_wisata_kategori");
		
	}
	
	public function load_all()
	{
		$data["potensi_wisata"] = $this->potensi_wisata();
		return $data;
	}
	
	public function potensi_wisata()
	{
		return $this->ci->Lokasi_wisata_kategori->display();
	}
	
}

?>
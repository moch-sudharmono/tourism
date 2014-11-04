<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {
	public $route = "frontend/index";
	private $class = "gallery";
	
	public function __construct(){
		//function check access			
		parent::__construct();
	}
	
	public function setlanguage($lang="")
	{
		$url = $this->input->get("url");
		$url = str_replace("index.php/", "", $url);
		//echo $url; exit;
		$this->session->set_userdata("lang", $lang);
		redirect($url);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public $route = "admin/index.php";
	private $class = "promotion";

	public function index()
	{
		$data["class"] = $this->class;
		$data["konten"] = "admin/home.view.php";
		$this->load->view($this->route, $data);
	}
}

?>
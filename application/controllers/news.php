<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "News";
		$data['small_title']	= "Berita Terkini";
		$this->load->view('news', $data);
	}
}

?>
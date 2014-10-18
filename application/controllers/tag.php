<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "News Tag";
		$data['small_title']	= "Tag untuk berita";
		$this->load->view('tag', $data);
	}
}

?>
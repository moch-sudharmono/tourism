<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public function index()
	{
		$data['title'] 			= "Sitemap";
		$data['small_title']	= "Peta Situs";
		$this->load->view('sitemap', $data);
	}
	
	public function add()
	{
		$data['title'] 			= "Sitemap";
		$data['small_title']	= "Peta Situs";
		$this->load->view('sitemapForm', $data);
	}
	
	public function edit()
	{
		$data['title'] 			= "Sitemap";
		$data['small_title']	= "Peta Situs";

		$this->load->view('sitemapForm', $data);
	}

}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller {
	
	public $route = "admin/index.php";
	private $class = "configuration";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Attractions");
		$this->load->model("admin/Sarana_prasarana");
		$this->load->model("admin/Tabglobal");	
		$this->load->library('pagination_lib');
		
	}
	
	public function index()
	{
		$map = $this->Sarana_prasarana->displayMapPosition();
		
		// Web Title
		$wf = array("nama_variabel"=>"web_title");
		$web_title = $this->Tabglobal->displaySelected($wf);
		$web_title = isset($web_title[0]->val_varchar)?$web_title[0]->val_varchar:"";
		
		// Our Contact
		$wo = array("nama_variabel"=>"our_contact");
		$our_contact = $this->Tabglobal->displaySelected($wo);
		$our_contact = isset($our_contact[0]->val_text)?$our_contact[0]->val_text:"";
		
		// Theme
		$wt = array("nama_variabel"=>"theme");
		$theme = $this->Tabglobal->displaySelected($wt);
		$theme = isset($theme[0]->val_varchar)?$theme[0]->val_varchar:"";
		
		// Theme
		$wm = array("nama_variabel"=>"map_id");
		$map_id = $this->Tabglobal->displaySelected($wm);
		$map_id = isset($map_id[0]->val_int)?$map_id[0]->val_int:"";
		
		$data["map_id"] = $map_id;
		$data["theme"] = $theme;
		$data["our_contact"] = $our_contact;
		$data["web_title"] = $web_title;
		$data["map"] = $map;
		$data["class"] = $this->class;	
		$data["konten"] = "admin/configuration/configuration.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function update()
	{
		$varname = $this->input->post("varname");
		$field = $this->input->post("field");
		$value = $this->input->post("value");
		
		$data = array(
			$field=>$value
		);
		
		$where = array(
			"nama_variabel"=>$varname
		);
		
		$this->Tabglobal->update($data, $where);
	}
}

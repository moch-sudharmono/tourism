<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Icon extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "icon";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/icons");
		$this->load->library('pagination_lib');
	}
	
	public function index()
	{	
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$icon = $this->icons->displayAll($limit, $offset);
		// Paging
		$total_row =  $this->icons->countAllData();
		$url = base_url() . "admin/icon/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["icon"] = $icon; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/icon/icon.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_nodes=0)
	{	
		//$where = array("id_nodes"=>$id_nodes);
		//$node = $this->icons->displaySelectedData($where);
		
		//$data["node"] = $node; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/icon/iconForm.php";
		$this->load->view($this->route, $data);
	}
	

	public function save($filename="")
	{
		
		$data = array(
			"icon"=>$filename
		);

		if( $filename != "" ):
			
			$result = $this->icons->insert($data);
			
		endif;
		
		if( $result ):
			redirect("admin/icon");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_icon=0)
	{
		$where = array(
			"id_icon"=>$id_icon
		);
		$node= $this->icons->displaySelectedData($where);
		//echo $node->icon;
		if( $id_icon != "" ):
			$result = $this->icons->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/icon");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
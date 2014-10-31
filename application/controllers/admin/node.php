<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Node extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "node";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Simpul");
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
		
		$node = $this->Simpul->displayAll($limit, $offset);
		// Paging
		$total_row =  $this->Simpul->countAllData();
		$url = base_url() . "admin/node/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["node"] = $node; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/node/node.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_nodes=0)
	{	
		$where = array("id_nodes"=>$id_nodes);
		$node = $this->Simpul->displaySelectedData($where);
		
		$data["node"] = $node; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/node/node.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_nodes = $this->input->post("id_nodes");
		$nodes = $this->input->post("nodes");
		
		$data = array(
			"id_nodes"=>$id_nodes,
			"nodes"=>$nodes
		);

		$where = array(
			"id_nodes"=>$id_nodes
		);
		
		if( $id_nodes != 0 ):
			$result = $this->Simpul->update($data, $where);
			
			
		else:
			$result = $this->Simpul->insert($data);
			
		endif;
		
		if( $result ):
			redirect("admin/node");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_nodes=0)
	{
		$where = array(
			"id_nodes"=>$id_nodes
		);
		
		if( $id_nodes != "" ):
			$result = $this->Simpul->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/node");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edge extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "edge";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Jalur");
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
		
		$edge = $this->Jalur->displayAllJoin($limit, $offset);
		// Paging
		$total_row =  $this->Jalur->countAllData();
		$url = base_url() . "admin/edge/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["edge"] = $edge; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/edge/edge.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_edges=0)
	{	
		$where = array("id_edges"=>$id_edges);
		$edge = $this->Jalur->displaySelectedDataJoin($where);
		$edges_from = $this->Jalur->displayAllNodes();
		$edges_to = $this->Jalur->displayAllNodes();
		
		$data["edge"] = $edge; 
		$data["edges_from"] = $edges_from;
		$data["edges_to"] = $edges_to;
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/edge/edge.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_edges = $this->input->post("id_edges");
		$id_nodes_edge_from = $this->input->post("id_nodes_edge_from");
		$id_nodes_edge_to = $this->input->post("id_nodes_edge_to");
		
		$data = array(
			"id_edges"=>$id_edges,
			"edge_from"=>$id_nodes_edge_from,
			"edge_to"=>$id_nodes_edge_to
		);
		
		$data2 = array(
			"id_edges"=>$id_edges,
			"edge_from"=>$id_nodes_edge_to,
			"edge_to"=>$id_nodes_edge_from
		);

		$where = array(
			"id_edges"=>$id_edges
		);
		
		if( $id_nodes != 0 ):
			$result = $this->Jalur->update($data, $where);
		else:
			$result = $this->Jalur->insert($data);
			$result = $this->Jalur->insert($data2);			
		endif;
		
		if( $result ):
			redirect("admin/edge");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_edges=0)
	{
		$where = array(
			"id_edges"=>$id_edges
		);
		
		if( $id_edges != "" ):
			$result = $this->Jalur->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/edge");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
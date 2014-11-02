<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public $route = "frontend/index.php";
	private $class = "home";
	
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/simpul");
		$this->load->model("admin/jalur");
		$this->load->library("navigation_lib");
		$this->load->helper("dijkstra");
	}
	
	public function index()
	{
		// For Navigation
		$d = $this->navigation_lib->load_all();
		$data["potensi_wisata"] = $d["potensi_wisata"];
		// End For Navigation
		
		$nodes = $this->simpul->display();
		
		$data["nodes"] = $nodes;
		
		$data["class"] = $this->class;
		$data["konten"] = "frontend/home.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function search_route()
	{
		$edge_from = $this->input->post("edge_from");
		$edge_to = $this->input->post("edge_to");
		
		$nodes = $this->simpul->display();
		
		$array_loc = array();
		//echo "<pre>";
		foreach($nodes as $no=>$row):
			$id_nodes = $row["id_nodes"];
			$where = array("edge_from"=>$id_nodes);
			$where2 = array("edge_to"=>$id_nodes);
			
			$data = $this->jalur->displaySelectedData($where);
			$data2 = $this->jalur->displaySelectedData($where2);
			
			$array_d = array();
			// Get Data TO
			foreach( $data as $n=>$r ):
				$array_d[$r["edge_to"]] = 1;
			endforeach;
			
			// Get Data FROM
			foreach( $data2 as $n=>$r ):
				$array_d[$r["edge_from"]] = 1;
			endforeach;
			
			$array_loc[$row["id_nodes"]] = $array_d;
		endforeach;
		
		$dijkstra = new Dijkstra($array_loc);
		
		$route = $dijkstra->shortestPath($edge_from, $edge_to);
		
		$arr_route = array();
		for ($i=0; $i<=count($route)-2; $i++):
			$arr_route[$i]["from"] = isset($route[$i])?$route[$i]:"";
			$arr_route[$i]["to"] = isset($route[$i+1])?$route[$i+1]:"";
		endfor;
		
		$generate_route = array();
		$seq = 0;
		foreach ($arr_route as $no=>$row) :
			$from = isset($row["from"])?$row["from"]:"";
			$to = isset($row["to"])?$row["to"]:"";
        	//echo "From:" . $from . "To:" . $to . "<br>";
			$data_from = array(
				"edge_from"=>$from
			);
			$data_to = array(
				"edge_to"=>$to
			);
			
			$data_from2 = array(
				"edge_from"=>$to
			);
			$data_to2 = array(
				"edge_to"=>$from
			);
			
			$transportation = $this->jalur->displayRoute($data_from, $data_to);
			
			//print_r($transportation);
			
			foreach( $transportation as $q=>$x ):
				$arr_route[$seq]["location_from"] = $x["location_from"];
				$arr_route[$seq]["location_to"] = $x["location_to"];
				$arr_route[$seq]["transportation"] = $this->jalur->displayTransportation($data_from, $data_to);
			endforeach;
			$seq++;
       	endforeach;
		//echo "<pre>";
		//print_r($arr_route);
		//exit;
		$data["route"] = $arr_route;
		$data["konten"] = "frontend/route/route.list.view.php";
		$this->load->view($this->route, $data);
	}
}
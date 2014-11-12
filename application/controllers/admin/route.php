<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Route extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "route";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Rute");
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
		
		$route = $this->Rute->displayAllJoin($limit, $offset);
		// Paging
		$total_row =  $this->Rute->countAllData();
		$url = base_url() . "admin/route/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["route"] = $route; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/route/route.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_transportation=0)
	{	
		$where = array("id_transportation"=>$id_transportation);
		$route = $this->Rute->displaySelectedDataJoin($where);
		$edges = $this->Rute->displayRoute();
		$infrastructure = $this->Rute->displayInfrastructure();
		
		$data["route"] = $route; 
		$data["edges"] = $edges;
		$data["infrastructure"] = $infrastructure;
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/route/route.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_transportation = $this->input->post("id_transportation");
		$id_edges = $this->input->post("id_edges");
		$id_sarana_prasarana = $this->input->post("id_sarana_prasarana");
		$deskripsi_eng = $this->input->post("deskripsi_eng");
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$waktu_perjalanan = $this->input->post("waktu_perjalanan");
		$estimasi_biaya = $this->input->post("estimasi_biaya");
		
		$data = array(
			"id_edges"=>$id_edges,
			"id_sarana_prasarana"=>$id_sarana_prasarana,
			"deskripsi_eng"=>$deskripsi_eng,
			"deskripsi_ina"=>$deskripsi_ina,
			"waktu_perjalanan"=>$waktu_perjalanan,
			"estimasi_biaya"=>$estimasi_biaya
		);

		$where = array(
			"id_transportation"=>$id_transportation
		);
		
		if( $id_transportation != 0 ):
			$result = $this->Rute->update($data, $where);
			
			
		else:
			$result = $this->Rute->insert($data);
			
		endif;
		
		if( $result ):
			redirect("admin/route");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_transportation=0)
	{
		$where = array(
			"id_transportation"=>$id_transportation
		);
		
		if( $id_transportation != "" ):
			$result = $this->Rute->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/route");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
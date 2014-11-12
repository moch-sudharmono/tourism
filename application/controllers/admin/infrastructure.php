<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infrastructure extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "infrastructure";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Sarana_prasarana");
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
		
		$infrastructure = $this->Sarana_prasarana->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Sarana_prasarana->countAllData();
		$url = base_url() . "admin/infrastructure/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["infrastructure"] = $infrastructure; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/infrastructure/infrastructure.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_sarana_prasarana=0)
	{	
		$where = array("id_sarana_prasarana"=>$id_sarana_prasarana);
		$infrastructure = $this->Sarana_prasarana->displaySelectedData($where);
		$infrastructure_category = $this->Sarana_prasarana->displaySaranaPrasaranaKategori();
		$pointer = $this->Sarana_prasarana->displayMapPosition();
		
		$data["infrastructure"] = $infrastructure; 
		$data["infrastructure_category"] = $infrastructure_category; 
		$data["pointer"] = $pointer; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/infrastructure/infrastructure.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_sarana_prasarana = $this->input->post("id_sarana_prasarana");
		$id_kategori_sarana_prasarana = $this->input->post("id_kategori_sarana_prasarana");
		$nama_ina = $this->input->post("nama_ina");
		$nama_eng = $this->input->post("nama_eng");
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$deskripsi_eng = $this->input->post("deskripsi_eng");
		$url = $this->input->post("url");
		$id_peta = $this->input->post("id_peta");
		
		$data = array(
			"id_kategori_sarana_prasarana"=>$id_kategori_sarana_prasarana,
			"nama_ina"=>$nama_ina,
			"nama_eng"=>$nama_eng,
			"deskripsi_ina"=>$deskripsi_ina,
			"deskripsi_eng"=>$deskripsi_eng,
			"url"=>$url,
			"id_peta"=>$id_peta
		);

		$where = array(
			"id_sarana_prasarana"=>$id_sarana_prasarana
		);
		
		if( $id_sarana_prasarana != 0 ):
			$result = $this->Sarana_prasarana->update($data, $where);
		else:
			$result = $this->Sarana_prasarana->insert($data);
		endif;
		
		if( $result ):
			redirect("admin/infrastructure");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_sarana_prasarana=0)
	{
		$where = array(
			"id_sarana_prasarana"=>$id_sarana_prasarana
		);
		
		if( $id_sarana_prasarana != "" ):
			$result = $this->Sarana_prasarana->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/infrastructure");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
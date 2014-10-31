<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infrastructure_category extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "infrastructure_category";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Kategori_sarana_prasarana");
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
		
		$category = $this->Kategori_sarana_prasarana->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Kategori_sarana_prasarana->countAllData();
		$url = base_url() . "admin/news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["category"] = $category; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/infrastructure_category/infrastructure_category.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_kategori_sarana_prasarana=0)
	{	
		$where = array("id_kategori_sarana_prasarana"=>$id_kategori_sarana_prasarana);
		$category = $this->Kategori_sarana_prasarana->displaySelectedData($where);
		$data["category"] = $category; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/infrastructure_category/infrastructure_category.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_kategori_sarana_prasarana = $this->input->post("id_kategori_sarana_prasarana");
		$kategori_sarana_prasarana_ina = $this->input->post("kategori_sarana_prasarana_ina");
		$kategori_sarana_prasarana_eng = $this->input->post("kategori_sarana_prasarana_eng");
		
		$data = array(
			"kategori_sarana_prasarana_ina"=>$kategori_sarana_prasarana_ina,
			"kategori_sarana_prasarana_eng"=>$kategori_sarana_prasarana_eng
		);

		$where = array(
			"id_kategori_sarana_prasarana"=>$id_kategori_sarana_prasarana
		);
		
		if( $id_berita != 0 ):
			$result = $this->Kategori_sarana_prasarana->update($data, $where);
			
		else:
			$result = $this->Kategori_sarana_prasarana->insert($data);
			
		endif;
		
		if( $result ):
			redirect("admin/infrastructure_category");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_kategori_sarana_prasarana=0)
	{
		$where = array(
			"id_kategori_sarana_prasarana"=>$id_kategori_sarana_prasarana
		);
		
		if( $id_kategori_sarana_prasarana != "" ):
			$result = $this->Kategori_sarana_prasarana->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/infrastructure_category");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Route extends CI_Controller {
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
		
		$route = $this->Rute->displayAll($limit, $offset);

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
		$news = $this->Rute->displaySelectedData($where);
		
		$data["route"] = $route; 
		
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/route/route.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_transportation = $this->input->post("id_transportation");
		$judul_berita_ina = $this->input->post("judul_berita_ina");
		$judul_berita_eng = $this->input->post("judul_berita_eng");
		$isi_berita_ina = $this->input->post("isi_berita_ina");
		$isi_berita_eng = $this->input->post("isi_berita_eng");
		$id_berita_tag = $this->input->post("id_berita_tag");
		
		$data = array(
			"judul_berita_ina"=>$judul_berita_ina,
			"judul_berita_eng"=>$judul_berita_eng,
			"isi_berita_ina"=>$isi_berita_ina,
			"isi_berita_eng"=>$isi_berita_eng
		);

		$where = array(
			"id_berita"=>$id_berita
		);
		
		if( $id_berita != 0 ):
			$result = $this->Berita->update($data, $where);
			
			
			$this->Berita->delete_tag_trans($where);
			for( $i=0; $i<count($id_berita_tag); $i++ ):
				$data_tag = array(
					"id_berita"=>$id_berita,
					"id_berita_tag"=>$id_berita_tag[$i]
				);	
				$this->Berita->insert_tag_trans($data_tag);
			endfor;
		else:
			$result = $this->Berita->insert($data);
			
			$id_berita = $this->Berita->insert_id();
			
			for( $i=0; $i< count($id_berita_tag); $i++ ):
				$data_tag = array(
					"id_berita"=>$id_berita,
					"id_berita_tag"=>$id_berita_tag[$i]
				);
				$this->Berita->insert_tag_trans($data_tag);
			endfor;
			
		endif;
		
		if( $result ):
			redirect("admin/news");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_berita=0)
	{
		$where = array(
			"id_berita"=>$id_berita
		);
		
		if( $id_berita != "" ):
			$result = $this->Berita->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/news");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
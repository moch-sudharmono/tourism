<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag extends CI_Controller {
	
	public $route = "admin/index";
	private $class = "tag";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Berita_tag");
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
		
		$tag = $this->Berita_tag->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Berita_tag->countAllData();
		$url = base_url() . "admin/tag/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["tag"] = $tag; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/tag/tag.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_berita_tag=0)
	{
		$where = array("id_berita_tag"=>$id_berita_tag);
		$tag = $this->Berita_tag->displaySelectedData($where);
		
		$data["tag"] = $tag; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/tag/tag.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_berita_tag = $this->input->post("id_berita_tag");
		$tag_ina = $this->input->post("tag_ina");
		$tag_eng = $this->input->post("tag_eng");
		
		$data = array(
			"tag_ina"=>$tag_ina,
			"tag_eng"=>$tag_eng
		);
		
		$where = array(
			"id_berita_tag"=>$id_berita_tag
		);
		
		if( $id_berita_tag != 0 ):
			$result = $this->Berita_tag->update($data, $where);
		else:
			$result = $this->Berita_tag->insert($data);
		endif;
		
		if( $result ):
			redirect("admin/tag");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_berita_tag=0)
	{
		$where = array(
			"id_berita_tag"=>$id_berita_tag
		);
		
		if( $id_berita_tag != "" ):
			$result = $this->Berita_tag->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/tag");
		else:
			echo "Gagal";
		endif;
	}
}

?>
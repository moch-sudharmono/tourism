<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "attraction";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Attractions");			
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
		
		$attraction = $this->Attractions->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Attractions->countAllData();
		$url = base_url() . "admin/attraction/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["attraction"] = $attraction; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/attraction/attraction.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_attraction=0)
	{	
		$where = array("id_paket_wisata"=>$id_attraction);
		$attractions = $this->Attractions->displaySelectedData($where);
		$data["attractions"] = $attractions; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/attraction/attractionForm.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_attraction = $this->input->post("id_attraction");
		$judul_berita_ina = $this->input->post("title_ind");
		$judul_berita_eng = $this->input->post("title_eng");
		$description_ind = $this->input->post("description_ind");
		$description_eng = $this->input->post("description_eng");
		$url=$this->input->post("url");
		
		$data = array(
			"paket_wisata_ina"=>$judul_berita_ina,
			"paket_wisata_eng"=>$judul_berita_eng,
			"deskripsi_ina"=>$description_ind,
			"deskripsi_eng"=>$description_eng,
			"url"=>$url
		);

		$where = array(
			"id_paket_wisata"=>$id_attraction
		);
		
		
		if( $id_attraction != 0 ):
			//echo $id_attraction;
			$result = $this->Attractions->update($data, $where);
		else:
			$result = $this->Attractions->insert($data);
		endif;
		
		if( $result ):
			redirect("admin/attraction");
		else:
			echo "Gagal";
		endif;
	}
	
	
	public function delete($id_attraction=0)
	{
		$where = array(
			"id_paket_wisata"=>$id_attraction
		);
		
		if( $id_attraction != "" ):
			$result = $this->Attractions->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/attraction");
		else:
			echo "Gagal";
		endif;
	}
}

?>
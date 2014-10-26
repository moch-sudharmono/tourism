<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public $route = "admin/index";
	private $class = "profile";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Lokasi_wisata");
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
		
		$profile = $this->Lokasi_wisata->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Lokasi_wisata->countAllData();
		$url = base_url() . "admin/profile/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["profile"] = $profile; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/profile/profile.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_lokasi_wisata=0)
	{
		$where = array("id_lokasi_wisata"=>$id_lokasi_wisata);
		$profile = $this->Lokasi_wisata->displaySelectedData($where);
		$parent = $this->Lokasi_wisata->display();
		$kategori = $this->Lokasi_wisata->displayLokasiWisataKategori();
		$pointer = $this->Lokasi_wisata->displayMapPointer();
		$sarana_prasarana_kategori = $this->Sarana_prasarana->displaySaranaPrasaranaKategori();
		
		$sarana_prasarana_tag = $this->Lokasi_wisata->displayTagSaranaPrasarana($where);
		
		foreach( $sarana_prasarana_kategori as $row ):
			$where = array(
				"id_kategori_sarana_prasarana"=>$row->id_kategori_sarana_prasarana
			);
			
			$row->sarana_prasarana = $this->Sarana_prasarana->displaySaranaPrasaranaByKategori($where);
			
		endforeach;
		
		$data["tag"] = $sarana_prasarana_tag;
		$data["sarana_prasarana"] = $sarana_prasarana_kategori;
		$data["pointer"] = $pointer;
		$data["kategori"] = $kategori;
		$data["parent"] = $parent;
		$data["profile"] = $profile; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/profile/profile.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_lokasi_wisata = $this->input->post("id_lokasi_wisata");
		$id_lokasi_wisata_kategori = $this->input->post("id_lokasi_wisata_kategori");
		$parent_id = $this->input->post("parent_id");
		
		$nama_lokasi_wisata_ina = $this->input->post("nama_lokasi_wisata_ina");
		$nama_lokasi_wisata_eng = $this->input->post("nama_lokasi_wisata_eng");
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$deskripsi_eng = $this->input->post("deskripsi_eng");
		
		$id_peta = $this->input->post("id_peta");
		
		$id_sarana_prasarana = $this->input->post("id_sarana_prasarana");
		
		$data = array(
			"id_lokasi_wisata"=>$id_lokasi_wisata,
			"id_lokasi_wisata_kategori"=>$id_lokasi_wisata_kategori,
			"parent_id"=>$parent_id,
			"nama_lokasi_wisata_ina"=>$nama_lokasi_wisata_ina,
			"nama_lokasi_wisata_eng"=>$nama_lokasi_wisata_eng,
			"deskripsi_ina"=>$deskripsi_ina,
			"deskripsi_eng"=>$deskripsi_eng,
			"id_peta"=>$id_peta
		);
		
		$where = array(
			"id_lokasi_wisata"=>$id_lokasi_wisata
		);
		
		if( $id_lokasi_wisata != 0 ):
			$result = $this->Lokasi_wisata->update($data, $where);
			
			// Insert Ssarana Prasarana
			$this->Lokasi_wisata->deleteTagSarana($where);
			for( $i=0; $i<count($id_sarana_prasarana); $i++ ):
				$data_sarana = array(
					"id_lokasi_wisata"=>$id_lokasi_wisata,
					"id_sarana_prasarana"=>$id_sarana_prasarana[$i]
				);
				
				$this->Lokasi_wisata->insertTagSarana($data_sarana);
			endfor;
		else:
			$result = $this->Lokasi_wisata->insert($data);
			$id_lokasi_wisata = $this->Lokasi_wisata->insert_id();
			
			// Insert Ssarana Prasarana
			for( $i=0; $i<count($id_sarana_prasarana); $i++ ):
				$data_sarana = array(
					"id_lokasi_wisata"=>$id_lokasi_wisata,
					"id_sarana_prasarana"=>$id_sarana_prasarana[$i]
				);
				
				$this->Lokasi_wisata->insertTagSarana($data_sarana);
			endfor;
		endif;
		
		if( $result ):
			redirect("admin/profile");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_lokasi_wisata=0)
	{
		$where = array(
			"id_lokasi_wisata"=>$id_lokasi_wisata
		);
		
		if( $id_lokasi_wisata != "" ):
			$result = $this->Lokasi_wisata->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/profile");
		else:
			echo "Gagal";
		endif;
	}
}

?>
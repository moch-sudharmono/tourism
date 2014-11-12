<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	public $route = "frontend/index";
	private $class = "profile";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("frontend/Lokasi_wisata");
		$this->load->model("frontend/Sarana_prasarana");
		$this->load->library('pagination_lib');
	}
	
	public function index()
	{
		$where = array(
			"parent_id"=>0
		);
		
		$profile = $this->Lokasi_wisata->displaySelectedData($where);
		$kategori = $this->Lokasi_wisata->displayLokasiWisataKategori();
		$gambar = $this->Lokasi_wisata->displayGambarLimit();
		$id_lokasi_wisata = isset($profile[0]->id_lokasi_wisata)?$profile[0]->id_lokasi_wisata:"";
		
		$wp = array(
			"parent_id"=>$id_lokasi_wisata
		);

		$terkait = $this->Lokasi_wisata->displaySelectedData($wp);

		foreach( $profile as $row ):
			$w = array(
				"id_lokasi_wisata"=>$row->id_lokasi_wisata
			);
			$row->gambar = $this->Lokasi_wisata->displayGambar($w);
			$row->testimonial = $this->Lokasi_wisata->displayTestimonial($w);
		endforeach;
		
		foreach( $kategori as $r ):
			$wr = array(
				"id_lokasi_wisata_kategori"=>$r->id_lokasi_wisata_kategori
			);
			
			$r->total = $this->Lokasi_wisata->displayCountLokasiWisataKategori($wr);
		endforeach;


		// Sarana Prasarana

		$sarana = $this->Sarana_prasarana->displaySaranaPrasaranaKategori();

		foreach( $sarana as $rsa ):
			$w = array(
				"id_kategori_sarana_prasarana"=>$rsa->id_kategori_sarana_prasarana,
				"id_lokasi_wisata"=>$id_lokasi_wisata
			); 
			$rsa->sarana = $this->Lokasi_wisata->displayTagSaranaPrasarana($w);
			//print_r($rsa->sarana);
		endforeach;

		
		$data["sarana"] = $sarana;
		$data["gambar"] = $gambar;
		$data["terkait"] = $terkait;
		$data["kategori"] = $kategori;
		$data["profile"] = $profile;
		$data["class"] = $this->class;
		$data["konten"] = "frontend/profile/profile.detail.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function location($id_lokasi_wisata=0)
	{
		$where = array(
			"id_lokasi_wisata"=>$id_lokasi_wisata
		);
		
		$profile = $this->Lokasi_wisata->displaySelectedData($where);
		$kategori = $this->Lokasi_wisata->displayLokasiWisataKategori();
		$testimoni = $this->Lokasi_wisata->displayTestimonial($where);
		
		$id_lokasi_wisata = isset($profile[0]->id_lokasi_wisata)?$profile[0]->id_lokasi_wisata:"";
		
		$wp = array(
			"parent_id"=>$id_lokasi_wisata
		);

		$terkait = $this->Lokasi_wisata->displaySelectedData($wp);
		$gambar = $this->Lokasi_wisata->displayGambarLimit();
		
		foreach( $profile as $row ):
			$w = array(
				"id_lokasi_wisata"=>$row->id_lokasi_wisata
			);
			$row->gambar = $this->Lokasi_wisata->displayGambar($w);
		endforeach;
		
		foreach( $kategori as $r ):
			$wr = array(
				"id_lokasi_wisata_kategori"=>$r->id_lokasi_wisata_kategori
			);
			
			$r->total = $this->Lokasi_wisata->displayCountLokasiWisataKategori($wr);
		endforeach;

		// Sarana Prasarana

		$sarana = $this->Sarana_prasarana->displaySaranaPrasaranaKategori();

		foreach( $sarana as $rsa ):
			$w = array(
				"id_kategori_sarana_prasarana"=>$rsa->id_kategori_sarana_prasarana,
				"id_lokasi_wisata"=>$id_lokasi_wisata
			); 
			$rsa->sarana = $this->Lokasi_wisata->displayTagSaranaPrasarana($w);
			//print_r($rsa->sarana);
		endforeach;

		
		$data["sarana"] = $sarana;
		$data["gambar"] = $gambar;
		$data["terkait"] = $terkait;
		$data["kategori"] = $kategori;
		$data["profile"] = $profile;
		$data["testimoni"] = $testimoni;
		$data["class"] = $this->class;
		$data["konten"] = "frontend/profile/profile.detail.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function display($id_lokasi_wisata_kategori=0)
	{
		$lokasi_wisata_kategori_seo = $this->uri->segment(5);
		
		$kategori = $this->Lokasi_wisata->displayLokasiWisataKategori();
		$gambar = $this->Lokasi_wisata->displayGambarLimit();
		
		foreach( $kategori as $r ):
			$wr = array(
				"id_lokasi_wisata_kategori"=>$r->id_lokasi_wisata_kategori
			);
			
			$r->total = $this->Lokasi_wisata->displayCountLokasiWisataKategori($wr);
		endforeach;
		
		$where = array(
			"id_lokasi_wisata_kategori"=>$id_lokasi_wisata_kategori
		);
		
		$page = $this->input->get("page");
		$page = !empty($page)?$page:1;
		$limit = 10;
		
		if(isset($page) and !empty($page)):
			$offset = ($page * $limit) - $limit;
		else:
			$offset = 0;
		endif;
		
		$attraction = $this->Lokasi_wisata->displaySelectedDataPaging($where, $limit, $offset);
		
		foreach( $attraction as $row ):
			$w = array(
				"id_lokasi_wisata"=>$row->id_lokasi_wisata
			);
			
			$row->gambar = $this->Lokasi_wisata->displayGambar($w);
		endforeach;
		
		$data["attraction"] = $attraction;
		
		// Paging
		$total_row =  $this->Lokasi_wisata->countSelectedData($where);
		$url = base_url() . "frontend/attraction/display/". $id_lokasi_wisata_kategori ."/".$lokasi_wisata_kategori_seo."/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["gambar"] = $gambar;
		$data["kategori"] = $kategori;
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		$data["class"] = $this->class;
		$data["kategori_class"] = $lokasi_wisata_kategori_seo;
		$data["konten"] = "frontend/profile/profile.main.view.php";
		$this->load->view($this->route, $data);
		
	}
	
	public function send()
	{
		$testimonial = $this->input->post("testimonial");
		$id_lokasi_wisata = $this->input->post("id_lokasi_wisata");
		
		$data = array(
			"testimoni"=>$testimonial,
			"id_lokasi_wisata"=>$id_lokasi_wisata
		);
		
		$result = $this->Lokasi_wisata->saveTestimonial($data);
		if( $result ):
			redirect("frontend/profile/location/".$id_lokasi_wisata);
		else:
			echo "Gagal";
		endif;
	}
}
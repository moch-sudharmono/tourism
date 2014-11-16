<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public $route = "admin/index.php";
	private $class = "promotion";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Promosi");
		$this->load->model("admin/Kategori_promosi");
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
		
		$promotion = $this->Promosi->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Promosi->countAllData();
		$url = base_url() . "admin/promotion/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["promotion"] = $promotion; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/promotion/promotion.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_promosi=0)
	{	
		$where = array("id_promosi"=>$id_promosi);
		$promotion = $this->Promosi->displaySelectedData($where);
		$promotion_category = $this->Kategori_promosi->display();
		
		$foto = $this->Promosi->displayGambar($where);		
		$data["foto"] = $foto;
		
		$file = $this->Promosi->displayFile($where);		
		$data["file"] = $file;
		
		$data["promotion"] = $promotion; 
		$data["promotion_category"] = $promotion_category; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/promotion/promotion.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_promosi_kategori = $this->input->post("id_promosi_kategori");
		$id_promosi = $this->input->post("id_promosi");
		$promosi_ina = $this->input->post("promosi_ina");
		$promosi_eng = $this->input->post("promosi_eng");
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$deskripsi_eng = $this->input->post("deskripsi_eng");
		$tanggal_promosi = yyyymmdd($this->input->post("tanggal_promosi"));
		$tanggal_kadarluarsa = yyyymmdd($this->input->post("tanggal_kadarluarsa"));		
		$cover_promo =$this->input->post("gambar");
		
		$file =$this->input->post("file");
		$dfile = explode("]", $file);
		
		$foto =$this->input->post("foto");
		$dfoto = explode("]", $foto);
		
		$data = array(
			"promosi_ina"=>$promosi_ina,
			"promosi_eng"=>$promosi_eng,
			"deskripsi_ina"=>$deskripsi_ina,
			"deskripsi_eng"=>$deskripsi_eng,
			"tanggal_promosi"=>$tanggal_promosi,
			"tanggal_kadarluarsa"=>$tanggal_kadarluarsa,
			"id_promosi_kategori"=>$id_promosi_kategori,
			"cover"=>$cover_promo
		);
		
		//print_r($data); exit;
		
		$where = array(
			"id_promosi"=>$id_promosi
		);
		
		if( $id_promosi != 0 ):
			$result = $this->Promosi->update($data, $where);
			
			//delele before insert image
			$this->Promosi->deleteGambar($where);
			//insert image
			for( $j=0; $j<count($dfoto); $j++ ):
				$foto = str_replace("[", "", $dfoto[$j]);
				$data_foto = array(
					"id_promosi"=>$id_promosi,
					"gambar"=>$foto
				);
				if( isset($foto) and !empty($foto) ):
					$this->Promosi->insertGambar($data_foto);
				endif;
			endfor;
			
			
			//delele before insert file
			$this->Promosi->deleteFile($where);
			//insert file
			for( $j=0; $j<count($dfile); $j++ ):
				$file = str_replace("[", "", $dfile[$j]);
				$data_file = array(
					"id_promosi"=>$id_promosi,
					"berkas"=>$file
				);
				if( isset($file) and !empty($file) ):
					$this->Promosi->insertFile($data_file);
				endif;
			endfor;
			
		else:
			$result = $this->Promosi->insert($data);
			
			for( $j=0; $j<count($dfoto); $j++ ):
				$foto = str_replace("[", "", $dfoto[$j]);
				$data_foto = array(
					"id_promosi"=>$id_promosi,
					"gambar"=>$foto
				);
				if( isset($foto) and !empty($foto) ):
					$this->Promosi->insertGambar($data_foto);
				endif;
			endfor;
			
			//insert file
			for( $j=0; $j<count($dfile); $j++ ):
				$file = str_replace("[", "", $dfile[$j]);
				$data_file = array(
					"id_promosi"=>$id_promosi,
					"berkas"=>$berkas
				);
				if( isset($file) and !empty($file) ):
					$this->Promosi->insertFile($data_file);
				endif;
			endfor;
		endif;
		
		if( $result ):
			redirect("admin/promotion");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_promosi=0)
	{
		$where = array(
			"id_promosi"=>$id_promosi
		);
		
		if( $id_promosi != "" ):
			$result = $this->Promosi->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/promotion");
		else:
			echo "Gagal";
		endif;
	}
}

?>
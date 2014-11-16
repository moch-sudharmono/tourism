<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "news";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Berita");
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
		
		$news = $this->Berita->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Berita->countAllData();
		$url = base_url() . "admin/news/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["news"] = $news; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/news/news.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_berita=0)
	{	
		$where = array("id_berita"=>$id_berita);
		$news = $this->Berita->displaySelectedData($where);
		$berita_tag = $this->Berita_tag->display();
		$berita_tag_trans = $this->Berita->display_tag_trans($where);
		$gambar = $this->Berita->displayGambar($where);
		
		$data["gambar"] = $gambar;
		$data["news"] = $news; 
		$data["berita_tag"] = $berita_tag; 
		$data["berita_tag_trans"] = $berita_tag_trans;
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/news/news.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_berita = $this->input->post("id_berita");
		$judul_berita_ina = $this->input->post("judul_berita_ina");
		$judul_berita_eng = $this->input->post("judul_berita_eng");
		$isi_berita_ina = $this->input->post("isi_berita_ina");
		$isi_berita_eng = $this->input->post("isi_berita_eng");
		$id_berita_tag = $this->input->post("id_berita_tag");
		$gambar = $this->input->post("gambar");
		$dgambar = explode("]", $gambar);
		
		
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
				if( !empty($id_berita_tag[$i]) ):
					$this->Berita->insert_tag_trans($data_tag);
				endif;
			endfor;
			
			// Insert Gambar
			//$this->Berita->deleteGambar($where);
			for( $j=0; $j<count($dgambar); $j++ ):
				$gambar = str_replace("[", "", $dgambar[$j]);
				$data_gambar = array(
					"id_berita"=>$id_berita,
					"gambar"=>$gambar
				);
				if( isset($gambar) and !empty($gambar) ):
					$this->Berita->insertGambar($data_gambar);
				endif;
			endfor;
		else:
			$result = $this->Berita->insert($data);
			
			$id_berita = $this->Berita->insert_id();
			
			for( $i=0; $i< count($id_berita_tag); $i++ ):
				$data_tag = array(
					"id_berita"=>$id_berita,
					"id_berita_tag"=>$id_berita_tag[$i]
				);
				if( !empty($id_berita_tag[$i]) ):
					$this->Berita->insert_tag_trans($data_tag);
				endif;
			endfor;
			
			// Insert Gambar
			for( $j=0; $j<count($dgambar); $j++ ):
				$gambar = str_replace("[", "", $dgambar[$j]);
				$data_gambar = array(
					"id_berita"=>$id_berita,
					"gambar"=>$gambar
				);
				if( isset($gambar) and !empty($gambar) ):
					$this->Berita->insertGambar($data_gambar);
				endif;
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
	
	public function deleteimage($id_berita_gambar=0, $id_berita=0, $nama_file="")
	{
		$where = array("id_berita_gambar"=>$id_berita_gambar);
		$r = $this->Berita->deleteGambar($where);
		if( $r ):
			if( !empty($nama_file) ):
				$thumb = "./upload/thumbs/" . $nama_file;
				$file = "./upload/" . $nama_file;
				unlink($thumb);
				unlink($file);
			endif;
			redirect("admin/news/form/" . $id_berita);
		else:
			redirect("admin/news/form/" . $id_berita);
		endif;
	}
	
}

?>
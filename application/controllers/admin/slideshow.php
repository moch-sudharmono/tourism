<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slideshow extends CI_Controller {
	public $route = "admin/index.php";
	private $class = "slideshow";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/slideshows");
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
		
		$slideshow = $this->slideshows->displayAll($limit, $offset);
		// Paging
		$total_row =  $this->slideshows->countAllData();
		$url = base_url() . "admin/slideshow/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["slideshow"] = $slideshow; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/slideshow/slideshow.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_slideshow=0)
	{	
		$where = array("id_slideshow"=>$id_slideshow);
		$slideshow = $this->slideshows->displaySelectedData($where);
		
		$data["slideshow"] = $slideshow; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/slideshow/slideshowForm.php";
		$this->load->view($this->route, $data);
	}
	

	public function save()
	{
		$deskripsi_ina = $this->input->post("deskripsi_ina");
		$description_eng = $this->input->post("deskripsi_eng");
		$id_slideshow =$this->input->post("id_slideshow");
		$publish	= $this->input->post("publish");
		$gambar =$this->input->post("gambar");
		/*$dgambar = explode("]", $gambar);
		
		for( $j=0; $j<count($dgambar); $j++ ):
				$image = str_replace("[", "", $dgambar[$j]);
		endfor;*/
		
		$data = array(
			"gambar"=>$gambar,
			"keterangan_ina"=>$deskripsi_ina,
			"keterangan_eng"=>$description_eng,
			"publish"=>$publish
		);

		$where = array(
			"id_slideshow"=>$id_slideshow
		);

		//echo $id_slideshow;
		//print_r($data);
		if( $id_slideshow != "" ):
			$result = $this->slideshows->update($data, $where);		
			
		else :
			
			$result = $this->slideshows->insert($data);
		endif;
		
		
		if( $result ):
			redirect("admin/slideshow");
		else:
			echo "Gagal";
		endif;
	}
	
	public function delete($id_slideshow=0)
	{
		$where = array(
			"id_slideshow"=>$id_slideshow
		);
		//$node= $this->icons->displaySelectedData($where);
		//echo $node->icon;
		if( $id_slideshow != "" ):
			$result = $this->slideshows->delete($where);
		endif;
		
		if( $result ):
			redirect("admin/slideshow");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
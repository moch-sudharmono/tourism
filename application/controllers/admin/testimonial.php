<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public $route = "admin/index.php";
	private $class = "ter";

	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Testimonials");			
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
		
		$testimoni = $this->Testimonials->displayAllJoin($limit, $offset);

		// Paging
		$total_row =  $this->Testimonials->countAllData();
		$url = base_url() . "admin/testimonial/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["testimoni"] = $testimoni; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/Testimonial/testimonial.php";	
		$this->load->view($this->route, $data);
	}
	
	public function form($id_attraction=0)
	{	
		$where = array("id_testimoni_lokasi_wisata"=>$id_attraction);
		$testimonial = $this->Testimonials->displaySelectedDataJoin($where);
		$data["testimonial"] = $testimonial; 
		$data["class"] = $this->class;
				
		$data["konten"] = "admin/Testimonial/testimonialForm.php";
		$this->load->view($this->route, $data);
	}
	
	public function save ()
	{
		$id_testimoni=$this->input->post("id_testimoni");
		$reject=$this->input->post("reject");
		$approved=$this->input->post("approved");
		
		if ($approved=="Approved"){
			$publish="Y";	
		}else{
			$publish="N";
		}
		
		$data = array(
			"publish"=>$publish
		);

		$where = array(
			"id_testimoni_lokasi_wisata"=>$id_testimoni
		);
		
		$result = $this->Testimonials->update($data, $where);
		if( $result ):
			redirect("admin/testimonial");
		else:
			echo "Gagal";
		endif;
		
	}
	
	
}
?>
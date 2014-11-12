<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Askus extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "askus";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Tanya_kami");
		$this->load->library('pagination_lib');
		$this->load->library('email');
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
		
		$askus = $this->Tanya_kami->displayAll($limit, $offset);

		// Paging
		$total_row =  $this->Tanya_kami->countAllData();
		$url = base_url() . "admin/askus/?paging=true";
		$data_paging = array(
			"url"=>$url,
			"total_rows"=>$total_row,
			"per_page"=>$limit,
			"halaman"=>$page
		);
		
		$data["paging"] = $this->pagination_lib->paging($data_paging);
		
		$data["page"] = $page; 
		$data["askus"] = $askus; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/askus/askus.main.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function form($id_tanya_kami=0)
	{	
		$where = array("id_tanya_kami"=>$id_tanya_kami);
		$askus = $this->Tanya_kami->displaySelectedData($where);
		$data["askus"] = $askus; 
		$data["class"] = $this->class;
		
		$data["konten"] = "admin/askus/askus.form.view.php";
		$this->load->view($this->route, $data);
	}
	
	public function save()
	{
		$id_tanya_kami = $this->input->post("id_tanya_kami");
		$jawaban = $this->input->post("jawaban");
		
		$data = array(
			"jawaban"=>$jawaban
		);

		$where = array(
			"id_tanya_kami"=>$id_tanya_kami
		);
		
		$result = $this->Tanya_kami->update($data, $where);
		
		$where = array("id_tanya_kami"=>$id_tanya_kami);
		$askus = $this->Tanya_kami->displaySelectedData($where);
		
		$config['protocol']    = 'smtp';
	    $config['smtp_host']    = 'ssl://smtp.gmail.com';
	    $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'm.sudharmono@gmail.com';
        $config['smtp_pass']    = 'm.sudharmono@gmail.com123';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);
        $this->email->from('m.sudharmono@gmail.com', 'sender_name');
        $this->email->to($askus['email']); 
        $this->email->subject('Jawaban Pertanyaan');
        $this->email->message($askus['jawaban']);  
        $this->email->send();

        echo $this->email->print_debugger();
		
		if( $result ):
			redirect("admin/askus");
		else:
			echo "Gagal";
		endif;
	}
	
}

?>
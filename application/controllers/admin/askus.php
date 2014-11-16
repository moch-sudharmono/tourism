<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Askus extends Access_Controller {
	public $route = "admin/index.php";
	private $class = "askus";
	
	public function __construct(){
		//function check access			
		parent::__construct();	
		$this->load->model("admin/Tanya_kami");
		$this->load->model("admin/Email_configuration_m");
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
		$ask = isset($askus[0])?$askus[0]:array();
		
		$mail_config = $this->Email_configuration_m->displaySelectedData();
		$conf = isset($mail_config[0])?$mail_config[0]:array();
		
		$email_from = isset($conf->email_from)?$conf->email_from:"";
		$protocol = isset($conf->protocol)?$conf->protocol:"";
		$smtp_host = isset($conf->smtp_host)?$conf->smtp_host:"";
		$smtp_port = isset($conf->smtp_port)?$conf->smtp_port:"";
		$smtp_timeout = isset($conf->smtp_timeout)?$conf->smtp_timeout:"";
		$smtp_user = isset($conf->smtp_user)?$conf->smtp_user:"";
		$smtp_pass = isset($conf->smtp_pass)?$conf->smtp_pass:"";
		$charset = isset($conf->charset)?$conf->charset:"";
		$newline = isset($conf->newline)?$conf->newline:"";
		$mailtype = isset($conf->mailtype)?$conf->mailtype:"";
		//echo $smtp_user; exit;
		$config['protocol'] = $protocol;
	    $config['smtp_host'] = $smtp_host;
	    $config['smtp_port'] = $smtp_port;
        $config['smtp_timeout'] = $smtp_timeout;
        $config['smtp_user'] = $smtp_user;
        $config['smtp_pass'] = $smtp_pass;
        $config['charset'] = $charset;
        $config['newline'] = $newline;
        $config['mailtype'] = $mailtype; // or html
        $config['validation'] = true; // bool whether to validate email or not      
		//print_r($config); exit;
		$message = "Pertanyaan / <em>Question</em> :<b> " . $ask->pertanyaan . "</b><br><br>";
		$message .= "<p>" . $ask->jawaban . "</p>";

        $this->email->initialize($config);
        $this->email->from($email_from, $email_from);
        $this->email->to($ask->email); 
        $this->email->subject('Jawaban Pertanyaan / <em>Answered of the Question</em>');
        $this->email->message($message);  
        //$this->email->send();

		if( $result and $this->email->send()):
			redirect("admin/askus");
		else:
			show_error($this->email->print_debugger());
			echo "Gagal. Klik <a href='". base_url() ."admin/askus'> disini </a> untuk kembali";
		endif;
	}
	
}

?>
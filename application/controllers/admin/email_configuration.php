<?php
class Email_configuration extends Access_Controller
{
	public $route = "admin/index.php";
	private $class = "email_configuration";
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/email_configuration_m");
	}

	function index()
	{
		$email = $this->email_configuration_m->displaySelectedData();	
		$data["email"] = $email;
		$data["class"] = $this->class;
		$data["konten"] = "admin/email_configuration/email.main.view.php";
		$this->load->view($this->route, $data);
	}

	function save()
	{
		$id_email_configuration = $this->input->post("id_email_configuration");
		$email_from = $this->input->post("email_from");
		$protocol = $this->input->post("protocol");
		$smtp_host = $this->input->post("smtp_host");
		$smtp_port = $this->input->post("smtp_port");
		$smtp_timeout = $this->input->post("smtp_timeout");
		$smtp_user = $this->input->post("smtp_user");
		$smtp_pass = $this->input->post("smtp_pass");
		$charset = $this->input->post("charset");
		$newline = $this->input->post("newline");
		$mailtype = $this->input->post("mailtype");
		
		$where = array("id_email_configuration"=>$id_email_configuration);
		
		$data = array(
			"email_from"=>$email_from,
			"protocol"=>$this->input->post("protocol"),
			"smtp_host"=>$this->input->post("smtp_host"),
			"smtp_port"=>$this->input->post("smtp_port"),
			"smtp_timeout"=>$this->input->post("smtp_timeout"),
			"smtp_user"=>$this->input->post("smtp_user"),
			"smtp_pass"=>$this->input->post("smtp_pass"),
			"charset"=>$this->input->post("charset"),
			"newline"=>$this->input->post("newline"),
			"mailtype"=>$this->input->post("mailtype")
		);
		
		$this->email_configuration_m->update($data, $where);
		redirect("admin/email_configuration");
	}

}
?>
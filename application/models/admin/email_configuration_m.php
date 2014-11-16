<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Email_configuration_m extends MY_Model 
{
	protected 	 $table = 'pr_email_configuration';	 	 
	protected 	 $primary_key = 'id_email_configuration';

	public function __construct() {        
		parent::__construct();
	}
	
	public function displaySelectedData()
	{
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result();
	}
	
	public function update($data, $where)
	{
		$this->db->where($where);
		return $this->db->update($this->table, $data);
	}

	
}

?>
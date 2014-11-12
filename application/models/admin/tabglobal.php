<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Tabglobal extends MY_Model 
{
	protected 	 $table = 'pr_global';	 	 
	protected 	 $primary_key = 'id_global';

	public function __construct() {        
		parent::__construct();
	}
	
	public function displaySelected($where)
	{
		$this->db->where($where);
		$query = $this->db->get($this->table);
		return $query->result();
	}
		
	public function update($data, $where)
	{
		$this->db->where($where);
		return $this->db->update($this->table, $data);
	}
	
	public function displaySelectedMap()
	{
		//$this->db->where($where);
		$query = $this->db->get("tic_view");
		return $query->result();
	}
	
	public function displaySystemConfig()
	{
		//$this->db->where($where);
		$query = $this->db->get("system_config");
		return $query->result();
	}
	
	
}

?>
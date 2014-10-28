<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Tanya_kami extends MY_Model 
{
	protected 	 $table = 'pr_tanya_kami';	 	 
	protected 	 $primary_key = 'id_tanya_kami';

	public function __construct() {        
		parent::__construct();
	}
	
	public function displayAll($offset=10, $limit=0)
	{
		$this->db->limit($offset, $limit);
		$this->db->order_by($this->primary_key . " desc ");
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result();
	}
	
	public function displaySelectedData($data)
	{
		$this->db->where($data);
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result();
	}
	
	
	public function countAllData()
	{
		return $this->db->count_all_results($this->table);
	}
	
	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}
	
	public function update($data, $where)
	{
		$this->db->where($where);
		return $this->db->update($this->table, $data);
	}
	
	public function delete($where)
	{
		return $this->db->delete($this->table, $where);
	}
	
	public function insert_id()
	{
		return $this->db->insert_id();
	}
}

?>
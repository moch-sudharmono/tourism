<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Simpul extends MY_Model 
{
	protected 	 $table = 'pr_route_nodes';	 	 
	protected 	 $primary_key = 'id_nodes';

	public function __construct() {        
		parent::__construct();
	}
	
	public function display()
	{
		$this->db->order_by("nodes asc ");
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displayAll($offset=10, $limit=0)
	{
		$this->db->limit($offset, $limit);
		$this->db->order_by($this->primary_key . " desc ");
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displaySelectedData($data)
	{
		$this->db->where($data);
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result_array();
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
	
}

?>
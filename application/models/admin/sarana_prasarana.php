<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Sarana_prasarana extends MY_Model 
{
	protected 	 $table = 'pr_sarana_prasarana';	 	 
	protected 	 $primary_key = 'id_sarana_prasarana';

	public function __construct() {        
		parent::__construct();
	}
	
	public function display()
	{
		$this->db->order_by("nama_ina, nama_eng");
		$query = $this->db->get($this->table);
		return $query->result();
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
	
	public function displaySaranaPrasaranaKategori()
	{
		$this->db->order_by("kategori_sarana_prasarana_ina, kategori_sarana_prasarana_eng");
		$query = $this->db->get("pr_kategori_sarana_prasarana");
		return $query->result();
	}
	
	public function displaySaranaPrasaranaByKategori($where)
	{
		$this->db->where($where);
		$this->db->order_by("nama_ina, nama_eng");
		$query = $this->db->get("pr_sarana_prasarana");
		return $query->result();
	}
	public function displayMapPosition()
	{
		$this->db->order_by("id");
		$query = $this->db->get("pointer");
		return $query->result();
	}
}

?>
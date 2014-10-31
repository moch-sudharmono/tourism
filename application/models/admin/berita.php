<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Berita extends MY_Model 
{
	protected 	 $table = 'pr_berita';	 	 
	protected 	 $primary_key = 'id_berita';

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
	
	public function display_tag_trans($where)
	{
		$this->db->where($where);
		$query = $this->db->get("pr_berita_tag_trans");
		return $query->result();
	}
	
	public function insert_tag_trans($data)
	{
		return $this->db->insert("pr_berita_tag_trans", $data);
	}
	
	public function delete_tag_trans($where)
	{
		return $this->db->delete("pr_berita_tag_trans", $where);
	}
	
	/*Upload Gambar*/
	public function displayGambar($where)
	{
		$this->db->where($where);
		$query = $this->db->get("pr_berita_gambar");
		return $query->result();
	}
	
	public function insertGambar($data)
	{
		return $this->db->insert("pr_berita_gambar", $data);
	}
	
	public function deleteGambar($where)
	{
		return $this->db->delete("pr_berita_gambar", $where);
	}
}

?>
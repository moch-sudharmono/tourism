<?php
class Category_m extends CI_Model
{
	private $table="category";
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	function view(){
		$this->db->order_by("id_cat","desc");
		return $this->db->get($this->table);
	}
	
	function view_asc(){
		$this->db->order_by("name_category","asc");
		return $this->db->get($this->table);
	}

	function viewjoin(){
		$this->db->join("category","category.id=pointer.category","INNER");
		return $this->db->get($this->table);	
	}
	
	
	function view_by_id($id){
		$this->db->where("id_cat",$id);
		return $this->db->get($this->table);
	}
	
	function insert($data){
		$ret = $this->db->insert($this->table,$data);
		if ($ret){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	
	function hapus($id)
	{
		$this->db->where('id_cat',$id);
		$this->db->delete($this->table);
	}
	
	function update($data,$id)
	{
		$this->db->where('id_cat',$id);
		$this->db->update($this->table,$data);
	}
	
	
}
?>
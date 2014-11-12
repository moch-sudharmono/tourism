<?php
class Point_m extends CI_Model
{
	private $table="pointer";
	private $table2="category";
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	function view(){
		$this->db->order_by("name","asc");
		return $this->db->get($this->table);
	}
	function viewkat(){
		$this->db->order_by("name_category","asc");
		return $this->db->get($this->table2);
	}
	function viewjoin(){
		$this->db->order_by("id","asc");
		$this->db->join("category","category.id_cat=pointer.category","LEFT");
		return $this->db->get($this->table);	
	}
	function viewjointable(){
		$this->db->order_by("id","desc");
		$this->db->join("category","category.id_cat=pointer.category","LEFT");
		return $this->db->get($this->table);	
	}
	
	
	function view_by_id($id){
		$this->db->where("id",$id);
		return $this->db->get($this->table);
	}
	function view_by_id_join($id){
		$this->db->join("category","category.id_cat=pointer.category","LEFT");
		$this->db->where("id",$id);
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
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	
	function update($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	
	
}
?>
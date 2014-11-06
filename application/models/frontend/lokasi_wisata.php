<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Lokasi_wisata extends MY_Model 
{
	protected 	 $table = 'pr_lokasi_wisata_view';	 	 
	protected 	 $primary_key = 'id_lokasi_wisata';

	public function __construct() {        
		parent::__construct();
	}
	
	public function display()
	{
		$this->db->order_by($this->primary_key . " asc ");
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
	
	public function displaySelectedDataPaging($where, $offset=10, $limit=0)
	{
		$this->db->limit($offset, $limit);
		$this->db->where($where);
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	public function countSelectedData($data)
	{
		$this->db->where($data);
		return $this->db->count_all_results($this->table);
	}
	
	public function countAllData()
	{
		return $this->db->count_all_results($this->table);
	}
	
	public function displayLokasiWisataKategori()
	{
		$query = $this->db->get("pr_lokasi_wisata_kategori");
		return $query->result();
	}
	
	public function displayCountLokasiWisataKategori($where)
	{
		$this->db->where($where);
		return $this->db->count_all_results("pr_lokasi_wisata");
	}
	
	public function displayMapPointer()
	{
		$query = $this->db->get("pointer");
		return $query->result();
	}
	
	public function displayTagSaranaPrasarana($where)
	{
		$this->db->where($where);
		$query = $this->db->get("pr_lokasi_wisata_tag_sarana_view");
		return $query->result();
	}	
	
	public function displayGambar($where="")
	{
		if( !empty($where) ):
			$this->db->where($where);
		endif;
		$query = $this->db->get("pr_lokasi_wisata_gambar_view");
		return $query->result();
	}
	
	public function displayGambarLimit($where="", $limit=20)
	{
		if( !empty($where) ):
			$this->db->where($where);
		endif;
		$this->db->order_by("id_pr_lokasi_wisata_gambar desc");
		$this->db->limit($limit);
		$query = $this->db->get("pr_lokasi_wisata_gambar_view");
		return $query->result();
	}

	
}

?>
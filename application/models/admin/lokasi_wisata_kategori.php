<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Lokasi_wisata_kategori extends MY_Model 
	{
		protected 	 $table = 'pr_lokasi_wisata_kategori';	 	 
		protected 	 $primary_key = 'id_lokasi_wisata_kategori';
	
		public function display()
		{
			$this->db->order_by( "kategori_ina ");
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
		
	}
?>

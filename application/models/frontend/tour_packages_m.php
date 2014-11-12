<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Tour_packages_m extends MY_Model 
	{
		protected 	 $table = 'pr_paket_wisata';	 	 
		protected 	 $primary_key = 'id_paket_wisata';
	
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
		
		public function displayImageSelectedData($data)
		{
			$this->db->limit("20");
			$this->db->where($data);
			$query = $this->db->get("pr_paket_wisata_gambar");
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function displayAllImage()
		{
			$query = $this->db->get("pr_paket_wisata_gambar");
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function countAllData()
		{
			return $this->db->count_all_results($this->table);
		}
		
	}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Attractions extends MY_Model 
	{
		protected 	 $table = 'pr_paket_wisata';	 	 
		protected 	 $primary_key = 'id_paket_wisata';
		
		protected	 $tbl_gambar = 'pr_paket_wisata_gambar';
		protected	 $pk_tbl_gambar = 'id_paket_wisata_gambar';
		
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
		
		public function displayGambar($where)
		{
			$this->db->where($where);
			$query = $this->db->get($this->tbl_gambar);
			return $query->result();
		}
		public function insertGambar($data)
		{
			return $this->db->insert($this->tbl_gambar, $data);
		}
		public function deleteGambar($where)
		{
			return $this->db->delete($this->tbl_gambar, $where);
		}
	}
	
?>
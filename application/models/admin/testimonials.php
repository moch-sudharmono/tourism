<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Testimonials extends MY_Model 
	{
		protected 	 $table = 'pr_testimoni_lokasi_wisata';	
		protected 	 $tableJoin = 'pr_lokasi_wisata';	  	 
		protected 	 $primary_key = 'id_testimoni_lokasi_wisata';
		protected 	 $tableJoin_primary_key = 'id_lokasi_wisata';
		protected 	 $foreign_key = 'id_lokasi_wisata';
		
		public function displayAll($offset=10, $limit=0)
		{
			$this->db->limit($offset, $limit);
			$this->db->order_by($this->primary_key . " desc ");
			$query = $this->db->get($this->table);
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function displayAllJoin($offset=10, $limit=0)
		{
			$this->db->limit($offset, $limit);
			$this->db->order_by($this->primary_key . " desc ");
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->join($this->tableJoin, $this->tableJoin.'.'.$this->tableJoin_primary_key.' = '.$this->table.'.'.$this->foreign_key);
			$query = $this->db->get();
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
		
		public function displaySelectedDataJoin($data)
		{
			$this->db->where($data);
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->join($this->tableJoin, $this->tableJoin.'.'.$this->tableJoin_primary_key.' = '.$this->table.'.'.$this->foreign_key);
			$query = $this->db->get();
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function countAllData()
		{
			return $this->db->count_all_results($this->table);
		}
		
		public function update($data, $where)
		{
			$this->db->where($where);
			return $this->db->update($this->table, $data);
		}
	}
	
?>
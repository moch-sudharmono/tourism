<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Promosi extends MY_Model 
	{
		protected 	 $table = 'pr_promosi';	 	 
		protected 	 $primary_key = 'id_promosi';
		
		protected 	 $tbl_file = 'pr_promosi_berkas';	 	 
		protected 	 $pk_file = 'id_promosi_berkas';
		
		protected 	 $tbl_gambar = 'pr_promosi_gambar';	 	 
		protected 	 $pk_gambar = 'id_promosi_gambar';
	
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
		
		public function displayFile($where)
		{
			$this->db->where($where);
			$query = $this->db->get($this->tbl_file);
			return $query->result();
		}
		public function insertFile($data)
		{
			return $this->db->insert($this->tbl_file, $data);
		}
		public function deleteFile($where)
		{
			return $this->db->delete($this->tbl_file, $where);
		}
	}

?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class News_m extends MY_Model 
	{
		protected 	 $table = 'pr_berita';	 	 
		protected 	 $primary_key = 'id_berita';
	
		public function displayAll($offset=10, $limit=0, $where="")
		{
			$this->db->limit($offset, $limit);
			if( !empty($where) ):
				$this->db->where($where);
			endif;
			$this->db->order_by($this->primary_key . " desc ");
			$query = $this->db->get($this->table);
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function displayAllperTag($offset=10, $limit=0, $where="")
		{
			$this->db->limit($offset, $limit);
			if( !empty($where) ):
				$this->db->where($where);
			endif;
			$this->db->order_by($this->primary_key . " desc ");
			$query = $this->db->get("pr_berita_tag_trans_view");
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
		
		public function displayPopular($offset=3, $limit=0)
		{
			$this->db->limit($offset, $limit);
			$this->db->order_by($this->primary_key . " desc ");
			$query = $this->db->get($this->table);
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function displayNewsTag()
		{
			$this->db->order_by("tag_ina ");
			$query = $this->db->get("pr_berita_tag_trans_group_view");
			return $query->result();
		}
		
		public function countAllData($where="")
		{
			if( !empty($where) ):
				$this->db->where($where);
			endif;
			return $this->db->count_all_results($this->table);
		}
		
		public function countAllDataperTag($where="")
		{
			if( !empty($where) ):
				$this->db->where($where);
			endif;
			return $this->db->count_all_results("pr_berita_tag_trans_view");
		}
		
		public function getNewsTag($where)
		{
			$this->db->where($where);
			$query = $this->db->get("pr_berita_tag_trans_view");
			//echo $this->db->last_query();
			return $query->result();
		}
		
		public function getNewsPicture($where)
		{
			$this->db->where($where);
			$query = $this->db->get("pr_berita_gambar");
			//echo $this->db->last_query();
			return $query->result();
		}
		
	}
?>

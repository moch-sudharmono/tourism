<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class SitemapModel extends MY_Model 
	{
		protected 	 $table = 'pr_sitemap';	 	 
		protected 	 $primary_key = 'id_sitemap';
	
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
		
		public function displayAllJoin($offset=10,$limit=0)
		{
			$this->db->select('a.id_sitemap, b.nama_sitemap_ina as parent_ina, 
								b.nama_sitemap_eng as parent_eng, a.sitemap_no, 
								a.nama_sitemap_ina, a.nama_sitemap_eng,
								a.url, a.css_id, a.css_class, a.icon
								');
            $this->db->from($this->table.' a'); 
            $this->db->join('pr_sitemap b', 'b.id_sitemap=a.parent_id', 'left');
            $this->db->order_by('a.id_sitemap','desc');         
            $this->db->limit($offset, $limit);
			$query = $this->db->get(); 			
            
            return $query->result_array();
            	
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
		
	}

?>
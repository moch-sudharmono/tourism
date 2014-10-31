<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Pr_sitemap extends MY_Model 
	{
		protected 	 $table = 'pr_sitemap';	 	 
		protected 	 $primary_key = 'id_sitemap';
	
		public function __construct() {        
			parent::__construct();
		}
		
		/*public function validate()
		{
			$title_eng = $this->input->post('title_eng');
            $title_ind = $this->input->post('title_ind');			
            $isi_eng = $this->input->post('isi_eng');			
            $isi_ind = $this->input->post('isi_ind');
			
            $data = array(
                   'sitemap_no'=>$title_eng,
                   'parent_id'=>$title_ind,
				   'name_sitemap_id'=>$isi_eng,
				   'name_sitemap_ing'=>$isi_eng,
				   'url'=>$isi_ind  ,
				   'css_id'=>$css_id,
				   'css_class'=>$css_class,
				   'icon'=>$icon                  
                    );
            $this->insert_into($data);    
		}*/
		
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
		
	}

?>
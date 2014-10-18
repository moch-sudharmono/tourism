<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class MY_Model extends CI_Model
	{
		protected $table;		 
		protected $primary_key;
		 
		public function get_all()
		{		
			$query = $this->db->get($this->table);
			$result = $query->result_array();
			return $result;
		}	
		
		public function get_by_id($id)
		{		
			$query = $this->db->get_where($this->table,array($this->primary_key => $id));		
			$results = $query->result_array();
			$result = $results[0];
			return $result;
		}
		
		public function insert_into($value)
		{
			$this->db->insert($this->table,$value);
		}
		
		public function update_table($value,$id)
		{
			$this->db->update($this->table, $value, array($this->primary_key => $id));
		}
		
		public function delete($id)
		{				
			$this->db->delete($this->table, array($this->primary_key => $id)); 
		}
		
	}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Slideshow extends MY_Model 
{
	protected 	 $table = 'pr_slideshow';	 	 
	protected 	 $primary_key = 'id_slideshow';

	public function __construct() {        
		parent::__construct();
	}
	
	public function display($offset="", $limit="", $where="")
	{
		if( !empty($offset) and !empty($limit) ):
			$this->db->limit($offset, $limit);
		endif;
		
		if( !empty($where) ):
			$this->db->where($where);
		endif;
		
		$this->db->order_by($this->primary_key . " desc ");
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	
	public function countAllData()
	{
		return $this->db->count_all_results($this->table);
	}
}

?>
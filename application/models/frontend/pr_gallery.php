<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Pr_gallery extends MY_Model 
{
	protected 	 $table = 'pr_lokasi_wisata_gambar_view';	 	 

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
		
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	
	public function countAllData()
	{
		return $this->db->count_all_results($this->table);
	}
}

?>
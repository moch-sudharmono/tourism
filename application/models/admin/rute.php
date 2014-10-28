<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Rute extends MY_Model 
{
	protected 	 $table = 'pr_route_transportation';	 	 
	protected 	 $primary_key = 'id_transportation';

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
			$this->db->select('a.id_transportation, a.id_edges, a.id_sarana_prasarana, 
								a.deskripsi_ina, a.deskripsi_eng, 
								a.waktu_perjalanan, a.estimasi_biaya,
								e.nama_ina, e.nama_eng, c.nodes as node_edge_from, d.nodes as node_edge_to
								');
            $this->db->from($this->table.' a'); 
            $this->db->join('pr_route_edges b', 'b.id_edges=a.id_edges', 'left');
			$this->db->join('pr_route_nodes c', 'c.id_nodes=b.edge_from', 'left');
			$this->db->join('pr_route_nodes d', 'd.id_nodes=b.edge_to', 'left');
			$this->db->join('pr_sarana_prasarana e', 'e.id_sarana_prasarana=a.id_sarana_prasarana', 'left');
            $this->db->order_by('a.id_transportation','desc');         
            $this->db->limit($offset, $limit);
			$query = $this->db->get(); 			
            
            return $query->result_array();
            	
		}
		
	public function displaySelectedDataJoin($data)
		{
			$this->db->select('a.id_transportation, a.id_edges, a.id_sarana_prasarana, 
								a.deskripsi_ina, a.deskripsi_eng, 
								a.waktu_perjalanan, a.estimasi_biaya,
								e.nama_ina, e.nama_eng, c.nodes as node_edge_from, d.nodes as node_edge_to
								');
            $this->db->from($this->table.' a'); 
            $this->db->join('pr_route_edges b', 'b.id_edges=a.id_edges', 'left');
			$this->db->join('pr_route_nodes c', 'c.id_nodes=b.edge_from', 'left');
			$this->db->join('pr_route_nodes d', 'd.id_nodes=b.edge_to', 'left');
			$this->db->join('pr_sarana_prasarana e', 'e.id_sarana_prasarana=a.id_sarana_prasarana', 'left');
            $this->db->order_by('a.id_transportation','desc');   
			$this->db->where($data);      

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
	
	public function insert_id()
	{
		return $this->db->insert_id();
	}
	
	public function displayRoute()
	{
			$this->db->select('a.id_edges, a.edge_from, b.nodes as node_edge_from, 
								a.edge_to, c.nodes as node_edge_to
								');
            $this->db->from('pr_route_edges a'); 
            $this->db->join('pr_route_nodes b', 'b.id_nodes=a.edge_from', 'left');
			$this->db->join('pr_route_nodes c', 'c.id_nodes=a.edge_to', 'left');
            $this->db->order_by('a.id_edges','desc');         
			$query = $this->db->get(); 			
            
            return $query->result_array();
	}
	
	public function displayInfrastructure()
	{
		$this->db->select('*');
		$this->db->from('pr_sarana_prasarana'); 
		$this->db->order_by("id_sarana_prasarana desc ");
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function delete_tag_trans($where)
	{
		return $this->db->delete("pr_berita_tag_trans", $where);
	}
}

?>
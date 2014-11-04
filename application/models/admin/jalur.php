<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Jalur extends MY_Model 
{
	protected 	 $table = 'pr_route_edges';	 
	protected 	 $view = 'pr_route_edges_view';	 	 
	protected 	 $primary_key = 'id_edges';

	public function __construct() {        
		parent::__construct();
	}
	
	public function displayAll($offset=10, $limit=0)
	{
		$this->db->limit($offset, $limit);
		$this->db->order_by($this->primary_key . " desc ");
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displaySelectedData($data)
	{
		$this->db->where($data);
		$query = $this->db->get($this->table);
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displayRoute($from="", $to="")
	{
		$this->db->where($from);
		$query = $this->db->get($this->view);
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displayTransportation($from="", $to="")
	{
		$this->db->where($from);
		$query = $this->db->get("pr_route_transportation_view");
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displayAllNodes()
	{
		$this->db->order_by("nodes desc ");
		$query = $this->db->get("pr_route_nodes");
		//echo $this->db->last_query();
		return $query->result_array();
	}
	
	public function displayAllJoin($offset=10,$limit=0)
		{
			$this->db->select('a.id_edges, a.edge_from, a.edge_to, 
								c.nodes as node_edge_from, d.nodes as node_edge_to
								');
            $this->db->from($this->table.' a'); 
			$this->db->join('pr_route_nodes c', 'c.id_nodes=a.edge_from', 'left');
			$this->db->join('pr_route_nodes d', 'd.id_nodes=a.edge_to', 'left');
            $this->db->order_by('a.id_edges','desc');         
            $this->db->limit($offset, $limit);
			$query = $this->db->get(); 			
            
            return $query->result_array();
            	
		}
		
	public function displaySelectedDataJoin($data)
		{
			$this->db->select('a.id_edges,a.edge_from, a.edge_to,
							   c.nodes as node_edge_from, d.nodes as node_edge_to
								');
            $this->db->from($this->table.' a'); 
            $this->db->join('pr_route_nodes c', 'c.id_nodes=a.edge_from', 'left');
			$this->db->join('pr_route_nodes d', 'd.id_nodes=a.edge_to', 'left');
            $this->db->order_by('a.id_edges','desc');   
			$this->db->where($data);      

			$query = $this->db->get(); 			
            
            return $query->result_array();
            	
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
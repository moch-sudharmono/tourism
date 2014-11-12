<?php
	class M_Configuration extends CI_Model
	{
		function getConfiguration()
		{
			$this->db->select('*');
			return $this->db->get('system_config');
		}

		function saveConfiguration($object)
		{
			$this->db->where('frontend_name', $object['frontend_name']);
			$this->db->update('system_config', $object);
		}

		function getAdmin($id)
		{
			$this->db->select('*');
			return $this->db->get('admin');
		}

		function changePassword($object)
		{
			$this->db->where('id', $object['id']);
			$this->db->update('admin', $object);
		}
	}
?>
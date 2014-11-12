<?php
	class M_login extends CI_Model
	{
		function get($email)
		{
			$this->db->where('email', $email);
			
			$query = $this->db->get('admin');

			return ($query->num_rows() > 0) ? $query->row() : FALSE;
		}

		function getMember($username)
		{
			$this->db->where('username', $username);
			$query = $this->db->get('member');

			return ($query->num_rows() > 0) ? $query->row() : FALSE;
		}
	}
?>
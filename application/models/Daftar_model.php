<?php 

/**
 * 
 */
class Daftar_model extends CI_Model
{
	public function register($data)
	{
		return $this->db->insert('user', $data);
	}

	public function cekUsername($username)
	{
		return $this->db->get_where('user', ['username' => $username]);
	}
}
<?php 

/**
 * 
 */
class Daftar_model extends CI_Model
{
	public function register($data)
	{
		return $this->db->insert('tbl_user', $data);
	}

	public function cekUsername($username)
	{
		return $this->db->get_where('tbl_user', ['username' => $username]);
	}
}
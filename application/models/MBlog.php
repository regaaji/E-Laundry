<?php 

/**
 * 
 */
class MBlog extends CI_Model
{
	
	function getBlog($idblog)
	{
		$data = array();
		$options = array('location' => $idblog);
		$Q = $this->db->get_where('tb_transaksi2',$options,1);
		if ($Q->num_rows() > 0){
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
}
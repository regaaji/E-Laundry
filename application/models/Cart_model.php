<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('tbl_produk');
		return $hasil->result();
	}

	

	//function getPaket(){
		// $this->db->select('*');
		// $this->db->from('tbl_produk');
		// $paket = 'TAS01';
		// $this->db->where('paket',$paket);
		// return $this->db->get('tbl_produk');
		// return $this->db->get_where('tbl_produk', ['paket' => $paket]);
		// $this->db->select('*');
		// $this->db->from('tbl_produk');
		// $this->db->where('paket');
		// $this->db->like('%TAS01%');
		// return $this->db->get('tbl_produk');


	//}


	// public function getPaket()
	// {
	// 	$status= 'TAS';
	// 	$options=array('paket'=>$status);
	// 	$query =  $this->db->get_where('tbl_produk',$options);

	// 	//get_where with limit
	// 	$limit=5;
	// 	 return $this->db->get_where('tbl_produk',$options,$limit)->result();

	// }


	// public function getPaket1()
	// {
	// 	$status= 'CUCI';
	// 	$options=array('paket'=>$status);
	// 	$query =  $this->db->get_where('tbl_produk',$options);
		
	// 	//get_where with limit
	// 	$limit=5;
	// 	 return $this->db->get_where('tbl_produk',$options,$limit)->result();

	// }
	
}
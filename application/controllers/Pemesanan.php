<?php 

/**
 * 
 */
class Pemesanan extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('layanan/pemesanan');
		$this->load->view('templates/footer');
	}
}
 ?>
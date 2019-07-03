<?php 

/**
 * 
 */
class ExpressBayar1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Express_model');
	}
	
	public function index()
	{
		$data['judul'] = 'E-Laundry | DetailBayar';

		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[tb_transaksiEssi.nama]');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('tanggal_jemput', 'Tanggal Penjemputan', 'required');
		$this->form_validation->set_rules('waktu_jemput', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('tanggal_kirim', 'Tanggal Pengiriman', 'required');
		$this->form_validation->set_rules('waktu_kirim', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('location', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('uang', 'Uang', 'required');

		if( $this->form_validation->run() === FALSE ){	
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/expressBayar1');
			$this->load->view('templates/footer');
		} else {

			  $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "location" => $this->input->post('location', true),
                "alamat" => $this->input->post('alamat', true),
                "harga" => $this->input->post('harga', true),
                "status" => $this->input->post('status', true),
                "uang" => $this->input->post('uang', true)

            ];  
            $this->session->set_userdata($data);
            $this->db->insert('tb_transaksiEssi', $data);
           redirect('Cekpesan');           
		}
	}


}


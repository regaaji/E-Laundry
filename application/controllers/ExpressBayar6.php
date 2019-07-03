<?php 

/**
 * 
 */
class ExpressBayar6 extends CI_Controller
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

		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[tb_transaksiBasic.nama]');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('tanggal_jemputb', 'Tanggal Penjemputan', 'required');
		$this->form_validation->set_rules('waktu_jemputb', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('tanggal_kirimb', 'Tanggal Pengiriman', 'required');
		$this->form_validation->set_rules('waktu_kirimb', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('locationb', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamatb', 'Alamat', 'required');
		$this->form_validation->set_rules('hargab', 'Harga', 'required');
		$this->form_validation->set_rules('statusb', 'Status', 'required');
		$this->form_validation->set_rules('uangb', 'Uang', 'required');

		if( $this->form_validation->run() === FALSE ){	
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/expressBayar6');
			$this->load->view('templates/footer');
		} else {

			  $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemputb" => $this->input->post('tanggal_jemputb', true),
                "waktu_jemputb" => $this->input->post('waktu_jemputb', true),
                "tanggal_kirimb" => $this->input->post('tanggal_kirimb', true),
                "waktu_kirimb" => $this->input->post('waktu_kirimb', true),
                "locationb" => $this->input->post('locationb', true),
                "alamatb" => $this->input->post('alamatb', true),
                "hargab" => $this->input->post('hargab', true),
                "statusb" => $this->input->post('statusb', true),
                "uangb" => $this->input->post('uangb', true)

            ];  
            $this->session->set_userdata($data);
            $this->db->insert('tb_transaksiBasic', $data);
           redirect('Cekpesan3');           
		}
	}


}


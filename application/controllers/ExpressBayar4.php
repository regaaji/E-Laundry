<?php 

/**
 * 
 */
class ExpressBayar4 extends CI_Controller
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

		$this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[tb_transaksiWipe.nama]');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('tanggal_jemput1', 'Tanggal Penjemputan', 'required');
		$this->form_validation->set_rules('waktu_jemput1', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('tanggal_kirim1', 'Tanggal Pengiriman', 'required');
		$this->form_validation->set_rules('waktu_kirim1', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('location1', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamat1', 'Alamat', 'required');
		$this->form_validation->set_rules('harga1', 'Harga', 'required');
		$this->form_validation->set_rules('status1', 'Status', 'required');
		$this->form_validation->set_rules('uang1', 'Uang', 'required');

		if( $this->form_validation->run() === FALSE ){	
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/expressBayar4');
			$this->load->view('templates/footer');
		} else {

			  $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemput1" => $this->input->post('tanggal_jemput1', true),
                "waktu_jemput1" => $this->input->post('waktu_jemput1', true),
                "tanggal_kirim1" => $this->input->post('tanggal_kirim1', true),
                "waktu_kirim1" => $this->input->post('waktu_kirim1', true),
                "location1" => $this->input->post('location1', true),
                "alamat1" => $this->input->post('alamat1', true),
                "harga1" => $this->input->post('harga1', true),
                "status1" => $this->input->post('status1', true),
                "uang1" => $this->input->post('uang1', true)

            ];  
            $this->session->set_userdata($data);
            $this->db->insert('tb_transaksiWipe', $data);
           redirect('Cekpesan1');           
		}
	}


}


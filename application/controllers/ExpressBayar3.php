<?php 

/**
 * 
 */
class ExpressBayar3 extends CI_Controller
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


		$this->form_validation->set_rules('tanggal_jemput', 'Tanggal Penjemputan', 'required');
		$this->form_validation->set_rules('waktu_jemput', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('tanggal_kirim', 'Tanggal Pengiriman', 'required');
		$this->form_validation->set_rules('waktu_kirim', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('location', 'Lokasi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('status_id', 'Status', 'required');
		$this->form_validation->set_rules('tipe', 'Tipe', 'required');
		$this->form_validation->set_rules('lng', 'LNG', 'required');
		$this->form_validation->set_rules('lat', 'LAT', 'required');
		$this->form_validation->set_rules('bukti', 'bukti', 'required');

		if( $this->form_validation->run() === FALSE ){	
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/expressBayar3');
			$this->load->view('templates/footer');
		} else {

			  $data = [ 
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "location" => $this->input->post('location', true),
                "lng" => $this->input->post('lng', true),
                "lat" => $this->input->post('lat', true),
                "user_id" => $this->input->post('user_id', true),
                "harga" => $this->input->post('harga', true),
                "status_id" => $this->input->post('status_id', true),
                "tipe" => $this->input->post('tipe', true),
                "bukti" => $this->input->post('bukti', true),
                "owner_id" => $this->input->post('owner_id', true)

            ];  
            $this->session->set_userdata($data);
            $this->db->insert('tbl_transaksi', $data);
           redirect('Cekpesan1');           
		}
	}


}


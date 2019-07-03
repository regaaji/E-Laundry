<?php

/**
 * 
 */
class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Express_model');
		//$this->load->model('ExpressBayar_model');
		$this->load->model('UserModel');
	}

	public function index()
	{
		 $data['jumlah'] = $this->Express_model->getAllPesan();
		 $data['count'] = $this->Express_model->getAllCount();
		$data['judul'] = 'E-Laundry | Layanan[Satuan]';
		$data['waktuK1'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
		$data['waktuA1'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];

		

		$this->form_validation->set_rules('subtotal', 'Subtotal', 'required');
		$this->form_validation->set_rules('tanggal_kembali1', 'Tanggal Kembali', 'required');
		$this->form_validation->set_rules('waktu_kembali1', 'Waktu Pengembalian', 'required');
		$this->form_validation->set_rules('tanggal_antar1', 'Tanggal Pengantaran', 'required');
		$this->form_validation->set_rules('waktu_antar1', 'Waktu Pengantaran', 'required');
		$this->form_validation->set_rules('lat', 'Tempat Lat', 'required');
		$this->form_validation->set_rules('lng', 'Tempat Lng', 'required');
		$this->form_validation->set_rules('location', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/index', $data);
			$this->load->view('templates/footer');
		} else {
			//echo "ok";
			$this->Express_model->tambahDataIndex();
			redirect('ExpressBayar2/index');
		}
	}

	public function index1()
    {
        $data['judul'] = 'E-Laundry | Layanan[Kiloan]';

        $data['jumlah'] = $this->Express_model->getAllBasic();
        $data['barang'] = $this->Express_model->get_all_produkbasic();
        $data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']; 

        $this->form_validation->set_rules('tanggal_jemput', 'Tanggal Penjemputan', 'required');
        $this->form_validation->set_rules('waktu_jemput', 'Waktu Penjemputan', 'required');
        $this->form_validation->set_rules('tanggal_kirim', 'Tanggal Pengiriman', 'required');
        $this->form_validation->set_rules('waktu_kirim', 'Waktu Pengiriman', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('lat', 'Tempat Lat', 'required');
        $this->form_validation->set_rules('lng', 'Tempat Lng', 'required');
        $this->form_validation->set_rules('location', 'Lokasi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('layanan/index1', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                "harga" => $this->input->post('harga', true),
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "lat" => $this->input->post('lat', true),
                "lng" => $this->input->post('lng', true),
                "location" => $this->input->post('location', true)

            ];  
            $this->session->set_userdata($data);
            redirect('ExpressBayar2');
        }
    }

	 public function metodebayarb()
    {
        $data['judul'] = 'E-Laundry | MetodePembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/metodebayarb');
        $this->load->view('templates/footer');
    }
}

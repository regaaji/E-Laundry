<?php

class Laundry4 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Express_model');
    }
    public function index()
    {
        $data['judul'] = 'E-Laundry | Layanan[Satuan]';

        

         $data['essii'] = $this->Express_model->get_all_produkessii();
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
            $this->load->view('layanan/laundry4', $data);
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
            redirect('ExpressBayar');
        }
    }

    public function metodebayar()
    {
        $data['judul'] = 'E-Laundry | MetodePembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/metodebayar1');
        $this->load->view('templates/footer');
    }
}

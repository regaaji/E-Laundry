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

		$data['judul'] = 'E-Laundry | Layanan[Satuan]';
        
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/Laundry/layanan/index';
        $config['total_rows'] = $this->Express_model->countAllProduk();
        $config['per_page'] = 2;
        
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

         $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['produk'] = $this->Express_model->getProduk($config['per_page'], $data['start']);

			$this->load->view('templates/header', $data);
			$this->load->view('layanan/index', $data);
			$this->load->view('templates/footer');
		
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
                "location" => $this->input->post('location', true),
                "nama_owner" => $this->input->post('nama_owner', true),
                "owner_id" => $this->input->post('owner_id', true)

            ];  
            $this->session->set_userdata($data);
            redirect('ExpressBayar3');
        }
    }

	 public function metodebayarb()
    {
        $data['judul'] = 'E-Laundry | MetodePembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/metodebayarb');
        $this->load->view('templates/footer');
    }

    function laundry($id_owner)
    {
        $data['judul'] = 'E-Laundry | Layanan[Kiloan]';
        $data['detail'] = $this->Express_model->get_detail_produk($id_owner);
        
        $data['rinci'] = $this->Express_model->getDetailById($id_owner);
        $data['jumlah'] = $this->Express_model->getJumlah($id_owner);

        $data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']; 

        $this->form_validation->set_rules('tanggal_jemput', 'Tanggal Penjemputan', 'required');
        $this->form_validation->set_rules('waktu_jemput', 'Waktu Penjemputan', 'required');
        $this->form_validation->set_rules('tanggal_kirim', 'Tanggal Pengiriman', 'required');
        $this->form_validation->set_rules('waktu_kirim', 'Waktu Pengiriman', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        //$this->form_validation->set_rules('lat', 'Tempat Lat', 'required');
        $this->form_validation->set_rules('lng', 'Tempat Lng', 'required');
        $this->form_validation->set_rules('location', 'Lokasi', 'required'); 
        $this->form_validation->set_rules('nama_owner', 'nama owner', 'required'); 
        $this->form_validation->set_rules('owner_id', 'owner id', 'required'); 

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('layanan/laundry1', $data);
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
                "location" => $this->input->post('location', true),
                "nama_owner" => $this->input->post('nama_owner', true),
                "owner_id" => $this->input->post('owner_id', true)

            ];  
            $this->session->set_userdata($data);
            redirect('ExpressBayar3');
        }
    }
}

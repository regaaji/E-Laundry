<?php 

/**
 * 
 */
class Laundry2 extends CI_Controller
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

		$data['barang2'] = $this->Express_model->get_all_produk2();
		$data['barang3'] = $this->Express_model->get_all_produk3();
		$data['barang4'] = $this->Express_model->get_all_produk4();
		$data['waktuK'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
		$data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];


		$this->form_validation->set_rules('paket1', 'Paket', 'required');
		$this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('tanggal_kembali1', 'Tanggal Pengembalian', 'required');
		$this->form_validation->set_rules('waktu_kembali1', 'Waktu Pengembalian', 'required');
		$this->form_validation->set_rules('tanggal_antar1', 'Tanggal Pengantaran', 'required');
		$this->form_validation->set_rules('waktu_antar1', 'Waktu Pengantaran', 'required');
		$this->form_validation->set_rules('harga1', 'Harga', 'required');
		$this->form_validation->set_rules('lat1', 'Tempat Lat', 'required');
		$this->form_validation->set_rules('lng1', 'Tempat Lng', 'required');
		$this->form_validation->set_rules('location1', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamat1', 'Alamat', 'required');

		if( $this->form_validation->run() === FALSE ){	
		$this->load->view('templates/header', $data);
		$this->load->view('layanan/laundry2');
		$this->load->view('templates/footer');
		} else {
			//echo "<script>alert('ok');</script>";
			$this->Express_model->tambahDataPremium();
			redirect('ExpressBayar1/index');
		}
	}

	function cetak_home()
	{
		$data = $this->Express_model->tambahDataPremium2();		
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "E-Laundry";
		$this->pdf->load_view('layanan/print1.php', $data);

	}
}

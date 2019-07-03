<?php 

/**
 * 
 */
class Cekpesan3 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Express_model');
	}
	
	public function index()
	{
		$data['transaksi'] = $this->Express_model->get_all_transaksiBasic(); 
		$data['finish'] = $this->Express_model->get_all_finish(); 
		$data['judul'] = 'E-Laundry | Layanan[Kiloan]';

		$this->load->view('templates/header', $data);
		$this->load->view('layanan/cekpesan3', $data);
		$this->load->view('templates/footer');
	}

	public function basiclModal(){
		echo json_encode($this->Express_model->getByBasicId($_POST['id']));
	}

	public function edit($id)
	{
		$data['transaksi'] = $this->Express_model->getByBasicId($id); 
		$data['judul'] = 'E-Laundry | Cek Pemesanan'; 
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('tanggal_jemputb', 'Tanggal Penjemputan', 'required');
		$this->form_validation->set_rules('waktu_jemputb', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('tanggal_kirimb', 'Tanggal Pengiriman', 'required');
		$this->form_validation->set_rules('waktu_kirimb', 'Waktu Penjemputan', 'required');
		$this->form_validation->set_rules('locationb', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamatb', 'Alamat', 'required');
		$this->form_validation->set_rules('hargab', 'Harga', 'required');
		$this->form_validation->set_rules('statusb', 'Status', 'required');
		//$this->form_validation->set_rules('bukti', 'Bukti', 'required');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates/header', $data);
		$this->load->view('layanan/editpesan3', $data);
		$this->load->view('templates/footer');

		} else {

			$this->Express_model->editcekpesan3();		
			redirect('Cekpesan3');	
			
		}
	}

	public function hapus3($id)
	{
		$this->Express_model->hapuscekpesan3($id);

		redirect('Cekpesan3');
	}

	function cetak3($id)
	{
		$data['detail'] = $this->Express_model->cetakpdfbasic($id);		
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "E-Laundry";
		$this->pdf->load_view('layanan/print3.php', $data);

	}
}
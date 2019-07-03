<?php 

/**
 * 
 */
class Cekpesan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Express_model');
	}
	
	public function index()
	{
		$data['transaksi'] = $this->Express_model->get_all_essiitransaksi(); 
		$data['selesai'] = $this->Express_model->get_all_selesai(); 
		$data['judul'] = 'E-Laundry | Layanan[Kiloan]';

		$this->load->view('templates/header', $data);
		$this->load->view('layanan/cekpesan', $data);
		$this->load->view('templates/footer');
	}

	function coba($id_transaksi)
	{
		$data['judul'] = 'E-Laundry | Layanan[Kiloan]';
		$data['coba'] = $this->Express_model->get_all_transaksiEssi($id_transaksi);
		$this->load->view('templates/header', $data);
		$this->load->view('layanan/coba', $data);
		$this->load->view('templates/footer', $data);
	}

	public function rincilModal(){
		echo json_encode($this->Express_model->getById($_POST['id_transaksi']));
	}

	public function edit($id_transaksi)
	{
		$data['transaksi'] = $this->Express_model->getById($id_transaksi); 
		$data['judul'] = 'E-Laundry | Cek Pemesanan'; 
		
		$this->form_validation->set_rules('status_id', 'Status', 'required');
		//$this->form_validation->set_rules('bukti', 'Bukti', 'required');
		
		if( $this->form_validation->run() == FALSE ){
		
		$this->load->view('templates/header', $data);
		$this->load->view('layanan/editpesan1', $data);
		$this->load->view('templates/footer');

		} else {

			$this->Express_model->editcekpesan1();		
			redirect('Cekpesan');	
			
		}
	}

	public function hapus1($id)
	{
		$this->Express_model->hapuscekpesan1($id);

		redirect('Cekpesan');
	}

	function cetak1($id)
	{
		$data['detail'] = $this->Express_model->cetakpdf1($id);		
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "E-Laundry";
		$this->pdf->load_view('layanan/print1.php', $data);

	}

	public function metodebayar($id_transaksi)
    {
        $data['judul'] = 'E-Laundry | MetodePembayaran';
        $data['transaksi'] = $this->Express_model->getById($id_transaksi); 

        $this->form_validation->set_rules('status_id', 'Status', 'required');
		//$this->form_validation->set_rules('bukti', 'Bukti', 'required');
		
		if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/metodebayar');
        $this->load->view('templates/footer');

        } else {

			$this->Express_model->editcekpesan1();		
			redirect('Cekpesan');	
			
		}
    }
}
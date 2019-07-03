<?php 

/**
 * 
 */
class Tentang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Express_model');
		$this->load->library('Tamasms');
	}
	
	public function index()
	{
		$data['judul'] = 'E-Laundry | Tentang Kami';
		$this->load->view('templates/header', $data);
		$this->load->view('tentang/index');
		$this->load->view('templates/footer');	
	}

	public function send(){
		$to = $this->input->post("to", true);
		$message = $this->input->post("message", true);
		$this->tamasms->setIP('192.168.100.70:8080');
		echo $this->tamasms->sendSMS($to, $message);
		$this->db->set('to', $to);
		$this->db->set('message', $message);
		$this->db->insert('tb_pesan');
		$this->session->set_flashdata('pesan', 'Kami');
		redirect('tentang/index');
	}


	
	

}
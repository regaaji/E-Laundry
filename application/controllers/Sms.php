<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('Tamasms');
	}
	
	public function index()
	{
		
		$this->load->view('templates/footer');	
	}

	public function send(){
		$to = $this->input->post("to");
		$message = $this->input->post("message", true);
		$this->tamasms->setIP('192.168.100.70:8080');
		echo $this->tamasms->sendSMS($to, $message);
		$this->db->set('to', $to);
		$this->db->set('message', $message);
		$this->db->insert('tb_pesan');
		redirect('home/index');

	}
}

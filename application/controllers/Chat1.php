<?php 

/**
 * 
 */
require 'vendor/autoload.php';
class Chat1 extends CI_Controller
{
	
	public function index()
	{
		// $data = [
		// 	'chat' => $this->db->order_by('id', 'ASC')->get('chat')->result() 
		// ];
		$this->load->view('templates/Chat1', $data);
	}

	public function store()
	{
		$data = [
			'name' => $this->input->post('name'),
			'message' => $this->input->post('message')
		];


		$this->db->insert('chat', $data);

		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			'c0c540bee9077515786a',
			'6bd4976d8f5ad318fe0d',
			'730890',
			$options
		);

		


		if( $this->db->insert('chat', $data) ){
			
			$push = $this->db->order_by('id', 'DESC');
			$push = $this->db->get('chat')->result();

			foreach ($push as $key) {
				$data_pusher[] = $key;
			}

			$pusher->trigger('my-channel', 'my-event', $data_pusher);	
		}
	}

	public function hapus()
	{
		$this->db->empty_table('chat');
		redirect('home/index');
	}
}
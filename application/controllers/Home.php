<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	public function index()
	{
		// $data = [
		// 	'chat' => $this->db->order_by('id', 'ASC')->get('chat')->result() 
		// ];
		$data['judul'] = 'E-Laundry | Home';

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			//$this->load->view('templates/Chat1', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->_sendEmail();
		}	
	}


	private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'regaajiprayogo23@gmail.com',
            'smtp_pass' => 'rEGA1234',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);


        $this->email->initialize($config);
        $this->email->from('regaajiprayogo23@gmail.com', 'Rega Aji');
        $this->email->to($this->input->post('email'));
         $this->email->subject('E-Laundry');
        $this->email->message($this->input->post('pesan'));



        if ($this->email->send()) {
            redirect('home/index');
        } else {
            echo $this->email->print_debugger();
            die;
        }
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
		redirect('chat1');
	}
}
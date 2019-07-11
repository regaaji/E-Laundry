<?php 

/**
 * 
 */
class Daftar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
	}
	

	// ================ Daftar ==================

	 public function register()
	{
		$data['judul'] = 'E-Laundry | Daftar'; 
		$this->load->view('templates/header', $data);
		$this->load->view('daftar/index');
		$this->load->view('templates/footer');
	}

	public function proses_register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
 
		if( $this->form_validation->run() === FALSE ){
		$data['judul'] = 'E-Laundry | Daftar';
		$this->load->view('templates/header', $data);
		$this->load->view('daftar/index');
		 $this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'owner_id' => $this->input->post('owner_id', true),
				'username' => $this->input->post('username', true),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'email' => $this->input->post('email'),
				'telepon' => $this->input->post('telepon', true),
				'alamat' => $this->input->post('alamat', true),
				'image' => $this->input->post('image', true),
				'is_active' => $this->input->post('is_active', true),
				'role_id' => $this->input->post('role_id', true)

			];

			$insert = $this->Daftar_model->register($data);

			if ( $insert ) {
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('daftar/login');
			} else {
				echo "<script>
				alert('Terjadi kesalahan saat daftar');
				document.location.href = 'daftar/register'; 
				</script>";
			}

		}

		
	}


	// ================= Masuk ==============

	public function login()
	{
		$data['judul'] = 'E-Laundry | Masuk';	
		$this->load->view('templates/header', $data);
		$this->load->view('daftar/login');
		$this->load->view('templates/footer');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if( $this->form_validation->run() === FALSE ){
				$data['judul'] = 'E-Laundry | Masuk';

			$this->load->view('templates/header', $data);
			$this->load->view('daftar/login');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');

			$cek = $this->Daftar_model->cekUsername($username);
			if ( $cek->num_rows() === 1 ) {
				$password = $this->input->post('password');

				if ( password_verify($password, $cek->row()->password) ) {
	
					 $session['telepon'] = $cek->row()->telepon;
					 $session['alamat'] = $cek->row()->alamat;		
					 $session['username'] = $cek->row()->username;
					 $session['password'] = $cek->row()->password;	
					 $session['nama'] = $cek->row()->nama;
					 $session['id'] = $cek->row()->id;
					 $session['masuk_in'] = TRUE;


					// $data_session = array(
					// 	'nama_lengkap' => $cek->row()->nama_lengkap,
					// 	'logged_in' => TRUE 
					// );


					$this->session->set_userdata($session);
				   redirect('home/index');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Password Salah
                    </div>');
					//$this->session->set_flashdata('message', 'Salah');
					redirect('daftar/login');
				}
			} else {
				//$this->session->set_flashdata('message', 'Gagal');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Anda telah gagal masuk
                    </div>');
				redirect('daftar/login');
			}
		}
	}


	 public function profil()
	{
		$data['judul'] = 'E-Laundry | Profil';

		$this->load->view('templates/header', $data);
		$this->load->view('daftar/profil');
		$this->load->view('templates/footer');
	}

	public function ubahpassword()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('current_password', 'Password Saat Ini', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'E-Laundry | Ubahpassword';	
			$this->load->view('templates/header', $data);
			$this->load->view('daftar/ubahpassword');
			$this->load->view('templates/footer');
		} else {
			 $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah
                    </div>');
               redirect('daftar/ubahpassword');
            } else {
                
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Berhasil Diubah! 
                    </div>');
                    redirect('daftar/ubahpassword');
                
            }
		}
 	
	}



	// ======== Keluar =======
	public function logout()
	{
		$this->session->sess_destroy();

		redirect('home/index');
	}
}
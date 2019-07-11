<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Page';
            $this->load->view('admin/templates/auth_header', $data);
            $this->load->view('admin/auth/login');
            $this->load->view('admin/templates/auth_footer');
        } else {
            //validasi loginnya
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id' => $user['id'],
                        'role_id' => $user['role_id'],
                        'nama' => $user['nama'],
                        'owner_id' => $user['owner_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {

                        redirect('admin/admin');
                
                    } elseif($user['role_id'] == 2) {
                        //return var_dump($user['role_id']);
                        redirect('admin/owner');
                
                    } elseif($user['role_id'] == 3) {
                        //return var_dump($user['role_id']);
                        redirect('admin/user');
                
                    } else {

                        redirect('admin/basic');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    password salah
                    </div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email tidak aktif
                </div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak ada! 
            </div>');
            redirect('admin/auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Congratulation! your account has been created. Please active your account 
                    </div>');
            redirect('auth');
        }
    }


    private function _sendEmail($token, $type)
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

        if($type == 'verify'){

        $this->email->subject('Account Verification');
        $this->email->message('click this link to verify you account : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . $token . '">Actived</a>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token){
                 if(time() - $user_token['date_created'] < (60*60*24)){

                    //ubah table user
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    //hapus table user_token
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    '. $email .' has been activated please login 
                    </div>');
                    redirect('auth');
                 } else {
                       $this->db->delete('user', ['email' => $email]); 
                       $this->db->delete('user_token', ['email' => $email]); 

                       $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Account activation failed! Token Expired
                    </div>');
                    redirect('auth');
                 }   
            
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed! Token Invalid
                </div>');
                redirect('auth');     
            }


        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Account activation failed! Wrong Email
                </div>');
        redirect('auth');           
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Kamu berhasil logout
                </div>');
        redirect('admin/auth');
    }

    public function blocked()
    {
        $data['title'] = 'Access Forbidden';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/auth/blocked');
        $this->load->view('admin/templates/footer');
    }
}

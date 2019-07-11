<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Menu_model");
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

         $this->load->model('Menu_model', 'menu');

        $data['data'] = $this->menu->getCountTransaksi();
        $data['owner'] = $this->menu->getCountOwner();


        //$data['kritik'] = $this->db->get('tb_pesan')->result_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/atas', $data);
        $this->load->view('admin/admin/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function editkritik($id)
    {
       $data['title'] = 'Menu Edit';
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->load->model('Menu_model', 'menu'); 
       $data['kritik'] = $this->menu->editkritik($id);

        $this->form_validation->set_rules('message', 'Pesan', 'required|trim');
     
        if ($this->form_validation->run() == false) {
           $this->load->view('admin/templates/header', $data);
           $this->load->view('admin/templates/sidebar', $data);
           $this->load->view('admin/templates/topbar', $data);
           $this->load->view('admin/admin/editkritik', $data);
           $this->load->view('admin/templates/footer'); 
       } else {

         $data = [
            'to' => $this->input->post('to'),
            'message' => $this->input->post('message')

        ];  

        $this->db->where('id', $this->input->post('id',$id));
        $this->db->update('tb_pesan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu Edit Berhasil Update 
            </div>');
        redirect('admin/admin/index');
       }
    }

    public function hapusproduk($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/owner');
    }


    public function user()
    {
         $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat Datang ' . $data['user']['name'];

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/admin/user', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit()
    {
         $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
         $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/admin/edit', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Profil kamu berhasil di updated
                    </div>');
                    redirect('admin/admin/user');
        }
    }


        public function changePassword()
    {

        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/admin/changepassword', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah
                    </div>');
                redirect('admin/admin/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru harus sama dengan password lama
                    </div>');
                    redirect('admin/admin/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password diubah! 
                    </div>');
                    redirect('admin/admin/changepassword');
                }
            }
        }
    }


    public function customers()
    {
 
        $data['title'] = 'Customers';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

         $this->load->model('Menu_model', 'menu');

        $data['jumlah'] = $this->menu->getCountCustomers();

        // $data['customers'] = $this->db->get('tbl_user')->result_array();
        $data['customers'] = $this->menu->allcustomers();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        
        if( $this->form_validation->run() == FALSE ){

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/customers', $data);
            $this->load->view('admin/templates/footer');

        } else {

            $data = [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'konfirmasi_password' => password_hash($this->input->post('konfirmasi_password'), PASSWORD_DEFAULT),
            'telepon' => $this->input->post('telepon', true),
            'alamat' => $this->input->post('alamat', true)
        ];  

        $this->db->insert('tb_konsumen', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Customers ditambahkan 
            </div>');
        redirect('admin/admin/customers');
        }
    }



     public function hapusowner($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/owner');
    }

    public function deleteowner($id_owner)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_owner', ['id_owner' => $id_owner]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/owner');
    }


    public function hapuscustomers($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/customers');
    }



     public function editcustomers($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->editcustomers($id);


         $data['title'] = 'Menu Edit';

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
     
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/editcustomers', $data);
            $this->load->view('admin/templates/footer');
        } else {

           $data = [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon', true),
            'alamat' => $this->input->post('alamat', true),
            'role_id' => $this->input->post('role_id', true),
            'owner_id' => $this->input->post('owner_id', true),
            'is_active' => $this->input->post('is_active', true),
            'image' => $this->input->post('image', true)

        ];  

        $this->db->where('id', $this->input->post('id',$id));
        $this->db->update('user', $data);
              $this->session->set_flashdata('message', '
                    Data Customers Diubah
                    ');
           redirect('admin/admin/customers');  

        } 
           
    }

    public function owner()
    {

        $data['title'] = 'Owner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

         $this->load->model('Menu_model', 'menu');


        $data['owner'] = $this->menu->pemilikOwner();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/atas', $data);
        $this->load->view('admin/admin/owner', $data);
        $this->load->view('admin/templates/footer');
    }


    public function produk()
    {
         $data['title'] = 'Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

         $this->load->model('Menu_model', 'menu');


        $data['produk'] = $this->menu->pemilikProduk();
        //$data['produkessii'] = $this->menu->pemilikProdukEssii();
        //$data['produkbasic'] = $this->menu->pemilikProdukBasic();
        
       $data['wipeGagal'] = $this->menu->transaksiWipeGagal();
        //$data['essiiGagal'] = $this->menu->transaksiEssiiGagal();
        //$data['basicGagal'] = $this->menu->transaksiBasicGagal();



        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/atas', $data);
        $this->load->view('admin/admin/produk', $data);
        $this->load->view('admin/templates/footer');
    }

     public function editproduk($id_produk)
    {
         $data['title'] = 'Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

         $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->editproduk($id_produk);

        $this->form_validation->set_rules('status_barang_id', 'status barang', 'required');
     
        if ($this->form_validation->run() == false) {

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/atas', $data);
        $this->load->view('admin/admin/editproduk', $data);
        $this->load->view('admin/templates/footer');

        } else {

           $data = [
            'nama' => $this->input->post('nama', true),
            'owner_id' => $this->input->post('owner_id', true),
            'harga' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar', true),
            'status_barang_id' => $this->input->post('status_barang_id', true),
            'user_id' => $this->input->post('user_id', true)

        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id));
        $this->db->update('produk', $data);
              $this->session->set_flashdata('message', '
                    Data berhasil diubah
                    ');
           redirect('admin/admin/produk');  

        }
    }

    public function hapuswipe($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/produk');
    }

     public function hapusessii($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/produk');
    }


    public function hapusbasic($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                     Berhasil dihapus 
                    </div>');
        redirect('admin/admin/produk');
    }

    public function tambahLaundry()
    {
        $data['title'] = 'Tambah Owner';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Menu_model', 'menu');

      $this->form_validation->set_rules('nama_owner', 'Nama Owner', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/tambahLaundry', $data);
            $this->load->view('admin/templates/footer');
        } else {

            $config['upload_path']           = './assets/img';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 7000;
            $config['max_width']            = 2024;
            $config['max_height']           = 2068;
               // $config['overwrite'] = true;  
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            
                if (!$this->upload->do_upload('gambar')){
                    $this->form_validation->set_rules('gambar_produk', 'Gambar', 'required');
                    $error = array('error' => $this->upload->display_errors());
                            return var_dump($error);
                    redirect('admin/admin/owner');


                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->addLaundry($filename);
                      $this->session->set_flashdata('message', '
                   Data berhasil ditambahkan
                    ');
                    redirect('admin/admin/owner');
                } 
         }         
    }

    public function tambahAkunLaundry()
    {
        $data['title'] = 'Tambah Akun Owner';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Menu_model', 'menu');

      $data['owner'] = $this->menu->pemilikOwner();
      $data['akun'] = $this->menu->daftarAkun();

         $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/tambahAkunLaundry', $data);
            $this->load->view('admin/templates/footer');
        } else {

            $data = [
                'nama' => $this->input->post('nama', true),
                'owner_id' => $this->input->post('owner_id', true),
                'username' => $this->input->post('username', true),
                'email' => $this->input->post('email', true),
                'image' => $this->input->post('image', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telepon' => $this->input->post('telepon', true),
                'alamat' => $this->input->post('alamat', true),
                'role_id' => $this->input->post('role_id', true),
                'is_active' => $this->input->post('is_active', true)
            ];  

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data ditambahkan 
                </div>');
            redirect('admin/admin/owner');
        }
                 
    }

    public function tambahTampilLaundry()
    {
        $data['title'] = 'Tambah Tampil Owner';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Menu_model', 'menu');


       $data['owner'] = $this->menu->pemilikOwner();
      $data['akun'] = $this->menu->daftarAkun();
      $data['tampil'] = $this->menu->daftarTampil();

         $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('user_id', 'User id', 'required');
        $this->form_validation->set_rules('owner_id', 'Owner id', 'required');
        $this->form_validation->set_rules('status_barang_id', 'Status Barang id', 'required|numeric');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/tambahTampilLaundry', $data);
            $this->load->view('admin/templates/footer');
        } else {

            $data = [
                'nama_produk' => $this->input->post('nama_produk', true),
                'user_id' => $this->input->post('user_id', true),
                'owner_id' => $this->input->post('owner_id', true),
                'status_barang_id' => $this->input->post('status_barang_id', true),
                'gambar' => $this->input->post('gambar', true),
                'harga' => $this->input->post('harga', true)
            ];  

            $this->db->insert('tbl_produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data ditambahkan 
                </div>');
            redirect('admin/admin/owner');
        }
                 
    }


    public function editLaundry($id_owner)
    {
        $data['title'] = 'Edit Owner';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Menu_model', 'menu');

      $data['edit'] = $this->menu->editLaundry($id_owner);

      $this->form_validation->set_rules('nama_owner', 'Nama Owner', 'required|trim');
        $this->form_validation->set_rules('isi', 'Isi', 'required|trim');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/atas', $data);
            $this->load->view('admin/admin/editLaundry', $data);
            $this->load->view('admin/templates/footer');
        } else {
           $config['upload_path']           = './assets/img/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 7000;
            $config['max_width']            = 2024;
            $config['max_height']           = 2068;
               // $config['overwrite'] = true;  
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($_FILES ['gambar_produk']['name']){
                if (!$this->upload->do_upload('gambar_produk')){
                    $this->form_validation->set_rules('gambar_produk', 'Gambar', 'required');
                    $error = array('error' => $this->upload->display_errors());
                            return var_dump($error);
              redirect('admin/admin/owner');

                    //  $this->Barang_model->ubahDataBarang();
                    //  $this->session->set_flashdata('flash', 'Diubah');
                    // redirect('admin/barang/index');

                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->updatelaundry($id_owner, $filename);
                   redirect('admin/admin/owner');
                }

            } else {

                $this->menu->ubahlaundry();
                $this->session->set_flashdata('message', '
                    Data berhasil diubah
                    ');
            redirect('admin/admin/owner');
            }
        }  
    }

}

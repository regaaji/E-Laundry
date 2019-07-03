<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Essii extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Essii';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         $data['barang'] = $this->db->get('tbl_produk')->result_array();

         $this->load->model('Menu_model', 'menu');

         $data['jumlah'] = $this->menu->getCountEssii();
        $data['jumlahgagal'] = $this->menu->getCountEssiiGagal();
        $data['essii'] = $this->menu->transaksiEssii();
        $data['essiiGagal'] = $this->menu->transaksiEssiiGagal();

        $this->form_validation->set_rules('nama_produk', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/essii/index', $data);
            $this->load->view('admin/templates/footer');
        } else {

            $config['upload_path']           = './assets/img/essii';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 7000;
            $config['max_width']            = 2024;
            $config['max_height']           = 2068;
               // $config['overwrite'] = true;  
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            
                if (!$this->upload->do_upload('gambar')){
                    $this->form_validation->set_rules('gambar', 'Gambar', 'required');
                    $error = array('error' => $this->upload->display_errors());
                            return var_dump($error);
                    redirect('admin/essii/index');


                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->addbarangwipe($filename);
                      $this->session->set_flashdata('message', '
                    Tunggu proses pengecekan barang
                    ');
                    redirect('admin/essii/index');
                }        
        }
    }


    public function hapus($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', 'Data Barang Dihapus');
        redirect('admin/essii/index');
    }


     public function hapustransaksi($id_transaksi)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_transaksi', ['id_transaksi' => $id_transaksi]);
         $this->session->set_flashdata('message', 'Data transaksi Dihapus');
        redirect('admin/essii/transaksi');
    }


    public function edit($id_produk)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->editbarangessii($id_produk);


         $data['title'] = 'Menu Edit';

          $this->form_validation->set_rules('nama_produk', 'Nama', 'required|trim');
          $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
         // $this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');
     
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/essii/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
           $config['upload_path']           = './assets/img/essii';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 7000;
            $config['max_width']            = 2024;
            $config['max_height']           = 2068;
               // $config['overwrite'] = true;  
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($_FILES ['gambar']['name']){
                if (!$this->upload->do_upload('gambar')){
                    $this->form_validation->set_rules('gambar', 'Gambar', 'required');
                    $error = array('error' => $this->upload->display_errors());
                            return var_dump($error);
                    redirect('admin/essii/index');

                    //  $this->Barang_model->ubahDataBarang();
                    //  $this->session->set_flashdata('flash', 'Diubah');
                    // redirect('admin/barang/index');

                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->updatebarangessii($id_produk, $filename);
                    redirect('admin/essii/index');
                }

            } else {

                $this->menu->ubahDataBarangessii();
                $this->session->set_flashdata('message', '
                    Data berhasil diubah
                    ');
            redirect('admin/essii/index');
            }
        }
    }

    public function detailModal(){
         $this->load->model('Menu_model', 'menu');
          echo json_encode($this->menu->getAdminById($_POST['id']));
    }

    public function transaksi()
    {
       $data['title'] = 'Essii';
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');

        $data['total'] = $this->menu->getCountTransaksiEssii();
       $data['transaksi'] = $this->menu->EssiiTransaksi();

       $this->form_validation->set_rules('status_id', 'Status', 'required|trim');
       
       if ($this->form_validation->run() == false) {
           $this->load->view('admin/templates/header', $data);
           $this->load->view('admin/templates/sidebar', $data);
           $this->load->view('admin/templates/topbar', $data);
           $this->load->view('admin/essii/transaksi', $data);
           $this->load->view('admin/templates/footer');

       } else {
            
            $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemput1" => $this->input->post('tanggal_jemput1', true),
                "waktu_jemput1" => $this->input->post('waktu_jemput1', true),
                "tanggal_kirim1" => $this->input->post('tanggal_kirim1', true),
                "waktu_kirim1" => $this->input->post('waktu_kirim1', true),
                "location1" => $this->input->post('location1', true),
                "alamat1" => $this->input->post('alamat1', true),
                "harga1" => $this->input->post('harga1', true),
                "status1" => $this->input->post('status1', true),
                "uang1" => $this->input->post('uang1', true)

            ];  

             $this->db->where('id', $this->input->post('id', true));
             $this->db->update('tb_transaksiWipe', $data);
              $this->session->set_flashdata('message', '
                    Data Transaksi Diubah
                    ');
           redirect('admin/wipe/transaksi');

       }

    }


    public function edittransaksi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->edittransaksiessii($id);

        $data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']; 

        $data['paket'] = ['Tunai', 'Non Tunai'];

         $data['title'] = 'Menu Edit';

           $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
           $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
           $this->form_validation->set_rules('tanggal_jemput', 'Tanggal Penjemputan', 'required|trim');
           $this->form_validation->set_rules('waktu_jemput', 'Waktu Penjemputan', 'required|trim');
           $this->form_validation->set_rules('tanggal_kirim', 'Tanggal Pengiriman', 'required|trim');
           $this->form_validation->set_rules('waktu_kirim', 'Waktu Pengiriman', 'required|trim');
           $this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
           $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
           $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
           $this->form_validation->set_rules('status', 'Status', 'required|trim');
           $this->form_validation->set_rules('bukti', 'Bukti', 'required|trim');
           $this->form_validation->set_rules('uang', 'Uang', 'required|trim');
     
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/essii/edittransaksi', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "location" => $this->input->post('location', true),
                "alamat" => $this->input->post('alamat', true),
                "harga" => $this->input->post('harga', true),
                "status" => $this->input->post('status', true),
                "uang" => $this->input->post('uang', true)

            ];  

             $this->db->where('id', $this->input->post('id', true));
             $this->db->update('tb_transaksiEssi', $data);
              $this->session->set_flashdata('message', '
                    Data Transaksi Diubah
                    ');
           redirect('admin/essii/transaksi');  

        } 
           
    }

    public function aksi($id_transaksi)
    {
           $data['title'] = 'Wipe';
           $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           $this->load->model('Menu_model', 'menu');
           $data['aksi'] = $this->menu->get_all_transaksiWipe($id_transaksi);

        $this->form_validation->set_rules('status_id', 'Status', 'required|trim');
       
       if ($this->form_validation->run() == false) {
           $this->load->view('admin/templates/header', $data);
           $this->load->view('admin/templates/sidebar', $data);
           $this->load->view('admin/templates/topbar', $data);
           $this->load->view('admin/essii/aksi', $data);
           $this->load->view('admin/templates/footer');

          } else {
            $data = [ 
                "status_id" => $this->input->post('status_id', true),
                "user_id" => $this->input->post('user_id', true),
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "location" => $this->input->post('location', true),
                "lng" => $this->input->post('lng', true),
                "lat" => $this->input->post('lat', true),
                "harga" => $this->input->post('harga', true),
                "bukti" => $this->input->post('bukti', true),
                "tipe" => $this->input->post('tipe', true)

            ];  

             $this->db->where('id_transaksi', $this->input->post('id_transaksi', true));
             $this->db->update('tbl_transaksi', $data);
              $this->session->set_flashdata('message', '
                    Data Transaksi Diubah
                    ');
           redirect('admin/essii/transaksi');

         }
    }
}

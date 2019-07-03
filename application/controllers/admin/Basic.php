<?php 

/**
 * 
 */
class Basic extends CI_Controller
{
	
	public function index()
    {

        $data['title'] = 'Basic Laundry';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
         //$data['barang'] = $this->db->get('tbl_produk')->result_array();

         $this->load->model('Menu_model', 'menu');

         $data['jumlah'] = $this->menu->getCountBasic();
        $data['jumlahgagal'] = $this->menu->getCountBasicGagal();
        $data['basic'] = $this->menu->produkBasic();
        $data['basicGagal'] = $this->menu->transaksiBasicGagal();

        $this->form_validation->set_rules('nama_produk', 'Nama', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/basic/index', $data);
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
                    $this->form_validation->set_rules('gambar', 'Gambar', 'required');
                    $error = array('error' => $this->upload->display_errors());
                            return var_dump($error);
                    redirect('admin/basic/index');


                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->addbarangwipe($filename);
                      $this->session->set_flashdata('message', '
                    Tunggu proses pengecekan barang
                    ');
                    redirect('admin/basic/index');
                }        
        }
    }

	


	 public function hapus($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', 'Data Barang Dihapus');
        redirect('admin/basic/index');
    }


	 public function edit($id_produk)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->editbarangbasic($id_produk);


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
                    redirect('admin/basic/index');

                    //  $this->Barang_model->ubahDataBarang();
                    //  $this->session->set_flashdata('flash', 'Diubah');
                    // redirect('admin/barang/index');

                } else {
                    $data = $this->upload->data();

                    $filename = $data['file_name'];
                    $this->menu->updatebarangbasic($id_produk, $filename);
                    redirect('admin/basic/index');
                }

            } else {

                $this->menu->ubahDataBarangBasic();
                $this->session->set_flashdata('message', '
                    Data berhasil diubah
                    ');
            redirect('admin/basic/index');
            }
        }
    }



    public function basiclModal(){
         $this->load->model('Menu_model', 'menu');
        echo json_encode($this->menu->getByBasicId($_POST['id']));
    }


     public function transaksi()
    {
       $data['title'] = 'Basic Laundry';
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']; 

        $this->load->model('Menu_model', 'menu');

        $data['total'] = $this->menu->getCountTransaksiBasic();
       //$data['transaksi'] = $this->db->get('tb_transaksiBasic')->result_array();
       $data['transaksi'] = $this->menu->BasicTransaksi();

       $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
       $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
       $this->form_validation->set_rules('tanggal_jemputb', 'Tanggal Penjemputan', 'required|trim');
       $this->form_validation->set_rules('waktu_jemputb', 'Waktu Penjemputan', 'required|trim');
       $this->form_validation->set_rules('tanggal_kirimb', 'Tanggal Pengiriman', 'required|trim');
       $this->form_validation->set_rules('waktu_kirimb', 'Waktu Pengiriman', 'required|trim');
       $this->form_validation->set_rules('locationb', 'Lokasi', 'required|trim');
       $this->form_validation->set_rules('alamatb', 'Alamat', 'required|trim');
       $this->form_validation->set_rules('hargab', 'Harga', 'required|trim');
       $this->form_validation->set_rules('statusb', 'Status', 'required|trim');
       $this->form_validation->set_rules('buktib', 'Bukti', 'required|trim');
       $this->form_validation->set_rules('uangb', 'Uang', 'required|trim');
       
       if ($this->form_validation->run() == false) {
           $this->load->view('admin/templates/header', $data);
           $this->load->view('admin/templates/sidebar', $data);
           $this->load->view('admin/templates/topbar', $data);
           $this->load->view('admin/basic/transaksi', $data);
           $this->load->view('admin/templates/footer');

       } else {
            
              $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemputb" => $this->input->post('tanggal_jemputb', true),
                "waktu_jemputb" => $this->input->post('waktu_jemputb', true),
                "tanggal_kirimb" => $this->input->post('tanggal_kirimb', true),
                "waktu_kirimb" => $this->input->post('waktu_kirimb', true),
                "locationb" => $this->input->post('locationb', true),
                "alamatb" => $this->input->post('alamatb', true),
                "hargab" => $this->input->post('hargab', true),
                "statusb" => $this->input->post('statusb', true),
                "uangb" => $this->input->post('uangb', true)

            ];  
            $this->session->set_userdata($data);
            $this->db->insert('tb_transaksiBasic', $data);
            $this->session->set_flashdata('message', '
                    Data Transaksi Ditambahkan
                    ');
           redirect('admin/basic/transaksi');  

       }

    }



       public function hapustransaksi($id_transaksi)
    {
        //$this->db->where('id', $id);
        $this->db->delete('tbl_transaksi', ['id_transaksi' => $id_transaksi]);
         $this->session->set_flashdata('message', 'Data transaksi Dihapus');
        redirect('admin/basic/transaksi');
    }


    public function edittransaksi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['edit'] = $this->menu->edittransaksibasic($id);

        $data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']; 

        $data['paket'] = ['Tunai', 'Non Tunai'];

         $data['title'] = 'Menu Edit';

           $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
           $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
           $this->form_validation->set_rules('tanggal_jemputb', 'Tanggal Penjemputan', 'required|trim');
           $this->form_validation->set_rules('waktu_jemputb', 'Waktu Penjemputan', 'required|trim');
           $this->form_validation->set_rules('tanggal_kirimb', 'Tanggal Pengiriman', 'required|trim');
           $this->form_validation->set_rules('waktu_kirimb', 'Waktu Pengiriman', 'required|trim');
           $this->form_validation->set_rules('locationb', 'Lokasi', 'required|trim');
           $this->form_validation->set_rules('alamatb', 'Alamat', 'required|trim');
           $this->form_validation->set_rules('hargab', 'Harga', 'required|trim');
           $this->form_validation->set_rules('statusb', 'Status', 'required|trim');
           $this->form_validation->set_rules('buktib', 'Bukti', 'required|trim');
           $this->form_validation->set_rules('uangb', 'Uang', 'required|trim');
     
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/basic/edittransaksi', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [ 
                "nama" => $this->input->post('nama', true),
                "telepon" => $this->input->post('telepon', true),
                "tanggal_jemputb" => $this->input->post('tanggal_jemputb', true),
                "waktu_jemputb" => $this->input->post('waktu_jemputb', true),
                "tanggal_kirimb" => $this->input->post('tanggal_kirimb', true),
                "waktu_kirimb" => $this->input->post('waktu_kirimb', true),
                "locationb" => $this->input->post('locationb', true),
                "alamatb" => $this->input->post('alamatb', true),
                "hargab" => $this->input->post('hargab', true),
                "statusb" => $this->input->post('statusb', true),
                "uangb" => $this->input->post('uangb', true)

            ];  

             $this->db->where('id', $this->input->post('id', true));
             $this->db->update('tb_transaksiBasic', $data);
              $this->session->set_flashdata('message', '
                    Data Transaksi Diubah
                    ');
           redirect('admin/basic/transaksi');  

        } 
           
    }


     public function aksi($id_transaksi)
    {
           $data['title'] = 'Basic';
           $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           $this->load->model('Menu_model', 'menu');
           $data['aksi'] = $this->menu->get_all_transaksiWipe($id_transaksi);

        $this->form_validation->set_rules('status_id', 'Status', 'required|trim');
       
       if ($this->form_validation->run() == false) {
           $this->load->view('admin/templates/header', $data);
           $this->load->view('admin/templates/sidebar', $data);
           $this->load->view('admin/templates/topbar', $data);
           $this->load->view('admin/basic/aksi', $data);
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
           redirect('admin/basic/transaksi');

         }
    }
}
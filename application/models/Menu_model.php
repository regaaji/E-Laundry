<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function produkBasic()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 3 AND status_barang_id = 1");
        return $query->result_array();
    }

    public function transaksiBasicGagal()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 3 AND status_barang_id = 2");
        return $query->result_array();
    }

    public function pemilikOwner()
    {
        $query = "SELECT tbl_owner.id, tbl_owner.nama, tbl_paket.nama_paket FROM `tbl_owner` INNER JOIN tbl_paket ON tbl_owner.paket_id = tbl_paket.id ";
        return $this->db->query($query)->result_array();
    }

     public function pemilikProduk()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 1 AND status_barang_id = 3");
        return $query->result_array();
    }

      public function pemilikProdukEssii()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 2 AND status_barang_id = 3");
        return $query->result_array();
    }


    public function pemilikProdukBasic()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 3 AND status_barang_id = 3");
        return $query->result_array();
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function editcustomers($id)
    {
        return $this->db->get_where('tbl_user', ['id' => $id])->row_array();
    }

    public function allcustomers()
    {
        $query = "SELECT *
                FROM tbl_user WHERE usertype = 3
        ";

        return $this->db->query($query)->result_array();
    }


     public function editproduk($id_produk)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $id_produk])->row_array();
    }



    public function editsubmenu($id)
	{
		return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
	}

     public function editkritik($id)
    {
        return $this->db->get_where('tb_pesan', ['id' => $id])->row_array();
    }

     public function edittransaksiessii($id)
    {
        return $this->db->get_where('tb_transaksiEssi', ['id' => $id])->row_array();
    }


      public function edittransaksiwipe($id)
    {
        return $this->db->get_where('tb_transaksiWipe', ['id' => $id])->row_array();
    }


     public function edittransaksibasic($id)
    {
        return $this->db->get_where('tb_transaksiBasic', ['id' => $id])->row_array();
    }



     public function editbarangessii($id_produk)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $id_produk])->row_array();
    }

      public function editbarangwipe($id_produk)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $id_produk])->row_array();
    }

    public function editbarangbasic($id_produk)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $id_produk])->row_array();
    }

    public function getCountKritik()
    {
        $query = $this->db->query("SELECT * FROM tb_pesan");
        $total = $query->num_rows();
        return $total;
    }

    public function getCountCustomers()
    {
        $query = $this->db->query("SELECT * FROM tbl_user WHERE usertype = 3");
        $total = $query->num_rows();
        return $total;
    }

      public function getCountWipe()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 1 AND status_barang_id = 1");
        $total = $query->num_rows();
        return $total;
    }

    public function getCountWipeGagal()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 1 AND status_barang_id = 2");
        $total = $query->num_rows();
        return $total;
    }

    function transaksiWipe(){
        // $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id ");
        $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 1 AND status_barang_id = 1");
        return $query->result_array();
    }


    public function transaksiWipeGagal()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 1 AND status_barang_id = 2");
        return $query->result_array();
    }

     public function transaksiEssiiGagal()
    {
         $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 2 AND status_barang_id = 2");
        return $query->result_array();
    }

    

    public function getCountBasic()
    {
       $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 3 AND status_barang_id = 1");
        $total = $query->num_rows();
        return $total;
    }


    public function getCountBasicGagal()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 3 AND status_barang_id = 2");
        $total = $query->num_rows();
        return $total;
    }



        public function getCountEssii()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 2 AND status_barang_id = 1");
        $total = $query->num_rows();
        return $total;
    }

    public function getCountEssiiGagal()
    {
        $query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 2 AND status_barang_id = 2");
        $total = $query->num_rows();
        return $total;
    }

    function transaksiEssii(){
        // $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id ");
        $query = $this->db->query("SELECT * FROM `tbl_produk` INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id INNER JOIN tbl_status_barang ON tbl_produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 2 AND status_barang_id = 1");
        return $query->result_array();
    }

      public function getCountTransaksi()
    {
        $query = $this->db->query("SELECT a.`id`, a.`nama`, SUM(b.`harga`) AS `harga` FROM tbl_owner a INNER JOIN tbl_transaksi b ON a.`id`=b.`owner_id` GROUP BY a.`id`, a.`nama` ");
       // if($query->num_rows() > 0){
       //      foreach($query->result() as $data){
       //          $hasil[] = $data;
       //      }
       //      return $hasil;
       //  }
        return $query->result_array();
    }

    public function getCountOwner()
    {
         $query = $this->db->query("SELECT a.`id`, a.`nama`, SUM(b.`harga`) AS `harga` FROM tbl_owner a INNER JOIN tbl_transaksi b ON a.`id`=b.`owner_id` GROUP BY a.`id`, a.`nama` ");
       if($query->num_rows() > 0){
            foreach($query->result() as $owner){
                $hasil[] = $owner;
            }
            return $hasil;
        }
         //return $query->result_array();
    }


    public function getCountTransaksiBasic()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE owner_id = 3");
        $total = $query->num_rows();
        return $total;
    }


    public function getCountTransaksiEssii()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE owner_id = 2");
        $total = $query->num_rows();
        return $total;
    }

    public function getCountTransaksiWipe()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi WHERE owner_id = 1");
        $total = $query->num_rows();
        return $total;
    }

    public function WipeTransaksi()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE owner_id = 1");
         return $query->result_array();
    }


    public function EssiiTransaksi()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE owner_id = 2 ");
         return $query->result_array();
    }

    public function BasicTransaksi()
    {
        $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE owner_id = 3 ");
         return $query->result_array();
    }

    function get_all_transaksiWipe($id_transaksi){
         return $this->db->get_where('tbl_transaksi', ['id_transaksi' => $id_transaksi])->row_array();
    }


    public function getById($id)
    {
        return $this->db->get_where('tb_transaksiWipe', ['id' => $id])->row_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('tb_transaksiEssi', ['id' => $id])->row_array();
    }


    public function getByBasicId($id)
    {
        return $this->db->get_where('tb_transaksiBasic', ['id' => $id])->row_array();
    }

    //tambah basic
    public function addbarangbasic($filename)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "paket" => $this->input->post('paket', true)  
            
        ];

        $this->db->insert('tb_produkBasic', $data);
    }


    //edit basic
       public function updatebarangbasic($id_produk, $filename)
    {
         $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "owner_id" => $this->input->post('owner_id', true),  
            "status_barang_id" => $this->input->post('status_barang_id', true)  
            
        ];

        $this->db->where('id_produk', $this->input->post('id_produk', true));
        $this->db->update('tbl_produk', $data);
    }


    public function ubahDataBarangBasic()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "owner_id" => $this->input->post('owner_id', true),
            "status_barang_id" => $this->input->post('status_barang_id', true)
        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id));
        $this->db->update('tbl_produk', $data);
    }


    // tambah wipe
      public function addbarangwipe($filename)
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "owner_id" => $this->input->post('owner_id', true),  
            "status_barang_id" => $this->input->post('status_barang_id', true)
            
        ];

        $this->db->insert('tbl_produk', $data);
    }

    
    //edit wipe
    public function updatebarangwipe($id_produk, $filename)
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "owner_id" => $this->input->post('owner_id', true),  
            "status_barang_id" => $this->input->post('status_barang_id', true)  
            
        ];

        $this->db->where('id_produk', $this->input->post('id_produk', true));
        $this->db->update('tbl_produk', $data);
    }


    public function ubahDataBarangwipe()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "owner_id" => $this->input->post('owner_id', true),
            "status_barang_id" => $this->input->post('status_barang_id', true)
        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id));
        $this->db->update('tbl_produk', $data);
    }


    //tambah essii
    public function addbarang($filename)
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "owner_id" => $this->input->post('owner_id', true),  
            "status_barang_id" => $this->input->post('status_barang_id', true)
            
        ];

        $this->db->insert('tbl_produk', $data);
    }


    //edit essii
     public function updatebarangessii($id_produk, $filename)
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $filename,
            "owner_id" => $this->input->post('owner_id', true),  
            "status_barang_id" => $this->input->post('status_barang_id', true)  
            
        ];

        $this->db->where('id_produk', $this->input->post('id_produk', true));
        $this->db->update('tbl_produk', $data);
    }


    public function ubahDataBarangessii()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga" => $this->input->post('harga', true),
            "owner_id" => $this->input->post('owner_id', true),
            "status_barang_id" => $this->input->post('status_barang_id', true)
        ];  

        $this->db->where('id_produk', $this->input->post('id_produk',$id));
        $this->db->update('tbl_produk', $data);
    }

}

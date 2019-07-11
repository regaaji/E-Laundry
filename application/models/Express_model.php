 <?php 

/**
 * 
 */
class Express_model extends CI_Model
{

	public function countAllProduk()
	{
		return $this->db->get('tbl_produk')->num_rows();
	}


	public function getProduk($limit, $start)
	{
		// $query = $this->db->query("SELECT * FROM tbl_produk INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id_owner", $limit, $start);
		// return $query->result_array();

		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_owner','tbl_produk.owner_id = tbl_owner.id_owner');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cetakpdfbasic($id)
	{
		return $this->db->get_where('tb_transaksiBasic', ['id' => $id])->row_array();
	}



	public function cetakpdf1($id)
	{
		return $this->db->get_where('tb_transaksiWipe', ['id' => $id])->row_array();
	}

	public function cetakpdf($id)
	{
		return $this->db->get_where('tb_transaksiEssi', ['id' => $id])->row_array();
	}

	public function hapuscekpesan3($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('tb_transaksiBasic', ['id' => $id]);
		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Terima kasih telah mengunjungi website kami 
                    </div>');
	}

	public function hapuscekpesan1($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('tb_transaksiWipe', ['id' => $id]);
		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Terima kasih telah mengunjungi website kami 
                    </div>');
	}

	public function hapuscekpesan($id)
	{
		//$this->db->where('id', $id);
		$this->db->delete('tb_transaksiEssi', ['id' => $id]);
		 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Terima kasih telah mengunjungi website kami 
                    </div>');
	}


	// public function ubahDataBukti()
	// {
	// 	$data = [
	// 		"nama" => $this->input->post('nama', true),
	// 		"telepon" => $this->input->post('telepon', true),
	// 		"tanggal_jemput" => $this->input->post('tanggal_jemput', true),
	// 		"waktu_jemput" => $this->input->post('waktu_jemput', true),
	// 		"tanggal_kirim" => $this->input->post('tanggal_kirim', true),
	// 		"waktu_kirim" => $this->input->post('waktu_kirim', true),
	// 		"location" => $this->input->post('location', true),
	// 		"alamat" => $this->input->post('alamat', true),
	// 		"harga" => $this->input->post('harga', true),
	// 		"status" => $this->input->post('status', true)
	// 	];  

	// 	$this->db->where('id', $this->input->post('id',$id));
	// 	$this->db->update('tb_transaksiEssi', $data);
	// }	

	public function updatebukti($id, $filename)
    {
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
        	"bukti" => $filename, 
        	"status" => $this->input->post('status', true)
            
        ];

        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('tb_transaksiEssi', $data);
    }

	public function editcekpesan()
	{
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
                "bukti" => $this->input->post('bukti', true)

            ];  

		$this->db->where('id', $this->input->post('id',$id));
		$this->db->update('tb_transaksiEssi', $data);
			
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Selamat anda telah lunas 
                    </div>');
	}


	public function editcekpesan3()
	{
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
                "buktib" => $this->input->post('buktib', true)

            ];  

		$this->db->where('id', $this->input->post('id',$id));
		$this->db->update('tb_transaksiBasic', $data);
			
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Selamat anda telah lunas 
                    </div>');
	}

	public function editcekpesan1()
	{
		$data = [
                "status_id" => $this->input->post('status_id', true),
                "user_id" => $this->input->post('user_id', true),
                "owner_id" => $this->input->post('owner_id', true),
                "tanggal_jemput" => $this->input->post('tanggal_jemput', true),
                "waktu_jemput" => $this->input->post('waktu_jemput', true),
                "tanggal_kirim" => $this->input->post('tanggal_kirim', true),
                "waktu_kirim" => $this->input->post('waktu_kirim', true),
                "location" => $this->input->post('location', true),
                "lat" => $this->input->post('lat', true),
                "lng" => $this->input->post('lng', true),
                "harga" => $this->input->post('harga', true),
                "tipe" => $this->input->post('tipe', true),
                "bukti" => $this->input->post('bukti', true)

            ];  

		$this->db->where('id_transaksi', $this->input->post('id_transaksi',$id));
		$this->db->update('tbl_transaksi', $data);
			
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Barang anda sedang di antar
                    </div>');
	}

	public function getAllBasic()
	{
		$query = $this->db->query("SELECT * FROM tbl_transaksi WHERE owner_id = 3");
		$total = $query->num_rows();
		return $total;
	}



	public function getByBasicId($id)
	{
		return $this->db->get_where('tb_transaksiBasic', ['id' => $id])->row_array();
	}

	public function getById($id_transaksi)
	{
		return $this->db->get_where('tbl_transaksi', ['id_transaksi' => $id_transaksi])->row_array();
	}

	public function getAdminById($id)
	{
		return $this->db->get_where('tb_transaksiEssi', ['id' => $id])->row_array();
	}
	
	function get_all_transaksiBasic(){
		$query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE status_id != 9 AND owner_id = 3");
		return $query->result_array();
	}

	function get_all_finish(){
		 $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE status_id = 9 AND owner_id = 3");
		 return $query->result_array();
	}

	function get_all_essiitransaksi(){
		 $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE status_id != 9 AND owner_id = 2");
		 return $query->result_array();
	}

	function get_all_selesai(){
		 $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN tbl_user ON tbl_transaksi.user_id = tbl_user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id WHERE status_id = 9 AND owner_id = 2");
		 return $query->result_array();
	}

	function get_all_transaksiWipe(){
		 $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN user ON tbl_transaksi.user_id = user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id_status WHERE status_id != 9");
		 return $query->result_array();
	}

	function get_all_tuntas(){
		 $query = $this->db->query("SELECT * FROM tbl_transaksi INNER JOIN user ON tbl_transaksi.user_id = user.id INNER JOIN tbl_status ON tbl_transaksi.status_id = tbl_status.id_status WHERE status_id = 9");
		 return $query->result_array();
	}

	function get_all_transaksiEssi($id_transaksi){
		 return $this->db->get_where('tbl_transaksi', ['id_transaksi' => $id_transaksi])->row_array();
	}

	function get_nama($nama){
		 return $this->db->get_where('tb_transaksiEssi', ['nama' => $nama]);
	}

	function get_all_nama(){
		 return $query = $this->db->get('tb_transaksiEssi')->result_array();
	}

	function getJumlah($id_owner)
	{
		$this->db->select('owner_id');
		$this->db->from('tbl_transaksi');
		$this->db->where(['owner_id'=> $id_owner]);
		return $this->db->get()->num_rows();
		// $query = $this->db->query("SELECT COUNT(owner_id) FROM `tbl_transaksi` WHERE owner_id = $id_owner");
		// return $query->num_rows();
	}


	
	function get_all_produkbasic(){
		$query = $this->db->query("SELECT * FROM `produk` INNER JOIN tbl_owner ON produk.owner_id = tbl_owner.id_owner INNER JOIN tbl_status_barang ON produk.status_barang_id = tbl_status_barang.id  WHERE owner_id = 3 AND status_barang_id = 1");
        return $query->result_array();
	}

	function get_all_produk1(){
		$hasil = $this->db->query("SELECT * FROM tbl_produk WHERE paket = 'wipe'");
        return $hasil->result();
	}

	function get_all_produk2(){
		$hasil = $this->db->query("SELECT * FROM tbl_produk WHERE owner_id = 2");
        return $hasil->result();
	}


	function get_detail_produk($id_owner){
		$data = [
			'produk.owner_id'  => $id_owner,
			'produk.status_barang_id' => 1
		];
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where($data);
		return $this->db->get()->result_array();
		// $query = $this->db->query("SELECT * FROM tbl_produk INNER JOIN tbl_owner ON tbl_produk.owner_id = tbl_owner.id_owner WHERE id_owner= '$id_owner'");
		// return $query->row_array();
	}

	public function getDetailById($id_owner)
	{
		$data = [
			'produk.owner_id'  => $id_owner
		];
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where($data);
		$this->db->join('tbl_owner','produk.owner_id = tbl_owner.id_owner');

		return $this->db->get()->row_array();
	}

	function get_all_produkessii(){
		$query = $this->db->query("SELECT * FROM `tbl_produk` WHERE owner_id = 2 AND status_barang_id = 1 ");
        return $query->result_array();
	}
	
	public function tambahDataExpress()
	{
		$data = [
			"tanggal_kembali" => $this->input->post('tanggal_kembali', true),
			"waktu_kembali" => $this->input->post('waktu_kembali', true),
			"tanggal_antar" => $this->input->post('tanggal_antar', true),
			"waktu_antar" => $this->input->post('waktu_antar', true),
			"harga" => $this->input->post('harga', true),
			"lat" => $this->input->post('lat', true),
			"lng" => $this->input->post('lng', true),
			"location" => $this->input->post('location', true),
			"alamat" => $this->input->post('alamat', true),
			"paket" => $this->input->post('paket', true),

		];

		$this->session->set_userdata($data);
		$this->db->insert('tb_transaksi', $data);
	}

	

	

	public function tambahDataPremium()
	{
		$data = [
			"harga" => $this->input->post('harga', true),
			"tanggal_jemput" => $this->input->post('tanggal_jemput', true),
			"waktu_jemput" => $this->input->post('waktu_kembali', true),
			"tanggal_kirim" => $this->input->post('tanggal_kirim', true),
			"waktu_kirim" => $this->input->post('waktu_kirim', true),
			"lat" => $this->input->post('lat', true),
			"lng" => $this->input->post('lng', true),
			"location" => $this->input->post('location', true),
			"alamat" => $this->input->post('alamat', true)

		];	
		$this->session->set_userdata($data);
		var_dump($this->session->userdata($data));
		//$this->db->insert('tb_transaksi2', $data);
	}

}
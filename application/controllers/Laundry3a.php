<?php

/**
 * 
 */
class Laundry3a extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('cart_model');
		$this->load->model('Express_model');
	}

	function index()
	{
		$data['produk1'] = $this->cart_model->get_all_produk();

		$data['waktuK'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];
		$data['waktuA'] = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'];


		$this->form_validation->set_rules('paket1', 'Paket', 'required');
		$this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('tanggal_kembali1', 'Tanggal Pengembalian', 'required');
		$this->form_validation->set_rules('waktu_kembali1', 'Waktu Pengembalian', 'required');
		$this->form_validation->set_rules('tanggal_antar1', 'Tanggal Pengantaran', 'required');
		$this->form_validation->set_rules('waktu_antar1', 'Waktu Pengantaran', 'required');
		$this->form_validation->set_rules('harga1', 'Harga', 'required');
		$this->form_validation->set_rules('lat1', 'Tempat Lat', 'required');
		$this->form_validation->set_rules('lng1', 'Tempat Lng', 'required');
		$this->form_validation->set_rules('location1', 'Lokasi', 'required');
		$this->form_validation->set_rules('alamat1', 'Alamat', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['judul'] = 'Njaja';
			$this->load->view('templates/header', $data);
			$this->load->view('layanan/laundry3', $data);
			$this->load->view('templates/footer', $data);
		} else {
			//echo "<script>alert('ok');</script>";
			$this->Express_model->tambahDataPremium();
			redirect('ExpressBayar1/index');
		}
	}

	function add_to_cart()
	{ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'),
			'name' => $this->input->post('produk_nama'),
			'price' => $this->input->post('produk_harga'),
			'qty' => $this->input->post('quantity'),
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart()
	{ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= '
				<tr>
					<td>' . $items['name'] . '</td>
					<td>' . number_format($items['price']) . '</td>
					<td>' . $items['qty'] . '</td>
					<td>' . number_format($items['subtotal']) . '</td>
					<td><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}

		//$this->cart_model->insertCart($subtotal);
		return $output;
	}




	function load_cart()
	{ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart()
	{ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}
}







<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row mt-5">
		<div class="col-lg-12">
			<?= $this->session->flashdata('message'); ?>
			<div class="card">
				<div class="card-body">
					<h5 class="pb-3 font-weight-bold">Status Data Produk</h5>
					

					<form action="" method="post">
						<input type="hidden" value="<?= $edit['id_produk'] ?>" name="id_produk">
						<input type="hidden" value="<?= $edit['nama_produk']; ?>" name="nama_produk">
						<input type="hidden" value="<?= $edit['harga']; ?>" name="harga">
						<input type="hidden" value="<?= $edit['gambar']; ?>" name="gambar">
						<input type="hidden" value="<?= $edit['owner_id']; ?>" name="owner_id">
						<select name="status_barang_id" class="form-control">
							<option value="1">Di izinkan</option>
							<option value="2">Di tolak</option>
						</select>
						<button type="submit" class="btn btn-primary mt-3">Simpan</button>
					</form>

				</div>
			</div>
		</div>

	</div>
	


	


  




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



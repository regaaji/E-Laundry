

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="card">
					<div class="card-body">
						
						<form method="post" action="" enctype="multipart/form-data">
							<input type="hidden" name="id_produk" value="<?= $edit['id_produk']; ?>">
							<input type="hidden" name="owner_id" value="<?= $edit['owner_id']; ?>">
							<input type="hidden" name="status_barang_id" value="<?= $edit['status_barang_id']; ?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama_produk" value="<?= $edit['nama_produk']; ?>">
								<?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="text" class="form-control" id="harga" name="harga" value="<?= $edit['harga'] ?>">
								<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="gambar">Gambar</label>
								<input type="file" class="form-control" id="gambar" name="gambar">
								<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<button type="submit" class="btn btn-primary">ubah</button>
						</form>
					</div>
				</div>
				</div>
			</div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

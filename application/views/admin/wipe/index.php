

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">

							<?php if($this->session->flashdata('message')) : ?>
								<div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
							<?php endif; ?>
							
							<h5 class="font-weight-bold">Data Barang Wipe</h5>
							<button class="btn btn-primary mt-3 mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle pr-1"></i>Tambah Barang</button>
							<table class="table table-hover table-responsive" id="example2">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">Harga</th>
										<th scope="col">Gambar</th>
										<th scope="col">Status</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach( $wipe as $ba ) : ?>
										<tr>
											<th scope="row"><?= $i; ?></th>
											<td><?= $ba['nama_produk']; ?></td>
											<td><?= $ba['harga']; ?></td>
											<td><img src="<?= base_url('assets/img/wipe/'); ?><?= $ba['gambar']; ?>" class="rounded-circle" width="50" height="50" alt=""></td>
											<td>
												<span class="badge badge-sm badge-success"><?= $ba['nama_status']; ?></span>
											</td>
											
											<td>
												<a href="<?= base_url(); ?>admin/wipe/edit/<?= $ba['id']; ?>" class="badge badge-primary">ubah</a>
												<a href="<?= base_url(); ?>admin/wipe/hapus/<?= $ba['id']; ?>" class="badge badge-danger">hapus</a>
											</td>
										</tr>
										<?php $i++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							
						<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Barang</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?></div>
									</div>
									<div class="col-auto">
										<i class="fas fa-cubes fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>	


						</div>
					</div>
				</div>


				<div class="col-lg-8 mt-5 mb-5">
					<div class="card">
						<div class="card-body">
							<h5 class="font-weight-bold">Data Barang Wipe</h5>
							<table class="table table-hover table-responsive" id="example1">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">Harga</th>
										<th scope="col">Gambar</th>
										<th scope="col">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach( $wipeGagal as $ba ) : ?>
										<tr>
											<th scope="row"><?= $i; ?></th>
											<td><?= $ba['nama_produk']; ?></td>
											<td><?= $ba['harga']; ?></td>
											<td><img src="<?= base_url('assets/img/wipe/'); ?><?= $ba['gambar']; ?>" class="rounded-circle" width="50" height="50" alt=""></td>
											<td>
												<span class="badge badge-sm badge-danger"><?= $ba['nama_status']; ?></span>
											</td>
										</tr>
										<?php $i++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

					<div class="col-lg-4 mt-5">
					<div class="card">
						<div class="card-body">
							
						<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Barang</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahgagal; ?></div>
									</div>
									<div class="col-auto">
										<i class="fas fa-cubes fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>	


						</div>
					</div>
				</div>


			</div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="<?= base_url(); ?>admin/wipe/" enctype="multipart/form-data">
      		<div class="form-group">
      			<label for="nama">Nama</label>
      			<input type="text" class="form-control" id="nama_produk" name="nama_produk">
      			<?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">
      			<label for="harga">Harga</label>
      			<input type="text" class="form-control" id="harga" name="harga">
      			<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">
      			<label for="Gambar">Gambar</label>
      			<input type="file" class="form-control" id="gambar" name="gambar">
      			<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
      		</div>
      		<div class="form-group">
      			<input type="hidden" name="owner_id" value="1" id="owner_id">
      			<input type="hidden" name="status_barang_id" value="3" id="status_barang_id">
      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      	</form>
    </div>
  </div>
</div>

      







<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row mt-5">
		<div class="col-lg-8">
			<?php if($this->session->flashdata('message')) : ?>
				<div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
			<?php endif; ?>
			
			<div class="card">
				<div class="card-body">
					<h5 class="pb-3 font-weight-bold">Data Produk Owner</h5>
					<table class="table table-hover table-responsive mt-2" id="example2">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Owner</th>
								<th scope="col">Nama</th>
								<th scope="col">Harga</th>
								<th scope="col">Gambar</th>
								<th scope="col">Status</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>

							<?php $i = 1; ?>
							<?php foreach( $produk as $kr ) : ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<th><?= $kr['nama_owner']; ?></th>
									<th><?= $kr['nama']; ?></th>
									<td><?= $kr['harga']; ?></td>
									<td><img src="<?= base_url(); ?>assets/img/<?= $kr['gambar']; ?>" width="50" height="50" class="rounded-circle" alt=""></td>
									<td><span class="badge badge-sm badge-primary"><?= $kr['nama_status']; ?></span></td>
									<td>
										<a href="<?= base_url(); ?>admin/admin/editproduk/<?= $kr['id_produk']; ?>" class="btn btn-sm btn-warning">Ubah Status</a>
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
					<h5 class="pb-3 font-weight-bold">Data Produk Gagal</h5>
					<table class="table table-hover table-responsive mt-2">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Status</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach( $wipeGagal as $kr ) : ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<th><?= $kr['nama']; ?></th>
									<td><span class="badge badge-sm badge-danger"><?= $kr['nama_status']; ?></span></td>
									<td>
										<a href="<?= base_url(); ?>admin/admin/hapuswipe/<?= $kr['id_produk']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		



	</div>
	


	


  




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-10">
					<?php if($this->session->flashdata('message')) : ?>
						<div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
					<?php endif; ?>
					<div class="card">
						<div class="card-body">
							<h5 class="font-weight-bold pb-2">Data Transaksi <?= $this->session->userdata('nama') ?></h5>
							<!-- <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle pr-1"></i>Tambah Barang</button> -->
							<table class="table table-hover table-responsive" id="example2">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Tanggal Penjemputan</th>
										<th scope="col">Tanggal Pengiriman</th>
										<th scope="col">Status</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
              
									<?php $i = 1; ?>
									<?php foreach( $transaksi as $ba ) : ?>
									<tr>
										<th scope="row"><?= $i; ?></th>	
										<td><?= $ba['tanggal_jemput']; ?></td>
										<td><?= $ba['tanggal_kirim']; ?></td>
                    <td><span class="badge badge-primary"><?= $ba['nama_status']; ?></span></td>
                    <td>
                      <a href="<?= base_url() ?>admin/owner/aksi/<?= $ba['id_transaksi']; ?>" class="btn btn-warning btn-sm"> Lihat Status</a>
                      <a href="<?= base_url() ?>admin/owner/hapustransaksi/<?= $ba['id_transaksi']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                     <!--  <a href="<?= base_url() ?>admin/owner/hapustransaksi/<?= $ba['id_transaksi']; ?>" class="btn btn-info btn-sm"><i class="fas fa-info"></i></a> -->
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

  
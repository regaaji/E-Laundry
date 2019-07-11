





<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<?php if($this->session->flashdata('message')) : ?>
		<div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
	<?php endif; ?>

		<div class="col-lg-8">
			<div class="card shadow mb-4">
			<div class="card-header bg-primary text-white">
				Ingin tambah Lagi?
			</div>
			<div class="card-body">
				<a href="<?= base_url(); ?>admin/admin/tambahLaundry" class="mr-3"><button class="btn btn-danger btn-sm">1. Tambah Owner</button></a>
				<a href="<?= base_url(); ?>admin/admin/tambahAkunLaundry" class="mr-3"><button class="btn btn-warning btn-sm">2. Tambah Akun Owner</button></a>
				<a href="<?= base_url(); ?>admin/admin/tambahTampilLaundry"><button class="btn btn-success btn-sm">3. Tambah Tampilan Owner</button></a>
			</div>
		</div>
		</div>
	<div class="row">

			<?php $i = 1; ?>
			<?php foreach($owner as $ow) :?>
		<div class="col-md-6">
				<div class="card shadow mt-4 mb-4" style="width: 25rem;">
					<div class="card-header bg-primary">
						<span class="text-white font-weight-bold"><?= $i; ?></span>
						<a href="<?= base_url(); ?>admin/admin/deleteowner/<?= $ow['id_owner'] ?>"  onclick="return confirm('Anda yakin ingin hapus?')" class="float-right"><i class="fas fa-trash" style="color: white;"></i></a>
						<a href="<?= base_url(); ?>admin/admin/editLaundry/<?= $ow['id_owner'] ?>" class="float-right mr-2"><i class="fas fa-edit" style="color: white;"></i></a>
					</div>
					<div class="card-body">
						<p class="font-weight-bold text-center" style="font-size: 40px;"><?= $ow['nama_owner']; ?></p>
						<h4 class="text-center">Maks. Order : <span class="badge badge-warning"><?= $ow['isi']; ?></span></h4>
					</div>
				</div>
			
		</div>
		<?php $i++; ?>
		<?php endforeach; ?>

	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



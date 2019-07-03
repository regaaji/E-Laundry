





<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg-8">
			<form method="post" action="<?= base_url('admin/admin/edit'); ?>">
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Full name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
						<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

					</div>
				</div>
				<!-- <div class="form-group row">
					<div class="col-sm-2">
						Picture
					</div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url(); ?>assets/img/profile/<?= $user['image']; ?>" class="img-thumbnail" alt="">
							</div>
							<div class="col-sm-9">
								<input type="file" name="image" value="<?= $user['image']; ?>">
							</div>
						</div>
					</div>
				</div> -->
				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Ubah</button>
					</div>
				</div>
			</form>
		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



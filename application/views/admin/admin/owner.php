





<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
			<?php $i = 1; ?>
			<?php foreach($owner as $ow) :?>
		<div class="col-md-6">
				<div class="card shadow mt-4 mb-4" style="width: 25rem;">
					<div class="card-header bg-primary">
						<span class="text-white font-weight-bold"><?= $i; ?></span>
					</div>
					<div class="card-body">
						<p class="font-weight-bold text-center" style="font-size: 40px;"><?= $ow['nama']; ?></p>
						<h4 class="text-center">Khusus : <span class="badge badge-warning"><?= $ow['nama_paket']; ?></span></h4>
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



    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-8">
					<form method="post" action="">
						<input type="hidden" name="id" value="<?= $kritik['id']; ?>">
						<input type="hidden" name="to" value="<?= $kritik['to']; ?>">	
						<div class="form-group row">
							<label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
							<div class="col-sm-10">
								<textarea name="message" id="" cols="10" rows="5" class="form-control"><?= $kritik['message']; ?></textarea>
							</div>
						</div>
						
						<div class="row justify-content-end">
							<button class="btn btn-primary" type="submit">Ubah</button>
						</div>
							
						
					</form>
				</div>
			</div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

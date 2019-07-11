    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-8">
					<form method="post" action="">
						<input type="hidden" name="id" value="<?= $edit['id']; ?>">
						<input type="hidden" name="password" value="<?= $edit['password']; ?>">
						<input type="hidden" name="owner_id" value="<?= $edit['owner_id']; ?>">
						<input type="hidden" name="role_id" value="<?= $edit['role_id']; ?>">
						<input type="hidden" name="image" value="<?= $edit['image']; ?>">
						<input type="hidden" name="is_active" value="<?= $edit['is_active']; ?>">

						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" name="nama" value="<?= $edit['nama']; ?>">
						</div>

						<div class="from-group">
							<label for="username">Username</label>	
							<input type="text" class="form-control" name="username" value="<?= $edit['username']; ?>">	
						</div>

						<div class="from-group mt-3">
							<label for="email">Email</label>	
							<input type="text" class="form-control" name="email" value="<?= $edit['email']; ?>">	
						</div>

						<div class="form-group mt-3">
							<label for="telepon">Telepon</label>
							<input type="text" class="form-control" name="telepon" value="<?= $edit['telepon']; ?>">
						</div>	

						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" id="" cols="10" rows="3" class="form-control"><?= $edit['alamat']; ?></textarea>
						</div>		
						
						
						<div class="row ml-2 mt-3">
							<button class="btn btn-primary" type="submit">Ubah</button>
						</div>
							
						
					</form>
				</div>
			</div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

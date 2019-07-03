

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

			<div class="row">
				<div class="col-lg-6">
					<form method="post" action="">
						<input type="hidden" name="id" value="<?= $submenu['id']; ?>">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
							<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">Perhatikan!</h4>
							<p>1 = Admin, 2 = Basic Laundry, 3 = Menu, 4 = Essii, 5 = Wipe</p>
							<hr>
						</div>
						<div class="form-group">
							<label for="menu">Menu</label>
							<select class="form-control" id="exampleFormControlSelect1" name="menu_id">
								<?php foreach( $menu_id as $me ) : ?>
									<?php if( $me == $submenu['menu_id'] ) : ?>
										<option value="<?= $me; ?>" selected><?= $me; ?></option>                    
										<?php else : ?>

											<option value="<?= $me; ?>"><?= $me; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="url">Url</label>
							<input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
							<?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="icon">Icon</label>
							<input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
							<?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="is_active">Active</label>
							<input type="text" class="form-control" id="is_active" name="is_active" value="<?= $submenu['is_active']; ?>" readonly>
							<?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<button type="submit" class="btn btn-primary">Ubah</button>
					</form>
				</div>
			</div>		
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      

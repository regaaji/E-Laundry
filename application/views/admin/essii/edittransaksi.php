<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
			
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							
							<form method="post">
								<input type="hidden" name="id" value="<?= $edit['id']; ?>">
								<div class="form-group row">
									<label for="nama" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>">
									</div>
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="telepon" name="telepon" value="<?= $edit['telepon']; ?>">
									</div>
									<?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="tanggal_jemput" class="col-sm-3 col-form-label">Tanggal Penjemputan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_jemput" name="tanggal_jemput" value="<?= $edit['tanggal_jemput'] ?>">
									</div>
									<?= form_error('tanggal_jemput', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_jemput" class="col-sm-3 col-form-label">Waktu Penjemputan</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemput" name="waktu_jemput">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_jemput'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_jemput', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="tanggal_kirim" class="col-sm-3 col-form-label">Tanggal Kirim</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_kirim" name="tanggal_kirim" value="<?= $edit['tanggal_kirim']; ?>">
									</div>
									<?= form_error('tanggal_kirim', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_kirim" class="col-sm-3 col-form-label">Waktu Kirim</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemput" name="waktu_kirim">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_kirim'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_kirim', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="location" class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['location']; ?>" id="location" name="location">
									</div>
									<?= form_error('location', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $edit['alamat']; ?>">
									</div>
									<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="harga" class="col-sm-3 col-form-label">Harga</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['harga']; ?>" id="harga" name="harga">
									</div>
									<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="uang" class="col-sm-3 col-form-label">Tipe Pembayaran</label>
									<div class="col-sm-9">
										<select name="uang" id="uang" class="form-control">
											<?php foreach( $paket as $pa ) : ?>
												<?php if( $pa == $edit['uang'] ) : ?>
												<option value="<?= $pa; ?>" selected><?= $pa; ?></option>
												<?php else : ?>
													<option value="<?= $pa; ?>"><?= $pa; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>	
										</select>
									</div>
									<?= form_error('uang', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<input type="hidden" name="bukti" value="E-Laundry.pdf">
								<input type="hidden" name="status" value="Belum Lunas">		
								<button class="btn btn-primary" type="submit">ubah</button>
							</form>

						</div>
					</div>
				</div>
			</div>

           </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
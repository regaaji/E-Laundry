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
									<label for="tanggal_jemput1" class="col-sm-3 col-form-label">Tanggal Penjemputan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_jemput1" name="tanggal_jemput1" value="<?= $edit['tanggal_jemput1'] ?>">
									</div>
									<?= form_error('tanggal_jemput1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_jemput1" class="col-sm-3 col-form-label">Waktu Penjemputan</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemput1" name="waktu_jemput1">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_jemput1'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_jemput1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="tanggal_kirim1" class="col-sm-3 col-form-label">Tanggal Kirim</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_kirim1" name="tanggal_kirim1" value="<?= $edit['tanggal_kirim1']; ?>">
									</div>
									<?= form_error('tanggal_kirim1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_kirim1" class="col-sm-3 col-form-label">Waktu Kirim</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemput" name="waktu_kirim1">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_kirim1'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_kirim1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="location1" class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['location1']; ?>" id="location1" name="location1">
									</div>
									<?= form_error('location1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="alamat1" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="alamat1" name="alamat1" value="<?= $edit['alamat1']; ?>">
									</div>
									<?= form_error('alamat1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="harga1" class="col-sm-3 col-form-label">Harga</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['harga1']; ?>" id="harga1" name="harga1">
									</div>
									<?= form_error('harga1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="uang1" class="col-sm-3 col-form-label">Tipe Pembayaran</label>
									<div class="col-sm-9">
										<select name="uang1" id="uang1" class="form-control">
											<?php foreach( $paket as $pa ) : ?>
												<?php if( $pa == $edit['uang1'] ) : ?>
												<option value="<?= $pa; ?>" selected><?= $pa; ?></option>
												<?php else : ?>
													<option value="<?= $pa; ?>"><?= $pa; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>	
										</select>
									</div>
									<?= form_error('uang1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<input type="hidden" name="bukti1" value="E-Laundry.pdf">
								<input type="hidden" name="status1" value="Belum Lunas">		
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
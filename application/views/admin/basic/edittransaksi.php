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
									<label for="tanggal_jemputb" class="col-sm-3 col-form-label">Tanggal Penjemputan</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_jemputb" name="tanggal_jemputb" value="<?= $edit['tanggal_jemputb'] ?>">
									</div>
									<?= form_error('tanggal_jemputb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_jemputb" class="col-sm-3 col-form-label">Waktu Penjemputan</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemputb" name="waktu_jemputb">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_jemputb'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_jemputb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="tanggal_kirimb" class="col-sm-3 col-form-label">Tanggal Kirim</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="tanggal_kirimb" name="tanggal_kirimb" value="<?= $edit['tanggal_kirimb']; ?>">
									</div>
									<?= form_error('tanggal_kirimb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="waktu_kirimb" class="col-sm-3 col-form-label">Waktu Kirim</label>
									<div class="col-sm-9">
										<select class="form-control" id="waktu_jemput" name="waktu_kirimb">
											<option value=""></option>
											<?php foreach ($waktuA as $wa) : ?>
												<?php if( $wa == $edit['waktu_kirimb'] ) : ?>
												<option value="<?= $wa; ?>" selected><?= $wa; ?></option>
												<?php else : ?>
													<option value="<?= $wa; ?>"><?= $wa; ?></option>	
												<?php endif; ?>	
											<?php endforeach; ?>
										</select>
									</div>
									<?= form_error('waktu_kirimb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="locationb" class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['locationb']; ?>" id="locationb" name="locationb">
									</div>
									<?= form_error('locationb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="alamatb" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="alamatb" name="alamatb" value="<?= $edit['alamatb']; ?>">
									</div>
									<?= form_error('alamatb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="hargab" class="col-sm-3 col-form-label">Harga</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="<?= $edit['hargab']; ?>" id="hargab" name="hargab">
									</div>
									<?= form_error('hargab', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<label for="uangb" class="col-sm-3 col-form-label">Tipe Pembayaran</label>
									<div class="col-sm-9">
										<select name="uangb" id="uangb" class="form-control">
											<?php foreach( $paket as $pa ) : ?>
												<?php if( $pa == $edit['uangb'] ) : ?>
												<option value="<?= $pa; ?>" selected><?= $pa; ?></option>
												<?php else : ?>
													<option value="<?= $pa; ?>"><?= $pa; ?></option>
												<?php endif; ?>
											<?php endforeach; ?>	
										</select>
									</div>
									<?= form_error('uangb', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<input type="hidden" name="buktib" value="E-Laundry.pdf">
								<input type="hidden" name="statusb" value="Belum Lunas">		
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
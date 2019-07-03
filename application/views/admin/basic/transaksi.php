 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="row">
        <div class="col-lg-8">
          <?php if($this->session->flashdata('message')) : ?>
            <div class="alert alert-success"><?= $this->session->flashdata('message'); ?></div>
          <?php endif; ?>
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bold pb-2">Data Transaksi Essii</h5>
              <!-- <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle pr-1"></i>Tambah Barang</button> -->
              <table class="table table-hover table-responsive" id="example2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
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
                    <td><?= $ba['username']; ?></td>
                    <td><?= $ba['tanggal_kirim']; ?></td>
                    <td><span class="badge badge-primary"><?= $ba['nama']; ?></span></td>
                    <td>
                      <a href="<?= base_url() ?>admin/basic/aksi/<?= $ba['id_transaksi']; ?>" class="btn btn-warning btn-sm"> Lihat Status</a>
                      <a href="<?= base_url() ?>admin/basic/hapustransaksi/<?= $ba['id_transaksi']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Transaksi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="far fa-credit-card fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url(); ?>admin/essii/transaksi">
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
             <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
             <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="tanggal_jemput1" class="col-sm-3 col-form-label">Tanggal Penjemputan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tanggal_jemput1" name="tanggal_jemput1" value="<?= date('d-m-Y'); ?>" readonly>
            </div>
             <?= form_error('tanggal_jemput1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="waktu_jemput1" class="col-sm-3 col-form-label">Waktu Penjemputan</label>
            <div class="col-sm-9">
               <select class="form-control" id="waktu_jemput1" name="waktu_jemput1">
                <option value=""></option>
                <?php foreach ($waktuA as $wa) : ?>
                  <option value="<?= $wa; ?>"><?= $wa; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
             <?= form_error('waktu_jemput1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <?php 
          $tiga_hari = mktime(0,0,0,date("n"),date("j")+3,date("Y"));
          $kirim = date("d-m-Y", $tiga_hari); 
          ?>
          <div class="form-group row">
            <label for="tanggal_kirim1" class="col-sm-3 col-form-label">Tanggal Kirim</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tanggal_kirim1" name="tanggal_kirim1" value="<?= $kirim; ?>" readonly>
            </div>
             <?= form_error('tanggal_kirim1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="waktu_kirim1" class="col-sm-3 col-form-label">Waktu Kirim</label>
            <div class="col-sm-9">
               <select class="form-control" id="exampleFormControlSelect1" name="waktu_kirim1">
                <option value=""></option>
                <?php foreach ($waktuA as $wa) : ?>
                  <option value="<?= $wa; ?>"><?= $wa; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
             <?= form_error('waktu_kirim1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="location1" class="col-sm-3 col-form-label">Lokasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="location1" name="location1">
            </div>
             <?= form_error('location1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="alamat1" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="alamat1" name="alamat1">
            </div>
             <?= form_error('alamat1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="harga1" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="harga1" name="harga1">
            </div>
             <?= form_error('harga1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <label for="uang1" class="col-sm-3 col-form-label">Tipe Pembayaran</label>
            <div class="col-sm-9">
              <select name="uang1" id="uang1" class="form-control">
                <option value="Pilih Tipe Pembayaran" disabled="">Pilih Tipe Pembayaran</option>
                <option value=""></option>
                <option value="Tunai">Tunai</option>
                <option value="Non Tunai">Non Tunai</option>
              </select>
            </div>
             <?= form_error('uang1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <input type="hidden" name="bukti1" value="E-Laundry.pdf">
      <input type="hidden" name="status1" value="Belum Lunas">  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>



<!-- Modal detail-->
<div class="modal fade" id="transaksiend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail<i class="fas fa-info-circle pl-2"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        

      <div class="row">
        <div class="col-md-6">
          <p>Nama :</p><p class="nama font-weight-bold" style="margin-top: -10px;"></p>
          <p>Telepon :</p><p class="telepon font-weight-bold" style="margin-top: -10px;"></p>
          <p>Lokasi :</p><p class="location1 font-weight-bold" style="margin-top: -10px;"></p>
          <p>Alamat :</p><p class="alamat1 font-weight-bold" style="margin-top: -10px;"></p>
          <p>Tipe Pembayaran :</p><p class="uang1 font-weight-bold" style="margin-top: -10px;"></p>
        </div>

        <div class="col-md-6">
        <p>Tanggal Penjemputan :</p><p class="tanggal_jemput1 font-weight-bold" style="margin-top: -10px;"></p>
        <p>Waktu Penjemputan :</p><p class="waktu_jemput1 font-weight-bold" style="margin-top: -10px;"></p>
        <p>Tanggal Pengiriman :</p><p class="tanggal_kirim1 font-weight-bold" style="margin-top: -10px;"></p>
        <p>Waktu Pengiriman :</p><p class="waktu_kirim1 font-weight-bold" style="margin-top: -10px;"></p>
        </div>
      </div>


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
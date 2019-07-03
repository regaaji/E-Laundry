<div class="container" style="margin: 150px auto 0;">
   <div class="row">
      <div class="col-md-8 offset-md-2">

         <div class="card shadow">
            <div class="card-header bg-primary text-white">
               <i class="fa fa-money pr-2"></i>Cek Pembayaran
            </div>
            <div class="card-body">
              <div class="alert alert-success mb-3" role="alert">
               <h4 class="alert-heading">Perhatian!</h4>
                <p>Masukkan Bukti Pembayaran Anda</p>
                <hr>
                <p class="mb-0"></p>
             </div>
             <form method="post" action="" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $transaksi['id']; ?>">

              <input type="hidden" class="form-control" name="nama" id="exampleInputPassword1" value="<?= $transaksi['nama']; ?>">


              <input type="hidden" class="form-control telepon" name="telepon" id="exampleInputPassword1" value="<?= $transaksi['telepon']; ?>">


              <input type="hidden" class="form-control tanggal_jemput" name="tanggal_jemput" id="exampleInputPassword1" value="<?= $transaksi['tanggal_jemput']; ?>">


              <input type="hidden" class="form-control waktu_jemput" name="waktu_jemput" id="exampleInputPassword1" value="<?= $transaksi['waktu_jemput']; ?>">


              <input type="hidden" class="form-control tanggal_kirim" name="tanggal_kirim" id="exampleInputPassword1" value="<?= $transaksi['tanggal_kirim']; ?>">


              <input type="hidden" class="form-control waktu_kirim" name="waktu_kirim" id="exampleInputPassword1" value="<?= $transaksi['waktu_kirim']; ?>">


              <input type="hidden" class="form-control location" name="location" id="exampleInputPassword1" value="<?= $transaksi['location']; ?>">


              <input type="hidden" class="form-control harga" name="harga" id="exampleInputPassword1" value="<?= $transaksi['harga']; ?>">


              <input type="hidden" class="form-control status" name="status" id="exampleInputPassword1"  value="Lunas">

              

              <input type="file" id="kenek" name="bukti" onchange="return validasiFile()">
              <small id="emailHelp" class="form-text text-danger"><?= form_error('bukti'); ?></small>

              <!-- Pratinjau gambar -->
              <div id="pratinjauGambar" class="img-fluid"></div>

               <div class="text-center mt-3">
              <button class="btn btn-primary" type="submit">Kirim <i class="fa fa-send"></i></button>
               </div>
           </form>
        </div>
     </div>

  </div>
</div>
</div>
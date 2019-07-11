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
                <p>Masukkan Cetak Bukti Pembayaran Anda</p>
                <hr>
                <p class="mb-0"></p>
             </div>
             <form method="post" action="">
              <input type="hidden" name="id" value="<?= $transaksi['id']; ?>">

              <input type="hidden" class="form-control" name="nama" id="exampleInputPassword1" value="<?= $transaksi['nama']; ?>">


              <input type="hidden" class="form-control telepon" name="telepon" id="exampleInputPassword1" value="<?= $transaksi['telepon']; ?>">


              <input type="hidden" class="form-control tanggal_jemputb" name="tanggal_jemputb" id="exampleInputPasswordb" value="<?= $transaksi['tanggal_jemputb']; ?>">


              <input type="hidden" class="form-control waktu_jemputb" name="waktu_jemputb" id="exampleInputPasswordb" value="<?= $transaksi['waktu_jemputb']; ?>">


              <input type="hidden" class="form-control tanggal_kirimb" name="tanggal_kirimb" id="exampleInputPasswordb" value="<?= $transaksi['tanggal_kirimb']; ?>">


              <input type="hidden" class="form-control waktu_kirimb" name="waktu_kirimb" id="exampleInputPassword1" value="<?= $transaksi['waktu_kirimb']; ?>">


              <input type="hidden" class="form-control locationb" name="locationb" id="exampleInputPasswordb" value="<?= $transaksi['locationb']; ?>">


              <input type="hidden" class="form-control alamatb" name="alamatb" id="exampleInputPasswordb" value="<?= $transaksi['alamatb']; ?>">


              <input type="hidden" class="form-control hargab" name="hargab" id="exampleInputPasswordb" value="<?= $transaksi['hargab']; ?>">


              <input type="hidden" class="form-control statusb" name="statusb" id="exampleInputPasswordb"  value="Lunas">

              <!-- <input type="file" id="kenek" name="buktib" onchange="return validasiFile()" value="<?= $transaksi['buktib'];  ?>"> -->
              <input type="file" id="kenek" name="buktib" onchange="return validasiFile()">
              <small id="emailHelp" class="form-text text-danger"><?= form_error('buktib'); ?></small>

               <div class="text-center mt-3">
              <button class="btn btn-primary" type="submit">Kirim <i class="fa fa-send"></i></button>
               </div>
           </form>
        </div>
     </div>

  </div>
</div>
</div>
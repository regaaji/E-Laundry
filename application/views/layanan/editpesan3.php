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
             <form method="post" action="">
              <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">


              <input type="hidden" class="form-control" name="tanggal_jemput" id="exampleInputPasswordb" value="<?= $transaksi['tanggal_jemput']; ?>">


              <input type="hidden" class="form-control" name="waktu_jemput" id="exampleInputPasswordb" value="<?= $transaksi['waktu_jemput']; ?>">


              <input type="hidden" class="form-control" name="tanggal_kirim" id="exampleInputPasswordb" value="<?= $transaksi['tanggal_kirim']; ?>">


              <input type="hidden" class="form-control waktu_kirim" name="waktu_kirimb" id="exampleInputPassword1" value="<?= $transaksi['waktu_kirim']; ?>">


              <input type="hidden" class="form-control" name="location" id="exampleInputPasswordb" value="<?= $transaksi['location']; ?>">


              <input type="hidden" class="form-control" name="harga" id="exampleInputPasswordb" value="<?= $transaksi['harga']; ?>">


              <input type="hidden" class="form-control status" name="statusb" id="exampleInputPasswordb"  value="Lunas">

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
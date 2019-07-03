<div class="container" style="margin: 150px auto 0;">
   <div class="row">
      <div class="col-md-10 offset-md-1">

         <div class="card">
           <div class="card-header bg-primary text-white font-weight-bold">
            <i class="fa fa-money pr-1"></i>Pilih Metode Pembayaran
         </div>
         <div class="card-body">
            <h5 class="text-primary">Harga Total : </h5>
            <form action="" method="post">
              
            
            <input type="text" class="form-control text-right font-weight-bold bg-white text-primary" value="Rp. <?= $transaksi['harga']; ?>" readonly>


            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['id_transaksi']; ?>" name="id_transaksi">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="Tunai" name="tipe">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['harga']; ?>" name="harga">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['bukti']; ?>" name="bukti">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['tanggal_jemput']; ?>" name="tanggal_jemput">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['waktu_jemput']; ?>" name="waktu_jemput">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['tanggal_kirim']; ?>" name="tanggal_kirim">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['waktu_kirim']; ?>" name="waktu_kirim">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['lat']; ?>" name="lat">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['location']; ?>" name="location">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['lng']; ?>" name="lng">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['owner_id']; ?>" name="owner_id">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="<?= $transaksi['user_id']; ?>" name="user_id">
            <input type="hidden" class="form-control text-right font-weight-bold bg-white text-primary" value="7" name="status_id">
        
            <button class="btn btn-success mt-3 mr-2" type="submit"><i class="fa fa-money pr-1"></i>Tunai</button>
            </form>
            <button class="btn btn-warning mt-3" data-toggle="collapse" data-target="#collapseExample"> <i class="far fa-credit-card pr-1"></i>Non Tunai</button>
            <div class="collapse" id="collapseExample">
               <div class="card card-body mt-3">
                <h5> <i class="far fa-credit-card pr-1"></i>Pembayaran Non Tunai</h5>
                <hr>
                <p class="font-weight-bold">Nomer Rekening : <span class="badge badge-primary" style="font-size: 20px; font-family: verdana;">R65890379</span></p>
                <p class="font-weight-bold">Kirim ke Rekening : <span class="badge badge-primary" style="font-size: 15px; font-family: verdana;">BRI</span> </p>
                   <div class="row">
                    <div class="col-lg-2">
                       <a href="<?= base_url(); ?>Cekpesan1/edit/<?= $transaksi['id_transaksi']; ?>"><button class="btn btn-primary mr-5"><i class="fa fa-send pr-1"></i>Kirim</button></a>
                    </div>
                 </div>
             </div>
          </div>

            <p class="text-danger mt-3"><i class="fa fa-exclamation-circle" style="padding-right: 5px;"></i>Dengan mengklik tombol tersebut, anda telah menyetujui Syarat dan Ketentuan kami.</p>


            <img src="<?= base_url() ?>assets/img/banks-image.png" class="img-fluid mt-5">

         </div>

      </div>

   </div>
</div>
</div>

  


   

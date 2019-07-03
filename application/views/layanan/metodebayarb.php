<div class="container" style="margin: 150px auto 0;">
   <div class="row">
      <div class="col-md-10 offset-md-1">

         <div class="card">
           <div class="card-header bg-primary text-white font-weight-bold">
            <i class="fa fa-money pr-1"></i>Pilih Metode Pembayaran
         </div>
         <div class="card-body">
            <h5 class="text-primary">Harga Total : </h5>
            <input type="text" class="form-control text-right font-weight-bold bg-white text-primary" value="Rp. <?= $this->session->userdata('hargab'); ?>" readonly>
            <a href="../ExpressBayar5/"><button class="btn btn-success mt-3 mr-2"><i class="fa fa-money pr-1"></i>Tunai</button></a>
            <button class="btn btn-warning mt-3" data-toggle="collapse" data-target="#collapseExample"> <i class="far fa-credit-card pr-1"></i>Non Tunai</button>
            <div class="collapse" id="collapseExample">
               <div class="card card-body mt-3">
                <h5> <i class="far fa-credit-card pr-1"></i>Pembayaran Non Tunai</h5>
                <hr>
                <p class="font-weight-bold">Nomer Rekening : <span class="badge badge-primary" style="font-size: 20px; font-family: verdana;">R65890379</span></p>
                <p class="font-weight-bold">Kirim ke Rekening : <span class="badge badge-primary" style="font-size: 15px; font-family: verdana;">BRI</span> </p>
                   <div class="row">
                    <div class="col-lg-2">
                       <a href="../ExpressBayar6/"><button class="btn btn-primary mr-5"><i class="fa fa-send pr-1"></i>Kirim</button></a>
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

  


   

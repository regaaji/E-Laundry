<div class="container" style="margin: 150px auto 0;">
   <div class="row">
      <div class="col-md-10 offset-md-1">

         <div class="card shadow">
            <div class="card-header bg-primary text-white">
               <i class="fa fa-user pr-3"></i>Detail Akun
            </div>
            <div class="card-body">
               <!-- <input type="file" name="userfile" class="ganti_foto" size="1">

                    <img src="<?= base_url(); ?>assets/img/admin.png" class="profil_saya ml-5" width="100"> -->
               <div class="tentang_saya">
                  <h2>Nama : <span class="text-primary"> <?= $this->session->userdata('nama'); ?></span></h2>
                  <hr>
                  <p>Username <span class="ml-2">:</span> <?= $this->session->userdata("username"); ?></p>
                  <p>Alamat <span class="ml-4">&nbsp;&nbsp;:</span> <?= $this->session->userdata('alamat'); ?></p>
                  <p>No.Telepon : <?= $this->session->userdata('telepon'); ?></p>

                  <div class="text-center">
                     <a href="<?= base_url('daftar/Ubahpassword'); ?>" style="text-decoration: none;"><button class="btn btn-primary"><i class="fas fa-fw fa-key"></i> Ubah Password</button></a>
                  </div>

               </div>
               <!--       <div class="col-md-12 text-center ">
                        <a href=""><button class="btn btn-primary ubah_saya1 mr-2" type="submit">Ubah Profil</button></a>
                        <a href="<?= base_url(); ?>home/index/"><button class="btn btn-primary ubah_saya2 ml-2">Kembali</button></a>
                    </div> -->
            </div>
         </div>

      </div>
   </div>
</div>
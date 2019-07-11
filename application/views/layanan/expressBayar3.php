

    <!-- Page Content -->
    <div class="container" style="margin-top: 100px;">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
          
          <h1 class="my-4 text-primary"><img src="<?= base_url(); ?>assets/img/laundry_service.png" alt="" width="50px" height="50px">Jasa Laundry </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            
            <div class="card-body">
              
              

                <?php if(validation_errors()) : ?>
                  <div class="alert alert-danger" role="alert">
                      <?= validation_errors(); ?>
                   </div> 
                 <?php endif; ?>


             
               
              
              <form action="" method="post">
              <h2 class="card-title text-primary mt-5">Kontak Penerima</h2>
              <hr>
              <div class="form-group">
                <label for="nama" class="font-weight-bold">Nama Penerima</label>
                <input type="text" class="form-control" id="nama" value="<?= $this->session->userdata('nama'); ?>" name="nama" readonly>
              </div>

              <div class="form-group">
                <label for="telepon" class="font-weight-bold">Nomor Handphone</label>
                <input type="text" class="form-control" id="telepon" value="<?= $this->session->userdata('telepon'); ?>" name="telepon" readonly>
              </div>

            

              <h2 class="card-title text-primary mt-5">Detail Pesanan</h2>
              <hr>
              <div class="row">
                <div class="col">
                  <p class="font-weight-bold">Detail Penjemputan</p>
                   <p><?= $this->session->userdata('tanggal_jemput'); ?> : <?= $this->session->userdata('waktu_jemput'); ?></p>
                   <input type="hidden" name="tanggal_jemput" value="<?= $this->session->userdata('tanggal_jemput'); ?>">
                   <input type="hidden" name="waktu_jemput" value="<?= $this->session->userdata('waktu_jemput'); ?>">
                </div>
                <div class="col">
                  <p class="font-weight-bold">Detail Pengiriman</p>
                  <p><?= $this->session->userdata('tanggal_kirim'); ?> : <?= $this->session->userdata('waktu_kirim'); ?></p>
                  <input type="hidden" name="tanggal_kirim" value="<?= $this->session->userdata('tanggal_kirim'); ?>">
                   <input type="hidden" name="waktu_kirim" value="<?= $this->session->userdata('waktu_kirim'); ?>">
                </div>
                <div class="col">
                  <p class="font-weight-bold">Nama Brand Laundry</p>
                  <p class="badge badge-warning" style="font-size: 20px;"><?= $this->session->userdata('nama_owner'); ?></p>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                 <p class="font-weight-bold">Alamat Lokasi</p>  
                 <p><?= $this->session->userdata('location'); ?></p>
                 <input type="hidden" name="location" value="<?= $this->session->userdata('location'); ?>">
                </div>
                
                 <div class="col">
                  <input type="hidden" name="status_id" value="1">
                  <input type="hidden" name="lng" value="<?= $this->session->userdata('lng'); ?>">
                  <input type="hidden" name="lat" value="<?= $this->session->userdata('lat'); ?>">
                  <input type="hidden" name="user_id" value="<?= $this->session->userdata('id'); ?>">
                  <input type="hidden" name="harga" value="<?= $this->session->userdata('harga'); ?>">
                  <input type="hidden" name="tipe" value="keri">
                  <input type="hidden" name="bukti" value="sah">
                  <input type="hidden" name="owner_id" value="<?= $this->session->userdata('owner_id'); ?>">
                </div>
              

              </div>
              
            </div>  
            
            
           
            <?php if ( isset ($this->session->userdata['masuk_in']) ) : ?>
            <div class="col-lg-4">
              <button type="submit" class="btn btn-primary p-3 mb-4 mt-4">Kirim<i class="fa fa-send" style="padding-left: 10px;"></i></button>
            </div>
              

            <?php else : ?>           
             <a href="<?= base_url() ?>daftar/login"><button type="button" class="btn btn-primary btn-lg float-right p-3 mb-4 mt-4" style="margin-right: 20px;">Lanjut<i class="fa fa-arrow-right" style="padding-left: 10px;"></i></button></a>
            <?php endif; ?>
          </form>
          </div>


        </div>

     



        <!--  Widgets  -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <div class="card">

              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url(); ?>assets/img/bude.png" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/njajal.png" alt="">
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!--  Widget -->
          <div class="card my-4">
            <div class="card-body">
              <h5 class="text-primary">Butuh bantuan untuk pesan?</h5>
                  <ul class="question_help_list mt-4">
                     <li class="mb-3">
                         Hubungi kami di +021-95-51-84
                     </li>
                     <li class="mb-3">
                       Email : e-laundry@email.com   
                     </li>
                     <li>
                        Senin-Jumat 8am-7pm, Sabtu/Minggu/Hari Libur 9am-6pm
                     </li>
                  </ul>
            </div>
          </div>

          <!-- Widget -->
          <div class="card my-4">
            <div class="card-body">
                <h5 class="text-primary">Nilai lebih jasa kami</h5>
                <h6 class="ml-2 font-weight-bold">Jasa Laundry Terbaik</h6>
                <ul type="circle" class="mt-3 mb-3">
                  <li class="mb-3">Praktis, bersih, dan rapi</li>
                  <li class="mb-3">Gratis antar jemput</li>
                  <li>Proses terpisah setiap laundry</li>
                </ul>
                
              

               <h6 class="ml-2 font-weight-bold mt-5">Nilai Lebih E-Laundry</h6>- Kami hanya menggunakan pekerja profesional yang paling berpengalaman untuk memastikan kualitas layanan yang terbaik. Kepuasan pelanggan kami adalah prioritas utama kami<br />- Bebas repot, dilayani oleh customer service profesional dan ramah yang dapat dihubungi 7 hari dalam seminggu<br />- Bebas atur jadwal antar jemput pakaian

                <h6 class="ml-2 font-weight-bold mt-5">Pemberitahuan</h6>
                <p class="ml-2">Pesanan akan dibatalkan secara otomatis apabila pemesan tidak dapat diverifikasi dalam kurun waktu 24 jam sejak pemesanan layanan</p>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

 

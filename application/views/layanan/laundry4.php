<div class="carousel slide" id="demo-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#demo-carousel" data-slide-to="1"></li>
        <li data-target="#demo-carousel" data-slide-to="2"></li>
        <li data-target="#demo-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" data-src="<?= base_url(); ?>assets/img/laundry1.jpg">
            <div class="carousel-caption">
                <h2 class="font-weight-bold animated wobble" style="animation-duration: 1s;">Essii</h2>
               <!--  <p class="animated wobble" style="animation-duration: 1s;">Jl. Cikajang No. 46</p> -->
            </div>
        </div>
        <div class="carousel-item" data-src="<?= base_url(); ?>assets/img/laundry1a.jpg">
            <div class="carousel-caption">
                <h3 class="font-weight-bold animated fadeInDownBig" style="animation-duration: 1s;">Kami Siap Melayani Anda.. <i class="fa fa-handshake-o"></i> </h3>
            </div>
        </div>
        <div class="carousel-item" data-src="<?= base_url(); ?>assets/img/laundry1b.jpg">
            <div class="carousel-caption">
                <h3 class="font-weight-bold animated flipInY" style="animation-duration: 1s;">kami bekerja sama dengan para ahli untuk mendapatkan Sepatu Anda luar biasa bersih</h3>
            </div>
        </div>
    </div><a class="left carousel-control" href="#demo-carousel" role="button" data-slide="prev"><span class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#demo-carousel" role="button" data-slide="next"><span class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>





<!-- Page Content -->
<div class="container" style="margin-top: 100px;">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4 text-primary animated lightSpeedIn" style="animation-duration: 1s;"><img src="<?= base_url(); ?>assets/img/laundry_service.png" alt="" width="50px" height="50px">Essii </h1>

            <!-- Blog Post -->
            <div class="card mb-4">

                <div class="card-body">
                    <img class="float-right animated bounceInDown" src="<?= base_url(); ?>assets/img/icon-layanan/dry.png" width="50" style="animation-duration: 2s;">

                    <h2 class="card-title text-primary animated bounceInDown" style="animation-duration: 2s;">Cuci Kering</h2>
                    <hr>

                    <!-- isi -->
                    <div class="mt-5">
                        <label class="product-image"></label>
                        <label class="product-details"></label>
                        <label class="product-price font-weight-bold">Total</label>
                        <label class="product-quantity font-weight-bold">Quantity</label>
                        <label class="product-line-price font-weight-bold" style="margin-left: -10px;"></label>
                    </div>
                    <br><br>

                    <?php foreach ($essii as $cu) : ?>
                        <div class="product">
                            <div class="product-image">
                                <img class="rounded-circle" src="<?= base_url(); ?>assets/img/essii/<?= $cu['gambar']; ?>">
                            </div>

                            
                        

                        <div class="price-row">
                            <span class="minus-plus-input">
                                <input type='button' value='-' class='qtyminus btn btn-primary float-right ml-2' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty float-right' size="10" />
                                <input type='button' value='+' class='qtyplus btn btn-primary float-right mr-2' field='quantity' />

                                <div class="total-price float-right mr-4">Rp 0</div>

                            </span>
                            <br><br>
                            <span class="error text-danger float-right pr-5" style="display: none;">Harus Angka</span>
                            <div class="price" style="display: none;"><?= $cu['harga']; ?></div>
                            <div class="tampilnama" style="margin-top: -50px;"><?= $cu['nama_produk']; ?></div>    
                            <div class="tampilharga">Rp. <?= $cu['harga']; ?></div>
                        </div>

                    </div>
                    <!-- end product-->
                    <?php endforeach; ?>


                    




                    <form action="" method="post">
                <div class="font-weight-bold float-right" id="total-sum"></div>
                 <input type="hidden" id="total-harga" name="harga"> 
                 <small id="emailHelp" class="form-text text-danger"><?= form_error('harga'); ?></small> 
                <h2 class="card-title text-primary mt-5" style="padding-top: 100px;">Pilih Waktu Penjemputan</h2>
                        <hr>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal_jemput" value="<?= date('d-m-Y'); ?>" readonly>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal_jemput'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Waktu</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="waktu_jemput">
                                <option value=""></option>
                                <?php foreach ($waktuA as $wa) : ?>
                                    <option value="<?= $wa; ?>"><?= $wa; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('waktu_jemput'); ?></small>
                        </div>

                        <h2 class="card-title text-primary mt-5">Pilih Waktu Pengiriman</h2>
                        <hr>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <?php 
                               $tiga_hari = mktime(0,0,0,date("n"),date("j")+3,date("Y"));
                               $kirim = date("d-m-Y", $tiga_hari); 
                             ?>
                            <input type="text" class="form-control" id="tanggal" value="<?= $kirim; ?>" name="tanggal_kirim" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Waktu</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="waktu_kirim">
                                <option value=""></option>
                                <?php foreach ($waktuA as $wa) : ?>
                                    <option value="<?= $wa; ?>"><?= $wa; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('waktu_kirim'); ?></small>
                        </div>

                        
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lng" id="lng">
                        <input type="hidden" name="location" id="location">

                        <h2 class="card-title text-primary mt-5">Lokasi Anda</h2>
                        <hr>
                        <input id="pac-input" class="form-control" type="text" placeholder="Enter a location">
                        <br><br><br><br><br><br>
                        <br><br>
                        <br><br><br><br>
                        <div id="map" class="img-fluid" style="width: 700px; height: 400px;"></div>
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('location'); ?></small>
                        <div id="infowindow-content">
                            <img src="" width="16" height="16" id="place-icon">
                            <span id="place-name" class="title"></span><br>
                            <span id="place-address"></span>
                        </div>
                       
        </div>







                <!-- <div class="row font-weight-bold" style="font-size: 20px;">
              <div class="col-md-6">
                <p class="ml-4">Harga Total</p>
              </div>
              <div class="col-md-6">
                <p class="float-right text-primary" style="margin-right: 20px;">Rp. 50.000</p>
              </div>
            </div> -->
                <?php if (isset($this->session->userdata['masuk_in'])) : ?>
                   

                    <div class="modal-footer">
                        <a href="<?= base_url(); ?>layanan/index"><button type="button" class="btn btn-secondary"><i class="fa fa-arrow-left" style="padding-right: 10px;"></i>Kembali</button></a>
                            
                        <button type="submit" class="btn btn-primary">Lanjut <i class="fa fa-arrow-right" style="padding-left: 10px;"></i></button>
                            
                    </div>

                <?php else : ?>
                    <a href="<?= base_url() ?>daftar/login"><button type="button" class="btn btn-primary btn-lg float-right p-3 mb-4 mt-4" style="margin-right: 20px;">Lanjut<i class="fa fa-arrow-right" style="padding-left: 10px;"></i></button></a>

                    <a href="<?= base_url() ?>layanan/index"><button type="button" class="btn btn-primary btn-lg float-left p-3 mb-5" style="margin-left: 20px; margin-top: -80px;" name="lanjut"><i class="fa fa-arrow-left" style="padding-right: 10px;"></i>Kembali</button></a>
                <?php endif; ?>
                </form>

                
            </div>


        </div>

        <!-- pesan -->
        <!-- <div class="chat-box fixed-positioning">
      <div class="chat-header">
        <span class="ml-5"><i class="fa fa-comment" style="padding-right: 10px;"></i>Tinggalkan Pesan</span>
        <button><i class="fa fa-comment"></i></button>
      </div>
      <div class="chat-content">
        <p class="chat-title">Mohon maaf, semua agen kami sedang sibuk. Mohon tinggalkan pesan, kami akan segera menghubungi anda.</p>
        <form action="<?= base_url(); ?>sms/send" class="chat-form" method="post">
          <div>
            <label for="name">Nomor HP Tujuan<span>*</span></label>
            <input type="text" id="name" class="form-control" required name="to">
          </div>
          <div>
            <label for="message">Pesan <span>*</span></label>
            <textarea name="message" id="message" class="form-control" name="message"></textarea>
          </div>
          <button type="submit">Kirim</button>
        </form>
      </div>
    </div> -->
        <!-- akhir pesan  -->



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





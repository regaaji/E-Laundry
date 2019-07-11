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
        <p class="animated wobble" style="animation-duration: 1s;">Jl. Cikajang No. 46</p>
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
                <label class="product-price font-weight-bold">Price</label>
                <label class="product-quantity font-weight-bold">Quantity</label>
                <label class="product-line-price font-weight-bold" style="margin-left: -10px;">Total</label>
              </div>
                <br><br>

            <?php foreach( $barang2 as $ba2 ) : ?>

              <div class="product">
                <div class="product-image">
                  <img class="rounded-circle" src="<?= base_url(); ?>assets/img/essii/<?= $ba2->produk_image; ?>">
                </div>
                <div class="product-details">
                  <div class="product-title"><?= $ba2->produk_nama; ?></div>
                  <p class="product-description"><?= $ba2->produk_deskripsi; ?></p>
                </div>
                <div class="product-price"><?= number_format($ba2->produk_harga); ?></div>
                <div class="product-quantity">
                  <input type="number" value="0" min="1" name="item">
                </div>

                <div class="product-line-price">00.000</div>
              </div>

              <?php endforeach; ?>

              
               <img class="float-right" src="<?= base_url(); ?>assets/img/icon-layanan/bantal.png" width="50">
                       
                <h2 class="card-title text-primary">Perawatan Rumah Tangga</h2>
                <hr>

                
                <?php foreach( $barang3 as $ba3 ) : ?>  
                <div class="product">
                  <div class="product-image">
                    <img class="rounded-circle" src="<?= base_url(); ?>assets/img/essii/<?= $ba3->produk_image; ?>">
                  </div>
                  <div class="product-details">
                    <div class="product-title"><?= $ba3->produk_image; ?></div>
                    <p class="product-description"><?= $ba3->produk_deskripsi; ?></p>
                  </div>
                  <div class="product-price"><?= number_format($ba3->produk_harga); ?></div>
                  <div class="product-quantity">
                    <input type="number" value="0" min="1" name="item">
                  </div>

                  <div class="product-line-price">00.000</div>
                </div>

                <?php endforeach; ?>


              <img class="float-right" src="<?= base_url(); ?>assets/img/icon-layanan/backpack.png" width="50">
                       
                <h2 class="card-title text-primary">Perawatan Tas</h2>
                <hr>

                 <?php foreach( $barang4 as $ba4 ) : ?>  
                <div class="product">
                  <div class="product-image">
                    <img class="rounded-circle" src="<?= base_url(); ?>assets/img/essii/<?= $ba4->produk_image; ?>">
                  </div>
                  <div class="product-details">
                    <div class="product-title"><?= $ba4->produk_image; ?></div>
                    <p class="product-description"><?= $ba4->produk_deskripsi; ?></p>
                  </div>
                  <div class="product-price"><?= number_format($ba4->produk_harga); ?></div>
                  <div class="product-quantity">
                    <input type="number" value="0" min="1" name="item">
                  </div>

                  <div class="product-line-price">00.000</div>
                </div>

                <?php endforeach; ?>
          

              <div class="totals">
                <div class="totals-item">
                 <!--  <label class="font-weight-bold">Harga Total</label>
                  
                  <div class="totals-value font-weight-bold" id="cart-subtotal" name="harga">Rp. 00.00</div> -->
                  <div class="row">
                    <div class="col-lg">
                      <p class="font-weight-bold ml-4">Harga Total</p>
                    </div>
                    <div class="col-lg">
                      <p class="totals-value font-weight-bold" id="cart-subtotal" name="harga">00.000</p>
                    </div>
                  </div>
                </div>
              </div>


               
              <form action="" method="post">
              <input type="hidden" name="brand" value="Essii">
              <input type="hidden"  name="harga1" id="subtotal">
              <small id="emailHelp" class="form-text text-danger"><?= form_error('harga1'); ?></small> 
              <h2 class="card-title text-primary mt-5">Pilih Paket Laundry</h2>
              <hr>

              <div class="form-group">
                <div class="radio">
                  <label><input type="radio" name="paket1" value="Regular (3 - 4 hari)"> Regular (3 - 4 hari) </label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="paket1" value="Express (1 - 2 hari)"> Express (1 - 2 hari) </label>
                </div>
              </div>

              
              <h2 class="card-title text-primary mt-5">Pilih Waktu Pengembalian</h2>
              <hr>
              
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal_kembali1">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal_kembali1'); ?></small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Waktu</label>
                <select class="form-control" id="exampleFormControlSelect1" name="waktu_kembali1">
                  <option value=""></option>
                  <?php foreach( $waktuK as $wt ) : ?>

                  <option value="<?= $wt; ?>"><?= $wt; ?></option>
                  
                  <?php endforeach; ?>
                </select>
                <small id="emailHelp" class="form-text text-danger"><?= form_error('waktu_kembali1'); ?></small>
              </div>

            <h2 class="card-title text-primary mt-5">Pilih Waktu Pengantaran</h2>
            <hr>
            <div class="form-group">
                <label for="tanggal">Tanggal Pengantaran</label>
                <input type="text" class="form-control" id="tanggal" value="<?= date('Y-m-d'); ?>" name="tanggal_antar1" readonly>
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlSelect1">Waktu</label>
              <select class="form-control" id="exampleFormControlSelect1" name="waktu_antar1">
                <option value=""></option>
                <?php foreach( $waktuA as $wa ) : ?>
                  <option value="<?= $wa; ?>"><?= $wa; ?></option>
                <?php endforeach; ?>
              </select>
              <small id="emailHelp" class="form-text text-danger"><?= form_error('waktu_antar1'); ?></small>
            </div>

            <br><br><br><br>
            <br><br>
               <input type="hidden" name="lat1" id="lat">
              <input type="hidden" name="lng1" id="lng">
              <input type="hidden" name="location1" id="location">
            
              <h2 class="card-title text-primary mt-5">Lokasi Anda</h2>
            <hr>
              <div class="pac-card" id="pac-card">
                <div>
                  <div id="title">
                    Lokasi Anda
                  </div>
                  <div id="type-selector" class="pac-controls">
                    <input type="radio" name="type" id="changetype-all" checked="checked">
                    <label for="changetype-all">All</label>

                  </div>
                  
                </div>
                <div id="pac-container">
                  <input id="pac-input" class="form-control" type="text" placeholder="Enter a location">
                </div>
              </div>
              <div id="map" class="img-fluid" style="width: 700px; height: 400px;"></div>
              <small id="emailHelp" class="form-text text-danger"><?= form_error('location1'); ?></small>
              <div id="infowindow-content">
                <img src="" width="16" height="16" id="place-icon">
                <span id="place-name"  class="title"></span><br>
                <span id="place-address"></span>
              </div>

            
              <div class="form-group mt-5">
                <label for="exampleFormControlTextarea1">Rincian Alamat</label>
                <textarea class="form-control " id="exampleFormControlTextarea1" rows="5" name="alamat1"></textarea>
              </div>
              <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat1'); ?></small>
            </div>

          
             
            
            
            <!-- <div class="row font-weight-bold" style="font-size: 20px;">
              <div class="col-md-6">
                <p class="ml-4">Harga Total</p>
              </div>
              <div class="col-md-6">
                <p class="float-right text-primary" style="margin-right: 20px;">Rp. 50.000</p>
              </div>
            </div> -->
            <?php if ( isset ($this->session->userdata['masuk_in']) ) : ?>
            <!-- <a href=""><button type="submit" class="btn btn-primary btn-lg float-right p-3  mt-4" style="margin-right: 20px;" name="lanjut">Lanjut<i class="fa fa-arrow-right" style="padding-left: 10px;"></i></button></a>

            <a href="<?= base_url() ?>layanan/index"><button type="button" class="btn btn-primary btn-lg float-left p-3 mb-5" style="margin-left: 20px; margin-top: -60px;" name="lanjut"><i class="fa fa-arrow-left" style="padding-right: 10px;"></i>Kembali</button></a> -->

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
                
              

                
                <p class="ml-2"><br /><h6 class="ml-2 font-weight-bold mt-5">Nilai Lebih E-Laundry</h6>- Kami hanya menggunakan pekerja profesional yang paling berpengalaman untuk memastikan kualitas layanan yang terbaik. Kepuasan pelanggan kami adalah prioritas utama kami<br />- Bebas repot, dilayani oleh customer service profesional dan ramah yang dapat dihubungi 7 hari dalam seminggu<br />- Bebas atur jadwal antar jemput pakaian</p>

                <h6 class="ml-2 font-weight-bold mt-5">Pemberitahuan</h6>
                <p class="ml-2">Pesanan akan dibatalkan secara otomatis apabila pemesan tidak dapat diverifikasi dalam kurun waktu 24 jam sejak pemesanan layanan</p>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

 

<div class="carousel slide" id="demo-carousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="active" data-target="#demo-carousel" data-slide-to="1"></li>
    <li data-target="#demo-carousel" data-slide-to="2"></li>
    <li data-target="#demo-carousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" data-src="<?= base_url(); ?>assets/img/laundry1.jpg">
      <div class="carousel-caption">
        <h2 class="font-weight-bold animated wobble" style="animation-duration: 1s;">E-Laundry</h2>
      </div>
    </div>
    <div class="carousel-item" data-src="<?= base_url(); ?>assets/img/laundry1a.jpg">
      <div class="carousel-caption">
        <h3 class="font-weight-bold animated bounceInUp" style="animation-duration: 1s;">Kami Siap Melayani Anda.. <i class="fa fa-handshake-o"></i> </h3>
      </div>
    </div>
    <div class="carousel-item" data-src="<?= base_url(); ?>assets/img/laundry1b.jpg">
      <div class="carousel-caption">
        <h3 class="font-weight-bold animated bounceInRight" style="animation-duration: 1s;">kami bekerja sama dengan para ahli untuk mendapatkan Sepatu Anda luar biasa bersih</h3>
      </div>
    </div>
  </div><a class="left carousel-control" href="#demo-carousel" role="button" data-slide="prev"><span class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#demo-carousel" role="button" data-slide="next"><span class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>






<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="text-primary">Tentang Kami</h2>
                <p>E-Laundry adalah website laundry yang memberikan layanan berbasis dekstop, yang memungkinkan kamu untuk memesan layanan laundry dimanapun dan kapanpun, tak perlu membuang waktu untuk mengantar dan menjemput cucian.
                </p>
                <p>Kamu juga bisa memonitor laundry kamu melalui website E-Laundry. Setiap proses pencucian di E-Laundry sudah menerapkan prinsip kebersihan, yang mengedepankan kesucian pakaian dengan metode thaharah menggunakan air mengalir. Pakaian kamu sudah pasti suci, bersih, wangi, dan rapih.
                </p>
                </div>
                <div class="col-md-5">
                    <img src="<?= base_url(); ?>assets/img/icon-layanan/e-laundry.png" class="img-fluid" style="width: 60% !important;">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->


<div class="container">
  <h1 class="text-primary mb-5">E-Laundry dibangun di atas tiga misi utama</h1>
  <div class="row">
    <div class="col-md-2">
      <img src="<?= base_url(); ?>assets/img/icon-layanan/user.png" alt="" width="100">
    </div>
    <div class="col-md-10">
      <h3>Kualitas Layanan Tinggi</h3>
      <p>E-Laundry juga melakukan pelatihan untuk tim Customer Service-nya sehingga setiap pertanyaan dan keluhan yang masuk ditangani dengan cepat dan profesional. E-Laundry bertujuan untuk meningkatkan standar kualitas layanan di dalam negeri dan membuatnya dapat diakses oleh semua orang di Indonesia. </p>
    </div>
    
    <div class="col-md-2 mt-5">
      <img src="<?= base_url(); ?>assets/img/icon-layanan/grafik.png" alt="" width="100">
    </div>
    <div class="col-md-10 mt-5">
      <h3>Pertumbuhan Sosial dan Ekonomi</h3>
      <p>E-Laundry berusaha untuk mendorong pertumbuhan sosial dan ekonomi di Indonesia, dengan tujuan meningkatkan kehidupan seluruh masyarakat Indonesia. Setiap kali pelanggan memesan layanan E-Laundry, mereka menikmati ketenangan bahwa layanan akan selesai dengan kualitas terbaik, dengan tanaga kerja yang cakap, dan dengan harga terjangkau</p>
    </div>

    <div class="col-md-2 mt-5">
      <img src="<?= base_url(); ?>assets/img/icon-layanan/like.png" alt="" width="100">
    </div>
    <div class="col-md-10 mt-5">
      <h3>Cepat, Nyaman, &amp; Terjangkau</h3>
      <p>E-Laundry sangat menghargai waktu berharga pelanggan kami, oleh karena itu kami menawarkan semua layanan sesuai permintaan. Pelanggan dapat memesan semua layanan kami empat jam sebelum waktu pengangkatan, dari kenyamanan rumah atau kantor mereka, di ponsel atau komputer mereka kapan saja dan dimana saja. Kami tidak hanya bertujuan untuk mengakses semua layanan kami, namun kami terus berupaya memberikan harga yang kompetitif sehingga layanan kami tetap terjangkau bagi semua orang Indonesia.</p>
    </div>
  </div>
</div>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2 class="text-primary">Kotak Saran & Kritik</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Saran & Kritik</h3>
                                <form action="<?= base_url() ?>tentang/send" method="post">
                                    <div class="flash-data12" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="to" value="085235149501" readonly>
                                        <small  class="form-text text-danger"><?= form_error('to'); ?></small>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Ketikkan Disini" class="form-control" name="message" rows="5"></textarea>
                                        <small  class="form-tex text-danger"><?= form_error('message'); ?></small>
                                    </div>
                                    <?php if ( isset ($this->session->userdata['masuk_in']) ) : ?>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-primary btn-submit" name="submit" onclick="hubung()">SUBMIT</button>
                                    <?php else : ?>
                                      <a href="<?= base_url(); ?>daftar/login"><button type="button" class="btn btn-primary btn-submit" name="submit">SUBMIT</button></a>
                                      <?php endif; ?>  
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <div class="contact-details">
                                    <h6 class="font-weight-bold">Informasi Layanan Konsumen</h6>
                                    <p><i class="fa fa-phone pr-2"></i>085235149501</p>
                                    <p><i class="fa fa-envelope pr-2"></i>e-laundry@gmail.com</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                      <h6 class="font-weight-bold">Informasi Waktu Pelayanan</h6>
                                      <p>Jam Kerja : Senin - Jumat : 08:00 - 19:00 WIB</p>
                                      <p>Sabtu - Minggu & Hari Libur : 09:00 - 18:00 WIB</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <h6 class="font-weight-bold">Informasi Waktu Pelayanan</h6>
                                        <i class="fab fa-facebook ml-5 mt-2" style="font-size: 20px;"></i>
                                        <i class="fab fa-twitter ml-5 mt-2" style="font-size: 20px;"></i>
                                        <i class="fab fa-instagram ml-5 mt-2" style="font-size: 20px;"></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>

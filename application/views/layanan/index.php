

<!-- Page Content -->
<div class="container" style="margin-top: 100px;">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4 text-primary">Jasa Laundry
      </h1>

      <!-- Blog Post -->
      <div class="card mb-4">
        
        <div class="card-body">
          <h2 class="card-title text-primary">Pilih Jenis Laundry</h2>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Premium (Pc)
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <a href="<?= base_url(); ?>layanan/index1" style="color: black;">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                    Basic Laundry (Kg)
                  </label>
                </div>
              </a>
            </div>
          </div>
          


          <h2 class="card-title text-primary mt-5">Pilih Daftar Laundry</h2>
          <hr>

    

          <!-- isi -->
          <?php foreach($produk as $p) : ?>
          <div class="row mt-5">
            
            <div class="col-md-3">
              <img src="<?= base_url(); ?>assets/img/<?= $p['gambar_produk'] ?>" width="99.9" class="rounded-circle" alt="">
              <h5 class="mt-3 ml-4"><?= $p['nama_owner']; ?></h5>
              
            </div>
            <div class="col-md-3">
              <h5 class="judul-icon"><?= $p['nama_owner']; ?></h5>
              
              <a href="<?= base_url(); ?>layanan/laundry/<?= $p['id_owner'] ?>"><button class="btn btn-primary mt-2 tombol-icon">Lihat <i class="fa fa-arrow-circle-right pl-2"></i></button></a>
        
            </div>
            
        </div>
      <?php endforeach; ?>
      
        
        
      <hr>

      <?= $this->pagination->create_links(); ?>

          <!--     <h2 class="card-title text-primary mt-5">Pilih Rating Laundry</h2>
              <hr>
              <div class="container mt-2">
                <div class="form-group">
                  <select id="product-select" class="form-control custom-select">
                    <option value="0" disabled selected>Select Laundry</option>
                    <option value="sony">Essii</option>
                    <option value="samsung">Wipe</option> -->
               <!--      <option value="vizio">Vizio 4K TV</option>
                    <option value="panasonic">Panasonic 4K TV</option>
                    <option value="phillips">Phillips 4K TV</option> -->
                  <!-- </select>
                </div>
                <div class="form-group">
                  <input type="number" id="rating-control" class="form-control" step="0.1" max="5" placeholder="Rate 1 - 5" disabled>
                </div> -->

  <!-- <table class="table table-striped">
    <thead>
      <tr>
        <th>4K Television</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody>
      <tr class="sony">
        <td>Sony 4K TV</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      <tr class="samsung">
        <td>Samsung 4K TV</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      <tr class="vizio">
        <td>Vizio 4K TV</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      <tr class="panasonic">
        <td>Panasonic 4K TV</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
      <tr class="phillips">
        <td>Phillips 4K TV</td>
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
    </tbody>
  </table> -->



  <!-- </div> -->
  <!-- penutup -->

            <!--   <div class="product">
                <div class="product-image">
                  <img src="<?= base_url(); ?>assets/img/bedcover.jpg">
                </div>
                <div class="product-details">
                  <div class="product-title">Bed Cover</div>
                  <p class="product-description">E-Laundry Bed Cover 
                  adalah salah satu layanan laundry dan Dry cleaning.</p>
                </div>
                <div class="product-price">12.00</div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" name="item">
                </div>
                <div class="product-removal">
                  <button class="remove-product float-right">
                    Remove
                  </button>
                </div>

                <div class="product-line-price">12.00</div>
              </div>
            -->


            

          </div>
          
        </div>


      </div>


      <!-- pesan -->
   <!--  <div class="chat-box fixed-positioning">
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
    </div>   -->
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



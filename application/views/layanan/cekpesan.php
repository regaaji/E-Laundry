
<div class="container">
  <div class="row justify-content-center" style="margin-top: 120px;">
    



    <div class="col-md-10">
      <div class="card shadow">
        <div class="card-body">

          <h3 class="text-center text-primary mb-4">Cek Pemesanan</h3>
          <?= $this->session->flashdata('message'); ?>
          <div class="table-responsive">
           <table class="table table-hover" id="tabel2">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Tanggal Pengiriman</th>
                <th scope="col">Status</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach( $transaksi as $tr ) : ?>

                <?php if($this->session->userdata("username") == $tr["username"]) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $tr['username']; ?></td>
                    <td><?= $tr['tanggal_kirim']; ?></td>
                    <td>
                      <span class="badge badge-primary"><?= $tr['nama']; ?></span>
                    </td>
                    <td>
                      <a href="<?= base_url() ?>cekpesan1/coba/<?= $tr['id_transaksi'] ?>"  class="btn btn-warning btn-sm">Detail<i class="fas fa-info-circle pl-2"></i></a>
                    </td>
                  </tr>
              <p>

                <?php if($tr['status_id'] == 6 ): ?>
                  <span class="text-danger font-weight-bold">Silahkan melakukan konfirmasi pembayaran</span> <a href="<?= base_url(); ?>Cekpesan1/metodebayar1/<?= $tr['id_transaksi']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-money-bill-wave"></i></a>
                  <?php else : ?>
                    <span></span>
                  <?php endif; ?>  
                </p>

                <?php else : ?>
                   

                <?php endif; ?>

            <?php $i++; ?>
          <?php endforeach; ?>

          </tbody>
        </table>

            
          
        </div>
      </div>

    </div>

<!-- endtabel -->



  </div>



<div class="col-md-10 mt-5">
  
  <div class="card shadow">
    <div class="card-body">
      <h3 class="text-center text-primary mb-4">Cek History</h3>
          <?= $this->session->flashdata('message'); ?>
          <div class="table-responsive">
            <table class="table-hover table" id="tabel1">
              <thead class="bg-primary text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Tanggal Pengiriman</th>
                  <th scope="col">Status</th>
                  <th scope="col">Detail</th>
                </tr>
              </thead>
              <tbody>

                 <?php $i = 1; ?>
              <?php foreach( $selesai as $tr ) : ?>

                <?php if($this->session->userdata("username") == $tr["username"]) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $tr['username']; ?></td>
                    <td><?= $tr['tanggal_kirim']; ?></td>
                    <td>
                      <?php if($tr['status_id'] == 9) : ?>
                      <span class="badge badge-primary"><?= $tr['nama']; ?></span>
                      <?php else : ?>
                        <span class="badge badge-primary"></span>
                    <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?= base_url() ?>cekpesan1/coba/<?= $tr['id_transaksi'] ?>"  class="btn btn-warning btn-sm">Detail<i class="fas fa-info-circle pl-2"></i></a>
                    </td>
                  </tr>
             

                <?php else : ?>
                

                <?php endif; ?>

            <?php $i++; ?>
          <?php endforeach; ?>
              </tbody>
            </table>
          </div>
    </div>
  </div>
</div>




</div>
</div>





<!-- Modal detail-->
<div class="modal fade" id="transaksiend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail<i class="fas fa-info-circle pl-2"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>


          <div class="row">
            <div class="col-md-6">
             <div id="googleMap" style="width:80%;height:380px;"></div>

           </div>

           <div class="col-md-6">
            <p>Tanggal Penjemputan :</p><p class="tanggal_jemput font-weight-bold" style="margin-top: -10px;"></p>
            <p>Waktu Penjemputan :</p><p class="waktu_jemput font-weight-bold" style="margin-top: -10px;"></p>
            <p>Tanggal Pengiriman :</p><p class="tanggal_kirim font-weight-bold" style="margin-top: -10px;"></p>
            <p>Waktu Pengiriman :</p><p class="waktu_kirim font-weight-bold" style="margin-top: -10px;"></p>
            <p>Lokasi :</p><p class="location font-weight-bold" style="margin-top: -10px;"></p>
            <p>Lokasi :</p><p class="lat" style="margin-top: -10px;"></p>
            <p>Lokasi :</p><p class="lng" style="margin-top: -10px;"></p>







          </div>
          <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI98lHacZgM9WB1k105dIgSqeVD7KJDGM&libraries=places&callback=initMap" async defer></script>

          <script>
            function initMap() {

        // membuat objek untuk titik koordinat
        
        var lombok = {lat: document.getElementByClassName('lat'), lng: document.getElementByClassName('lng')};
        
        // membuat objek peta
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 9,
          center: lombok
        });

        // mebuat konten untuk info window
        var contentString = '<h2>Hello Dunia!</h2>';

        // membuat objek info window
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: lombok
        });
        
        // membuat marker
        var marker = new google.maps.Marker({
          position: lombok,
          map: map,
        });
        
        // event saat marker diklik
        marker.addListener('click', function() {
          // tampilkan info window di atas marker
          infowindow.open(map, marker);
        });
        
      }
    </script>
  </div>



</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
</div>








<div class="container">
    <div class="row justify-content-center" style="margin-top: 120px;">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-body">

                    <h3 class="text-center text-primary mb-4">Detail</h3>
                   <?= $this->session->flashdata('message'); ?>
                   
                      <div class="row">
                        <div class="col-md-6">
                          <p>Tanggal Penjemputan :</p><p class="font-weight-bold" style="margin-top: -10px;"><?= $coba['tanggal_jemput']; ?></p>
                          <p>Waktu Penjemputan :</p><p class="font-weight-bold" style="margin-top: -10px;"><?= $coba['waktu_jemput']; ?></p>
                          <p>Tanggal Pengiriman :</p><p class="font-weight-bold" style="margin-top: -10px;"><?= $coba['tanggal_kirim']; ?></p>
                          <p>Waktu Pengiriman :</p><p class="font-weight-bold" style="margin-top: -10px;"><?= $coba['waktu_kirim']; ?></p>
                          <p>Username :</p><p class="font-weight-bold" style="margin-top: -10px;"><?= $this->session->userdata['username']; ?></p>
                           
                        </div>
                        <div class="col-md-6">
                          
                      <div id="googleMap" style="width:100%;height:380px;"></div>
                        </div>
                      </div>
                     

                      <p><?php $lat = $coba['lat'] ?></p>
                      <p><?php $lng = $coba['lng'] ?></p>
                   
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
        var lat = '<?= $lat ?>';
        var lng = '<?= $lng ?>';
        var lombok = {lat: <?= $lat ?>, lng: <?= $lng ?>};
        
        // membuat objek peta
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 9,
          center: lombok
        });

        // mebuat konten untuk info window
        var contentString = lombok;

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


      // var marker;

      // function initMap() {

      //   var lat = '<?= $lat ?>';
      //   var lng = '<?= $lng ?>';
      //   var map = new google.maps.Map(document.getElementById('googleMap'), {
      //     zoom: 13,
      //     center: {lat: <?= $lat ?>, lng: <?= $lng ?>}
      //   });

      //   marker = new google.maps.Marker({
      //     map: map,
      //     draggable: true,
      //     animation: google.maps.Animation.DROP,
      //     position: {lat: <?= $lat ?>, lng: <?= $lng ?>}
      //   });
      //   marker.addListener('click', toggleBounce);
      // }

      // function toggleBounce() {
      //   if (marker.getAnimation() !== null) {
      //     marker.setAnimation(google.maps.Animation.BOUNCE);
      //   } else {
      //     marker.setAnimation(null);
      //   }
      // }
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







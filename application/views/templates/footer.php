<!-- pesan -->
<!--  <div class="chat-box fixed-positioning">
      <div class="chat-header">
        <span class="ml-5"><i class="fa fa-comment" style="padding-right: 10px;"></i>Tinggalkan Pesan</span>
        <button><i class="fa fa-comment"></i></button>
      </div>
      <div class="chat-content">
        <p class="chat-title">Mohon maaf, semua agen kami sedang sibuk. Mohon tinggalkan pesan, atau hubungi kami di <span class="text-danger">085235149501</span></p>
        <form action="<?= base_url(); ?>sms/send" class="chat-form" method="post">
          <div>
            <label for="name">Nomor HP Tujuan<span>*</span></label>
            <input type="text" id="name" class="form-control" name="to" readonly value="085235149501">
          </div>
          <div>
            <label for="message">Pesan <span>*</span></label>
            <textarea name="message" id="message" class="form-control" name="message" required></textarea>
          </div>
          <button type="submit" onclick="hubung()">Kirim</button>
        </form>
      </div>
    </div>  -->
<!-- akhir pesan  -->


<!-- footer -->



<div class="container-fluid mt-5" style="background-color: #1e1f29;">
  <div class="row">
    <div class="col-md-3">
      <h4 class="text-white mt-5">Tentang Kami</h4>
      <p class="text-white mt-4 footer-left-1"><a href="#"><i class="fa fa-map-marker" style="color: #007bff; padding-right: 10px;"></i>Karangan, Trenggalek</a></p>
      <p class="text-white footer-left-1"><a href="#"><i class="fa fa-phone" style="color: #007bff; padding-right: 10px;"></i>085235149501</a></p>
      <p class="text-white footer-left-1"><a href="#"><i class="fa fa-envelope" style="color: #007bff; padding-right: 10px;"></i>e-laundry@gmail.com</a></p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mt-5">Kategori</h4>
      <p class="text-white mt-4 footer-left"><a href="#">Home</a></p>
      <p class="text-white footer-left"><a href="#">Tentang Kami</a></p>
      <p class="text-white footer-left"><a href="#">Daftar</a></p>
      <p class="text-white footer-left"><a href="#">Masuk</a></p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mt-5">Detail</h4>
      <p class="text-white footer-left">E-Laundry adalah jasa kebersihan yang bergerak di bidang pelayanan publik, sasaran kami adalah rumah yang membutuhkan jasa kami..</p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mb-3 mt-5">Ikuti Kami</h4>
      <a href="#"><i class="fab fa-facebook-square" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>&nbsp;
      <a href="#"><i class="fab fa-instagram" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>&nbsp;
      <a href="#"><i class="fab fa-twitter" style="border: 1px solid white; padding: 10px; background-color: white; border-radius: 5px; color: #007bff;"></i></a>

      <i class="fab fa-instagram"></i>
    </div>
  </div>

  <div class="row footer">
    <div class="col-md-12 text-center">
      <p><?= date('Y'); ?> All Rights Reserved by Rega Aji <i class="fa fa-heart" style="color: #007bff;"></i></p>
    </div>
  </div>
</div>
</div>





<!-- akhir footer -->
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>


<script src="<?= base_url(); ?>assets/js/index.js"></script>
<!-- <script src="<?= base_url(); ?>assets/js/myscript.js"></script> -->
<!-- Optional JavaScript -->
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- sweetalert -->
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mysweet.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>
<script>
          function validasiFile(){
        var inputFile = document.getElementById('kenek');
        var pathFile = inputFile.value;
        var ekstensiOk = /(\.pdf)$/i;
        if(!ekstensiOk.exec(pathFile)){
            alert('Silakan upload file cetak anda yang miliki');
            inputFile.value = '';
            return false;
        }else{
            //Pratinjau gambar
            // if (inputFile.files && inputFile.files[0]) {
            //     var reader = new FileReader();
            //     reader.onload = function(e) {
            //         document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            //     };
            //     reader.readAsDataURL(inputFile.files[0]);
            // }
        }
    }
</script>

<script>
    $(function () {
    $('#tabel1').DataTable()
    $('#tabel2').DataTable()
    $('#tabel3').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': false,
      'info': false,
      'autoWidth': false
  })
})
</script>

<script>
  function njajal() {
      Swal.fire(
      'Mohon Maaf',
      'sekarang pemesanan penuh ',
      'error'
    )
  }
  
</script>
<script>
  //modal detail cek pemesanan basic
    $(function(){
          $('.tampilModalBasic').on('click', function(){
              const id = $(this).data('id');
              $.ajax({
                  url: '<?= base_url("Cekpesan3/basiclModal"); ?>',
                  data: {id:id},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    $('.nama').html(data.nama),
                    $('.telepon').html(data.telepon),
                    $('.tanggal_jemputb').html(data.tanggal_jemputb),
                    $('.waktu_jemputb').html(data.waktu_jemputb),
                    $('.tanggal_kirimb').html(data.tanggal_kirimb),
                    $('.waktu_kirimb').html(data.waktu_kirimb),
                    $('.locationb').html(data.locationb),
                    $('.hargab').html(data.hargab),
                    $('.alamatb').html(data.alamatb),
                    $('.hargab').html(data.hargab),
                    $('.statusb').html(data.statusb),
                    $('.uangb').html(data.uangb)
                  } 
              });
              //console.log("ok");
          });
      })




    //modal detail cek pemesanan wipe
    $(function(){
          $('.tampilModalDetailNew').on('click', function(){
              const id_transaksi = $(this).data('id_transaksi');
              console.log(id_transaksi);
              $.ajax({
                  url: '<?= base_url("Cekpesan1/rincilModal"); ?>',
                  data: {id_transaksi:id_transaksi},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    console.log(data);
                    $('.nama').html(data.nama),
                    $('.telepon').html(data.telepon),
                    $('.tanggal_jemput').html(data.tanggal_jemput),
                    $('.waktu_jemput').html(data.waktu_jemput),
                    $('.tanggal_kirim').html(data.tanggal_kirim),
                    $('.waktu_kirim').html(data.waktu_kirim),
                    $('.location').html(data.location),
                    $('.harga').html(data.harga),
                    $('.alamat').html(data.alamat),
                    $('.harga').html(data.harga),
                    $('.status').html(data.status),
                    $('.lat').html(data.lat),
                    $('.lng').html(data.lng)
                    
  
                  } 
              });
              //console.log("ok");
          });
      })




     //modal detail cek pemesanan essii
    $(function(){
          $('.tampilModalDetailBaru').on('click', function(){
              const id = $(this).data('id');
              $.ajax({
                  url: '<?= base_url("Cekpesan/detailModal"); ?>',
                  data: {id:id},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    $('.nama').html(data.nama),
                    $('.telepon').html(data.telepon),
                    $('.tanggal_jemput').html(data.tanggal_jemput),
                    $('.waktu_jemput').html(data.waktu_jemput),
                    $('.tanggal_kirim').html(data.tanggal_kirim),
                    $('.waktu_kirim').html(data.waktu_kirim),
                    $('.location').html(data.location),
                    $('.harga').html(data.harga),
                    $('.alamat').html(data.alamat),
                    $('.harga').html(data.harga),
                    $('.status').html(data.status),
                    $('.uang').html(data.uang)
                  } 
              });
              //console.log("ok");
          });
      })
</script>
<script>
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {
        lat: -8.050000,
        lng: 111.710000
      },
      zoom: 8
    });
    var card = document.getElementById('pac-card');
    var input = document.getElementById('pac-input');
    var types = document.getElementById('type-selector');
    var strictBounds = document.getElementById('strict-bounds-selector');

    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

    var autocomplete = new google.maps.places.Autocomplete(input);

    // Bind the map's bounds (viewport) property to the autocomplete object,
    // so that the autocomplete requests use the current map bounds for the
    // bounds option in the request.
    autocomplete.bindTo('bounds', map);

    // Set the data fields to return when the user selects a place.
    autocomplete.setFields(
      ['address_components', 'geometry', 'icon', 'name']);

    var infowindow = new google.maps.InfoWindow();
    var infowindowContent = document.getElementById('infowindow-content');
    infowindow.setContent(infowindowContent);
    var marker = new google.maps.Marker({
      map: map,
      anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        // User entered the name of a Place that was not suggested and
        // pressed the Enter key, or the Place Details request failed.
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }

      // If the place has a geometry, then present it on a map.
      if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
      } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17); // Why 17? Because it looks good.
      }
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);

      var item_Lat = place.geometry.location.lat()
      var item_Lng = place.geometry.location.lng()
      var item_Location = place.name;
      //alert(item_Location);
      $("#lat").val(item_Lat);
      $("#lng").val(item_Lng);
      $("#location").val(item_Location);
     


      var address = '';
      if (place.address_components) {
        address = [
          (place.address_components[0] && place.address_components[0].short_name || ''),
          (place.address_components[1] && place.address_components[1].short_name || ''),
          (place.address_components[2] && place.address_components[2].short_name || '')
        ].join(' ');
      }

      infowindowContent.children['place-icon'].src = place.icon;
      infowindowContent.children['place-name'].textContent = place.name;
      infowindowContent.children['place-address'].textContent = address;
      infowindow.open(map, marker);
    });



    // Sets a listener on a radio button to change the filter type on Places
    // Autocomplete.
    function setupClickListener(id, types) {
      var radioButton = document.getElementById(id);
      radioButton.addEventListener('click', function() {
        autocomplete.setTypes(types);
      });
    }

    setupClickListener('changetype-all', []);
    setupClickListener('changetype-address', ['address']);
    setupClickListener('changetype-establishment', ['establishment']);
    setupClickListener('changetype-geocode', ['geocode']);

    document.getElementById('use-strict-bounds')
      .addEventListener('click', function() {
        console.log('Checkbox clicked! New state=' + this.checked);
        autocomplete.setOptions({
          strictBounds: this.checked
        });
      });

      google.maps.event.addDomListener(window, 'load', setupClickListener);
  }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI98lHacZgM9WB1k105dIgSqeVD7KJDGM&libraries=places&callback=initMap" async defer></script>




<script>
  $(function() {
    'use strict';

    $('.carousel .carousel-item[data-src]').each(function() {
      var $this = $(this);

      $this.prepend([
        '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
      ].join(''));
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.add_cart').click(function() {
      var produk_id = $(this).data("produkid");
      var produk_nama = $(this).data("produknama");
      var produk_harga = $(this).data("produkharga");
      var quantity = $('#' + produk_id).val();
      $.ajax({
        url: "<?php echo base_url(); ?>index.php/cart/add_to_cart",
        method: "POST",
        data: {
          produk_id: produk_id,
          produk_nama: produk_nama,
          produk_harga: produk_harga,
          quantity: quantity
        },
        success: function(data) {
          $('#detail_cart').html(data);
        }
      });
    });

    // Load shopping cart
    $('#detail_cart').load("<?php echo base_url(); ?>index.php/cart/load_cart");

    //Hapus Item Cart
    $(document).on('click', '.hapus_cart', function() {
      var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
      $.ajax({
        url: "<?php echo base_url(); ?>cart/hapus_cart",
        method: "POST",
        data: {
          row_id: row_id
        },
        success: function(data) {
          $('#detail_cart').html(data);
        }
      });



    });
  });
</script>


<script>
  // Initial Ratings
  const ratings = {
    sony: 4.5,
    samsung: 3.4,
    vizio: 2.3,
    panasonic: 3.6,
    phillips: 4.1
  }

  // Total Stars
  const starsTotal = 5;

  // Run getRatings when DOM loads
  document.addEventListener('DOMContentLoaded', getRatings);

  // Form Elements
  const productSelect = document.getElementById('product-select');
  const ratingControl = document.getElementById('rating-control');

  // Init product
  let product;

  // Product select change
  productSelect.addEventListener('change', (e) => {
    product = e.target.value;
    // Enable rating control
    ratingControl.disabled = false;
    ratingControl.value = ratings[product];
  });

  // Rating control change
  ratingControl.addEventListener('blur', (e) => {
    const rating = e.target.value;

    // Make sure 5 or under
    if (rating > 5) {
      alert('Please rate 1 - 5');
      return;
    }

    // Change rating
    ratings[product] = rating;

    getRatings();
  });

  // Get ratings
  function getRatings() {
    for (let rating in ratings) {
      // Get percentage
      const starPercentage = (ratings[rating] / starsTotal) * 100;

      // Round to nearest 10
      const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

      // Set width of stars-inner to percentage
      document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;

      // Add number rating
      document.querySelector(`.${rating} .number-rating`).innerHTML = ratings[rating];
    }
  }
</script>



<script>
  $('.qty').on('input', function () {
    
    var value = $(this).val();
    
    if ((value !== '') && (value.indexOf('.') === -1)) {
        
        $(this).val(Math.max(Math.min(value, 5), -5));
    }
});
  
  $('body').on('click', '.qtyplus', function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    var $quantityField = $this.parent().find('.qty');
    var currentVal = parseInt($quantityField.val());
    if (!isNaN(currentVal) && currentVal < 5) {
      $quantityField.val(currentVal + 1);
      calc($context);
    }
  });
  $('body').on('click', '.qtyminus', function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    var $quantityField = $this.parent().find('.qty');
    var currentVal = parseInt($quantityField.val());
    if (!isNaN(currentVal) && currentVal > 0) {
      $quantityField.val(currentVal - 1);
      calc($context);
    }
  });

  function calc($context) {
    $('.price', $context).text();
    var quantity = $('.qty', $context).val();
    var price = $('.price', $context).text();;
    var total = quantity * price;
    $context.find('.total-price').html("<span>Rp. </span>" + total);



    var sum = 0;
    $(".total-price").each(function() {
      var $this = $(this);
      var $context = $this.parents('.price-row');
      var val = $($this, $context).text();
      if (val) {
        val = parseFloat(val.replace(/^\Rp./, ""));
        sum += !isNaN(val) ? val : 0;
      }
    });
    $('#total-sum').html("<span>Harga Total: </span>" + "<span>Rp. </span>" + sum);
    $('#total-harga').val(sum);
  }
  var qty = $(".qty");
  qty.keyup(function() {
    var $this = $(this);
    var $context = $this.parents('.price-row');
    calc($context);
  });



  var specialKeys = new Array();
  specialKeys.push(8); //Backspace
  $(function() {
    $(".qty").bind("keypress", function(e) {
      var keyCode = e.which ? e.which : e.keyCode
      var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
      $(this).parents('.price-row').find('.error').css("display", ret ? "none" : "inline");
      return ret;
    });
    $(".qty").bind("paste", function(e) {
      return false;
    });
    $(".qty").bind("drop", function(e) {
      return false;
    });
  });
</script>





</body>

</html>
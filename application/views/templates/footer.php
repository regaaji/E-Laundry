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
      <p class="text-white footer-left-1"><a href="#"><i class="fa fa-envelope" style="color: #007bff; padding-right: 10px;"></i>e-laundry@email.com</a></p>
    </div>
    <div class="col-md-3">
      <h4 class="text-white mt-5">Kategori</h4>
      <p class="text-white mt-4 footer-left"><a href="#">Home</a></p>
      <p class="text-white footer-left"><a href="#">Tentang Kami</a></p>
      <p class="text-white footer-left"><a href="#">Layanan</a></p>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- sweetalert -->
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/mysweet.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI98lHacZgM9WB1k105dIgSqeVD7KJDGM&callback=initMap"></script>
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
    // New York
    var startlat = -8.13593475;
    var startlon = 111.64019830;

    var options = {
     center: [startlat, startlon],
     zoom: 9
    }

    document.getElementById('lat').value = startlat;
    document.getElementById('lon').value = startlon;

    var map = L.map('map', options);
    var nzoom = 12;

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

    var myMarker = L.marker([startlat, startlon], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
     var lat = myMarker.getLatLng().lat.toFixed(8);
     var lon = myMarker.getLatLng().lng.toFixed(8);
     var czoom = map.getZoom();
     if(czoom < 18) { nzoom = czoom + 2; }
     if(nzoom > 18) { nzoom = 18; }
     if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
     document.getElementById('lat').value = lat;
     document.getElementById('lon').value = lon;
     myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
    });

    function chooseAddr(lat1, lng1)
    {
     myMarker.closePopup();
     map.setView([lat1, lng1],18);
     myMarker.setLatLng([lat1, lng1]);
     lat = lat1.toFixed(8);
     lon = lng1.toFixed(8);
     document.getElementById('lat').value = lat;
     document.getElementById('lon').value = lon;
     myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
    }

    function myFunction(arr)
    {
     var out = "<br />";
     var i;

     if(arr.length > 0)
     {
      for(i = 0; i < arr.length; i++)
      {
       out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
     }
     document.getElementById('results').innerHTML = out;
    }
    else
    {
      document.getElementById('results').innerHTML = "Sorry, no results...";
    }

    }

    function addr_search()
    {
     var inp = document.getElementById("addr");
     var xmlhttp = new XMLHttpRequest();
     var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
     xmlhttp.onreadystatechange = function()
     {
       if (this.readyState == 4 && this.status == 200)
       {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
    }
  
</script>





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
  // const ratings = {
  //   sony: 4.5,
  //   samsung: 3.4,
  //   vizio: 2.3,
  //   panasonic: 3.6,
  //   phillips: 4.1
  // }

  // // Total Stars
  // const starsTotal = 5;

  // // Run getRatings when DOM loads
  // document.addEventListener('DOMContentLoaded', getRatings);

  // // Form Elements
  // const productSelect = document.getElementById('product-select');
  // const ratingControl = document.getElementById('rating-control');

  // // Init product
  // let product;

  // // Product select change
  // productSelect.addEventListener('change', (e) => {
  //   product = e.target.value;
  //   // Enable rating control
  //   ratingControl.disabled = false;
  //   ratingControl.value = ratings[product];
  // });

  // // Rating control change
  // ratingControl.addEventListener('blur', (e) => {
  //   const rating = e.target.value;

  //   // Make sure 5 or under
  //   if (rating > 5) {
  //     alert('Please rate 1 - 5');
  //     return;
  //   }

  //   // Change rating
  //   ratings[product] = rating;

  //   getRatings();
  // });

  // // Get ratings
  // function getRatings() {
  //   for (let rating in ratings) {
  //     // Get percentage
  //     const starPercentage = (ratings[rating] / starsTotal) * 100;

  //     // Round to nearest 10
  //     const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

  //     // Set width of stars-inner to percentage
  //     document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;

  //     // Add number rating
  //     document.querySelector(`.${rating} .number-rating`).innerHTML = ratings[rating];
  //   }
  // }
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cetak</title>
  <style>
      h1{
        margin-top: 40px;
        text-align: center;
        font-family: arial;
        font-size: 30px;
      }
      h2{
        text-align: center;
        font-family: verdana;
        font-size: 20px;
      }
      h3{
        margin-top: 20px;
        text-align: center;
        font-size: 20px;
      }
      .total{
        font-size: 20px;
        font-weight: bold;
        font-family: Georgia;
        margin-left: 100px;
      }
      .tanggal{
        font-size: 20px;
        font-weight: bold;
        font-family: Georgia;
        text-align: right;
        margin-top: -60px;
        margin-right: 100px;
      }
      .tanggal1{
        text-align: right;
        font-weight: bold;
        font-size: 20px;
        font-family: Georgia;
        margin-right: 90px;
        margin-top: -60px;
      }
      .harga{
        font-size: 20px;
        font-weight: bold;
        font-family: Georgia;
        margin-left: 95px;
        margin-top: 20px; 
      }
      .kontak{
        float: right;
        background-color: skyblue;
        width: 30%;
        color: white;
        padding-right: 40px;
        padding-top: 20px;
        text-align: right;
        margin-top: 40px;
      }

      .kontak1{
        float: left;
        background-color: skyblue;
        width: 30%;
        color: white;
        padding-left: 40px;
        padding-top: 20px;
        text-align: left;
        margin-top: 40px;
      }

      .nama_penerima{
        margin-right: 50px;
      }

      .nama_handphone{
       padding-top: 10px;
        margin-bottom: 10px;
        margin-right: 30px;
      }

      .nama_handphone1{
       padding-top: 10px;
        margin-bottom: 10px;
        
      }

      .nama_penerima1{
        margin-right: 50px;
      }
      .penerima{
        margin-top: 40px; 
        margin-right: 60px;
        text-align: right;
        font-weight: bold;
        margin-bottom: -20px;
      }

      .penerima1{
        margin-top: -40px; 
        margin-left: 60px;
        text-align: left;
        font-weight: bold;
        margin-bottom: -20px;
      }
      #namaP{
          margin-right: 130px;
          margin-top: 10px;
          margin-bottom: 10px;
          font-weight: bold;
      }
      #namaHp{
        margin-right: 65px;
        padding-bottom: 20px;
        font-weight: bold;
      }
      .garis{
        border-bottom: 1px dashed white;
        margin-left: 50px;
      }
       .garis1{
        border-bottom: 1px dashed white;
        margin-right: 50px;
      }
  </style>
</head>
<body>
  <h1>E-Laundry</h1>
  <h3>Layanan Pencucian Terbaik</h3>
  <img src="/opt/lampp/htdocs/E-Laundry/assets/img/icon-layanan/e-laundry3.png" alt="" style="margin-top: -100px; width: 15%">
  <hr>
  <h2>Semoga anda menikmati pelayanan kami</h2>
  <br>
     
      <div class="total">Total</div>
      <div class="tanggal">Tipe Pembayaran</div>
      <div class="harga">Rp. <?=  $detail['hargab']; ?></div>
      <div class="tanggal1"><?= $detail['uangb']; ?></div>
      <div class="penerima">Kontak Penerima :</div>
      <div class="kontak">
        <div class="nama_penerima">Nama Penerima :</div>
        <div id="namaP">
         <?=  $detail['nama']; ?>
        </div>
        <div class="garis"></div>
        <div class="nama_handphone">Nomor Handphone :</div>
        <div id="namaHp">
         <?=  $detail['telepon']; ?>
        </div>
      </div>

      <div class="penerima1">Detail Pesanan :</div>
      <div class="kontak1">
        <div class="nama_penerima1">Detail Pengiriman :</div>
        <div id="namaP">
         <?=  $detail['tanggal_kirimb']; ?> / <?=  $detail['waktu_kirimb']; ?>
        </div>
        
        <div class="garis1"></div>
        <div class="nama_handphone1">Detail Penjemputan :</div>
        <div id="namaHp">
         <?=  $detail['tanggal_jemputb']; ?> / <?=  $detail['waktu_jemputb']; ?>
        </div>
        
        <div class="garis1"></div>
         <div class="nama_handphone1">Nama Brand Laundry :</div>
        <div id="namaP">
        </div>
          Basic Laundry
        <div class="garis1"></div>
         <div class="nama_handphone1">Alamat Lokasi :</div>
        <div id="namaP">
        <?=  $detail['locationb']; ?>
        </div>

        <div class="garis1"></div>
         <div class="nama_handphone1">Rincian Alamat :</div>
        <div id="namaP">
         <?=  $detail['alamatb']; ?>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
      <div id="namaHp">
      <p style="float: right; margin-right: -10px; padding-bottom: 20px; margin-bottom: 20px;">Bukti QrCode :</p>

      </div>
      <br><br>
      <img src="/opt/lampp/htdocs/E-Laundry/assets/img/bukti.png" alt="" style="width: 100px; height: 100px; float: right; margin-top: 20px; margin-right: -30px;">
     <!--  <p>Karangan, <?= date('d-m-Y'); ?></p>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/rega1.jpg" alt="" style="float: right; margin-right: -20%;">
      <strong>Rega Aji</strong> -->
      <br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br>
      <strong style="margin-left: 20px;">PERHATIAN :</strong> <strong style="float: right; margin-right: 50px;">Hormat Kami,</strong>
      <ol>
        <li>Cucian yang tidak diambil dalam waktu 2 bulan,<br> bila rusak / hilang bukan tanggungjawab kami</li>
        <li>Klaim berlaku 24 jam setelah barang diambil</li>
        <li>Kain luntur, berkerut karena sifat kain diluar tanggungan </li>
      </ol>
      <div class="garis2" style="border-bottom: 1px dashed black; width: 20%; float: right; margin-top: -20px; margin-right: 25px;"></div>


</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

      <!-- favicon -->
    <link rel="shorcut icon" href="<?= base_url(); ?>assets/img/icon-layanan/e-laundry1.png">

    <!-- font-awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome5/css/all.css">

    <!-- flaticon -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/flaticon/font/flaticon.css">
    <!-- pixeden -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/pixeden/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <!-- mycss -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/autocomplete2.css">


    <!-- animate -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
        <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css"/>

    <!-- MyFonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <title><?= $judul; ?></title>
    
  </head>
  <body>
  
   <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="container">
      <a class="navbar-brand text-shadow" href="<?= base_url(); ?>">E-Laundry</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home</a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>tentang/">Tentang Kami</a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>layanan/">Layanan</a>
          

       
          <?php if ( isset ($this->session->userdata['masuk_in']) ) : ?>

            <li class="nav-item dropdown mr-3">
              <button class="btn btn-primary dropdown-toggle tombol cek-pesan" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cek Pemesanan
              </button>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <h6 class="dropdown-header">Laundry Satuan</h6>
                <a class="dropdown-item" href="<?= base_url(); ?>Cekpesan1/">Wipe</a>
                <a class="dropdown-item" href="<?= base_url(); ?>Cekpesan/">Essii</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Laundry Kiloan</h6>
                <a class="dropdown-item" href="<?= base_url(); ?>Cekpesan3/">E-Laundry</a>
              </div>
            </li>


            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle tombol" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $this->session->userdata('nama'); ?>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url() ?>daftar/profil"><i class="fa fa-user" style="padding-right: 5px;"></i>Profil</a>
                <a class="dropdown-item" href="<?= base_url() ?>daftar/logout"><i class="fas fa-fw fa-sign-out-alt pr-3"></i>Keluar</a>
              </div>
            </div>

            

          <?php else : ?>
              <a class="nav-item nav-link" href="<?= base_url(); ?>daftar/register">Daftar</a>
              <a class="nav-item  btn btn-primary tombol" href="<?= base_url(); ?>daftar/login">Masuk</a>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </nav>
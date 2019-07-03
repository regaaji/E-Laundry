<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">

     <!-- favicon -->
    <link rel="shorcut icon" href="<?= base_url(); ?>assets/img/icon-layanan/e-laundry1.png">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css">

    <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        E-Laundry
                    </a>
                </li>
                <img src="<?= base_url(); ?>assets/img/<?= $this->session->userdata('gambar'); ?>" alt="" width="50" class="rounded mx-auto d-block mt-3 mb-3">
                <p class="text-center"><?= $this->session->userdata('username'); ?> |  
                    <?php if($this->session->userdata('status') == 'Aktif') : ?>
                    <span class="badge badge-primary">Aktif</span></p>
                    <?php else :  ?>
                    <span class="badge badge-danger">Tidak Aktif</span></p>    
                    <?php endif; ?>
                <li>
                    <a href="<?= base_url(); ?>admin/dashboard/index"><i class="fa fa-dashboard pr-2"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog pr-2"></i><span>Premium Service</span> <i class="fa fa-angle-down pull-right icon-kanan"></i></a>
                    <ul>
                        <li><a href="<?= base_url(); ?>admin/barang1/index"><span>Data Barang</span></a></li>
                        <li><a href="<?= base_url(); ?>admin/admin/index"><span>Data Transaksi</span></a></li>
                        <li><a href="<?= base_url(); ?>admin/grafik/index">Grafik Premium</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cog pr-2"></i><span>Basic Service</span> <i class="fa fa-angle-down pull-right icon-kanan"></i></a>
                    <ul>
                          <li><a href="<?= base_url(); ?>admin/barang/index"><span>Data Barang</span></a></li>
                        <li><a href="<?= base_url(); ?>admin/home/index"><span>Data Transaksi</span></a></li>
                        <li><a href="<?= base_url(); ?>admin/grafik1/index">Grafik Premium</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin/customer/index"><i class="fa fa-user-circle pr-2"></i><span>Customer</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        
        <nav class="navbar navbar-expand-lg fixed navbar-dark" style="background: rgba(0, 0, 0, 0.5);">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars p-2"></i></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a href="nav-item nav-link"><img src="<?= base_url(); ?>assets/img/admin.png" alt="" class="img-fluid rounded-circle gambar-list" width="40"></a>
                <div class="dropdown ml-3">
                        <span class="text-white mr-1">Selamat Datang, </span> 
                         <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-user pr-1"></i> <?= $this->session->userdata('username'); ?>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                          <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="fa fa-bookmark-o"></i>
                            </div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </a>
                     <a class="dropdown-item" href="<?= base_url(); ?>admin/profil/index">
                        <i class="fa fa-user-circle-o pr-1"></i> Profil
                    </a>
                      <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url(); ?>admin/LoginAdmin/logout">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </div>

               
            
            </div>
        </div>
  </nav>
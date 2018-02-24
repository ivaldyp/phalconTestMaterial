<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo-its-biru.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <?= $this->tag->stylesheetLink('bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css') ?>
    <!-- Morris CSS -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/morrisjs/morris.css') ?>
    <!-- <?= $this->tag->stylesheetLink('plugins/bower_components/morrisjs/morris.css') ?> -->
    <!-- Footable CSS -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/footable/css/footable.core.css') ?>    
    <?= $this->tag->stylesheetLink('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') ?>
    <!-- Menu CSS -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') ?>
    <!-- Page plugins css -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css') ?>
    <!-- Color picker plugins css -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css') ?>
    <!-- Date picker plugins css -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>
    <!-- Daterange picker plugins css -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/timepicker/bootstrap-timepicker.min.css') ?>
    <?= $this->tag->stylesheetLink('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>
    <!-- animation CSS -->
    <?= $this->tag->stylesheetLink('css/animate.css') ?>
    <!-- custom CSS -->
    <?= $this->tag->stylesheetLink('css/style.css') ?>
    <?= $this->tag->stylesheetLink('css/testStyle.css') ?>
    <!-- color CSS -->
    <?= $this->tag->stylesheetLink('css/colors/greenCopy.css') ?>
    <?= $this->tag->stylesheetLink('plugins/bower_components/toast-master/css/jquery.toast.css') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?= $this->url->get('Dashboard/homeMahasiswa') ?>">
                        <!-- Logo icon image, you can use font-icon also -->
                        <!--This is dark logo icon-->
                        <img src="../plugins/images/logo-its.png" width="80" height="50">        
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                   <!--  <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <b class="hidden-xs">Mahasiswa</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">SI Akademik</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect" style="display: inline-block;"><img src="../plugins/images/users/valdy.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Ivaldy Putra Lifiari</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05111440000105</span>
                        </a>
                        <!-- <div style="display: inline-block"><span class="hide-menu">Nama Mahasiswa</span></div>
                        <div style="display: inline-block"><span class="hide-menu">NRP Mahasiswa</span></div> -->
                    </li>
                     <li> <a href="<?= $this->url->get('Dashboard/homeMahasiswa') ?>" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i><span class="hide-menu">Beranda</span></a></li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-account fa-fw" data-icon="v"></i><span class="hide-menu">PROFIL<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="Kurikulum.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i> <span class="hide-menu">DATA PRIBADI</span></a></li>
                            <li><a href="Prasyarat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i> <span class="hide-menu">DATA AKADEMIK</span></a></li>
                            <li><a href="Perkuliahan.html"><i class="mdi mdi-numeric-3-box-multiple-outline fa-fw"></i> <span class="hide-menu">DATA PEKERJAAN</span></a></li>
                            <li><a href="Kurikulum.html"><i class="mdi mdi-numeric-4-box-multiple-outline fa-fw"></i> <span class="hide-menu">DATA ORTU</span></a></li>
                            <li><a href="Prasyarat.html"><i class="mdi mdi-numeric-5-box-multiple-outline fa-fw"></i> <span class="hide-menu">RIWAYAT KEAKTIFAN</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-page-variant fa-fw"></i> <span class="hide-menu">KURIKULUM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i> <span class="hide-menu">DATA KURIKULUM</span></a></li>
                            <li><a href="blank.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i> <span class="hide-menu">PRASYARAT MATA KULIAH</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i><span class="hide-menu">FRS<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?= $this->url->get('FRS/buatFRSSetuju') ?>"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">PENGISIAN FRS</span></a></li>
                            <li><a href="<?= $this->url->get('FRS/jadwalKuliah') ?>"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">JADWAL KULIAH</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-format-list-numbers fa-fw"></i> <span class="hide-menu">KUESIONER<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">KUESIONER MATA KULIAH</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">KUESIONER DOSEN</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">NILAI KULIAH PER SEMESTER</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">RANGKING INDEKS PRESTASI</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-3-box-multiple-outline fa-fw"></i><span class="hide-menu">TRANSKRIP</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-coin fa-fw"></i> <span class="hide-menu">BIAYA PENDIDIKAN<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">RIWAYAT PEMBAYARAN</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">TAGIHAN</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-file-check fa-fw"></i><span class="hide-menu">SKEM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">PENGISIAN</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">LAPORAN</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-file fa-fw"></i> <span class="hide-menu">SKPI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="mdi mdi-numeric-1-box-multiple-outline fa-fw"></i><span class="hide-menu">PENGISIAN</span></a></li>
                            <li><a href="chat.html"><i class="mdi mdi-numeric-2-box-multiple-outline fa-fw"></i><span class="hide-menu">PRATINJAU</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-school fa-fw"></i> <span class="hide-menu">WISUDA<span class="fa arrow"></span></span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- NEW ROW -->
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Beranda</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Beranda</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="row">
                        <!-- <div class="col-md-1 b-r"><img src="../plugins/images/users/varun.jpg" alt="varun" class="img-circle img-responsive" width="50" height="50"></div>
                        <div class="col-md-2 col-xs-6 b-r"> <strong>Nama</strong>
                            <br>
                            <p class="text-muted">Ivaldy Putra Lifiari</p>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> <strong>NRP</strong>
                            <br>
                            <p class="text-muted">05111440000105</p>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> <strong>Jurusan</strong>
                            <br>
                            <p class="text-muted">Teknik Informatika</p>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> <strong>Jenis / Jalur Masuk</strong>
                            <br>
                            <p class="text-muted">Reguler / SBMPTN</p>
                        </div>
                        <div class="col-md-1 col-xs-6 b-r"> <strong>SPP</strong>
                            <br>
                            <p class="text-muted">Dibayar<i class="ti-check text-success"></i></p>
                        </div>
                        <div class="col-md-1 col-xs-6 b-r"> <strong>FRS</strong>
                            <br>
                            <p class="text-muted">Diisi <i class="ti-close text-danger"></i></p>
                        </div>
                        <div class="col-md-1 col-xs-6 b-r"> <strong>IPD</strong>
                            <br>
                            <p class="text-muted">Diisi <i class="ti-close text-danger"></i></p>
                        </div> -->
                        <div class="col-md-1"><img src="../plugins/images/users/valdy.jpg" alt="user" class="img-circle img-responsive" width="100" height="100"></a>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r">
                            <h4 style="font-weight: bold;">Selamat Datang!</h4>
                            <h4 class="m-t-15">Ivaldy Putra Lifiari</h4>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> 
                            <h4 style="font-weight: bold;"><i class="icon-user m-r-10"></i>NRP</h4>
                            <h4 class="m-t-15">05111440000105</h4>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r">
                            <h4 style="font-weight: bold;"><i class="icon-location-pin m-r-10"></i>Departemen</h4>
                            <h4 class="m-t-15">Informatika</h4>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r">
                            <h4 style="font-weight: bold;"><i class="icon-book-open m-r-10"></i>Periode</h4>
                            <h4 class="m-t-15">Genap 2017/2018</h4>
                        </div>
                        <div class="col-md-1 col-xs-6 b-r">
                            <h4 style="font-weight: bold; font-size: 16px;" class="tooltip-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sudah Dibayar">SPP</h4>
                            <h4 class="m-t-15"><i class="fa fa-check text-success pull-right m-b-15"></i></h4>
                        </div>
                        <div class="col-md-1 col-xs-6 b-r">
                            <h4 style="font-weight: bold; font-size: 16px;" class="tooltip-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Belum Diisi">FRS</h4>
                            <h4 class="m-t-15"><i class="fa fa-times text-danger pull-right m-b-15"></i></h4>
                        </div>
                        <div class="col-md-1 col-xs-6">
                            <h4 style="font-weight: bold; font-size: 16px;" class="tooltip-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Belum Diisi">Kuesioner</h4>
                            <h4 class="m-t-15"><i class="fa fa-times text-danger pull-right m-b-15"></i></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEW ROW -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3.99 <i class="ti-arrow-down text-danger"></i></h3>
                                </li>
                                <li>
                                    <h4>IPS Semester Lalu</h4>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-info"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3.56 <i class="ti-arrow-up text-success"></i></h3>
                                </li>
                                <li class="col-middle">
                                    <h4>IPK</h4>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-wallet"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">122/144</h3>
                                </li>
                                <li>
                                    <h4>SKS Tempuh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 
                                            <span class="sr-only">90% Complete (success)</span> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6  b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">13/16</h3>
                                </li>
                                <li>
                                    <h4>Minggu Perkuliahan</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                            <span class="sr-only">90% Complete (success)</span> 
                                        </div>
                                    </div>
                                </li>   
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>JADWAL PERKULIAHAN: GENAP 2017/2018</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest1">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table">
                                            <thead>
                                                <tr>
                                                    <th>Mata Kuliah</th>
                                                    <th style="text-align: center;">Kelas</th>
                                                    <th style="text-align: center;">Hari</th>
                                                    <th style="text-align: center;">Waktu</th>
                                                    <th style="text-align: center;">Ruang</th>
                                                    <th style="text-align: center;">Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Kode Matkul 1 - Matkul 1<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">A</td>
                                                    <td style="text-align: center;">Senin</td>
                                                    <td style="text-align: center;">07.30-10.00</td>
                                                    <td style="text-align: center;">IF-101</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Matkul 2 - Matkul 2<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">B</td>
                                                    <td style="text-align: center;">Senin</td>
                                                    <td style="text-align: center;">10.00-12.30</td>
                                                    <td style="text-align: center;">IF-104</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Matkul 3 - Matkul 3<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">D</td>
                                                    <td style="text-align: center;">Kamis</td>
                                                    <td style="text-align: center;">13.00-15.30</td>
                                                    <td style="text-align: center;">IF-103</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Matkul 4 - Matkul 4<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">F</td>
                                                    <td style="text-align: center;">Senin</td>
                                                    <td style="text-align: center;">07.30-10.00</td>
                                                    <td style="text-align: center;">IF-101</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Matkul 5 - Matkul 5<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">-</td>
                                                    <td style="text-align: center;">Jumat</td>
                                                    <td style="text-align: center;">10.00-12.30</td>
                                                    <td style="text-align: center;">IF-106</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                                <tr>
                                                    <td>Kode Matkul 6 - Matkul 6<br>
                                                        <div class="progress progress-lg">
                                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">-</td>
                                                    <td style="text-align: center;">Selasa</td>
                                                    <td style="text-align: center;">15.30-18.00</td>
                                                    <td style="text-align: center;">IF-108</td>
                                                    <td style="text-align: center;">-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>TANGGAL PENTING</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest2">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-3" style="text-align: center;">Tanggal</th>
                                                    <th style="text-align: center;">Kegiatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Acara Olahraga Bersama KM ITS</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Mulai Pembayaran SPP</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Batas Pembayaran SPP</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Mulai Pengisian FRS</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Batas Pengisian FRS</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Ulang Tahun ITS</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Mulai Pengisian IPD</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">21/02/2018</td>
                                                    <td>Batas Pengisian IPD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-themecolor">
                    <div class="panel-heading">
                        <center>PENGUMUMAN</center>
                    </div>
                    <div class="panel-body">
                        <div id="slimtest6">
                            <div class="comment-center">
                                <div class="comment-body">
                                    <div class="circle-md circle bg-info"><i class="ti-announcement"></i></div>
                                    <div class="mail-contnet">
                                        <span class="time m-r-10"><i class="icon-calender"></i> 20  may 2016</span> 
                                        <span class="time"><i class="icon-clock"></i> 15.00</span>
                                        <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="circle-md circle bg-info"><i class="ti-announcement"></i></div>
                                    <div class="mail-contnet">
                                        <span class="time m-r-10"><i class="icon-calender"></i> 20  may 2016</span> 
                                        <span class="time"><i class="icon-clock"></i> 15.00</span>
                                        <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <div class="circle-md circle bg-info"><i class="ti-announcement"></i></div>
                                    <div class="mail-contnet">
                                        <span class="time m-r-10"><i class="icon-calender"></i> 20  may 2016</span> 
                                        <span class="time"><i class="icon-clock"></i> 15.00</span>
                                        <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- <div class="white-box" style="padding-bottom: 43px"> -->
                <div class="panel">
                    <div class="panel panel-themecolor">
                        <div class="panel-heading">
                            <center>IPS</center>
                        </div>
                        <div class="panel-body">
                            <div id="chartmorristest1" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>


        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/jquery/dist/jquery.min.js') ?>
    <!-- Bootstrap Core JavaScript -->
    <?= $this->tag->javascriptInclude('bootstrap/dist/js/bootstrap.min.js') ?>
    <!-- Menu Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') ?>
    <!--slimscroll JavaScript -->
    <?= $this->tag->javascriptInclude('js/jquery.slimscroll.js') ?>
    <!--Wave Effects -->
    <?= $this->tag->javascriptInclude('js/waves.js') ?>
    <!-- Custom Theme JavaScript -->
    <?= $this->tag->javascriptInclude('js/cbpFWTabs.js') ?>
    <?= $this->tag->javascriptInclude('js/custom.min.js') ?>
    <!-- Footable -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/footable/js/footable.all.min.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') ?>
    <!--FooTable init-->
    <?= $this->tag->javascriptInclude('js/footable-init.js') ?>
    <?= $this->tag->javascriptInclude('js/footable-pagination-example.js') ?>
    <!--Morris JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/raphael/raphael-min.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/morrisjs/morris.js') ?>
    <?= $this->tag->javascriptInclude('js/morris-data.js') ?>
    <!-- Table JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/bootstrap-table/dist/bootstrap-table.ints.js') ?>
    <!-- Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/moment/moment.js') ?>
    <!-- Clock Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js') ?>
    <!-- Color Picker Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') ?>
    <!--Style Switcher -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') ?>

    <!-- MADE BY ME -->
    <!-- tabs di IPD/buatKuisionerIPD -->
    <?= $this->tag->javascriptInclude('js/sttabs.js') ?>
    <!-- tabel chart IPS Dashboard/homeMahasiswa -->
    <?= $this->tag->javascriptInclude('js/testmorrisb.js') ?>
    <!-- slimscroll -->
    <?= $this->tag->javascriptInclude('js/testslimscroll.js') ?>
    
</body>

</html>
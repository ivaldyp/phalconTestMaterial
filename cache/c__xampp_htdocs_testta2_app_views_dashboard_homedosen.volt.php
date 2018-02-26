<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logo-its-biru.png">
    <title>SIAKAD - Sistem Akademik</title>
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
    <?= $this->tag->stylesheetLink('css/colors/blueCopy.css') ?>
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
                    <a class="logo" href="index.html">
                        <b><img src="../plugins/images/logo-its.png" alt="home" height="49" width="80"/></b>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b> Dosen</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../plugins/images/users/pakrizky.jpg" alt="user" /></div>
                                    <div class="u-text"><h4>Steave Jobs</h4><p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
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
                        <a href="#" class="waves-effect" style="display: inline-block;"><img src="../plugins/images/users/pakrizky.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Nama Dosen</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP Dosen</span>
                        </a>
                        <!-- <div style="display: inline-block"><span class="hide-menu">Nama Mahasiswa</span></div>
                        <div style="display: inline-block"><span class="hide-menu">NRP Mahasiswa</span></div> -->
                    </li>
                    <li> <a href="<?= $this->url->get('Homepage/mahasiswa') ?>" class="waves-effect active"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu">BERANDA<span></span></span></a>
                    </li>
                    <li> <a href="<?= $this->url->get('Homepage/mahasiswa') ?>" class="waves-effect"><i class="mdi mdi-account fa-fw" data-icon="v"></i> <span class="hide-menu">PROFIL<span></span></span></a>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-page-variant fa-fw"></i> <span class="hide-menu">KURIKULUM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?= $this->url->get('SKEM/index') ?>"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">DATA MATA KULIAH</span></a></li>
                            <li><a href="<?= $this->url->get('SKPI/index') ?>"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">PRASYARAT MK</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">FRS<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?= $this->url->get('Pembelajaran/ubahDosenDosenWali') ?>"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">PERWALIAN</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-home-map-marker fa-fw"></i> <span class="hide-menu">KELAS<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">KELAS DEPARTEMEN</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">KELAS UPMB</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-calendar-clock fa-fw"></i> <span class="hide-menu">JADWAL<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">JADWAL PERKULIAHAN PRODI</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">JADWAL MENGAJAR DOSEN</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">JADWAL PER MAHASISWA</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ENTRI NILAI EVALUASI</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">LIHAT NILAI MAHASISWA</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">LIHAT NILAI PER KELAS</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-format-list-numbers fa-fw"></i> <span class="hide-menu">IPD<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">FORM KUISIONER MK&DOSEN</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">LIHAT NILAI IPD PER PRODI</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">HASIL KUISIONER IPD</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-pencil-box fa-fw"></i> <span class="hide-menu">SAR<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">SAR 5 - DOSEN</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">SAR 4 - RMK</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">REKAPITULASI PER SEMESTER</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">KUISIONER SAR RMK</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">KUISIONER SAR DOSEN</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-file-check fa-fw"></i> <span class="hide-menu">SKEM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">VALIDASI</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-file-document fa-fw"></i> <span class="hide-menu">SKPI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">MONITORING</span></a></li>
                        </ul>
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
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12 b-r">
                            <div class="col-md-3 col-sm-3 text-center">
                            <a href="contact-detail.html"><img src="../plugins/images/users/pakrizky.jpg" alt="user" class="img-circle" width="100" height="100"></a>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <h3 style="font-weight: bold;">Selamat Datang!</h3>
                                <h2 class="m-t-15">Rizky Januar Akbar</h2>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> 
                            <h3 style="font-weight: bold;"><i class="icon-user m-r-10"></i>NIP</h3>
                            <h4 class="pull-right">198701032014041001</h4>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r">
                            <h3 style="font-weight: bold;"><i class="icon-location-pin m-r-10"></i>Departemen</h3>
                            <h4 class="pull-right">Informatika</h4>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <h3 style="font-weight: bold;"><i class="icon-book-open m-r-10"></i>Periode</h3>
                            <h4 class="pull-right">Genap 2017/2018</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 b-r">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-info"><i class="icon-people"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">20/20</h3>
                                </li>
                                <li>
                                    <h4>Perwalian <i class="fa fa-check pull-right text-success"></i></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" style="width: 100%;" role="progressbar"></div>
                                    </div>
                                    <h5>Batas : 25 Desember 2018</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-r">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class="icon-calender"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">13/16</h3>
                                </li>
                                <li>
                                    <h4>Minggu Perkuliahan</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 60%;" role="progressbar"></div>
                                    </div>
                                    <h5>Berakhir : 1 Januari 2019</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-r">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="icon-doc"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3/5</h3>
                                </li>
                                <li>
                                    <h4>Pengisian SAR</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                            <span class="sr-only">90% Complete (success)</span> 
                                        </div>
                                    </div>
                                    <h5>Batas : 25 Desember 2018</h5>
                                </li>   
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-danger"><i class="icon-notebook"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">0/4</h3>
                                </li>
                                <li>
                                    <h4>Pengisian Nilai</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                            <span class="sr-only">90% Complete (success)</span> 
                                        </div>
                                    </div>
                                    <h5>Batas : 25 Desember 2018</h5>
                                </li>   
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>KULIAH HARI INI</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest4">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table">
                                            <thead>
                                                <tr>
                                                    <th  width="120" style="text-align: center;">Mata Kuliah</th>
                                                    <th style="text-align: center;">Kelas</th>
                                                    <th style="text-align: center;">Waktu</th>
                                                    <th style="text-align: center;">Ruang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">Kode Matkul 1 - Matkul 1</td>
                                                    <td style="text-align: center;">A</td>
                                                    <td class="text-nowrap" style="text-align: center;">07.30 - 09.30</td>
                                                    <td style="text-align: center;">IF-101</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">Kode Matkul 2 - Matkul 2</td>
                                                    <td style="text-align: center;">B</td>
                                                    <td class="text-nowrap" style="text-align: center;">10.00 - 12.00</td>
                                                    <td style="text-align: center;">IF-104</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">Kode Matkul 3 - Matkul 3</td>
                                                    <td style="text-align: center;">D</td>
                                                    <td class="text-nowrap" style="text-align: center;">13.00 - 15.00</td>
                                                    <td style="text-align: center;">IF-103</td>
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
            
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>JADWAL MENGAJAR</center>
                            </div>
                            <div class="panel-body">
                                <section>
                                    <div class="sttabs tabs-style-linetriangle">
                                        <nav>
                                            <ul>
                                                <li><a href="#section-linetriangle-1"><span class="visible-xs"><p>SE</p></span><span class="hidden-xs"> Senin</span></a></li>
                                                <li><a href="#section-linetriangle-2"><span class="visible-xs"><p>SL</p></span><span class="hidden-xs"> Selasa</span></a></li>
                                                <li><a href="#section-linetriangle-3"><span class="visible-xs"><p>RB</p></span><span class="hidden-xs"> Rabu</span></a></li>
                                                <li><a href="#section-linetriangle-4"><span class="visible-xs"><p>KM</p></span><span class="hidden-xs"> Kamis</span></a></li>
                                                <li><a href="#section-linetriangle-5"><span class="visible-xs"><p>JM</p></span><span class="hidden-xs"> Jumat</span></a></li>
                                                <li><a href="#section-linetriangle-6"><span class="visible-xs"><p>SB</p></span><span class="hidden-xs"> Sabtu</span></a></li>
                                            </ul>
                                        </nav>
                                        <div id="slimtest1">
                                            <div class="content-wrap">
                                                <section id="section-linetriangle-1">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover manage-u-table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align: center;">Mata Kuliah</th>
                                                                    <th style="text-align: center;">Kelas</th>
                                                                    <th class="text-nowrap" style="text-align: center;">Waktu</th>
                                                                    <th style="text-align: center;">Ruang</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kode Matkul 1 - Matkul 1</td>
                                                                    <td style="text-align: center;">A</td>
                                                                    <td style="text-align: center;">07.30</td>
                                                                    <td style="text-align: center;">IF-101</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 2 - Matkul 2</td>
                                                                    <td style="text-align: center;">B</td>
                                                                    <td style="text-align: center;">10.00</td>
                                                                    <td style="text-align: center;">IF-104</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <section id="section-linetriangle-2">
                                                    <h1 style="text-align: center; margin-top: 60px;">Tidak Ada Jadwal</h1>
                                                </section>
                                                <section id="section-linetriangle-3">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover manage-u-table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align: center;">Mata Kuliah</th>
                                                                    <th style="text-align: center;">Kelas</th>
                                                                    <th class="text-nowrap" style="text-align: center;">Pukul</th>
                                                                    <th style="text-align: center;">Ruang</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kode Matkul 1 - Matkul 1</td>
                                                                    <td style="text-align: center;">A</td>
                                                                    <td style="text-align: center;">07.30</td>
                                                                    <td style="text-align: center;">IF-101</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 2 - Matkul 2</td>
                                                                    <td style="text-align: center;">B</td>
                                                                    <td style="text-align: center;">10.00</td>
                                                                    <td style="text-align: center;">IF-104</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <section id="section-linetriangle-4">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover manage-u-table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align: center;">Mata Kuliah</th>
                                                                    <th style="text-align: center;">Kelas</th>
                                                                    <th class="text-nowrap" style="text-align: center;">Pukul</th>
                                                                    <th style="text-align: center;">Ruang</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kode Matkul 1 - Matkul 1</td>
                                                                    <td style="text-align: center;">A</td>
                                                                    <td style="text-align: center;">07.30</td>
                                                                    <td style="text-align: center;">IF-101</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 2 - Matkul 2</td>
                                                                    <td style="text-align: center;">B</td>
                                                                    <td style="text-align: center;">10.00</td>
                                                                    <td style="text-align: center;">IF-104</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <section id="section-linetriangle-5">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover manage-u-table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align: center;">Mata Kuliah</th>
                                                                    <th style="text-align: center;">Kelas</th>
                                                                    <th class="text-nowrap" style="text-align: center;">Pukul</th>
                                                                    <th style="text-align: center;">Ruang</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kode Matkul 1 - Matkul 1</td>
                                                                    <td style="text-align: center;">A</td>
                                                                    <td style="text-align: center;">07.30</td>
                                                                    <td style="text-align: center;">IF-101</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 2 - Matkul 2</td>
                                                                    <td style="text-align: center;">B</td>
                                                                    <td style="text-align: center;">10.00</td>
                                                                    <td style="text-align: center;">IF-104</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kode Matkul 3 - Matkul 3</td>
                                                                    <td style="text-align: center;">D</td>
                                                                    <td style="text-align: center;">13.00</td>
                                                                    <td style="text-align: center;">IF-103</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </section>
                                                <section id="section-linetriangle-6">
                                                    <h1 style="text-align: center; margin-top: 60px;">Tidak Ada Jadwal</h1>
                                                </section>
                                            </div>
                                        </div>
                                        <!-- /content -->
                                    </div>
                                    <!-- /tabs -->
                                </section>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>PERWALIAN</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest2">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Nama</th>
                                                    <th style="text-align: center;">NRP</th>
                                                    <th style="text-align: center;">IPS</th>
                                                    <th style="text-align: center;">IPK</th>
                                                    <th style="text-align: center; width: 60%;">SKS Diambil</th>
                                                    <th style="text-align: center;">Perwalian</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">24</td>
                                                    <td style="text-align: center;"><span class="label label-info label-rounded">Disetujui</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">20</td>
                                                    <td style="text-align: center;"><span class="label label-info label-rounded">Disetujui</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">-</td>
                                                    <td style="text-align: center;"><span class="label label-danger label-rounded">Belum Disetujui</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">24</td>
                                                    <td style="text-align: center;"><span class="label label-info label-rounded">Disetujui</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">21</td>
                                                    <td style="text-align: center;"><span class="label label-info label-rounded">Disetujui</span></td>
                                                </tr>
                                                <tr> 
                                                    <td>Manuel</td>
                                                    <td style="text-align: center;">511410001</td>
                                                    <td style="text-align: center;">3.50</td>
                                                    <td style="text-align: center;">3.49</td>
                                                    <td style="text-align: center;">18</td>
                                                    <td style="text-align: center;"><span class="label label-info label-rounded">Disetujui</span></td>
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

            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>RENCANA DAN REALISASI MENGAJAR</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest3">
                                    <ul class="country-state">
                                        <li>
                                            <h2>Keamanan Jaringan</h2>
                                            <span class="m-r-10"><i class="icon-calender"></i> RABU</span>
                                            <span class="m-r-10"><i class="icon-clock"></i> 13.00 - 15.00</span>
                                            <span class="m-r-10"><i class="icon-location-pin"></i> IF-101</span>
                                            <h5 class="m-t-5">Realisasi/Rencana : 6/8<span class="pull-right">60%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>Keamanan Informasi Jaringan</h2>
                                            <span class="m-r-10"><i class="icon-calender"></i> KAMIS</span>
                                            <span class="m-r-10"><i class="icon-clock"></i> 13.00 - 15.00</span>
                                            <span class="m-r-10"><i class="icon-location-pin"></i> IF-101</span>
                                            <h5 class="m-t-5">Realisasi/Rencana : 8/8<span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>APSI</h2>
                                            <span class="m-r-10"><i class="icon-calender"></i> RABU</span>
                                            <span class="m-r-10"><i class="icon-clock"></i> 13.00 - 15.00</span>
                                            <span class="m-r-10"><i class="icon-location-pin"></i> IF-101</span>
                                            <h5 class="m-t-5">Realisasi/Rencana : 8/8<span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>Otomata</h2>
                                            <span class="m-r-10"><i class="icon-calender"></i> RABU</span>
                                            <span class="m-r-10"><i class="icon-clock"></i> 13.00 - 15.00</span>
                                            <span class="m-r-10"><i class="icon-location-pin"></i> IF-101</span>
                                            <h5 class="m-t-5">Realisasi/Rencana : 8/8<span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
                        <div class="panel panel-themecolor">
                            <div class="panel-heading">
                                <center>TANGGAL PENTING</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest5">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Tanggal</th>
                                                    <th style="text-align: center;">Kegiatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr> 
                                                    <td>17 Agustus 2017 - 20 Agustus 2017</td>
                                                    <td>Batas pengisian nilai</td>
                                                </tr>
                                                <tr> 
                                                    <td>25 Agustus 2017</td>
                                                    <td>FRS</td>
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
            <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="sk-chat-widgets">
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
                                                <span class="time m-r-10" style="font-weight: bold;"><i class="icon-calender m-r-5"></i>20 May 2016</span> 
                                                <span class="time" style="font-weight: bold;"><i class="icon-clock m-r-5"></i>15.00</span>
                                                <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <div class="circle-md circle bg-info"><i class="ti-announcement"></i></div>
                                            <div class="mail-contnet"> 
                                                <span class="time m-r-10" style="font-weight: bold;"><i class="icon-calender m-r-5"></i>20 May 2016</span> 
                                                <span class="time" style="font-weight: bold;"><i class="icon-clock m-r-5"></i>15.00</span>
                                                <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                            </div>
                                        </div>
                                        <div class="comment-body">
                                            <div class="circle-md circle bg-info"><i class="ti-announcement"></i></div>
                                            <div class="mail-contnet">
                                                <span class="time m-r-10" style="font-weight: bold;"><i class="icon-calender m-r-5"></i>20 May 2016</span> 
                                                <span class="time" style="font-weight: bold;"><i class="icon-clock m-r-5"></i>15.00</span>
                                                <br/><span class="mail-desc">Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali! Pengumuman Penting Sekali!</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
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
    <?= $this->tag->javascriptInclude('plugins/bower_components/toast-master/js/jquery.toast.js') ?>

    <!-- MADE BY ME -->
    <!-- tabs di IPD/buatKuisionerIPD -->
    <?= $this->tag->javascriptInclude('js/sttabs.js') ?>
    <!-- tabel chart IPS Dashboard/homeMahasiswa -->
    <?= $this->tag->javascriptInclude('js/testmorrisb.js') ?>
    <!-- slimscroll -->
    <?= $this->tag->javascriptInclude('js/testslimscroll.js') ?>
</body>

</html>

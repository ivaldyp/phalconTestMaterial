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
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
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
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                    <!-- .Megamenu -->
                    <!-- /.Megamenu -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">Kaprodi</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"> Dosen</a></li>
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
                        <a href="#" class="waves-effect" style="display: inline-block;"><img src="../plugins/images/users/pakonggo.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Nama Dosen</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP Dosen</span>
                        </a>
                    </li>
                    <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i> <span class="hide-menu"> BERANDA</span></a></li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-page-variant fa-fw"></i> <span class="hide-menu">KURIKULUM<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">PRASYARAT MATA KULIAH</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-home-map-marker fa-fw"></i> <span class="hide-menu">KELAS<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">VALIDASI RENCANA PERTEMUAN</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">VALIDASI ENTRI NILAI</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"></i> <span class="hide-menu">MAHASISWA<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">DAFTAR MAHASISWA</span></a></li>
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
                <h4 class="page-title">BERANDA</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Beranda</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-12 m-t-30">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12 b-r">
                            <div class="col-md-3 col-sm-3 text-center">
                            <a href="contact-detail.html"><img src="../plugins/images/users/pakonggo.jpg" alt="user" class="img-circle" width="100" height="100"></a>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <h3 style="font-weight: bold;">Selamat Datang!</h3>
                                <h2 class="m-t-15">Radityo Anggoro</h2>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6 b-r"> 
                            <h3 style="font-weight: bold;"><i class="icon-user m-r-10"></i>NIP</h3>
                            <h4 class="pull-right">198410162008121002</h4>
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
                                <li class="col-last"><h3 class="counter text-right m-t-15">356</h3></li>
                                <li>
                                    <h4>Mahasiswa Aktif</h4>
                                </li> 
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-r">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class="icon-user-unfollow"></i></span>
                                </li>
                                <li class="col-last"><h3 class="counter text-right m-t-15">12</h3></li>
                                <li>
                                    <h4>Mahasiswa Cuti</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-r">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="mdi mdi-home-map-marker fa-fw"  ></i></span>
                                </li>
                               <li class="col-last"><h3 class="counter text-right m-t-15">35</h3></li>
                               <h4 class="m-l-10">Jumlah Kelas</h4>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-danger"><i class=" icon-calender"></i></span>
                                </li>
                                <li class="col-last"><h3 class="counter text-right m-t-15">1/16</h3></li>
                                <li>
                                    <h4>Minggu Perkuliahan</h4>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%"> 
                                      </div>
                                    </div>
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
                                <center>KELAS DIBUKA</center>
                            </div>
                            <div class="panel-body">
                                <div id="slimtest2">
                                    <div class="table-responsive">
                                        <table class="table table-hover manage-u-table ">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No</th>
                                                    <th style="text-align: center;">Kode MK</th>
                                                    <th style="text-align: center;">Mata Kuliah</th>
                                                    <th style="text-align: center;">Kelas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">1</td>
                                                    <td style="text-align: center;">KI1208712</td>
                                                    <td style="text-align: center;">Dasar Pemrograman</td>
                                                    <td style="text-align: center;">A</td>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
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
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Jadwal Perkuliahan</h4> </div>
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li>FRS</li>
                    <li><a href="<?= $this->url->get('FRS/jadwalKuliah') ?>">Jadwal Perkuliahan</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group m-b-0">
                            <label class="col-sm-2 m-t-10">Periode: </label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Gasal</option>
                                    <option>Genap</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-2 waves-effect waves-light btn-info" style="margin-top: 2px">Pilih</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;" class="col-sm-4">Mata Kuliah</th>
                                    <th style="text-align: center;" class="col-sm-1">Kelas</th>
                                    <th style="text-align: center;" class="col-sm-1">Hari</th>
                                    <th style="text-align: center;" class="col-sm-1">Waktu</th>
                                    <th style="text-align: center;" class="col-sm-1">Ruang</th>
                                    <th style="text-align: center;" class="col-sm-4">Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="padding-bottom: 0px">
                                    <td><b>KI1417 - Evolusi Perangkat Lunak</b><br>
                                    <div class="progress progress-lg" >
                                            <div class="progress-bar progress-bar-success" style="width: 100%" role="progressbar">Kehadiran: 16/16</div>    
                                        </div></td>
                                    <td style="text-align: center;">A</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">07.30-10.00</td>
                                    <td style="text-align: center;">IF-101</td>
                                    <td>Ir. Siti Rochimah, M.T., Ph.D</td>
                                </tr>
                                <tr class="m-t-30">
                                    <td><b>KI1330 - Kerja Praktik</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">B</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">10.00-12.30</td>
                                    <td style="text-align: center;">IF-104</td>
                                    <td>Dr. Radityo Anggoro, S.Kom., M.Eng.Sc</td>
                                </tr>
                                <tr>
                                    <td><b>KI1423 - Konstruksi Perangkat Lunak</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">D</td>
                                    <td style="text-align: center;">Kamis</td>
                                    <td style="text-align: center;">13.00-15.30</td>
                                    <td style="text-align: center;">IF-103</td>
                                    <td>Rizky Januar Akbar, S.Kom., M.Eng.</td>
                                </tr>
                                <tr>
                                    <td><b>KI1425 - Pemrograman Perangkat Bergerak</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">F</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">07.30-10.00</td>
                                    <td style="text-align: center;">IF-101</td>
                                    <td>Dwi Sunaryono, S.Kom., M.Kom.</td>
                                </tr>
                                <tr>
                                    <td><b>KI1501 - Pra Tugas Akhir</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Jumat</td>
                                    <td style="text-align: center;">10.00-12.30</td>
                                    <td style="text-align: center;">IF-106</td>
                                    <td>Dr. Radityo Anggoro, S.Kom., M.Eng.Sc</td>
                                </tr>
                                <tr>
                                    <td><b>KI1427 - Realitas Virtual dan Augmentasi</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Selasa</td>
                                    <td style="text-align: center;">15.30-18.00</td>
                                    <td style="text-align: center;">IF-108</td>
                                    <td>Dr.Eng. Darlis Heru Murti, S.Kom., M.Kom</td>
                                </tr>
                                <tr>
                                    <td><b>KI1430 - Sistem Informasi Geografis</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Selasa</td>
                                    <td style="text-align: center;">15.30-18.00</td>
                                    <td style="text-align: center;">IF-108</td>
                                    <td>Dr.techn. Ir. Raden Venantius Hari Ginardi, M.Sc.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
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
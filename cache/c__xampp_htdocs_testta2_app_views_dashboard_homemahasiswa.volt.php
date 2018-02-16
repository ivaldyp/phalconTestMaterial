<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <?= $this->tag->stylesheetLink('bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css') ?>
    <!-- Morris CSS -->
    <?= $this->tag->stylesheetLink('plugins/bower_components/morrisjs/morris.css" rel="stylesheet') ?>
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
    <!-- color CSS -->
    <?= $this->tag->stylesheetLink('css/colors/default.css') ?>
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
                        <!-- Logo icon image, you can use font-icon also -->
                        <!--This is dark logo icon--></a>
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
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect" style="display: inline-block;"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Nama Mahasiswa</span><span class="hide-menu" style="display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NRP Mahasiswa</span>
                        </a>
                        <!-- <div style="display: inline-block"><span class="hide-menu">Nama Mahasiswa</span></div>
                        <div style="display: inline-block"><span class="hide-menu">NRP Mahasiswa</span></div> -->
                    </li>
                    <li> <a href="Dashboard.html" class="waves-effect"><i class="mdi mdi-view-dashboard fa-fw" data-icon="v"></i> <span class="hide-menu">DASHBOARD<span></span></span></a>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-book-open-variant fa-fw"></i> <span class="hide-menu">AKADEMIK<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="Kurikulum.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">KURIKULUM</span></a></li>
                            <li><a href="Prasyarat.html"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">PRASYARAT MATA KULIAH</span></a></li>
                            <li><a href="Perkuliahan.html"><i class="ti-layout-menu fa-fw"></i> <span class="hide-menu">PERKULIAHAN MAHASISWA</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-archive fa-fw"></i> <span class="hide-menu">LAPORAN<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">SKEM</span></a></li>
                            <li><a href="blank.html"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">SKPI</span></a></li>
                            <li><a href="lightbox.html"><i class="fa-fw">L</i> <span class="hide-menu">SPP</span></a></li>
                            <li><a href="treeview.html"><i class="fa-fw">T</i> <span class="hide-menu">REKAPITULASI EKIVALENSI</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">PROSES<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI SKEM</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI SKPI</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">UPDATE DATA WISUDA</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">FRS</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">ISI IPD</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-format-list-numbers fa-fw"></i> <span class="hide-menu">NILAI<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">TRANSKRIP</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">RANKING IPK</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">RANKING IPS</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">NILAI PER MAHASISWA</span></a></li>
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">NILAI PER SEMESTER</span></a></li>
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

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <center><h3 class="box-title">Sistem Akademik ITS</h3></center> 
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
                                    <h3 class="counter text-right m-t-15">3.00 <i class="ti-arrow-up text-success"></i></h3>
                                </li>
                                <li class="col-middle">
                                    <h4>IPS</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-info"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3.56 <i class="ti-arrow-down text-danger"></i></h3>
                                </li>
                                <li class="col-middle">
                                    <h4>IPK</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-wallet"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">122/144</h3>
                                </li>
                                <li>
                                    <h4>SKS Tempuh</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                            <span class="sr-only">122/144</span> 
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
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1 class="box-title m-b-0" style="text-align: center;">Perkuliahan Mahasiswa</h1>
                            <!-- <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> -->
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        <tr>
                                            <th>Mata Kuliah</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Hari</th>
                                            <th style="text-align: center;">Pukul</th>
                                            <th style="text-align: center;">Ruang</th>
                                            <th style="text-align: center;">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kode Matkul 1 - Matkul 1</td>
                                            <td style="text-align: center;">A</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-101</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 2 - Matkul 2</td>
                                            <td style="text-align: center;">B</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-104</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 3 - Matkul 3</td>
                                            <td style="text-align: center;">D</td>
                                            <td style="text-align: center;">Kamis</td>
                                            <td style="text-align: center;">13.00</td>
                                            <td style="text-align: center;">IF-103</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 4 - Matkul 4</td>
                                            <td style="text-align: center;">F</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-101</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 5 - Matkul 5</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">Jumat</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-106</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 6 - Matkul 6</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">Selasa</td>
                                            <td style="text-align: center;">16.00</td>
                                            <td style="text-align: center;">IF-108</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 7 - Matkul 7</td>
                                            <td style="text-align: center;">C</td>
                                            <td style="text-align: center;">Rabu</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-105a</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 8 - Matkul 8</td>
                                            <td style="text-align: center;">D</td>
                                            <td style="text-align: center;">Jumat</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-105b</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <h1 class="box-title m-b-0" style="text-align: center;">Tanggal Penting</h1>
                    <table data-toggle="table" data-height="160" data-mobile-responsive="true" class="table">
                        <thead>
                            <tr>
                                <th class="col-sm-3">Tanggal</th>
                                <th >Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box" style="padding-bottom: 14px">
                    <h1 class="box-title m-b-0" style="text-align: center;">Dosen Wali</h1>
                    <div>
                        <div class="panel">
                            <div class="p-30">
                                <div class="row">
                                    <div class="col-xs-4"><img src="../plugins/images/users/varun.jpg" alt="varun" class="img-circle img-responsive"></div>
                                    <div class="col-xs-8">
                                        <h2 class="m-b-0">Nama Dosen</h2>
                                        <h4 class="m-t-0">NIP Dosen Wali</h4>
                                        <h4 class="m-t-0">Email Dosen</h4>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-t-10" />                                 
                        </div>
                     </div>
                </div>
            </div>   
        </div> 

        <!-- NEW ROW -->
        <div class="row">
            
            <div class="col-sm-6">
                <div class="white-box">
                    <h1 class="box-title" style="text-align: center;">Pengumuman</h1>
                    <table data-toggle="table" data-height="279" data-mobile-responsive="true" class="table">
                        <thead>
                            <tr>
                                <th class="col-sm-3">Tanggal</th>
                                <th >Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="white-box">
                    <h1 class="box-title" style="text-align: center;">STATUS</h1>
                    <ul class="list-inline text-right">
                        <li><h5><i class="fa fa-circle" style="color: #00bfc7;"></i>iPhone</h5> </li>
                    </ul>
                    <!-- <div id="morris-area-chart"></div> -->
                </div>
            </div>
        </div>

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-sm-8">
                <div class="white-box">
                    
                </div>
            </div>
            <div class="col-sm-4">
                <div class="white-box">
                    <h1 class="box-title" style="text-align: center;">Status</h1>
                    <div class="panel panel-info">
                        <div class="panel-heading">SPP Sudah Terbayar</div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">FRS Belum Terisi</div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">IPD Belum Terisi</div>
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
    <?= $this->tag->javascriptInclude('js/custom.min.js') ?>
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
    <!-- Date Picker Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>
    <!-- Date range Plugin JavaScript -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/timepicker/bootstrap-timepicker.min.js') ?>
    <?= $this->tag->javascriptInclude('plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>

    <!--Style Switcher -->
    <?= $this->tag->javascriptInclude('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') ?>script>
</body>

</html>
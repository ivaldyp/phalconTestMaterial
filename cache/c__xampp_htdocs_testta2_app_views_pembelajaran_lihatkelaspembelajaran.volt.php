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
    <?= $this->tag->stylesheetLink('plugins/bower_components/morrisjs/morris.css') ?>
    <?= $this->tag->stylesheetLink('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css') ?>
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
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Daftar Kelas Pembelajaran</h4> </div>
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="LaporanKeuangan/index2">Table</a></li>
                    <li class="active">Bootstrap Table</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="white-box">
                	<div class="row">
                		<div class="col-sm-6 panel panel-heading">
                			<label class="col-sm-2" style="top: 10px">Periode</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>Gasal</option>
                                    <option>Genap</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-3 waves-effect waves-light btn-info">Tampil</button>
                		</div>
                	</div>
                	<div class="row">
                		<div class="col-lg-2 col-sm-4 col-xs-12">
                			<a href="buatKelasPembelajaran"><button class="btn btn-block btn-info"><i class="fa fa-plus"></i> Tambah  </button></a>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default"><i class="fa fa-refresh"></i> Refresh </button>
                        </div>
                	</div>
                	<div class="row">
                		<div class="table-responsive">
	                    	<table class="table table-hover">
	                    		<thead>
	                                <tr>
	                                    <th class="col-sm-1" style="text-align: center;">Kode</th>
	                                    <th>Mata Kuliah</th>
	                                    <th class="col-sm-1" style="text-align: center;">SKS</th>
	                                    <th class="col-sm-1" style="text-align: center;">Kelas</th>
	                                    <th class="col-sm-1" style="text-align: center;">Isi / Maks</th>
	                                    <th style="text-align: center;">Dosen</th>
	                                    <th>Ubah</th>
	                                    <th>Absensi</th>
	                                </tr>
	                            </thead>
	                            <tbody style="text-align: center;">
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            		<td><a href="lihatAbsenPembelajaran">
	                            			<button class="btn btn-block btn-info" style="width: 80px; height: 30px">Absensi</button></a>
	                            		</td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            		<td><a href="lihatAbsenPembelajaran">
	                            			<button class="btn btn-block btn-info" style="width: 80px; height: 30px">Absensi</button></a>
	                            		</td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            		<td><a href="lihatAbsenPembelajaran">
	                            			<button class="btn btn-block btn-info" style="width: 80px; height: 30px">Absensi</button></a>
	                            		</td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            		<td><a href="lihatAbsenPembelajaran">
	                            			<button class="btn btn-block btn-info" style="width: 80px; height: 30px">Absensi</button></a>
	                            		</td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            		<td><a href="lihatAbsenPembelajaran">
	                            			<button class="btn btn-block btn-info" style="width: 80px; height: 30px">Absensi</button></a>
	                            		</td>
	                            	</tr>
	                            </tbody>
	                    	</table>
	                    </div>
                	</div>
                    
                </div>
            </div>
            <div class="col-sm-1"></div>
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
    <?= $this->tag->javascriptInclude('js/testmorris.js') ?>
    <?= $this->tag->javascriptInclude('//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') ?>
    <?= $this->tag->javascriptInclude('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js') ?>
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
    <?= $this->tag->javascriptInclude('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') ?>
</body>

</html>
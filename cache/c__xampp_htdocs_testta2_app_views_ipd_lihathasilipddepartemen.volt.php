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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Lihat Hasil IPD Departemen</h4> </div>
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li>IPD</li>
                    <li><a href="<?= $this->url->get('IPD/lihatHasilIPDDepartemen') ?>">IPD Departemen</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                	<div class="form-group">
                      	<label class="form-inline">Urut Berdasarkan
                        	<select id="demo-show-entries" class="form-control input-sm">
                          		<option value="mataKuliah">Nama Mata Kuliah</option>
	                            <option value="dosen">Nama Dosen</option>
                      		</select>
                      	</label>
                      	<label class="form-inline">
                          	<select id="demo-show-entries" class="form-control input-sm">
                              	<option value="asc">Asc</option>
                              	<option value="desc">Desc</option>
                          	</select>
                      	</label>
                      	<button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
    				</div>
    				<div class="form-group">
                      	<label class="form-inline">Pilih Periode
                        	<select id="demo-show-entries" class="form-control input-sm">
                          		<option value="gasal">Gasal</option>
	                            <option value="genap">Genap</option>
                      		</select>
                      	</label>
                      	<label class="form-inline">
                          	<select id="demo-show-entries" class="form-control input-sm">
                              	<option value="2017">2017</option>
                              	<option value="2018">2018</option>
                              	<option value="2019">2019</option>
                              	<option value="2020">2020</option>
                          	</select>
                      	</label>
                      	<button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
    				</div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped manage-u-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">No.</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-2">Mata Kuliah</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">Kelas</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-2">Dosen</th>
                                    <th style="text-align: center; vertical-align: middle;" colspan="2">Hasil Kuesioner</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">IPD</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">Jml Mhs</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">IPmk Terisi</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">IPd Terisi</th>
                                </tr>
                                <tr>
                                	<th style="text-align: center; vertical-align: middle;" class="col-sm-1">IPmk</th>
                                    <th style="text-align: center; vertical-align: middle;" class="col-sm-1">IPd</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                            	<tr>
                            		<td>1</td>
                            		<td style="text-align: left;">Biokimia - SK1331</td>
                            		<td>A</td>
                            		<td style="text-align: left;">Drs. Refdinal Nafwa, M.Sc</td>
                            		<td>3.21</td>
                            		<td>3.31</td>
                            		<td>3.26</td>
                            		<td>41</td>
                            		<td>40</td>
                            		<td>40</td>
                            	</tr>
                            	<tr>
                            		<td>2</td>
                            		<td style="text-align: left;">Dasar Kimia Organik - SK1351</td>
                            		<td>B</td>
                            		<td style="text-align: left;">Prof. Dr. R. Y. Perry Burhan, M.Sc</td>
                            		<td>3.15</td>
                            		<td>3.18</td>
                            		<td>3.17</td>
                            		<td>32</td>
                            		<td>32</td>
                            		<td>32</td>
                            	</tr>
                            	<tr>
                            		<td>3</td>
                            		<td style="text-align: left;">Penjaminan Mutu Perangkat Lunak - SK1351</td>
                            		<td>_</td>
                            		<td style="text-align: left;">Ir. Siti Rochimah, MT.,Ph.D</td>
                            		<td>3.5</td>
                            		<td>3.5</td>
                            		<td>3.5</td>
                            		<td>32</td>
                            		<td>32</td>
                            		<td>32</td>
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

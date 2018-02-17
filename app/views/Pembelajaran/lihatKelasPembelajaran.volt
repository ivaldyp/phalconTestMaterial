{% extends 'template/menubar.volt' %}
{% block content %}

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
                            <button class="btn btn-block btn-info">Tambah <i class="fa fa-plus"></i> </button>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default">Refresh <i class="fa fa-refresh"></i></button>
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
	                                    <th class="col-sm-2" style="text-align: center;">Isi / Maks / Peserta</th>
	                                    <th style="text-align: center;">Dosen</th>
	                                    <th style="text-align: center;">Ubah</th>
	                                </tr>
	                            </thead>
	                            <tbody style="text-align: center;">
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30/<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 60px; height: 30px">Lihat</button>
					                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
					                            <div class="modal-dialog" role="document">
					                                <div class="modal-content">
					                                    <div class="modal-header">
					                                        <h4 class="modal-title" id="exampleModalLabel1">Peserta Kelas</h4> 
					                                    </div>
					                                    <div class="modal-body">
					                                        <div class="table-responsive">
					                                        	<table class="table table-hover">
					                                        		<thead>
					                                        			<tr>
					                                        				<th class="col-sm-1">No</th>
					                                        				<th class="col-sm-3" style="text-align: center;">NRP</th>
					                                        				<th class="col-sm-6" style="text-align: center;">Nama</th>
					                                        			</tr>
					                                        		</thead>
					                                        		<tbody style="text-align: left;">
					                                        			<tr>
					                                        				<td>1</td>
					                                        				<td>05111440000010</td>
					                                        				<td>Rivaldo Alif Rachmansyah</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>2</td>
					                                        				<td>05111440000012</td>
					                                        				<td>Zahrah Citra Hafizha</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>3</td>
					                                        				<td>05111440000076</td>
					                                        				<td>Muhammad Faishal Ilham</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>4</td>
					                                        				<td>05111440000078</td>
					                                        				<td>Farhan Ramadhana</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>5</td>
					                                        				<td>05111440000105</td>
					                                        				<td>Ivaldy Putra Lifiari</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>6</td>
					                                        				<td>05111440000126</td>
					                                        				<td>Mustika Kurnia Mayangsar</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>7</td>
					                                        				<td>05111440007004</td>
					                                        				<td>Nur Maulidiah El Fajr</td>
					                                        			</tr>
					                                        		</tbody>
					                                        	</table>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30/<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 60px; height: 30px">Lihat</button>
					                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
					                            <div class="modal-dialog" role="document">
					                                <div class="modal-content">
					                                    <div class="modal-header">
					                                        <h4 class="modal-title" id="exampleModalLabel1">Peserta Kelas</h4> 
					                                    </div>
					                                    <div class="modal-body">
					                                        <div class="table-responsive">
					                                        	<table class="table table-hover">
					                                        		<thead>
					                                        			<tr>
					                                        				<th class="col-sm-1">No</th>
					                                        				<th class="col-sm-3" style="text-align: center;">NRP</th>
					                                        				<th class="col-sm-6" style="text-align: center;">Nama</th>
					                                        			</tr>
					                                        		</thead>
					                                        		<tbody style="text-align: left;">
					                                        			<tr>
					                                        				<td>1</td>
					                                        				<td>05111440000010</td>
					                                        				<td>Rivaldo Alif Rachmansyah</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>2</td>
					                                        				<td>05111440000012</td>
					                                        				<td>Zahrah Citra Hafizha</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>3</td>
					                                        				<td>05111440000076</td>
					                                        				<td>Muhammad Faishal Ilham</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>4</td>
					                                        				<td>05111440000078</td>
					                                        				<td>Farhan Ramadhana</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>5</td>
					                                        				<td>05111440000105</td>
					                                        				<td>Ivaldy Putra Lifiari</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>6</td>
					                                        				<td>05111440000126</td>
					                                        				<td>Mustika Kurnia Mayangsar</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>7</td>
					                                        				<td>05111440007004</td>
					                                        				<td>Nur Maulidiah El Fajr</td>
					                                        			</tr>
					                                        		</tbody>
					                                        	</table>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30/<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 60px; height: 30px">Lihat</button>
					                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
					                            <div class="modal-dialog" role="document">
					                                <div class="modal-content">
					                                    <div class="modal-header">
					                                        <h4 class="modal-title" id="exampleModalLabel1">Peserta Kelas</h4> 
					                                    </div>
					                                    <div class="modal-body">
					                                        <div class="table-responsive">
					                                        	<table class="table table-hover">
					                                        		<thead>
					                                        			<tr>
					                                        				<th class="col-sm-1">No</th>
					                                        				<th class="col-sm-3" style="text-align: center;">NRP</th>
					                                        				<th class="col-sm-6" style="text-align: center;">Nama</th>
					                                        			</tr>
					                                        		</thead>
					                                        		<tbody style="text-align: left;">
					                                        			<tr>
					                                        				<td>1</td>
					                                        				<td>05111440000010</td>
					                                        				<td>Rivaldo Alif Rachmansyah</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>2</td>
					                                        				<td>05111440000012</td>
					                                        				<td>Zahrah Citra Hafizha</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>3</td>
					                                        				<td>05111440000076</td>
					                                        				<td>Muhammad Faishal Ilham</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>4</td>
					                                        				<td>05111440000078</td>
					                                        				<td>Farhan Ramadhana</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>5</td>
					                                        				<td>05111440000105</td>
					                                        				<td>Ivaldy Putra Lifiari</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>6</td>
					                                        				<td>05111440000126</td>
					                                        				<td>Mustika Kurnia Mayangsar</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>7</td>
					                                        				<td>05111440007004</td>
					                                        				<td>Nur Maulidiah El Fajr</td>
					                                        			</tr>
					                                        		</tbody>
					                                        	</table>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30/<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 60px; height: 30px">Lihat</button>
					                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
					                            <div class="modal-dialog" role="document">
					                                <div class="modal-content">
					                                    <div class="modal-header">
					                                        <h4 class="modal-title" id="exampleModalLabel1">Ubah Kalender Akademik</h4> </div>
					                                    <div class="modal-body">
					                                        
					                                    </div>
					                                    <div class="modal-footer">
					                                        
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
	                            	</tr>
	                            	<tr>
	                            		<td>KI141438</td>
	                            		<td style="text-align: left;">Penyempurnaan Proses Perangkat Lunak</td>
	                            		<td>3</td>
	                            		<td>-</td>
	                            		<td>20/30/<button class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 60px; height: 30px">Lihat</button>
					                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
					                            <div class="modal-dialog" role="document">
					                                <div class="modal-content">
					                                    <div class="modal-header">
					                                        <h4 class="modal-title" id="exampleModalLabel1">Peserta Kelas</h4> 
					                                    </div>
					                                    <div class="modal-body">
					                                        <div class="table-responsive">
					                                        	<table class="table table-hover">
					                                        		<thead>
					                                        			<tr>
					                                        				<th class="col-sm-1">No</th>
					                                        				<th class="col-sm-3" style="text-align: center;">NRP</th>
					                                        				<th class="col-sm-6" style="text-align: center;">Nama</th>
					                                        			</tr>
					                                        		</thead>
					                                        		<tbody style="text-align: left;">
					                                        			<tr>
					                                        				<td>1</td>
					                                        				<td>05111440000010</td>
					                                        				<td>Rivaldo Alif Rachmansyah</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>2</td>
					                                        				<td>05111440000012</td>
					                                        				<td>Zahrah Citra Hafizha</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>3</td>
					                                        				<td>05111440000076</td>
					                                        				<td>Muhammad Faishal Ilham</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>4</td>
					                                        				<td>05111440000078</td>
					                                        				<td>Farhan Ramadhana</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>5</td>
					                                        				<td>05111440000105</td>
					                                        				<td>Ivaldy Putra Lifiari</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>6</td>
					                                        				<td>05111440000126</td>
					                                        				<td>Mustika Kurnia Mayangsar</td>
					                                        			</tr>
					                                        			<tr>
					                                        				<td>7</td>
					                                        				<td>05111440007004</td>
					                                        				<td>Nur Maulidiah El Fajr</td>
					                                        			</tr>
					                                        		</tbody>
					                                        	</table>
					                                        </div>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
	                            		</td>
	                            		<td>Dosen 1</td>
	                            		<td><button class="btn btn-block btn-info" style="width: 60px; height: 30px">Ubah</button></td>
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

{% endblock %}
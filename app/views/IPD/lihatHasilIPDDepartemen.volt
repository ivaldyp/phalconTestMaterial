{% extends 'template/menubarDosen.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Lihat Hasil IPD Departemen</h4> </div>
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li>IPD</li>
                    <li><a href="{{ url('IPD/lihatHasilIPDDepartemen') }}">IPD Departemen</a></li>
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

{% endblock %}
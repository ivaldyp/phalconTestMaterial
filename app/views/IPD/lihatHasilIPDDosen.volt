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
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="white-box">
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
                    <div class="form-group">
                        <label class="form-inline">Mata Kuliah
                            <select id="demo-show-entries" class="form-control input-sm">
                                <option value="pmpl">KI141411 - Penjaminan Mutu Perangkat Lunak [_]</option>
                                <option value="kpl">KI141423 - Konstruksi Perangkat Lunak [_]</option>
                                <option value="apl">KI141403 - Arsitektur Perangkat Lunak [_]</option>
                                <option value="epl">KI141417 - Evolusi Perangkat Lunak [_]</option>
                                <option value="mppl">KI141329 - Manajemen Proyek Perangkat Lunak [A]</option>
                            </select>
                        </label>
                        <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                    </div>
                    <label><h3><b>Jumlah Responden / Peserta: 35/37</b></h3></label>
                    <div class="table-responsive">
                        <label><h3>A. Hasil Kuesioner Mata Kuliah</h3></label>
                        <table class="table table-hover table-bordered table-striped manage-u-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">Nomor</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-3">Pertanyaan</th>
                                    <th style="text-align: center;" colspan="4">Detail</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;" class="col-sm-1">Mata Kuliah</th>
                                    <th style="text-align: center;" class="col-sm-1">Jurusan</th>
                                    <th style="text-align: center;" class="col-sm-1">Fakultas</th>
                                    <th style="text-align: center;" class="col-sm-1">Institut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>Pertanyaan ini adalah pertanyaan pertama</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td>Pertanyaan ini adalah pertanyaan kedua</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3</td>
                                    <td>Pertanyaan ini adalah pertanyaan ketiga</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4</td>
                                    <td>Pertanyaan ini adalah pertanyaan keempat</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5</td>
                                    <td>Pertanyaan ini adalah pertanyaan kelima</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <label><h3>B. Hasil Kuesioner Kinerja Dosen</h3></label>
                        <table class="table table-hover table-bordered table-striped manage-u-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-1">Nomor</th>
                                    <th style="text-align: center; vertical-align: middle;" rowspan="2" class="col-sm-3">Pertanyaan</th>
                                    <th style="text-align: center;" colspan="4">Detail</th>
                                </tr>
                                <tr>
                                    <th style="text-align: center;" class="col-sm-1">Mata Kuliah</th>
                                    <th style="text-align: center;" class="col-sm-1">Jurusan</th>
                                    <th style="text-align: center;" class="col-sm-1">Fakultas</th>
                                    <th style="text-align: center;" class="col-sm-1">Institut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>Pertanyaan ini adalah pertanyaan pertama</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td>Pertanyaan ini adalah pertanyaan kedua</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3</td>
                                    <td>Pertanyaan ini adalah pertanyaan ketiga</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4</td>
                                    <td>Pertanyaan ini adalah pertanyaan keempat</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5</td>
                                    <td>Pertanyaan ini adalah pertanyaan kelima</td>
                                    <td style="text-align: center;">3.43</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.38</td>
                                    <td style="text-align: center;">3.34</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>

{% endblock %}
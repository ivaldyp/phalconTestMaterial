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
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
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
                        <label class="form-inline">Angkatan
                            <select id="demo-show-entries" class="form-control input-sm">
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                            </select>
                        </label>
                        <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered manage-u-table">
                            <thead style="text-align: center;">
                                <tr>
                                    <th class="col-sm-1" style="text-align: center;">NRP</th>
                                    <th class="col-sm-4" style="text-align: center;">Nama</th>
                                    <th class="col-sm-6" style="text-align: center;">Detail</th>
                                    <th class="col-sm-1" style="text-align: center;">Status FRS</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">05111440000010</td>
                                    <td style="text-align: left;" >Rivaldo Alif Rachmansyah</td>
                                    <td>
                                        <a href="#">FRS</a> |
                                        <a href="#">Nilai</a> |
                                        <a href="#">Nilai Smt Lalu</a> |
                                        <a href="#">Transkrip</a> |
                                        <a href="#">Biodata</a>
                                    </td>
                                    <td rowspan="2" style="text-align: center; vertical-align: middle;"><i data-toggle="tooltip" data-placement="top" data-original-title="FRS sudah dilakukan" class="tooltip-success fa fa-check text-success m-b-15" style="font-size: 28px"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">SKS diambil: 12</td>
                                    <td>IPS Lalu: 3.82 | IPK: 3.47 | SKS Tempuh: 151 | SKS Lulus: 139</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">05111440000012</td>
                                    <td style="text-align: left;" >Zahrah Citra Hafizha</td>
                                    <td>
                                        <a href="#">FRS</a> |
                                        <a href="#">Nilai</a> |
                                        <a href="#">Nilai Smt Lalu</a> |
                                        <a href="#">Transkrip</a> |
                                        <a href="#">Biodata</a>
                                    </td>
                                    <td rowspan="2" style="text-align: center; vertical-align: middle;"><i data-toggle="tooltip" data-placement="top" data-original-title="FRS Belum dilakukan" class="tooltip-danger fa fa-times text-danger m-b-15" style="font-size: 28px"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">SKS diambil: 12</td>
                                    <td>IPS Lalu: 3.82 | IPK: 3.47 | SKS Tempuh: 151 | SKS Lulus: 139</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">05111440000076</td>
                                    <td style="text-align: left;" >Muhammad Faishal Ilham</td>
                                    <td>
                                        <a href="#">FRS</a> |
                                        <a href="#">Nilai</a> |
                                        <a href="#">Nilai Smt Lalu</a> |
                                        <a href="#">Transkrip</a> |
                                        <a href="#">Biodata</a>
                                    </td>
                                    <td rowspan="2" style="text-align: center; vertical-align: middle;"><i data-toggle="tooltip" data-placement="top" data-original-title="FRS sudah dilakukan" class="tooltip-success fa fa-check text-success m-b-15" style="font-size: 28px"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">SKS diambil: 12</td>
                                    <td>IPS Lalu: 3.82 | IPK: 3.47 | SKS Tempuh: 151 | SKS Lulus: 139</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">05111440000078</td>
                                    <td style="text-align: left;" >Farhan Ramadhana</td>
                                    <td>
                                        <a href="#">FRS</a> |
                                        <a href="#">Nilai</a> |
                                        <a href="#">Nilai Smt Lalu</a> |
                                        <a href="#">Transkrip</a> |
                                        <a href="#">Biodata</a>
                                    </td>
                                    <td rowspan="2" style="text-align: center; vertical-align: middle;"><i data-toggle="tooltip" data-placement="top" data-original-title="FRS Belum dilakukan" class="tooltip-danger fa fa-times text-danger m-b-15" style="font-size: 28px"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">SKS diambil: 12</td>
                                    <td>IPS Lalu: 3.82 | IPK: 3.47 | SKS Tempuh: 151 | SKS Lulus: 139</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;" rowspan="2">05111440000105</td>
                                    <td style="text-align: left;" >Ivaldy Putra Lifiari</td>
                                    <td>
                                        <a href="#">FRS</a> |
                                        <a href="#">Nilai</a> |
                                        <a href="#">Nilai Smt Lalu</a> |
                                        <a href="#">Transkrip</a> |
                                        <a href="#">Biodata</a>
                                    </td>
                                    <td rowspan="2" style="text-align: center; vertical-align: middle;"><i data-toggle="tooltip" data-placement="top" data-original-title="FRS sudah dilakukan" class="tooltip-success fa fa-check text-success m-b-15" style="font-size: 28px"></i></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">SKS diambil: 12</td>
                                    <td>IPS Lalu: 3.82 | IPK: 3.47 | SKS Tempuh: 151 | SKS Lulus: 139</td>
                                </tr>
                            </tbody>
                        </table>
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
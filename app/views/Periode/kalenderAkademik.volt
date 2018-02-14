{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Periode Kalender Akademik</h4> </div>
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
                    <!-- <h3 class="box-title m-b-0">MAHASISWA : IVALDY - 5114100105</h3> -->
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <!-- <table data-toggle="table" data-mobile-responsive="true" class="table">
                        <tr>
                            <td>Periode</td>
                            <td>Pengisian</td>
                            <td>Pengubahan</td>
                            <td>Pembatalan</td>
                            <td>Ubah</td>
                        </tr>
                    </table> -->
                    <table class="table table-bordered table-hover table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th class="col-sm-2" colspan="2" style="text-align: center;">Periode</th>
                                <!-- <th>Progress</th> -->
                                <th class="col-sm-2" colspan="2" style="text-align: center;">Pengisian</th>
                                <th class="col-sm-2" colspan="2" style="text-align: center;">Perubahan</th>
                                <th class="col-sm-2" colspan="2" style="text-align: center;">Pembatalan</th>
                            </tr>
                            <tr>
                                <th class="col-sm-1" style="text-align: center;">Tahun</th>
                                <th class="col-sm-1" style="text-align: center;">Semester</th>
                                <th class="col-sm-1" style="text-align: center;">Mulai</th>
                                <th class="col-sm-1" style="text-align: center;">Selesai</th>
                                <th class="col-sm-1" style="text-align: center;">Mulai</th>
                                <th class="col-sm-1" style="text-align: center;">Selesai</th>
                                <th class="col-sm-1" style="text-align: center;">Mulai</th>
                                <th class="col-sm-1" style="text-align: center;">Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2017</td>
                                <td>Gasal</td>
                                <td>21 <br> Agustus <br> 2017</td>
                                <td>25 <br> Agustus <br> 2017</td>
                                <td>26 <br> Agustus <br> 2017</td>
                                <td>15 <br> September <br> 2017</td>
                                <td>16 <br> September <br> 2017</td>
                                <td>10 <br> November <br> 2017</td>
                            </tr>
                            <tr>
                                <td class="col-sm-1">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                                <td class="col-sm-1">
                                    <select class="form-control">
                                        <option>Gasal</option>
                                        <option>Genap</option>
                                    </select>
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control date" value="isiMulai">
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" value="isiSelesai">
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" value="isiSelesai">
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" value="isiSelesai">
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" value="isiSelesai">
                                </td>
                                <td class="col-sm-1">
                                    <input type="text" class="form-control" value="isiSelesai">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="float: right;">
                        <button class="btn btn-block btn-info" style="width: 120px">Simpan</button>
                    </div>
                    <br>
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
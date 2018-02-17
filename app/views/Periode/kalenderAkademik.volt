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
                                <th class="col-sm-1" style="text-align: center;">Tahun Ajaran</th>
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
                        </tbody>
                    </table>
                    <div style="float: right;">
                        <button class="btn btn-block btn-info" data-toggle="modal" data-target="#exampleModal" style="width: 120px">Ubah</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                                        <h4 class="modal-title" id="exampleModalLabel1">Ubah Kalender Akademik</h4> </div>
                                    <div class="modal-body">
                                        <form>
                                            <h3>PERIODE</h3>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Tahun</label>
                                                <div>
                                                    <select class="form-control">
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Semester</label>
                                                <div>
                                                    <select class="form-control">
                                                        <option value="1">Gasal</option>
                                                        <option value="2">Genap</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr>

                                            <h3>PENGISIAN</h3>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Mulai</label>
                                                <input type="date" class="form-control" id="pengisianMulai"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Selesai</label>
                                                <input type="date" class="form-control" id="pengisianSelesai"> 
                                            </div>
                                                
                                            <hr>

                                            <h3>PENGUBAHAN</h3>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Mulai</label>
                                                <input type="date" class="form-control" id="pengubahanMulai"> 
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Selesai</label>
                                                <input type="date" class="form-control" id="pengubahanSelesai"> 
                                            </div>

                                            <hr>

                                            <h3>PEMBATALAN</h3>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Mulai</label>
                                                <input type="date" class="form-control" id="pembatalanMulai"> 
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Selesai</label>
                                                <input type="date" class="form-control" id="pembatalanSelesai"> 
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-info">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
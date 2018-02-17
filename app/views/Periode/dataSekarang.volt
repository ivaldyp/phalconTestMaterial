{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Data Periode Sekarang</h4> </div>
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
                                <th class="col-sm-1" style="text-align: center;">Tahun Ajaran</th>
                                <th class="col-sm-1" style="text-align: center;">Semester Ajaran</th>
                                <th class="col-sm-1" style="text-align: center;">Tahun Kurikulum</th>
                                <th class="col-sm-1" style="text-align: center;">Tahun Ajaran Lalu</th>
                                <th class="col-sm-1" style="text-align: center;">Semester Ajaran Lalu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2017</td>
                                <td>Gasal</td>
                                <td>Kurikulum 2014</td>
                                <td>2016</td>
                                <td>Genap</td>
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
                                        <h4 class="modal-title" id="exampleModalLabel1">Ubah Data Periode Sekarang</h4> </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Tahun Ajaran</label>
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
                                                <label for="recipient-name" class="control-label">Semester Ajaran</label>
                                                <div>
                                                    <select class="form-control">
                                                        <option value="Gasal">Gasal</option>
                                                        <option value="Genap">Genap</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Tahun Kurikulum</label>
                                                <input type="text" class="form-control" id="pengisianSelesai"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Tahun Ajaran Lalu</label>
                                                <div>
                                                    <select class="form-control">
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Semester Ajaran Lalu</label>
                                                <div>
                                                    <select class="form-control">
                                                        <option value="Gasal">Gasal</option>
                                                        <option value="Genap">Genap</option>
                                                    </select>
                                                </div>
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
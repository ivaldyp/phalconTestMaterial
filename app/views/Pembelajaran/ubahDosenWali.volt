{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Kelola Daftar Anak Wali</h4> </div>
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
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3">Dosen Wali</label>
                            <div class="col-sm-6">
                                <select class="form-control">
                                    <option>Dosen 1</option>
                                    <option>Dosen 2</option>
                                    <option>Dosen 3</option>
                                    <option>Dosen 4</option>
                                    <option>Dosen 5</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-3 waves-effect waves-light btn-info">Tampil</button>
                        </div>
                    </form>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3">Mahasiswa</label>
                            <div class="col-sm-6">
                                <select class="form-control">
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP3 - Mahasiswa</option>
                                    <option>NRP4 - Mahasiswa</option>
                                    <option>NRP5 - Mahasiswa</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-3 waves-effect waves-light btn-info">Pilih</button>
                        </div>
                    </form>
                </div>
                <div class="white-box">
                    <!-- <h3 class="box-title m-b-0">MAHASISWA : IVALDY - 5114100105</h3> -->
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <table data-toggle="table" data-mobile-responsive="true" class="table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NRP</th>
                                <th>MAHASISWA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tr-id-1" class="tr-class-1">
                                <td id="td-id-1" class="td-class-1">1</td>
                                <td>5114100010</td>
                                <td>ALDO RACHMANSYAH</td>
                            </tr>
                            <tr id="tr-id-2" class="tr-class-2">
                                <td id="td-id-2" class="td-class-2">2</td>
                                <td>5114100012</td>
                                <td>ZAHRAH CITRA</td>
                            </tr>
                            <tr id="tr-id-3" class="tr-class-3">
                                <td id="td-id-3" class="td-class-3">3</td>
                                <td>5114100076</td>
                                <td>FAISHAL ILHAM</td>
                            </tr>
                            <tr id="tr-id-4" class="tr-class-4">
                                <td id="td-id-4" class="td-class-4">4</td>
                                <td>5114100078</td>
                                <td>FARHAN RAMADHANA</td>
                            </tr>
                            <tr id="tr-id-5" class="tr-class-5">
                                <td id="td-id-5" class="td-class-5">5</td>
                                <td>5114100105</td>
                                <td>IVALDY PUTRA</td>
                            </tr>
                        </tbody>
                    </table>
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
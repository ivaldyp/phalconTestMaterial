{% extends 'template/menubarMahasiswa.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Formulir Rencana Studi</h4> </div>
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
                    <div class="col-sm-2">
                        <h3 class="box-title m-b-0">NRP</h3>
                        <h3 class="box-title m-b-0">Nama</h3>
                        <h3 class="box-title m-b-0">IPK</h3>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="box-title m-b-0">: 5114100105</h3>
                        <h3 class="box-title m-b-0">: Ivaldy Putra</h3>
                        <h3 class="box-title m-b-0">: 4.56</h3>
                    </div>
                    <div class="col-sm-2">
                        <h3 class="box-title m-b-0">Periode</h3>
                        <h3 class="box-title m-b-0">Dosen Wali</h3>
                        <h3 class="box-title m-b-0">Batas/Sisa</h3>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="box-title m-b-0">: 2017/Genap</h3>
                        <h3 class="box-title m-b-0">: Dosen</h3>
                        <h3 class="box-title m-b-0">: 24/24 SKS</h3>
                    </div>
                    <br>
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Kode</th>
                                <th style="text-align: center;">Mata Kuliah</th>
                                <th style="text-align: center;">SKS</th>
                                <th style="text-align: center;">Kelas</th>
                                <th style="text-align: center;">Dosen</th>
                                <th style="text-align: center;">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KI141330</td>
                                <td>Kerja Praktik</td>
                                <td style="text-align: center;">2</td>
                                <td style="text-align: center;">A</td>
                                <td>Pak Dosen</td>
                                <td style="text-align: center;">A</td>
                            </tr>
                            <tr>
                                <td>KI141417</td>
                                <td>Evolusi Perangkat Lunak</td>
                                <td style="text-align: center;">3</td>
                                <td style="text-align: center;">_</td>
                                <td>Bu Dosen</td>
                                <td style="text-align: center;">A</td>
                            </tr>
                            <tr>
                                <td>KI141423</td>
                                <td>Konstruksi Perangkat Lunak</td>
                                <td style="text-align: center;">3</td>
                                <td style="text-align: center;">_</td>
                                <td>Pak Dosen</td>
                                <td style="text-align: center;">AB</td>
                            </tr>
                            <tr>
                                <td>KI141425</td>
                                <td>Pemrograman Perangkat Bergerak</td>
                                <td style="text-align: center;">3</td>
                                <td style="text-align: center;">B</td>
                                <td>Bu Dosen</td>
                                <td style="text-align: center;">AB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="panel panel-success">
                    <div class="panel-heading" style="text-align: center;">FRS TELAH DISETUJUI</div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2">Kelas Jurusan</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Dosen 1</option>
                                    <option>Dosen 2</option>
                                    <option>Dosen 3</option>
                                    <option>Dosen 4</option>
                                    <option>Dosen 5</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-2 waves-effect waves-light btn-info">Tampil</button>
                        </div>
                    </form>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2">Kelas MKIJ</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP3 - Mahasiswa</option>
                                    <option>NRP4 - Mahasiswa</option>
                                    <option>NRP5 - Mahasiswa</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-2 waves-effect waves-light btn-info">Pilih</button>
                        </div>
                    </form>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2">Kelas UPMB</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP1 - Mahasiswa</option>
                                    <option>NRP3 - Mahasiswa</option>
                                    <option>NRP4 - Mahasiswa</option>
                                    <option>NRP5 - Mahasiswa</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-2 waves-effect waves-light btn-info">Pilih</button>
                        </div>
                    </form>
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
{% extends 'template/menubarMahasiswa.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Jadwal Perkuliahan</h4> </div>
            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12"> 
                <ol class="breadcrumb">
                    <li>FRS</li>
                    <li><a href="{{ url('FRS/jadwalKuliah') }}">Jadwal Perkuliahan</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group m-b-0">
                            <label class="col-sm-2 m-t-10">Periode: </label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>Gasal</option>
                                    <option>Genap</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </select>
                            </div>
                            <button type="button" class="btn col-sm-2 waves-effect waves-light btn-info" style="margin-top: 2px">Pilih</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;" class="col-sm-4">Mata Kuliah</th>
                                    <th style="text-align: center;" class="col-sm-1">Kelas</th>
                                    <th style="text-align: center;" class="col-sm-1">Hari</th>
                                    <th style="text-align: center;" class="col-sm-1">Waktu</th>
                                    <th style="text-align: center;" class="col-sm-1">Ruang</th>
                                    <th style="text-align: center;" class="col-sm-4">Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="padding-bottom: 0px">
                                    <td><b>KI1417 - Evolusi Perangkat Lunak</b><br>
                                    <div class="progress progress-lg" >
                                            <div class="progress-bar progress-bar-success" style="width: 100%" role="progressbar">Kehadiran: 16/16</div>    
                                        </div></td>
                                    <td style="text-align: center;">A</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">07.30-10.00</td>
                                    <td style="text-align: center;">IF-101</td>
                                    <td>Ir. Siti Rochimah, M.T., Ph.D</td>
                                </tr>
                                <tr class="m-t-30">
                                    <td><b>KI1330 - Kerja Praktik</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">B</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">10.00-12.30</td>
                                    <td style="text-align: center;">IF-104</td>
                                    <td>Dr. Radityo Anggoro, S.Kom., M.Eng.Sc</td>
                                </tr>
                                <tr>
                                    <td><b>KI1423 - Konstruksi Perangkat Lunak</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">D</td>
                                    <td style="text-align: center;">Kamis</td>
                                    <td style="text-align: center;">13.00-15.30</td>
                                    <td style="text-align: center;">IF-103</td>
                                    <td>Rizky Januar Akbar, S.Kom., M.Eng.</td>
                                </tr>
                                <tr>
                                    <td><b>KI1425 - Pemrograman Perangkat Bergerak</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">F</td>
                                    <td style="text-align: center;">Senin</td>
                                    <td style="text-align: center;">07.30-10.00</td>
                                    <td style="text-align: center;">IF-101</td>
                                    <td>Dwi Sunaryono, S.Kom., M.Kom.</td>
                                </tr>
                                <tr>
                                    <td><b>KI1501 - Pra Tugas Akhir</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-info" style="width: 87.5%;" role="progressbar">Kehadiran: 14/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Jumat</td>
                                    <td style="text-align: center;">10.00-12.30</td>
                                    <td style="text-align: center;">IF-106</td>
                                    <td>Dr. Radityo Anggoro, S.Kom., M.Eng.Sc</td>
                                </tr>
                                <tr>
                                    <td><b>KI1427 - Realitas Virtual dan Augmentasi</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">Kehadiran: 12/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Selasa</td>
                                    <td style="text-align: center;">15.30-18.00</td>
                                    <td style="text-align: center;">IF-108</td>
                                    <td>Dr.Eng. Darlis Heru Murti, S.Kom., M.Kom</td>
                                </tr>
                                <tr>
                                    <td><b>KI1430 - Sistem Informasi Geografis</b><br>
                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">Kehadiran: 16/16</div>    
                                        </div>
                                    </td>
                                    <td style="text-align: center;">-</td>
                                    <td style="text-align: center;">Selasa</td>
                                    <td style="text-align: center;">15.30-18.00</td>
                                    <td style="text-align: center;">IF-108</td>
                                    <td>Dr.techn. Ir. Raden Venantius Hari Ginardi, M.Sc.</td>
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
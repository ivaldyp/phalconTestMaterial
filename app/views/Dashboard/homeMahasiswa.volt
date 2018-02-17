{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <center><h3 class="box-title">Sistem Akademik ITS</h3></center> 
                </div>
            </div>
        </div>

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3.00 <i class="ti-arrow-up text-success"></i></h3>
                                </li>
                                <li class="col-middle">
                                    <h4>IPS</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-info"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">3.56 <i class="ti-arrow-down text-danger"></i></h3>
                                </li>
                                <li class="col-middle">
                                    <h4>IPK</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-success"><i class=" ti-wallet"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">122/144</h3>
                                </li>
                                <li>
                                    <h4>SKS Tempuh</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                            <span class="sr-only">122/144</span> 
                                        </div>
                                    </div>
                                </li>    
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6  b-0">
                            <ul class="col-in">
                                <li>
                                    <span class="circle circle-md bg-warning"><i class="ti-clipboard"></i></span>
                                </li>
                                <li class="col-last">
                                    <h3 class="counter text-right m-t-15">13/16</h3>
                                </li>
                                <li>
                                    <h4>Minggu Perkuliahan</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                            <span class="sr-only">90% Complete (success)</span> 
                                        </div>
                                    </div>
                                </li>   
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h1 class="box-title m-b-0" style="text-align: center;">Perkuliahan Mahasiswa</h1>
                            <!-- <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> -->
                            <br>
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        <tr>
                                            <th>Mata Kuliah</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Hari</th>
                                            <th style="text-align: center;">Pukul</th>
                                            <th style="text-align: center;">Ruang</th>
                                            <th style="text-align: center;">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kode Matkul 1 - Matkul 1</td>
                                            <td style="text-align: center;">A</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-101</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 2 - Matkul 2</td>
                                            <td style="text-align: center;">B</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-104</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 3 - Matkul 3</td>
                                            <td style="text-align: center;">D</td>
                                            <td style="text-align: center;">Kamis</td>
                                            <td style="text-align: center;">13.00</td>
                                            <td style="text-align: center;">IF-103</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 4 - Matkul 4</td>
                                            <td style="text-align: center;">F</td>
                                            <td style="text-align: center;">Senin</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-101</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 5 - Matkul 5</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">Jumat</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-106</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 6 - Matkul 6</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">Selasa</td>
                                            <td style="text-align: center;">16.00</td>
                                            <td style="text-align: center;">IF-108</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 7 - Matkul 7</td>
                                            <td style="text-align: center;">C</td>
                                            <td style="text-align: center;">Rabu</td>
                                            <td style="text-align: center;">07.30</td>
                                            <td style="text-align: center;">IF-105a</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 8 - Matkul 8</td>
                                            <td style="text-align: center;">D</td>
                                            <td style="text-align: center;">Jumat</td>
                                            <td style="text-align: center;">10.00</td>
                                            <td style="text-align: center;">IF-105b</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <h1 class="box-title m-b-0" style="text-align: center;">Tanggal Penting</h1>
                    <table data-toggle="table" data-height="160" data-mobile-responsive="true" class="table">
                        <thead>
                            <tr>
                                <th class="col-sm-3">Tanggal</th>
                                <th >Acara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Batas Isi FRS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box" style="padding-bottom: 14px">
                    <h1 class="box-title m-b-0" style="text-align: center;">Dosen Wali</h1>
                    <div>
                        <div class="panel">
                            <div class="p-30">
                                <div class="row">
                                    <div class="col-xs-4"><img src="../plugins/images/users/varun.jpg" alt="varun" class="img-circle img-responsive"></div>
                                    <div class="col-xs-8">
                                        <h2 class="m-b-0">Nama Dosen</h2>
                                        <h4 class="m-t-0">NIP Dosen Wali</h4>
                                        <h4 class="m-t-0">Email Dosen</h4>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-t-10" />                                 
                        </div>
                     </div>
                </div>
            </div>   
        </div> 

        <!-- NEW ROW -->
        <div class="row">
            
            <div class="col-sm-6">
                <div class="white-box">
                    <h1 class="box-title" style="text-align: center;">Pengumuman</h1>
                    <table data-height="279" data-mobile-responsive="true" class="table table-hover manage-u-table">
                        <thead>
                            <tr>
                                <th class="col-sm-3">Tanggal</th>
                                <th>Notif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Update Peta baru Fearless Fiore</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Event Valentine Wall of Love</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Maintenance pukul 10-15 </td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Melakukan Nerf dan Buff pada beberapa hero</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Update Weapon dan alat-alat lainnya</td>
                            </tr>
                            <tr>
                                <td>24/02/2018</td>
                                <td>Event 300% EXP akhir Januari</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="white-box" style="padding-bottom: 43px">
                    <h1 class="box-title" style="text-align: center;">Chart IPS</h1>
                    <!-- <ul class="list-inline text-right">
                        <li><h5><i class="fa fa-circle" style="color: #00bfc7;"></i>iPhone</h5> </li>
                    </ul> -->
                    <div id="myfirstchart"></div>
                </div>
            </div>
        </div>

        <!-- NEW ROW -->
        <div class="row">
            <div class="col-sm-8">
                <div class="white-box" >
                    <h1 class="box-title" style="text-align: center;">Absensi</h1>
                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">16/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">100%</div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">16/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-success" style="width: 100%;" role="progressbar">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">14/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-info" style="width: 87%;" role="progressbar">87.5%</div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">14/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-info" style="width: 87%;" role="progressbar">87.5%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">12/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">75%</div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding-bottom: 10px ">
                            <h4>Matkul 1<span class="pull-right">12/16</span></h4>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="white-box" style="padding-bottom: 16px">
                    <h1 class="box-title" style="text-align: center;">Status</h1>
                    <div class="panel panel-info">
                        <div class="panel-heading">SPP Sudah Terbayar</div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">FRS Belum Terisi</div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">IPD Belum Terisi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>

{% endblock %}
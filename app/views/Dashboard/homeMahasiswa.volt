{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <center><h3 class="box-title">Sistem Akademik ITS</h3></center> </div>
            </div>
            <div class="col-sm-12">
                <div class="white-box">
                     <div class="row row-in">
                          <div class="col-lg-3 col-sm-6 row-in-br">
                            <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                    </li>
                                    <li class="col-last"><h3 class="counter text-right m-t-15">3.00</h3></li>
                                    <li class="col-middle">
                                        <h4>Indeks Prestasi Semester</h4>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                              <span class="sr-only">3.00</span> 
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
                                    <li class="col-last"><h3 class="counter text-right m-t-15">4.00</h3></li>
                                    <li class="col-middle">
                                        <h4>Indeks Prestasi Kumulatif</h4>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                              <span class="sr-only">4.00</span> 
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
                                    <li class="col-last"><h3 class="counter text-right m-t-15">122/144</h3></li>
                                    <li class="col-middle">
                                        <h4>Sistem Kredit Semester</h4>
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
                                <li class="col-last"><h3 class="counter text-right m-t-15">13/16</h3></li>
                                <li class="col-middle">
                                    <h4>Minggu Perkuliahan</h4>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                                          <span class="sr-only">40% Complete (success)</span> 
                                      </div>
                                    </div>
                                </li>   
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0" style="text-align: center;">Perkuliahan Mahasiswa</h3>
                            <!-- <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> -->
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Mata Kuliah</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Hari</th>
                                            <th class="text-nowrap" style="text-align: center;">Pukul</th>
                                            <th style="text-align: center;">Ruang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kode Matkul 1 - Matkul 1</td>
                                            <td>A</td>
                                            <td>Senin</td>
                                            <td class="text-nowrap">07.30</td>
                                            <td>IF-101</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 2 - Matkul 2</td>
                                            <td>B</td>
                                            <td>Senin</td>
                                            <td class="text-nowrap">10.00</td>
                                            <td>IF-104</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 3 - Matkul 3</td>
                                            <td>D</td>
                                            <td>Kamis</td>
                                            <td class="text-nowrap">13.00</td>
                                            <td>IF-103</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 4 - Matkul 4</td>
                                            <td>F</td>
                                            <td>Senin</td>
                                            <td class="text-nowrap">07.30</td>
                                            <td>IF-101</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 5 - Matkul 5</td>
                                            <td>-</td>
                                            <td>Jumat</td>
                                            <td class="text-nowrap">10.00</td>
                                            <td>IF-106</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 6 - Matkul 6</td>
                                            <td>-</td>
                                            <td>Selasa</td>
                                            <td class="text-nowrap">16.00</td>
                                            <td>IF-108</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 7 - Matkul 7</td>
                                            <td>C</td>
                                            <td>Rabu</td>
                                            <td class="text-nowrap">07.30</td>
                                            <td>IF-105a</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Matkul 8 - Matkul 8</td>
                                            <td>D</td>
                                            <td>Jumat</td>
                                            <td class="text-nowrap">10.00</td>
                                            <td>IF-105b</td>
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
                    <h3 class="box-title m-b-0" style="text-align: center;">Dosen Wali</h3>
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
                            <!-- <hr class="m-t-10" />                                  -->
                        </div>
                     </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <h3 class="box-title m-b-0" style="text-align: center;">Dosen Wali</h3>
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
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>

{% endblock %}
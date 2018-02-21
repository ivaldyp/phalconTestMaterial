{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Kelola Absen</h4> </div>
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
                    <h3 class="box-title m-b-0">Absensi Dosen</h3>
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <table data-mobile-responsive="true" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="col-sm-2" style="text-align: center; vertical-align: middle;"><h3>NIP</h3></th>
                                <th colspan="16" style="text-align: center;">Pertemuan</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                            </tr>
                        </thead>
                        <tbody style="padding-top: : 0px; padding-bottom: 0px">
                            <tr>
                                <td>NIP DOSEN</td>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox1" type="checkbox" checked>
                                            <label for="checkbox1"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox3" type="checkbox" checked>
                                            <label for="checkbox3"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox9" type="checkbox" checked>
                                            <label for="checkbox9"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox10" type="checkbox" checked>
                                            <label for="checkbox10"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox12" type="checkbox" checked>
                                            <label for="checkbox12"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox13" type="checkbox" checked>
                                            <label for="checkbox13"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox14" type="checkbox" checked>
                                            <label for="checkbox14"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox15" type="checkbox" checked>
                                            <label for="checkbox15"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox16" type="checkbox" checked>
                                            <label for="checkbox16"> </label>
                                        </div></th>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <h3 class="box-title m-b-0">Absensi mahasiswa</h3>
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <table data-mobile-responsive="true" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" class="col-sm-2" style="text-align: center; vertical-align: middle;"><h3>NRP</h3></th>
                                <th colspan="16" style="text-align: center;">Pertemuan</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                            </tr>
                        </thead>
                        <tbody style="padding-top: : 0px; padding-bottom: 0px">
                            <tr>
                                <td>NRP MAHASISWA</td>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox1" type="checkbox" checked>
                                            <label for="checkbox1"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox3" type="checkbox" checked>
                                            <label for="checkbox3"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox9" type="checkbox" checked>
                                            <label for="checkbox9"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox10" type="checkbox" checked>
                                            <label for="checkbox10"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox12" type="checkbox" checked>
                                            <label for="checkbox12"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox13" type="checkbox" checked>
                                            <label for="checkbox13"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox14" type="checkbox" checked>
                                            <label for="checkbox14"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox15" type="checkbox" checked>
                                            <label for="checkbox15"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox16" type="checkbox" checked>
                                            <label for="checkbox16"> </label>
                                        </div></th>
                            </tr>
                            <tr>
                                <td>NRP MAHASISWA</td>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox1" type="checkbox" checked>
                                            <label for="checkbox1"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox3" type="checkbox" checked>
                                            <label for="checkbox3"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox9" type="checkbox" checked>
                                            <label for="checkbox9"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox10" type="checkbox" checked>
                                            <label for="checkbox10"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox12" type="checkbox" checked>
                                            <label for="checkbox12"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox13" type="checkbox" checked>
                                            <label for="checkbox13"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox14" type="checkbox" checked>
                                            <label for="checkbox14"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox15" type="checkbox" checked>
                                            <label for="checkbox15"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox16" type="checkbox" checked>
                                            <label for="checkbox16"> </label>
                                        </div></th>
                            </tr>
                            <tr>
                                <td>NRP MAHASISWA</td>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox1" type="checkbox" checked>
                                            <label for="checkbox1"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox3" type="checkbox" checked>
                                            <label for="checkbox3"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox4" type="checkbox" checked>
                                            <label for="checkbox4"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox5" type="checkbox" checked>
                                            <label for="checkbox5"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox6" type="checkbox" checked>
                                            <label for="checkbox6"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox7" type="checkbox" checked>
                                            <label for="checkbox7"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox8" type="checkbox" checked>
                                            <label for="checkbox8"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox9" type="checkbox" checked>
                                            <label for="checkbox9"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox10" type="checkbox" checked>
                                            <label for="checkbox10"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox11" type="checkbox" checked>
                                            <label for="checkbox11"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox12" type="checkbox" checked>
                                            <label for="checkbox12"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox13" type="checkbox" checked>
                                            <label for="checkbox13"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox14" type="checkbox" checked>
                                            <label for="checkbox14"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox15" type="checkbox" checked>
                                            <label for="checkbox15"> </label>
                                        </div></th>
                                <th><div class="checkbox checkbox-custom">
                                            <input id="checkbox16" type="checkbox" checked>
                                            <label for="checkbox16"> </label>
                                        </div></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <button class="btn btn-block btn-default"><i class="fa fa-times"></i> Batal </button>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-12">
                            <a href="{{ url('Pembelajaran/lihatKelasPembelajaran') }}">
                                <button class="btn btn-block btn-info"><i class="fa fa-save"></i> Simpan </button>
                            </a>
                        </div>
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
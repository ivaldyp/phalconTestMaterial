{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Historis Pembayaran Mahasiswa</h4> </div>
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
                    <h3 class="box-title m-b-0">MAHASISWA : IVALDY - 5114100105</h3>
                    <!-- <p class="text-muted m-b-30">Simple table example</p> -->
                    <table data-toggle="table" data-mobile-responsive="true" class="table-striped">
                        <thead>
                            <tr>
                                <th>Tahun Semester</th>
                                <th>Tanggal Bayar & Bank</th>
                                <th>Total Bayar</th>
                                <th>Flag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tr-id-1" class="tr-class-1">
                                <td id="td-id-1" class="td-class-1"> GENAP 2017 </td>
                                <td>2018-01-28 MANDIRI</td>
                                <td>4000000</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table data-toggle="table" data-mobile-responsive="true" class="table-borderless">
                        <thead>
                            <tr>
                                <th>Jenis Pembayaran</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="tr-id-1" class="tr-class-1">
                                <td>TAGIHAN SPP</td>
                                <td>4000000</td>
                            </tr>
                            <tr id="tr-id-2" class="tr-class-2">
                                <td>TUNGGAKAN WISUDA</td>
                                <td>0</td>
                            </tr>
                            <tr id="tr-id-3" class="tr-class-3">
                                <td>TAGIHAN PELAYARAN</td>
                                <td>0</td>
                            </tr>
                            <tr id="tr-id-4" class="tr-class-4">
                                <td>TUNGGAKAN PELAYARAN</td>
                                <td>0</td>
                            </tr>
                            <tr id="tr-id-5" class="tr-class-5">
                                <td>TAGIHAN SPI</td>
                                <td>0</td>
                            </tr>
                            <tr id="tr-id-6" class="tr-class-6">
                                <td>TAGIHAN IPITS</td>
                                <td>0</td>
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
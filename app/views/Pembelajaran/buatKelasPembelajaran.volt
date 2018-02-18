{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Buat Kelas Pembelajaran</h4> </div>
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
                	<form class="form-horizontal" role="form">
                		<div class="form-group">
                			<label class="col-sm-3 control-label">Program Studi</label>
                            <label class="col-sm-3 control-label" style="right: 45px">51100 - Teknik Informatika</label>
                		</div>
                		<div class="form-group">
                            <label class="col-sm-3 control-label">Tahun Kurikulum</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Periode</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>Gasal</option>
                                    <option>Genap</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mata Kuliah</label>
                            <div class="col-sm-6">
                                <select class="form-control">
                                    <option>Matkul 1</option>
                                    <option>Matkul 2</option>
                                    <option>Matkul 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="kelas-SKS">Kredit (SKS)</label>
                            <div class="col-sm-3">
                                <input type="number" max="5" min="0" id="kelas-SKS" name="kelas-SKS" class="form-control" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                    <option>-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Dosen Pengajar</label>
                            <div class="col-sm-3">
                                <select class="form-control">
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                    <option>Dosen</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="kelas-tampung">Daya Tampung</label>
                            <div class="col-sm-3">
                                <input type="number" max="50" min="0" id="kelas-tampung" name="kelas-tampung" class="form-control" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="kelas-tampung">Rencana TM</label>
                            <div class="col-sm-3">
                                <input type="number" max="20" min="0" id="kelas-tampung" name="kelas-tampung" class="form-control" placeholder="...">
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-sm-8"></div>
	                        <div class="col-lg-2 col-sm-4 col-xs-12">
	                            <button class="btn btn-block btn-default"><i class="fa fa-times"></i> Batal </button>
	                        </div>
	                        <div class="col-lg-2 col-sm-4 col-xs-12">
	                            <button class="btn btn-block btn-info"><i class="fa fa-save"></i> Simpan </button>
	                        </div>
                        </div>
                    </form>
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
{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Kelola Kuisioner IPD</h4> </div>
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
                    <section>
                        <div class="sttabs tabs-style-bar">
                            <nav>
                                <ul>
                                    <li><a href="#section-bar-1" class="sticon ti-book"><span>Kuisioner Mata Kuliah</span></a></li>
                                    <li><a href="#section-bar-2" class="sticon ti-user"><span>Kuisioner Dosen</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-bar-1">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan1">Pertanyaan 1</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan1" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan2">Pertanyaan 2</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan2" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan3">Pertanyaan 3</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan3" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan4">Pertanyaan 4</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan4" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan5">Pertanyaan 5</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan5" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan6">Pertanyaan 6</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan6" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan7">Pertanyaan 7</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan7" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan8">Pertanyaan 8</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan8" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan9">Pertanyaan 9</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan9" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan10">Pertanyaan 10</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan10" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-lg-2 col-sm-4 col-xs-12">
                                                <button class="btn btn-block btn-default"><i class="fa fa-times"></i> Batal </button>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-xs-12">
                                                <a href="Pembelajaran/lihatKelasPembelajaran">
                                                    <button class="btn btn-block btn-info"><i class="fa fa-save"></i> Simpan </button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                                <section id="section-bar-2">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan1">Pertanyaan 1</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan1" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan2">Pertanyaan 2</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan2" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan3">Pertanyaan 3</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan3" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan4">Pertanyaan 4</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan4" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan5">Pertanyaan 5</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan5" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan6">Pertanyaan 6</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan6" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan7">Pertanyaan 7</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan7" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan8">Pertanyaan 8</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan8" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan9">Pertanyaan 9</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan9" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="pertanyaan10">Pertanyaan 10</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="pertanyaan10" class="form-control" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-lg-2 col-sm-4 col-xs-12">
                                                <button class="btn btn-block btn-default"><i class="fa fa-times"></i> Batal </button>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-xs-12">
                                                <a href="Pembelajaran/lihatKelasPembelajaran">
                                                    <button class="btn btn-block btn-info"><i class="fa fa-save"></i> Simpan </button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /tabs -->
                    </section>
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
{% extends 'template/menubar.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Isi Berita Acara</h4> </div>
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
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-6" style="top: 10px">Kelas : Perangkat Lunak</label>
                            <div class="col-md-6">
                                <input type="date" id="tanggal" name="tanggal" class="form-control mydatepicker" placeholder="Tanggal"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Berita Acara</label>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" placeholder="Berita Acara"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn col-md-2 waves-effect waves-light btn-info pull-right">Simpan</button>
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
{% extends 'template/menubar.volt' %}
{% block content %}
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Starter Page</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                <ol class="breadcrumb">
                    <li><a href="{{ url('Dashboard/index2') }}">Dashboard</a></li>
                    <li class="active">Starter Page</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Blank Starter page</h3> </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
</div>
{% endblock %}
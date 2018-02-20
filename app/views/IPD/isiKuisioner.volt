{% extends 'template/menubarMahasiswa.volt' %}
{% block content %}

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Isi Kuisioner IPD</h4> </div>
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
                                        <table data-mobile-responsive="true" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-8"><h2>Pertanyaan</h2></th>
                                                    <th class="col-sm-4" colspan="4"><h2>Nilai</h2></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pertanyaan 1</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1matkul" id="radio1matkul" value="1">
                                                        <label for="radio1matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1matkul" id="radio1matkul" value="2">
                                                        <label for="radio1matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1matkul" id="radio1matkul" value="3">
                                                        <label for="radio1matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1matkul" id="radio1matkul" value="4">
                                                        <label for="radio1matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 2</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2matkul" id="radio2matkul" value="1">
                                                        <label for="radio2matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2matkul" id="radio2matkul" value="2">
                                                        <label for="radio2matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2matkul" id="radio2matkul" value="3">
                                                        <label for="radio2matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2matkul" id="radio2matkul" value="4">
                                                        <label for="radio2matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 3</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3matkul" id="radio3matkul" value="1">
                                                        <label for="radio3matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3matkul" id="radio3matkul" value="2">
                                                        <label for="radio3matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3matkul" id="radio3matkul" value="3">
                                                        <label for="radio3matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3matkul" id="radio3matkul" value="4">
                                                        <label for="radio3matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 4</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4matkul" id="radio4matkul" value="1">
                                                        <label for="radio4matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4matkul" id="radio4matkul" value="2">
                                                        <label for="radio4matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4matkul" id="radio4matkul" value="3">
                                                        <label for="radio4matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4matkul" id="radio4matkul" value="4">
                                                        <label for="radio4matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 5</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5matkul" id="radio5matkul" value="1">
                                                        <label for="radio5matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5matkul" id="radio5matkul" value="2">
                                                        <label for="radio5matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5matkul" id="radio5matkul" value="3">
                                                        <label for="radio5matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5matkul" id="radio5matkul" value="4">
                                                        <label for="radio5matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 6</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6matkul" id="radio6matkul" value="1">
                                                        <label for="radio6matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6matkul" id="radio6matkul" value="2">
                                                        <label for="radio6matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6matkul" id="radio6matkul" value="3">
                                                        <label for="radio6matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6matkul" id="radio6matkul" value="4">
                                                        <label for="radio6matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 7</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7matkul" id="radio7matkul" value="1">
                                                        <label for="radio7matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7matkul" id="radio7matkul" value="2">
                                                        <label for="radio7matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7matkul" id="radio7matkul" value="3">
                                                        <label for="radio7matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7matkul" id="radio7matkul" value="4">
                                                        <label for="radio7matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 8</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8matkul" id="radio8matkul" value="1">
                                                        <label for="radio8matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8matkul" id="radio8matkul" value="2">
                                                        <label for="radio8matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8matkul" id="radio8matkul" value="3">
                                                        <label for="radio8matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8matkul" id="radio8matkul" value="4">
                                                        <label for="radio8matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 9</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9matkul" id="radio9matkul" value="1">
                                                        <label for="radio9matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9matkul" id="radio9matkul" value="2">
                                                        <label for="radio9matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9matkul" id="radio9matkul" value="3">
                                                        <label for="radio9matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9matkul" id="radio9matkul" value="4">
                                                        <label for="radio9matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 10</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10matkul" id="radio10matkul" value="1">
                                                        <label for="radio10matkul"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10matkul" id="radio10matkul" value="2">
                                                        <label for="radio10matkul"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10matkul" id="radio10matkul" value="3">
                                                        <label for="radio10matkul"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10matkul" id="radio10matkul" value="4">
                                                        <label for="radio10matkul"> 4 </label>
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </section>
                                <section id="section-bar-2">
                                    <form class="form-horizontal" role="form">
                                        <table data-mobile-responsive="true" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="col-sm-8"><h2>Pertanyaan</h2></th>
                                                    <th class="col-sm-4" colspan="4"><h2>Nilai</h2></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pertanyaan 1</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1dosen" id="radio1dosen" value="1">
                                                        <label for="radio1dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1dosen" id="radio1dosen" value="2">
                                                        <label for="radio1dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1dosen" id="radio1dosen" value="3">
                                                        <label for="radio1dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio1dosen" id="radio1dosen" value="4">
                                                        <label for="radio1dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 2</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2dosen" id="radio2dosen" value="1">
                                                        <label for="radio2dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2dosen" id="radio2dosen" value="2">
                                                        <label for="radio2dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2dosen" id="radio2dosen" value="3">
                                                        <label for="radio2dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio2dosen" id="radio2dosen" value="4">
                                                        <label for="radio2dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 3</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3dosen" id="radio3dosen" value="1">
                                                        <label for="radio3dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3dosen" id="radio3dosen" value="2">
                                                        <label for="radio3dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3dosen" id="radio3dosen" value="3">
                                                        <label for="radio3dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio3dosen" id="radio3dosen" value="4">
                                                        <label for="radio3dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 4</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4dosen" id="radio4dosen" value="1">
                                                        <label for="radio4dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4dosen" id="radio4dosen" value="2">
                                                        <label for="radio4dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4dosen" id="radio4dosen" value="3">
                                                        <label for="radio4dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio4dosen" id="radio4dosen" value="4">
                                                        <label for="radio4dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 5</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5dosen" id="radio5dosen" value="1">
                                                        <label for="radio5dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5dosen" id="radio5dosen" value="2">
                                                        <label for="radio5dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5dosen" id="radio5dosen" value="3">
                                                        <label for="radio5dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio5dosen" id="radio5dosen" value="4">
                                                        <label for="radio5dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 6</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6dosen" id="radio6dosen" value="1">
                                                        <label for="radio6dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6dosen" id="radio6dosen" value="2">
                                                        <label for="radio6dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6dosen" id="radio6dosen" value="3">
                                                        <label for="radio6dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio6dosen" id="radio6dosen" value="4">
                                                        <label for="radio6dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 7</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7dosen" id="radio7dosen" value="1">
                                                        <label for="radio7dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7dosen" id="radio7dosen" value="2">
                                                        <label for="radio7dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7dosen" id="radio7dosen" value="3">
                                                        <label for="radio7dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio7dosen" id="radio7dosen" value="4">
                                                        <label for="radio7dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 8</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8dosen" id="radio8dosen" value="1">
                                                        <label for="radio8dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8dosen" id="radio8dosen" value="2">
                                                        <label for="radio8dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8dosen" id="radio8dosen" value="3">
                                                        <label for="radio8dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio8dosen" id="radio8dosen" value="4">
                                                        <label for="radio8dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 9</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9dosen" id="radio9dosen" value="1">
                                                        <label for="radio9dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9dosen" id="radio9dosen" value="2">
                                                        <label for="radio9dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9dosen" id="radio9dosen" value="3">
                                                        <label for="radio9dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio9dosen" id="radio9dosen" value="4">
                                                        <label for="radio9dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pertanyaan 10</td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10dosen" id="radio10dosen" value="1">
                                                        <label for="radio10dosen"> 1 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10dosen" id="radio10dosen" value="2">
                                                        <label for="radio10dosen"> 2 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10dosen" id="radio10dosen" value="3">
                                                        <label for="radio10dosen"> 3 </label>
                                                    </div></td>
                                                    <td><div class="radio">
                                                        <input type="radio" name="radio10dosen" id="radio10dosen" value="4">
                                                        <label for="radio10dosen"> 4 </label>
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
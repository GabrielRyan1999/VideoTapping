<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset ('assets/images/logo.png')}}" type="image" />

    <title>SMA Kolese DeBritto Yogyakarta</title>
    <!-- CSS 
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Tes 
  <link href="https://stackpath.bootstrapcdm.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/home" class="site_title"><img src="{{asset ('assets/images/logo.png')}}"
                                style="width:50px"> <span style="font-size:70%">SMA Kolese De Britto</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{Asset ('uploads/avatars/'. Session::get('avatar') ) }}" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2>{{Session::get('name')}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/home">Mata Pelajaran</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Upload <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/upload">Form Upload Video</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Media <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/gallery">Video Gallery</a></li>
                                        <li><a href="/calendar">Calendar</a></li>
                                    </ul>
                                </li>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="/">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    {{ Session::get('name')}}</a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile"> Profile</a>
                                    <a class="dropdown-item" href="/"><i class="fa fa-sign-out pull-right"></i> Log
                                        Out</a>
                                </div>
                            </li>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h1> Daftar Mata Pelajaran </h1>
                        </div>

                        <div class="title_right">
                            <form action="/search" method="GET">
                                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control"
                                            placeholder="Search Video...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- /top tiles -->


                <!-- /page content -->

                <div class="card-columns">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <a href="/agama">
                                    <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="/agama"> Agama</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <a href="/antropologi">
                                    <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="/antropologi">Antropologi</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <a href="/indo">
                                    <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="/indo">Bahasa Indonesia</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Bahasa Inggris</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Biologi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Bimbingan Konseling</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-columns">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Ekonomi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Fisika</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Geografi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jerman</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Kimia</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Mandarin</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-columns">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Matematika</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Pendidikan Jasmani</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Pendidikan Nilai</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Perancis</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">PKN</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">PKWU</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-columns">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sejarah</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Seni Rupa</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <div class="card text-center">
                                <img src="{{asset ('assets/images/Agama.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sosiologi</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    SMA Kolese DeBritto Yogyakarta</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset ('assets/images/logo.png')}}" type="image" />
    <title>SMA Kolese De Britto Yogyakarta</title>

    <!-- Bootstrap -->
    <link href="{{asset ('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset ('assets/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/defaultadmin" class="site_title"><img src="{{asset ('assets/images/logo.png')}}"
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
                                        <li><a href="/defaultadmin">Mata Pelajaran</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Admin Page <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/edit">Kelola User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
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
                                    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i>
                                        Log
                                        Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">

                            <h3> {{ $mata->namamatapelajaran }}</h3>
                        </div>

                        <div class="title_right">

                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>List Video Guru</h2>
                                    <ul class="nav navbar-right panel_toolbox" style="float:left;">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                    <div class="row">
                                        @foreach($vidGuru as $video)
                                        <div class="col-md-6 col-sm-6">

                                            <h3 style="text-align:center;"> {{ $video->title }}</h3>
                                            <div id='videoplayer'>

                                                <video preload="none"
                                                    poster="{{asset('/assets/'.'thumbnail'.$video->thumbnail) }}"
                                                    width="100%" controls>
                                                    <source src="{{asset('/assets/videos/'.$video->judulvideo)}}"
                                                        type="video/mp4">
                                                </video>
                                                <div class="caption">
                                                    <form action="{{ url('/tontonAdmin', $video->id) }}">
                                                        <button type="submit" class="btn btn-info">

                                                            Detail Video
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                        {{$vidGuru->links() }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>List Video Siswa</h2>
                                            <ul class="nav navbar-right panel_toolbox" style="float:left;">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">


                                            <div class="row">
                                                @foreach($vidSiswa as $video)
                                                <div class="col-md-6 col-sm-6">

                                                    <h3 style="text-align:center; color:black"> {{ $video->title }}</h3>
                                                    <div id='videoplayer'>
                                                        <video preload="none"
                                                            poster="{{asset('/assets/'.'thumbnail'.$video->thumbnail) }}"
                                                            width="100%" controls>
                                                            <source
                                                                src="{{asset('/assets/videos/'.$video->judulvideo)}}"
                                                                type="video/mp4">
                                                        </video>
                                                        <div class="caption">
                                                            <form action="{{url('/tontonAdmin', $video->id) }}">
                                                                <button type="submit" class="btn btn-info">

                                                                    Detail Video
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>

                                                @endforeach
                                                {{$vidSiswa->links() }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

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
    <script src="{{asset ('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{asset ('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{asset ('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{asset ('assets/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset ('assets/js/custom.min.js') }}"></script>
</body>

</html>
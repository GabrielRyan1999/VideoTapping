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
                        <a href="/home" class="site_title"><img src="{{asset ('assets/images/logo.png')}}"
                                style="width:50px"> <span style="font-size:70%">SMA Kolese De Britto</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset ('assets/images/gmb1.jpg')}}" alt="..." class="img-circle profile_img">
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
                                    <img src="images/img.jpg" alt="">{{Session::get('name')}}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
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
                            <h3>Nonton Video</h3>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <form action="{{ route('videoajactrl.show', $vid->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="x_content">

                                        <div class="col-md-12 col-sm-12 ">
                                            <div id='videoplayer'>
                                                <video width="80%" controls autoplay>
                                                    <source src="{{asset('/assets/videos/'.$vid->judulvideo) }}"
                                                        type="video/mp4">
                                                </video>
                                                <h3>{{ $vid->title }}</h3>

                                                <h4>{{ $vid->views}} Views </h4>

                                                <div ng-app="Actions">
                                                    <span ng-controller="LikeController">
                                                        @if ($vid->nomorinduk )
                                                        <button class="btn btn-default like btn-login"
                                                            ng-click="like()">
                                                            <i class="fa fa-heart"></i>
                                                            <span>@{{ like_btn_text }}</span>
                                                        </button>
                                                        @endif
                                                    </span>
                                                </div>

                                                <div class="separator">
                                                    <h4>{{ $vid->deskripsi }}</h4>
                                                </div>
                                                <br>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{url('simpanKomentar', $vid->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                            <input type="text" class="form-control" placeholder="Apa Komentar Anda?" id="komentar"
                                name="komentar" />
                        </div><br><br>

                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>

                    <div>
                        <h4>Komentar</h4>

                        <!-- end of user messages -->
                        <ul class="messages">
                            <li>
                                @foreach ($komen as $k)
                                <div class="message_wrapper">
                                    <h4 class="heading">{{ $k->nomorinduk }}</h4>
                                    <blockquote class="message">{{ $k->body }}</blockquote>
                                    <br />
                                </div>
                                @endforeach
                            </li>

                        </ul>
                        <!-- end of user messages -->


                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    SMA Kolese De Britto Yogyakarta</a>
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

    <script>
    var app = angular.module("Actions", []);
    app.controller("LikeController", function($scope, $http) {

        checkLike();
        $scope.like = function() {
            var post = {
                id: "{{ $vid->id }}",
            };
            $http.post('/post/like', post).success(function(result) {
                checkLike();
            });
        };

        function checkLike() {
            $http.get('/post/{{ $vid->id }}/islikedbyme').success(function(result) {
                if (result == 'true') {
                    $scope.like_btn_text = "Delete Like";
                } else {
                    $scope.like_btn_text = "Like";
                }
            });
        };
    });
    </script>
</body>

</html>
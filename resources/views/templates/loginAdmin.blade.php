<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset ('assets/images/logo.png')}}" type="image" />
    <title>SMA Kolese De Britto Yogyakarta </title>

    <!-- Bootstrap -->
    <link href="{{asset ('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset ('assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset ('assets/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{asset ('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <h1>Login Admin</h1>
                    <div>
                        @if(\Session::has('alert'))
                        <div class="alert alert-danger">
                            <div>{{Session::get('alert')}}</div>
                        </div>
                        @endif
                        @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{Session::get('alert-success')}}</div>
                        </div>
                        @endif
                        <form action="{{ url('loginAdminPost')}}" method="post">
                            {{csrf_field() }}
                            <input type="text" class="form-control" placeholder="Nomor Induk" id="nomorinduk"
                                name="nomorinduk" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" id="password"
                            name="password" />
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-default submit">Login</button>
                    </div>
                    </form>
                    <div class="clearfix"></div>
                    <br>
                    <div class="separator">
                        <p class="change_link">Belum Punya Akun?
                            <a href="#signup" class="to_register"> Buat Akun </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1>SMA Kolese De Britto Yogyakarta</h1>
                        </div>
                    </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
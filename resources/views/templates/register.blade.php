<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{asset ('assets/images/logo.png')}}" type="image" />
  <title>SMA Kolese DeBritto Yogyakarta </title>

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
    <a class="hiddenanchor" id="register"></a>
    <div class="login_wrapper">
    <div id="register">
        <section class="login_content">

          <h1>Buat Akun</h1>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

              <div class="card">
                <form action="{{url ('/registerPost') }}" method="POST">
                  {{ csrf_field() }}
                  <h1>Daftar Siswa</h1>
                  <div>
                    <input type="text" class="form-control" value="Siswa" id="status" name="status" READONLY/>
                  </div>
                  <div>
                    <input type="text" class="form-control" placeholder="Nama" id="name" name="name" />
                  </div>
                  <div>
                    <input type="text" class="form-control" placeholder="Nomor Induk" id="nomorinduk" name="nomorinduk" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
                  </div>
                  <div>
                    <input type="password" class="form-control" placeholder="Confirm Password" id="confirmation" name="confirmation">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-default submit">Submit</button>
                  </div>
                  </form>
          </div>
          <br><br>
          <div class="separator">

            <div class="clearfix"></div>
            <br />

            <div>
              <h1>SMA Kolese De Britto Yogyakarta</h1>
            </div>
          </div>
          
        </section>
      </div>
    </div>
  </div>
  </body>

</html>
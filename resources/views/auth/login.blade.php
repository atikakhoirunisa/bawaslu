<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - BAWASLU SLEMAN</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
  <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
  <link href="{{ asset('style/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">

  <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
          <a href="index.html">
            <img class="align-content" src="images/logo.png" alt="">
          </a>
        </div>
        <div class="login-form">
          <form action="{{ route('login.post') }}" method="post">
            @csrf
            <h3 class="text-center">LOGIN</h3>

            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>

            <div class="register-link m-t-15 text-center">
                          <p>Buat akun? <a href="{{ route('register') }}"> Register</a></p>
                        </div>

          </form>
        </div>
      </div>
    </div>



    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>


  </body>
  </html>

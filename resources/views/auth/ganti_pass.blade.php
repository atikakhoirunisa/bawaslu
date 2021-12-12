<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ganti Password - BAWASLU SLEMAN</title>
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
                    <form>

                        <h3 class="text-center">Ganti Password</h3>

                        <div class="form-group">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" placeholder="Password Lama">
                        </div>

                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" placeholder="Password Baru">
                        </div>

                        <div class="form-group">
                            <label>Ulangi Password Baru</label>
                            <input type="password" class="form-control" placeholder="Password Baru">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>


</body>
</html>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title') - BAWASLU SLEMAN</title>
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
<body>

    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">
                    <img src="{{ asset('style/images/logo.png')}}" alt="Logo"></a>
                </a>
                <a class="navbar-brand hidden">
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Isi Laporan</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-bullhorn"></i><a href="{{ url('pencegahan/add') }}">Pencegahan</a></li>
                                <li><i class="fa fa-file-text"></i><a href="{{ url('pengawasan/add') }}">Pengawasan</a></li>
                                <li><i class="fa fa-upload"></i><a href="{{ url('monitoring/add') }}">Monitoring Media</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a href="{{ url('kegiatan/add') }}">Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-archive"></i>Data Laporan</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-bullhorn"></i><a href="{{ url('pencegahan/data') }}">Pencegahan</a></li>
                                <li><i class="fa fa-file-text"></i><a href="{{ url('pengawasan/data') }}">Pengawasan</a></li>
                                <li><i class="fa fa-upload"></i><a href="{{ url('monitoring/data') }}">Monitoring Media</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a href="{{ url('kegiatan/data') }}">Kegiatan</a></li>
                            </ul>
                        </li>

                        <li class="dropdown show">
                            <a href="{{ url('ganti_pass') }}"> <i class="menu-icon fa fa-key"></i>Ganti Password</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"> <i class="menu-icon fa fa-power-off"></i>Logout</a>
                        </li>
                        <h3 class="menu-title">Bantuan</h3><!-- /.menu-title -->
                        <li class="dropdown show">
                            <a href="{{ url('faq') }}"> <i class="menu-icon fa fa-list-ul"></i>FAQ</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                        <!-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> -->
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('style/images/admin.jpg')}}">
                        </a>
                    -->
                    <div class="user-menu dropdown-menu">
                       <!--  <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a> -->
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->

    @yield('content')

</div>

<!-- isi grafik -->
<script src="{{ asset('style/assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
<script src="{{ asset('style/assets/js/dashboard.js')}}"></script>
<script src="{{ asset('style/assets/js/widgets.js')}}"></script>
<script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{ asset('style/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Paper Dashboard 2')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ Vite::asset('resources/vendor/paper-dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/vendor/paper-dashboard/assets/img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    @vite(['resources/css/paper-dashboard.scss', 'resources/js/paper-dashboard.js'])
</head>
<body class="">
<div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="{{ Vite::asset('resources/vendor/paper-dashboard/assets/img/logo-small.png') }}" alt="Paper Dashboard icon">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">
                Paper Dashboard
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-diamond"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="nc-icon nc-caps-small"></i>
                        <p>Typography</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" data-color="white">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer footer-black footer-white">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="https://creative-tim.com" target="_blank">Creative Tim</a></li>
                            <li><a href="https://creative-tim.com/blog" target="_blank">Blog</a></li>
                            <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                          © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>

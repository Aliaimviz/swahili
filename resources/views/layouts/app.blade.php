<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Swahili - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">


    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    
</head>
<body>
    <div id="app">
        <div id="container">
            <header id="main-header">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 float-left">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('public/img/logo.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="main_menu col-xs-12 col-sm-12 col-md-6 col-lg-8 float-right">
                    <ul class="main-nav">
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">LANGUAGE TUTORS</a></li>
                        <li><a href="#">FAQ</a></li>
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        <li class="sign-in-button"><a href="{{ route('register') }}">REGISTER</a></li>
                        @else
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                    </ul>
                </div>
            </header>
        </div>
        @yield('content')
        <footer id="main-footer">
            <div id="container">
                <div class="footer-area-1  col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Request Demo</a></li>
                    </ul>
                </div>
                <div class="footer-area-2 col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Language Programmers</a></li>
                    </ul>
                </div>
                <div class="footer-area-3 col-xs-12 col-sm-12 col-md-4 col-lg-4 float-left">
                    <h2>FeedBack</h2>
                    <input type="text">
                    <div class="slider-center-button new-bottom-button footer-button">
                        <a href="#">Submit</a>
                    </div>
                </div>
            </div>
        </footer>
        <footer id="copyright">
            <!-- <div id="container"> -->
            <p>All rights Reserved © 2016 <span>SwahiliPro,</span> Designed & Developed by<span><a href="#">Startupbug.net</a></span></p>
            <!-- </div> -->
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

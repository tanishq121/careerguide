
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career Guide</title>
    <!-- Css -->
    <link href="{{ URL::asset('assets/FRassets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/plugin-css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/plugin-css/plugin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/color.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/homepage-three.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/homepage-two.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/FRassets/css/responsive.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext,vietnamese" rel="stylesheet">
</head>
<body>
    <!-- Wrapper -->
    <div class="careerfy-wrapper">

        <!-- Header -->
        <header id="careerfy-header" class="careerfy-header-three">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3"> <a href="index.html" class="careerfy-logo"><img src="{{ URL::asset('assets/FRassets/images/logo.png') }}" alt=""></a> </aside>
                    <aside class="col-md-9">
                        <div class="careerfy-right">
                            <nav class="careerfy-navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#careerfy-navbar-collapse-1" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="careerfy-navbar-collapse-1">
                                    <ul class="navbar-nav">
                                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#">Coaches and Courses</a></li>
                                        <li><a href="#">For Employers</a></li>
                                        
                                        <li><a href="#">Get Advice</a></li>
                                    </ul>
                                </div>
                            </nav>
                            @if(Session::has('sessionData'))
                            <ul class="careerfy-user-log">
                                <li><a href="{{ url('/logout') }}"><i class="fas fa-sign-in-alt careerfy-login-button"></i> LogOut</a></li>
                                <li><a href="{{ url('/profile') }}" class="active"><i class="far fa-user careerfy-social-2"></i> Profile</a></li>
                            </ul>
                            @else
                            <ul class="careerfy-user-log">
                                <li><a href="{{ url('/login') }}"><i class="fas fa-sign-in-alt careerfy-login-button"></i> Login</a></li>
                                <li><a href="{{ url('/register') }}" class="active"><i class="far fa-user careerfy-social-2"></i> Register</a></li>
                            </ul>
                            @endif
                            
                        </div>
                    </aside>
                </div>
            </div>
        </header>
        <!-- Header -->
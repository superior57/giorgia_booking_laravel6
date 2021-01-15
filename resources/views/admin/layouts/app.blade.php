<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Giorgia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin_home/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin_home/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('admin_home/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('admin_home/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('admin_home/css/responsive.css')}}">





</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader END -->

    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                   
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

        <main class="py-4">
            <!-- Wrapper Start -->
            <div class="wrapper">

                @include('admin.layouts.sidebar')
                @include('admin.layouts.navbar')
                <!-- Page Content  -->
                <div id="content-page" class="content-page">
                    @yield('content')
                </div>

            </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="bg-white iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('admin_home/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin_home/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin_home/js/popper.min.js')}}"></script>
    <script src="{{asset('admin_home/js/bootstrap.min.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{asset('admin_home/js/jquery.appear.js')}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{asset('admin_home/js/countdown.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{asset('admin_home/js/waypoints.min.js')}}"></script>
    <script src="{{asset('admin_home/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{asset('admin_home/js/wow.min.js')}}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{asset('admin_home/js/apexcharts.js')}}"></script>
    <!-- Slick JavaScript -->
    <script src="{{asset('admin_home/js/slick.min.js')}}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{asset('admin_home/js/select2.min.js')}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{asset('admin_home/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{asset('admin_home/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{asset('admin_home/js/smooth-scrollbar.js')}}"></script>
    <!-- lottie JavaScript -->
    <script src="{{asset('admin_home/js/lottie.js')}}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('admin_home/js/chart-custom.js')}}"></script>

    <!-- Custom JavaScript -->
    <script src="{{asset('admin_home/js/custom.js')}}"></script>

  


</body>

</html>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templates/css/magnific-popup.css') }}" type="text/css" />

    @yield('css')
    <link rel="stylesheet" href="{{ asset('templates/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('customCSS')
    <!-- Document Title
    ============================================= -->
    <title>MANTASOFT</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


    <header id="header" class="full-header transparent-header semi-transparent">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{ Request::root() }}" class="standard-logo" data-dark-logo="{{ asset('images/main/mainlogo2.png') }}"><img src="{{ asset('images/mantasoft/mantasoft.png') }}" alt="Canvas Logo" ></a>
                        <a href="{{ Request::root() }}" class="retina-logo" data-dark-logo="{{ asset('images/mantasoft/mantasoft.png') }}"><img src="{{ asset('images/mantasoft/mantasoft.png') }}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu sub-title">
                        @include('main.layouts.menu')
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header>

    @yield('slider')
    @yield('banner')

    <!-- Content
    ============================================= -->
    @yield('content')
    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; 2018 All Rights Reserved by MantaSoft Sdn. Bhd.
                    </div>
                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->
<input type="hidden" id="_token" class="_token" name="_token" value="{{csrf_token()}}">
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{ asset('templates/js/jquery.js') }}"></script>
<script src="{{ asset('templates/js/plugins.min.js') }}"></script>
@yield('js')
<script src="{{ asset('templates/js/components/moment.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('templates/js/functions.js') }}"></script>
@yield('customJS')
</body>
</html>

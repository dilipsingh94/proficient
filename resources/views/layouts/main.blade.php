<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/ico" href="{{ url('../master/images/favicon.png') }}" >
    <title>Proficient Photography</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('master/js/breakpoints.min.js') }}" defer></script>
    <script src="{{ asset('master/js/browser.min.js') }}" defer></script>
    <script src="{{ asset('master/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('master/js/jquery.poptrox.min.js') }}" defer></script>
    <script src="{{ asset('master/js/main.js') }}" defer></script>
    <script src="{{ asset('master/js/util.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('master/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('master/css/main.css') }}" rel="stylesheet">
   <noscript><link href="{{ asset('master/css/noscript.css') }}" rel="stylesheet"></noscript> 
</head>
<body class="is-preload">
    <div id="wrapper">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm fixed-top">
            <div class="container-fluid">
                <a class="" href="{{ url('/') }}">
                    <img src="{{ url('../master/images/logo.png') }}" alt="proficient photography logo" height="100px" width="auto">
                </a>
            </div>
        </nav> --}}

        <!-- Header -->
        <header id="header">
            <label for=""><strong>PROFICIENT PHOTOGRAPHY</strong> owned by <a href="#" class="text-decoration-none"> Tarun Mehra</a> </label>
            <nav>
                <ul>
                    <li><a href="#footer" class="text-decoration-none icon fa-info-circle">About us</a></li>
                </ul>
            </nav>
        </header>
        <div>
            @yield('content')
        </div>
        <!-- Footer -->
        <footer id="footer" class="panel">
            <div class="logo">
                <img src="{{ url('../master/images/logo.png') }}" alt="proficient photography logo" height="200px" width="auto">
            </div>
            <div class="inner split">
                <div>
                    <section>
                        <h2>PROFICIENT PHOTOGRAPHY</h2>
                        <p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum.</p>
                    </section>
                    <section>
                        <h2>Follow Us on ...</h2>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
                        </ul>
                    </section>
                    {{-- <p class="copyright">
                        &copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
                    </p> --}}
                </div>
                <div>
                    <section>
                        <h2>Our Services</h2>
                        <ul>
                            <li>Wedding Albums Designing/ Canvera Designing</li>
                            <li>Photo Manupulation</li>
                            <li>Save the Date Wedding Poster/Movies Poster</li>
                            <li>Photo Restoration/ B/W to Color</li>
                            <li>Image Editing/ Change Backgrounds</li>
                            <li>E-commerce Product Editing</li>
                        </ul>
                    </section>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

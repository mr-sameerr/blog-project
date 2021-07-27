<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Blog Project') }}</title> --}}
    <title>{{__('Blog Project')}}</title>

    <!-- Scripts -->
    {{-- <script src="{{asset('js/jquery.min.js')}}"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/popper.min.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/post-form.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/owl-carousel.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Blog Project') }} --}}
                    {{__('Blog Project')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
        <div class="row mb-5">
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
        <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">latest News</h2>
        <div class="block-21 mb-4 d-flex">
        <a class="img mr-4 rounded" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.ndb4JOHu-q.webp)"></a>
        <div class="text">
        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
        <div class="meta">
        <div><a href="#"></span> Oct. 16, 2019</a></div>
        <div><a href="#"></span> Admin</a></div>
        <div><a href="#"></span> 19</a></div>
        </div>
        </div>
        </div>
        <div class="block-21 mb-4 d-flex">
        <a class="img mr-4 rounded" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.pkTf90Znlu.webp)"></a>
        <div class="text">
        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
        <div class="meta">
        <div><a href="#"></span> Oct. 16, 2019</a></div>
        <div><a href="#"></span> Admin</a></div>
        <div><a href="#"></span> 19</a></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Information</h2>
        <ul class="list-unstyled">
        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
        <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
        </ul>
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
        <ul>
        <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
        <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="533a3d353c132a3c2621373c3e323a3d7d303c3e">[email&#160;protected]</span></span></a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 text-center">
        <p>
        Copyright &copy;
        </p>
        </div>
        </div>
        </div>
        </footer>
</body>
</html>

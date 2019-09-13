<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- css --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet"  href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet"  href="{{ asset('fontawesome/css/fontawesome.css') }}">

    </head>
    <body>
        <header class="header-area">
            <div class="main-header-area">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <nav class="classy-navbar justify-content-between" id="alimeNav">
                            <!-- Logo -->
                            <a class="nav-brand mt-3" href="/">Navbar</a>
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div class="classy-menu">
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <div class="classynav">
                                    <ul class="nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./stock.html">Stocks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./about.html">Apropos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-5">
            @include('flash::message')
        </div>

        @yield('content')


        {{-- js --}}
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ (isset($title) ? $title . ' - ' : '') . config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" id="navMenu">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-start">

                    </div>
                    <!-- Right Side Of Navbar -->
                    <div class="navbar-end">
                        <!-- Authentication Links -->
                        @guest
                            <a class="navbar-item is-tab" href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a class="navbar-item is-tab" href="{{ route('register') }}">Register</a>
                            @endif
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-item">{{ Auth::user()->name }}</a>

                                <div class="navbar-dropdown">
                                    <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
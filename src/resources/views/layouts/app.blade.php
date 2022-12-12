<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/header.css') }}" rel="stylesheet">
    
</head>

<body>
    <header>
        <h1 class="heading">
            ロゴtest

    </header>
    <div id="app">
        
        <nav class="navbar navbar-expand-md shadow-sm" style=background-color:#DDEEAA;>
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <nav>
                        @auth
                        <ul>
                            <li><a href=”#”>トップ</a></li>
                            <li><a href={{ ('/place/booking') }}>レジャー一覧</a></li>
                            <li><a href={{('/user/index')}}>マイページ</a></li>
                            <form method="GET" action="{{ route('booking.index') }}">
                                <li><input type="search" placeholder="場所を入力" name="search" value="@if (isset($search)) {{ $search }} @endif" style="height:40px;border-radius:10px; "></li>
                                <li><input type="search" placeholder="ジャンルを入力" name="search" value="@if (isset($search)) {{ $search }} @endif" style="height:40px;border-radius:10px;"></li>
                                <li>
                                    <button type="submit" value="検索する" class="btn btn-outline-success"> 検索する
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </li>
                            </form>
                        </ul>
                        @endauth
                        <!-- ログインしていない時 -->
                        @guest
                        <ul>
                            <li><a href=”#”>トップ</a></li>
                            <li><a href={{ ('/place/booking') }}>レジャー一覧</a></li>
                        </ul>
                        @endguest

                    </nav>

                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto"> -->

                    <!-- </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" 　style=" margin-right:0;">
                        <!-- Authentication Links -->

                        @guest
                        @if (Route::has('/login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('/register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('/register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                        @endguest

                    </ul>

                </div>
            </div>

        </nav>

        <main class="py-4" style="background-color:#FFFAF0;min-height:100vh;">
            @yield('content')
        </main>
        <footer>
            @yield('footer')
        </footer>
    </div>
</body>

</html>
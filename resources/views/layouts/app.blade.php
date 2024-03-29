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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                Huree Tiding <img src="{{ asset('img/icon.svg') }}" width="25" height="25">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header bg-primary text-light">Setting</div>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="/newspaper" class="text-dark">Newspaper</a></li>
                            <li class="list-group-item"><a href="/newsfeed" class="text-dark">News Feed</a></li>
                            <li class="list-group-item"><a href="/comment" class="text-dark">Comments</a></li>
                            <li class="list-group-item"><a href="/user" class="text-dark">Users</a></li>
                            <li class="list-group-item"><a href="/banners" class="text-dark">Banners</a></li>
                            <li class="list-group-item"><a href="#" class="text-dark">loves</a></li>
                        </ul>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-primary text-light">Create</div>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="/insertBanner" class="text-dark">Create Banner</a></li>
                            <li class="list-group-item"><a href="/newsfeed/create" class="text-dark">Add Newsfeed</a></li>
                            <li class="list-group-item"><a href="/newspaper/create" class="text-dark">Add Newspaper</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    @yield('content')
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </main>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>

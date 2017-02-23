<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="/css/app.css">

        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <a href="/" class="nav-item">
                        <h1 id="logo">Pins!</h1>
                    </a>
                </div>
                <span id="nav-btn" class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div id="nav" class="nav-right nav-menu">
                    @if(Auth::user())
                        <a href="{{ action('PinsController@create') }}" class="nav-item is-tab">Add Pin</a>
                        <a role="button" id="logout-btn" class="nav-item is-tab" type="submit">Log out</a>
                    @else
                        <a id="login-btn" href="{{ route('login') }}" class="nav-item is-tab">Sign in</a>
                        <a id="register-btn" href="{{ route('register') }}" class="nav-item is-tab">Sign up</a>
                    @endif
                </div>
            </div>
        </nav>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="container">
                    <div class="notification">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif

        @component('inc.modal')
            @slot('id') login-form @endslot
            @slot('title') Login @endslot
            @include('auth.login')
        @endcomponent

        @component('inc.modal')
            @slot('id') register-form @endslot
            @slot('title') Register @endslot
            @include('auth.register')
        @endcomponent

        <form action="{{ route('logout') }}" id="logout-form" method="POST">
            {{ csrf_field() }}
        </form>

        <div class="container">
            @yield('content')
        </div>

        <script src="/js/vendor/app.js"></script>
        @yield('footer')
    </body>
</html>

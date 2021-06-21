<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-AU-Compatiblr" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <div id="app">
        <b-navbar toggleable="sm" type="dark" variant="dark">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

            <b-navbar-brand href="{{ url('/') }}">
                <img src="https://placekitten.com/g/30/30" class="d-inline-block align-top" alt="Kitten">
                {{ config('app.name', 'Laravel') }}
            </b-navbar-brand>

            <b-collapse id="nav-text-collapse" is-nav>

                <b-navbar-nav>
                    <b-nav-item href="#">Link</b-nav-item>
                    <b-nav-item href="#" disabled>Disabled</b-nav-item>
                </b-navbar-nav>

                <b-navbar-nav class="ml-auto">
                    @guest
                    {{--  @if (Route::has('login')) --}}
                    <b-nav-item href="{{ route('login') }}">Inicio Sesión
                    </b-nav-item>
                    {{--  @endif --}}
                    {{-- @if (Route::has('register')) --}}
                    <b-nav-item href="{{ route('register') }}">Registro
                    </b-nav-item>
                    {{-- @endif --}}
                    @else

                    <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>

                        <b-dropdown-item href="#">Profile</b-dropdown-item>
                        <b-dropdown-item href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesión</b-dropdown-item>

                        <b-form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </b-form>
                    </b-nav-item-dropdown>
                    @endguest
                </b-navbar-nav>

            </b-collapse>
        </b-navbar>
        <br>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

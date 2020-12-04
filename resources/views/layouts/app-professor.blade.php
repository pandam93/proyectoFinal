<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link href="{{ asset('css/professor-home.css') }}" rel="stylesheet" />
    @yield('css-extra')
  </head>

  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}"
          >{{ config('app.name', 'Laravel') }}</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarsExampleDefault"
          aria-controls="navbarsExampleDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <!-- Left Side Of Navbar -->

          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="http://example.com"
                id="dropdown01"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Dropdown</a
              >
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"
                >{{ __('Login') }}</a
              >
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}"
                >{{ __('Register') }}</a
              >
            </li>
            @endif @else
            <li class="nav-item dropdown">
              <a
                id="navbarDropdown"
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                v-pre
              >
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdown"
              >
                <a class="dropdown-item" href="#"> Perfil </a>
                <a class="dropdown-item" href="#"> Mensajes </a>

                <div class="dropdown-divider"></div>
                <a
                  class="dropdown-item"
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                >
                  {{ __('Logout') }}
                </a>

                <form
                  id="logout-form"
                  action="{{ route('logout') }}"
                  method="POST"
                  style="display: none"
                >
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if (Request::path() == 'home')
            <li class="breadcrumb-item active" aria-current="page">
                {{ ucfirst(Request::path()) }}
              </li>
            @endif
            @if (Request::path() == 'home/1daw')
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item">1ro DAW</li>
            <li class="breadcrumb-item active" aria-current="page">Lista</li>
            @endif
            @if (Request::is('home/1daw/*'))
            <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
            <li class="breadcrumb-item">1ro DAW</li>
            <li class="breadcrumb-item"><a href="{{ route('1daw') }}">Lista</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $user->name}}
            </li>
            
            @endif

        </ol>
      </nav>
      @yield('content')
    </div>

  </body>
</html>

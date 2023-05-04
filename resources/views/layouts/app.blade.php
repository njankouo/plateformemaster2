<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <!-- Chrome, Firefox OS, Opera and Vivaldi -->
  <meta name="theme-color" content="#009688">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#009688">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#009688">

  <meta name="author" content="Colombies Olivier">
  <meta name="description" content="Colombies Olivier ingénieur à l'ISEN Toulon / Tahiti" />
  <meta name="keywords" content="Colombies Olivier Isen toulon tahiti">

  <title>PlateForme Hospital...</title>


  <link rel="shortcut icon" href="favicon.ico"/>
  <!-- Icon fav mobile  -->
  <link rel="icon" type="image/png" href="fav_mobile.png" sizes="192x192">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
    <div class="navbar-fixed ">
        <nav class="blue darken-4" role="navigation">
          <div class="nav-wrapper container">
            <a href="#!" class="brand-logo">

            </a>
            <a id="logo-container" href="#" class="brand-logo white-text sidenav-trigger" data-target="mobile-demo"> </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/" class="white-text">Accueil</a></li>
              @if (auth()->check())
              @else
              <li><a href="{{ route('register') }}" class="white-text">Inscription</a></li>
              <li><a href="{{ route('login') }}" class="white-text">Connexion</a></li>
              @endif


              <li><a href="" class="white-text">Suivi M&eacute;dical </a></li>

              @if (auth()->check())
              <li><a href="{{ route('home') }}" class="white-text">Creer Un Rdv </a></li>
              <li><a href="{{ route('dossier') }}" class="white-text">Dosier M&eacute;dical</a></li>
              <li class="purple">
                <a href="" class="white-text">

               Bienvenue&nbsp;{{ Auth()->user()->name }}

                </a>
              </li>
              <li class="nav-item dropdown white" style="list-style-type: none;">

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Deconnexion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

        </li>
        @endif
            </ul>

              </div>

        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Accueil</a></li>
            <li><a href="badges.html">Inscription</a></li>
            <li><a href="collapsible.html">Connexion</a></li>
            <li><a href="mobile.html">Creer Un Rdv</a></li>
          </ul>
      </div>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Acceuil
                </a> --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
{{--
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav me-auto">

                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ms-auto"> --}}
                        <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

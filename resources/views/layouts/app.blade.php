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
  <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}
</style>
</head>
<body>
    <div class="navbar-fixed ">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Votre Profil</a></li>
        <li>
          <a href="">Modifier Mot De Passe</a>
      </li>
        <li class="divider"></li>
        <li>

          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              Deconnexion
          </a>


  </li>

      </ul>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

        <nav class="transparent text-black" role="navigation" style="font-weight:bold">
          <div class="nav-wrapper container">
            <a href="#" class="brand-logo">

            </a>
            <a  href="#" class="white-text sidenav-trigger" data-target="mobile-nav">
            <i class="material-icons black">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">

              @if (auth()->check())
              @else
              <li><a href="{{ route('register') }}" >Inscription</a></li>
              <li><a href="{{ route('login') }}" >Connexion</a></li>
              @endif


              <li><a href="{{route('suivi')}}" >Suivi M&eacute;dical </a></li>

              @if (auth()->check())

              <li><a href="{{ route('home') }}" >Rdv M&eacute;dical</a></li>
              <li><a href="{{ route('dossier') }}" >Dosier M&eacute;dical</a></li>
              <li><a href="{{ route('examen') }}" >Examens M&eacute;dicaux</a></li>
              <li class="purple">
                <a href="" class="white-text dropdown-trigger" data-target="dropdown1">

              {{ Auth()->user()->email }}
              <i class="material-icons right">arrow_drop_down</i>
                </a>
              </li>


        @endif
            </ul>

              </div>

        </nav>
        <ul class="sidenav" id="mobile-nav">
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
        <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Centre m&eacute;co-chirurgical d'urologie </h5>
                  <p class="grey-text text-lighten-4">
                    cette plateforme a pour objectif de permettre aux patients de passer des rendez-vous m&eacute;caux sans avoir besoin de se deplacer
                  </p>


                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Settings</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Connect</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              <a class="brown-text text-lighten-3" href="http://cmcu.com">Lien Cmcu</a>
              </div>
            </div>
          </footer>

    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.dropdown-trigger').dropdown();
        });
        $(document).ready(function(){
         $(".dropdown-button").dropdown();
        });

    </script>
</body>
</html>

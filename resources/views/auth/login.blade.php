{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 10%">


                <div class="card-content">
                    <div class="card-title">
                      <h5 style="font-weight: bold"> Veuillez-Vous Connecter</h5>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">


                            <div class="row mb-2">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <div class="input-field col s12">
                                <input id="email" type="text" class="form-control @error('email') is-invalid

                                @enderror" name="email" value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="input-field col s12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                       Mot De Passe Oublié?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
    media="screen,projection"/>

    <!-- QUERYMINE Page Center Css -->

    <style>

        body {

            background-image: url('{{ asset('img/covid.jpg') }}');
        }
    </style>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

<div class="row">
<div class="col s2"></div>
<div class="col s8">

    <form method="POST" action="{{ route('login') }}">
        @csrf
<div class="card z-depth-5" style="margin-top: 15%">

        <!-- Form Logo Section  -->
    <div class="card-content">
        <div class="row margin">
            <div class="col s12 m12 l12 center">

                {{-- <img src="{{ asset('img/téléchargement.png') }}"
                 alt="" class="responsive-img circle" style="width:45px;"> --}}
                 <a href="{{route('login.google')}}" class=" transparent btn waves-effect waves-light blue-text" type="submit" name="action">Connexion Google
                    {{-- <i class="material-icons right">social</i> --}}

                </a>
                 {{-- <img src="{{ asset('img/facebook.jpg') }}"
                 alt="" class="responsive-img circle" style="width:60px;"> --}}
            </div>
        </div>

        <!-- Form Username Input Section -->

        <div class="col s12 m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
        </div>

        <!-- Form Password Input Section -->

        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        </div>

            <!-- Form Chekbox (Remember Me) Input Section -->

        <div >
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Se Souvenir de moi  </label>
        </div>



    </div>
<div class="card-footer">
    <button type="submit"
    class="btn waves-effect waves-light "
    style=" margin:10px">
    Se Connecter
    </button>
    <a href="">Mot de Passe Oublié?</a>
    <br/>
    <a href="{{ route('register') }}" style="margin:5px" >S'inscrire</a>

</div>
</form>
</div>
</div>
</div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-2.1.1.min.js">
    </script>
    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
  </body>
</html>

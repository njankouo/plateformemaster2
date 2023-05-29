{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 10%">


                <div class="card-content">
                    <div class="card-title">
                        <h5 style="margin: 10px;font-weight:bold">
                            Veuillez-Vous Enregistrer
                        </h5>
                    </div>

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
<div class="card" style="margin-top: 5%">
    <div class="card-content">

  
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
           
           
                <div class="col-md-6 input-field">
                <i class="material-icons prefix">person</i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
          
            <div class="col-md-6  input-field">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
           
            <div class="col-md-6 input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
             <div class="col-md-6 input-field">
                <i class="material-icons prefix">lock</i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer Password') }}</label>

         
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Enregistrer') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
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

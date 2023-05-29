@extends('layouts.app')

@section('content')
<div class="container">
    <div id="scrollspy2" class="section scrollspy">
      <!--   Icon Section   -->
      <!-- _____________Card_____________ -->
      <div class="row">
            <br>
        <div class="col s12 m4">
          <div class="card overShadow  hoverable">
            <div class="card-image waves-effect waves-block waves-light">

              <span class="card-title white-text"></span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Suivi M&eacute;dical<i class="material-icons right">help_outline</i></span>
              <p ><a href=" " class="blue-text darken-2">Accéder</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Template<i class="material-icons right">close</i></span>
              <p>
                Voici un template material design responsive disponible à télécharger gratuitement sur mon github<br>
                N'hésitez pas à me soumettre des idées ou à l'améliorer
              </p>
            </div>
          </div>
        </div>


         <div class="col s12 m4">
          <div class="card overShadow hoverable">
            <div class="card-image waves-effect waves-block waves-light">

              <span class="card-title black-text"></span>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Dossier M&eacute;dical<i class="material-icons right">help_outline</i></span>
              <p ><a href="">Accéder</a></p>
            </div>

          </div>
        </div>

         <div class="col s12 m4">
          <div class="card overShadow  hoverable">
            <div class="card-image waves-effect waves-block waves-light">

            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Rendez-Vous M&eacute;dical<i class="material-icons right">help_outline</i></span>
              <p ><a href="{{ route('rdv.view') }}">Accéder</a></p>
            </div>

          </div>
        </div>
        <div class="col s12 m4">
            <div class="card overShadow  hoverable">
              <div class="card-image waves-effect waves-block waves-light">

              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Assistance M&eacute;dical<i class="material-icons right">help_outline</i></span>
                <p ><a href="">Accéder</a></p>
              </div>

            </div>
          </div>
          <div class="col s12 m4">
            <div class="card overShadow  hoverable">
              <div class="card-image waves-effect waves-block waves-light">

              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Resultats Laboratoire<i class="material-icons right">help_outline</i></span>
                <p ><a href="">Accéder</a></p>
              </div>

            </div>
          </div>
          <div class="col s12 m4">
            <div class="card overShadow  hoverable">
              <div class="card-image waves-effect waves-block waves-light">

              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Contacts M&eacute;decins<i class="material-icons right">help_outline</i></span>
                <p ><a href="">Accéder</a></p>
              </div>

            </div>
          </div>

      </div>




      </div>
      <!-- _____________end Card_____________ -->

    </div>
  </div>

@endsection

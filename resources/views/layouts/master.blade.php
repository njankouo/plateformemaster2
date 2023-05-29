
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

  <!-- NAV BAR -->
 <x-header/>

  <!-- SLIDER -->
 <x-contenu/>
  <!-- END SLIDER -->

  <div class="container">
    <div id="scrollspy2" class="section scrollspy">
      <!--   Icon Section   -->
      <!-- _____________Card_____________ -->
      <div class="row">

        <div class="col s12 m4">
          <div class="card overShadow">
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
          <div class="card overShadow">
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
          <div class="card overShadow">
            <div class="card-image waves-effect waves-block waves-light">

            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Rendez-Vous M&eacute;dical<i class="material-icons right">help_outline</i></span>
              <p ><a href="">Accéder</a></p>
            </div>

          </div>
        </div>

      </div>




      </div>
      <!-- _____________end Card_____________ -->

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 white-text text-darken-4">PlateForme M&eacute;dical Cmcu</h5>
          <h5 class="header col s12 white-text text-darken-4">
            Accédez A Vos Dossiers M&eacute;dicaux,
            Vos Rendez-Vous M&eacute;dicaux
          </h5>
          </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/labo.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>






<x-footer/>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">


    $(document).ready(function(){
       //smooth scroll
      $('.scrollspy').scrollSpy();
      //start carousel
      $('.slider').slider({full_width: true});

      //shadow effect on hover
      $(".overShadow").hover(function () {
          $(this).addClass('z-depth-5');
          $(this).removeClass('z-depth-1');
      }, function () {
          $(this).removeClass('z-depth-5');
          $(this).addClass('z-depth-1');
      });
    });


    $(document).ready(function(){
    $('.sidenav').sidenav();
  });



  </script>

  </body>
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
<style>
    .tabs-vertical {
    .tabs {
        height: auto;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        flex-direction: column;
        display: -webkit-flex;
        display: flex;

    }

    .tab {
        width: 100%;

        .active {
            -moz-transition: border-color .5s ease;
            -o-transition: border-color .5s ease;
            -webkit-transition: border-color .5s ease;
            transition: border-color .5s ease;
            border-right: 3px solid #424242;
        }

        :hover {
            border-right: 3px solid #eeeeee;
        }
    }

    .indicator {
        display: none;
    }

        .tab-content {
        display : none
      }

        > .tab-content .active{
        display : block
      }
}
</style>

@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
           <a class="waves-effect btn blue darken-4  modal-trigger" href="#modal1" style="float: right">Creer Rendez-Vous</a>


        <div class="row tabs-vertical" id="top" style="margin-top: 3%" >
            <div class="col s7">
                <h6 style="font-weight:bold;text-align:center">Recherchez Votre Specialiste pour un rendez-vous m&eacute;dical</h6>
                <ul class='tabs'>
                    @foreach($users as $user)
                    <li class='tab' id='tag_info_outline'>
                        <a href='#tab-vestibulares{{$user->id}}' >
                            Dr. {{$user->name}}
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>



            <div class="col s5">

                @foreach($users as $user)
                <div id="tab-vestibulares{{$user->id}}" class="tab-content">
                    <h5 style="font-weight:bold;text-align:center;text-decoration:underline">Information Sur Le M&eacute;decin</h5>
                    <div class="col s12 m8 offset-m2 l6 offset-l3">
                        <div class="card-panel grey lighten-5 z-depth-1">
                          <div class="row valign-wrapper">
                            <div class="col s2">
                              <img src="{{asset('img/images.jpeg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                              <span class="black-text">
                                Dr. {{ $user->name }}
                              </span>

                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col s12" style="text-align: center">
                         <h6>Specialité: {{$user->specialite}}</h6>
                        <h6>Contact: {{$user->telephone}}</h6>
                        <h6>Adresse: {{$user->adresse}}</h6>

                    </div>
                    <div class="col s12">
                      <center>
                        <a class="waves-effect waves-light btn pulse blue " href="{{route('rdv',$user->id)}}" >V&eacute;rifiez la plage horaire</a>
                      </center>
                      </div>

                </div>
                @endforeach



            </div>

        </div>
      {{-- <div class="col s12"> --}}

            {{-- <div class="card" style="margin-top: 4%">
                <div class="card-content">
                    <div class="card-title"></div>
                    <table class="hoverable responsive-table">
                        <thead>
                            <th>Médecin</th>
                            <th>Spécialité</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)





                            <tr>

                                <td><a href="{{ route('rdv',$user->id) }}" style="font-weight: bold">{{ $user->name }}</a> </td>
                                <td>{{ $user->specialite }}</td>

                            </tr>

                           @endforeach
                        </tbody>
                    </table>




                </div>
            </div> --}}

        {{-- </div> --}}


      {{-- <div class="col s8">

        <div class="card" style="margin-top: 4%">

            <div class="card-content">
                <div class="card-title">
                    <h5 style="margin: 10px;font-weight:bold;font-size:16px">
                        Vos Rendez-Vous
                    </h5>
                </div>

                </div>
                <table class="hoverable responsive-table">
                    <thead>
                      <tr>
                          <th>Date Rdv</th>
                          <th>Status Rdv</th>
                          <th>Medecin Sollicité</th>
                          <th>
                            Action
                          </th>
                      </tr>
                    </thead>

                    <tbody>




                        @foreach ($rdv as $rdvs)

                        @if(auth()->user()->name!=$rdvs->patient->nom)

                        @else
                      <tr>

                         <td>{{ $rdvs->date }}</td>
                         <td>
                            @if ($rdvs->status==1)
                               <i class="material-icons ">check</i>
                                @else
                                <i class="material-icons red-text">close</i>
                            @endif
                         </td>
                         <td>{{ $rdvs->responsable }}</td>
                         <td>
                         <a href="" class="btn-floating red darken-4"><i class="material-icons">delete</i></a>
                         <a href="" class="btn-floating"><i class="material-icons">edit</i></a>
                         </td>
                      </tr>


                      @endif



                      @endforeach

                    </tbody>
                  </table>

            </div>
        </div>
    </div> --}}
    </div>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Creer Votre Rendez-Vous</h4>

        <form action="" method="get">
            @csrf
            <div class="input-field col s6">
        <input id="nom" type="text" class="validate" name="nom">
        <label for="nom">Votre Nom</label>
      </div>
      <div class="input-field col s6">
        <input id="prenom" type="text" class="validate" name="prenom">
        <label for="prenom">Votre Prenom</label>
      </div>
      <div class="input-field col s6">
        <input id="telephone" type="text" class="validate" name="telephone">
        <label for="telephone">Votre Telephone</label>
      </div>
      <div class="input-field col s6">
        <input id="adresse" type="text" class="validate" name="adresse">
        <label for="adresse">Votre Adresse E-mail</label>
      </div>

    </div>
    <div  class="modal-footer">
      <a href="#!" class=" modal-close waves-effect waves-green btn-flat">Fermer</a>
    <button type="submit" class="waves-effect btn blue darken-4">Valider</button>
</form>
</div>
  </div>
  {{-- <div class="row">
    <div class="col s12">
      <ul class="tabs">
        @foreach ($users as $user)


        <li class="tab col s2"><a href="#test-{{ $user->id}}">{{ $user->name }}</a></li>

        @endforeach
      </ul>
    </div>
    @foreach ($users as $user)

    <div id="test-{{ $user->id}}" class="col s12">
        <div id="calendar" >

        </div>
    </div>
    @endforeach


  </div> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src='https://cdn.jsdelivr.net/jquery.leanmodal/1.1/jquery.leanmodal.min.js'></script>
<script>
 $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.3.0/main.min.js"></script>
{{-- <script>
document.addEventListener('DOMContentLoaded', function () {
var calendarEl = document.getElementById('calendar');
var calendar = new FullCalendar.Calendar(calendarEl, {
initialView: 'timeGridWeek',
slotMinTime: '8:00:00',
slotMaxTime: '19:00:00',
locale: 'fr',
navLinks: true,
editable: true,
eventColor:'#378006',
overlap:false,

rendering:'background',

});
calendar.render();
});
</script> --}}

@endsection

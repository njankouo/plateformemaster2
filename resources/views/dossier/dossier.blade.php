<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
@extends('layouts.app')

@section('title','dossier Médicaux')

@section('content')
<div class="row">
    <div class="container">

<div class="card" style="margin: 10%">
    <div class="card-content">

        <table>
          <thead>
          <th>Visualiser Votre Dossier M&eacute;dical</th>
        </thead>
        <tbody>
            @foreach ($patient as $patients)

                @if(auth()->user()->email==$patients->email)
          <tr>
            <td>
                {{ $patients->nom }} &nbsp;{{ $patients->prenom }}
            </td>
            <td>
                <a class=" pulse btn-floating btn-large waves-effect waves-light blue darken-3" href="{{ route('dossier.patient',$patients->id) }}"><i class="material-symbols-outlined">symptoms</i></a>

            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
        </table>

    </div>
</div>
  </div>
</div>



@stop

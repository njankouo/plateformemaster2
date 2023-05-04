@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

         <div class="col-md-10">

            <div class="card" style="margin-top: 5%">

                <div class="card-content">
                    <div class="card-title">
                        <h5 style="margin: 10px">
                            Liste De Vos Rendez-Vous
                        </h5>
                        <button class="waves-effect btn blue darken-4" style="float: right;">Nouveau Rendez-Vous</button>
                    </div>
                    <table>
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




                            @forelse ($rdv as $rdvs)

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
                          @empty

                              <p>Vous N'avez Aucun Rendez-Vous Actuellement</p>


                          @endforelse

                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

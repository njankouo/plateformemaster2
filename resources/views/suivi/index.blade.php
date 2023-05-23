@extends('layouts.app')
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
@section('content')
<div class="container-fluid">
    {{-- <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h5 style= 'font-weight:bold;font-style:italic;'>Faites Le Suivi M&eacute;dical</h5>
            </div>
        </div>
    </div> --}}
   
            {{-- <div class="row">
                <div class="tabs-vertical">

              
                <div class="col s12">
                  <ul class="tabs" >
                    @foreach ($user as $users)
                        
                  
                    <li class="tab col s3"><a href="#test1{{$users->id}}">Dr. {{$users->name}}</a></li>
                    @endforeach
                  </ul>
                
                
                @foreach($user as $users)
                <div id="test1{{ $users->id }}" style="margin-bottom:20%">
                    <div>
                        <div class="card-panel grey lighten-5 z-depth-1">
                          <div class="row valign-wrapper">
                            <div class="col s2">
                              <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>
                            <div class="col s10">
                              <span class="black-text">
                            Dr.{{ $users->name }} 
                            </span>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              @endforeach
              </div>
            </div>      
        </div>
    </div> --}}
<!-- adapted from  https://codepen.io/hoogw/pen/yLeGPGx -->

<div class="row tabs-vertical" id="top" style="margin-top: 5%" >
	<div class="col s7">
        <h6 style="font-weight:bold;text-align:center">Recherchez Votre Specialiste pour un suivi m&eacute;dical</h6>
		<ul class='tabs'>
            @foreach($user as $users)
			<li class='tab' id='tag_info_outline'>
				<a href='#tab-vestibulares{{$users->id}}' > 
					Dr. {{$users->name}}
				</a>
			</li>
            @endforeach
			
		</ul> 
	</div>



	<div class="col s5">    
        @foreach($user as $users)
		<div id="tab-vestibulares{{$users->id}}" class="tab-content">

    
      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="{{asset('img/images.jpeg')}}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                Dr. {{ $users->name }}
              </span>
         
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <h5 style="font-weight:bold;font-style:italic;text-align:center;text-decoration:underline">Information Du M&eacute;decin</h6>
        <h6>Specialité: {{$users->specialite}}</h6>
        <h6>Contact: {{$users->telephone}}</h6>
        <h6>Adresse: {{$users->adresse}}</h6>
       
    </div>
    <div class="col s12">
        <button class="waves-effect waves-light btn pulse blue">Faite Votre Suivi M&eacute;dical</button>
    </div>
      
		</div>
        @endforeach
		{{-- <div id="tab-ead" class="tab-content">
			Content EAD
		</div>

		<div id="tab-medicina" class="tab-content" >
     Content Medicina
		</div>     --}}
	</div>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
     $(document).ready(function(){
    $('.tabs').tabs();
  });
</script>
@stop
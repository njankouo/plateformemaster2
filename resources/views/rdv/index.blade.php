<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
<style>
    .fc-timegrid-slot .fc-timegrid-slot-label .fc-scrollgrid-shrink{
    height: 45px;
}
</style>
@extends('layouts.app')



@section('content')
<div class="row">
    
    <div class="col s12">
            <h6 style="font-weight:bold">
              Plage Horaire: {{$user->name}}
                  <div id="calendar" >

                  </div>

              </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/lang-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.3.0/main.min.js"></script>
<script>
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
events: @json($events),
});
calendar.render();
});
</script>
@stop

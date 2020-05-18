@extends('layouts.dash')

@section('css')

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href='{{ asset("lte3/plugins/fullcalendar/main.min.css") }}'>
  <link rel="stylesheet" href='{{ asset("lte3/plugins/fullcalendar-daygrid/main.min.css") }}'>
  <link rel="stylesheet" href='{{ asset("lte3/plugins/fullcalendar-timegrid/main.min.css") }}'>
  <link rel="stylesheet" href='{{ asset("lte3/plugins/fullcalendar-bootstrap/main.min.css") }}'>



<!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>-->
@endsection


@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guardies</div>

                <div class="card-body">
                    {!! $calendar->calendar() !!}
                    
                  </div>    
            </div>
        </div>
    </div>


@endsection



@section('js')

    <!--
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    -->

    <!-- AdminLTE for demo purposes -->
    {{--
    <script src='{{ asset("lte3/dist/js/demo.js") }}'></script>
    --}}
    <!-- fullCalendar 2.2.5 -->
    <script src='{{ asset("lte3/plugins/moment/moment.min.js") }}'></script>
    <script src='{{ asset("lte3/plugins/fullcalendar/main.min.js") }}'></script>
    <script src='{{ asset("lte3/plugins/fullcalendar-daygrid/main.min.js") }}'></script>
    <script src='{{ asset("lte3/plugins/fullcalendar-timegrid/main.min.js") }}'></script>
    <script src='{{ asset("lte3/plugins/fullcalendar-interaction/main.min.js") }}'></script>
    <script src='{{ asset("lte3/plugins/fullcalendar-bootstrap/main.min.js") }}'></script>



    {{--
    <script src="'{{ asset("js/fullcalendardummydata.js") }}'"></script>
    --}}


    {!! $calendar->script() !!}





@endsection
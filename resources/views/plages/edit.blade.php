@extends('layouts.dash')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Horizontal Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                {!! Form::model($plage, ['route' => ['plages.update', $plage->id],'method' => 'PUT' , 'class' => 'form-horizontal' ]) !!}
                    {!! Form::token() !!}

                    <x-plagefields :plage="$plage"></x-plagefields>




                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                  {!! Form::close() !!}
              </div>
              <!-- /.card -->
        </div>
    </div>


@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
    <script>
      jQuery(document).ready(function() {
        
        jQuery.datetimepicker.setLocale('fr');


        jQuery('.invisible').removeClass("invisible");

        jQuery('#time_start').datetimepicker({
          lang:'fr',
          datepicker:false,
          format:'H:i',
          theme:'dark',
          step:30,
          //defaultdate:'{{ $plage->time_start }}'
        });

        jQuery('#time_end').datetimepicker({
          lang:'fr',
          datepicker:false,
          format:'H:i',
          theme:'dark',
          step:30
        });

         
      });

    </script>
@endsection

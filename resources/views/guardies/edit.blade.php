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
                  <h3 class="card-title">Créé une guard</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                {!! Form::model($guardy,['route' => ['guardies.update', $guardy->id], 'method' => 'PUT' ,'class' => 'form-horizontal' ]) !!}
                    {!! Form::token() !!}

                    <x-guardyfields :plages="$plages" :servusers="$servusers" :guardy="$guardy"></x-guardyfields>

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

        jQuery('.invisible').removeClass("invisible");
         
        jQuery.datetimepicker.setLocale('fr');


        

       jQuery('#date_start').datetimepicker({
          lang:'fr',
          timepicker:false,
          format:'d-m-yy',
          theme:'dark'
        });

        jQuery('#date_end').datetimepicker({
          lang:'fr',
          timepicker:false,
          format:'d-m-yy',
          theme:'dark'
        });

         
      });

    </script>
@endsection

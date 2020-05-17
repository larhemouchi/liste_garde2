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
                
                {!! Form::open(['route' => 'plages.store', 'class' => 'form-horizontal' ]) !!}
                    {!! Form::token() !!}
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
                      <div class="col-sm-10">
                        {!! Form::text('name', '' , ['class' => 'form-control']) !!}

                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="time_start" class="col-sm-2 col-form-label">Heure début</label>
                      <div class="col-sm-10">
                        {!! Form::time('time_start', '' , ['class' => 'form-control invisible', 'id' => 'time_start']) !!}

                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="time_end" class="col-sm-2 col-form-label">Heure fin</label>
                      <div class="col-sm-10">
                        {!! Form::time('time_end', '' , ['class' => 'form-control invisible', 'id' => 'time_end']) !!}

                      </div>
                    </div>
                    
                  </div>
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
          step:30
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

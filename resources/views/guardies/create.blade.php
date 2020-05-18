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
                
                {!! Form::open(['route' => 'guardies.store', 'class' => 'form-horizontal' ]) !!}
                    {!! Form::token() !!}
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-10">
                          {!! Form::text('name', '' , ['class' => 'form-control']) !!}

  
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Les plages</label>
                      <div class="col-sm-10">
                        {!!Form::select('plage_id', $plages->pluck('name', 'id') , null, ['class' => 'form-control']) !!}

                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">User by service</label>
                        <div class="col-sm-10">

                            <select name="servuser_id" class="form-control" id="exampleFormControlSelect1">
                                @foreach($servusers as $servuser)
                                    <option value="{{ $servuser->id }}">{{ $servuser->user->name }}</option>
                                
                                @endforeach

                              </select>

                            
  
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="time_start" class="col-sm-2 col-form-label">Date début</label>
                      <div class="col-sm-10">
                        {!! Form::text('date_start', '' , ['class' => 'form-control invisible', 'id' => 'date_start']) !!}

                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="time_end" class="col-sm-2 col-form-label">Date fin</label>
                      <div class="col-sm-10">
                        
                        {!! Form::text('date_end', '' , ['class' => 'form-control invisible', 'id' => 'date_end']) !!}

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

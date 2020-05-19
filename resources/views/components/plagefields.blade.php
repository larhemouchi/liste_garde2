@csrf

<div class="card-body">
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
      <div class="col-sm-10">
        {!! Form::text('name', null , ['class' => 'form-control']) !!}

      </div>
    </div>


    <div class="form-group row">
      <label for="time_start" class="col-sm-2 col-form-label">Heure début</label>
      <div class="col-sm-10">
        {!! Form::time('time_start', optional($plage)->time_start , ['class' => 'form-control invisible', 'autocomplete' => 'off', 'id' => 'time_start']) !!}

      </div>
    </div>


    <div class="form-group row">
      <label for="time_end" class="col-sm-2 col-form-label">Heure fin</label>
      <div class="col-sm-10">
        {!! Form::time('time_end', optional($plage)->time_end , ['class' => 'form-control invisible', 'autocomplete' => 'off', 'id' => 'time_end']) !!}

      </div>
    </div>
    
  </div>
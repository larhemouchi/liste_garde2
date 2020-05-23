<div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
          {!! Form::text('name', null , ['class' => 'form-control']) !!}


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

          {{-- $servusers --}}

            <select name="servuser_id" class="form-control" id="exampleFormControlSelect1">
                @foreach($servusers as $servuser)
            <option 
            @if( !is_null($guardy) )
                selected="{{ ($servuser->id == $guardy->servuser->id )? true : false }}" 
            @endif
            value="{{ $servuser->id }}">
            {{ $servuser->user->name }}
        </option>
                
                @endforeach

              </select>

            

        </div>
      </div>

    <div class="form-group row">
      <label for="time_start" class="col-sm-2 col-form-label">Date début</label>
      <div class="col-sm-10">
        {!! Form::text('date_start', optional($guardy)->date_start , ['class' => 'form-control invisible', 'autocomplete' => 'off', 'id' => 'date_start']) !!}

      </div>
    </div>


    <div class="form-group row">
      <label for="time_end" class="col-sm-2 col-form-label">Date fin</label>
      <div class="col-sm-10">
        
        {!! Form::text('date_end', optional($guardy)->date_start , ['class' => 'form-control invisible', 'autocomplete' => 'off', 'id' => 'date_end']) !!}

      </div>
    </div>
    
  </div>
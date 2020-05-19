<div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
          {!! Form::text('name', null , ['class' => 'form-control']) !!}


        </div>
      </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Les roles</label>
      <div class="col-sm-10">
        {!!Form::select('roly_id', $rolies->pluck('name', 'id') , null, ['class' => 'form-control']) !!}

      </div>
    </div>


    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-2">
          <button type="submit" class="btn btn-primary">
              Action
          </button>
      </div>
  </div>

</div>
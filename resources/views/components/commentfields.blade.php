<div class="card-body">

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Les utilisateurs</label>
      <div class="col-sm-10">
        {!!Form::select('user_id', $users->pluck('name', 'id') , null, ['class' => 'form-control']) !!}

      </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Les guardes</label>
        <div class="col-sm-10">
          {!!Form::select('guardy_id', $guardies->pluck('name', 'id') , null, ['class' => 'form-control']) !!}
  
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Commentaire</label>
        <div class="col-sm-10">
          {!! Form::textarea('comment', null , ['class' => 'form-control']) !!}


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
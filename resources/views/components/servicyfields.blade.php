@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        {{-- @error('name') is-invalid @enderror (errors()['name'] )? "is-valid" --}}
        {!! Form::text('name', old('name') , ['class' => "form-control ", "required" => true ]) !!}

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Action
        </button>
    </div>
</div>
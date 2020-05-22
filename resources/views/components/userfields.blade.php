@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Prenom</label>

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

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

    <div class="col-md-6">
        {{-- @error('name') is-invalid @enderror (errors()['name'] )? "is-valid" --}}
        {!! Form::text('last_name', old('last_name') , ['class' => "form-control ", "required" => true ]) !!}

        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        {!! Form::email('email', old('email') , ['class' => "form-control ", "required" => true ]) !!}

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@if($pass)
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
       
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>

@endif

<div class="form-group row">
    <label for="login" class="col-md-4 col-form-label text-md-right">Login</label>

    <div class="col-md-6">
        {!! Form::text('login', old('login') , ['class' => "form-control ", "required" => true ]) !!}

        @error('login')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="num_detect" class="col-md-4 col-form-label text-md-right">Num detect</label>

    <div class="col-md-6">
        {!! Form::text('num_detect', old('num_detect') , ['class' => "form-control " ]) !!}

        @error('num_detect')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="tel" class="col-md-4 col-form-label text-md-right">GSM</label>

    <div class="col-md-6">
        {!! Form::tel('tel', old('tel') , ['class' => "form-control " ]) !!}

        @error('tel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="fix" class="col-md-4 col-form-label text-md-right">FIX</label>

    <div class="col-md-6">
        {!! Form::tel('fix', old('fix') , ['class' => "form-control " ]) !!}

        @error('fix')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
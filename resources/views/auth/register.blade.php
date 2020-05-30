@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        
                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">Position</label>
                        
                            <div class="col-md-6">
                                {!! Form::select('position',  ['super admin', 'admin', 'simple user'], old('position')  , ['class' => "form-control " ]) !!}
                        
                            </div>
                        </div>



                        <x-userfields :pass="true"></x-userfields>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                {!! Form::model($user, ['method' => 'PUT',  'route' => ['users.update', $user->id]]) !!}


                        <x-userfields :pass="$pass" :user="$user"></x-userfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

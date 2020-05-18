@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                  {!! Form::model($user, ['route' => ['users.update', $user->id]]) !!}
                    <form method="POST" action="{{ route('register') }}">
                        


                        <x-userfields :pass="$pass"></x-userfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

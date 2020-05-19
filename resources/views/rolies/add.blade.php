@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Roly</div>

                <div class="card-body">
                  {!! Form::open(['method' => 'POST','route' => ['roles.store']]) !!}

                        


                        <x-rolyfields></x-rolyfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

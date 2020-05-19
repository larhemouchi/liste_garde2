@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Roly</div>

                <div class="card-body">
                  {!! Form::model($roly, ['method' => 'PUT','route' => ['roles.update', $roly->id]]) !!}

                        


                        <x-rolyfields :roly="$roly"></x-rolyfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

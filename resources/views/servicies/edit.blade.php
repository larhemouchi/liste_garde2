@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Servicy</div>

                <div class="card-body">
                  {!! Form::model($servicy, ['method' => 'PUT','route' => ['servicies.update', $servicy->id]]) !!}

                        


                        <x-servicyfields :servicy="$servicy"></x-servicyfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

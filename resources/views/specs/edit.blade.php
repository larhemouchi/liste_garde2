@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Spec</div>

                <div class="card-body">
                  {!! Form::model($spec,['method' => 'PUT','route' => ['spec.store' , $spec->id]]) !!}

                    
                        <x-specfields :spec="$spec" :rolies="$rolies"></x-specfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

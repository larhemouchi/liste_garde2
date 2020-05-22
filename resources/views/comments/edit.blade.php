@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Servicy</div>

                <div class="card-body">
                  {!! Form::model($comment, ['method' => 'PUT','route' => ['comment.update', $comment->id]]) !!}

                        


                        <x-servicyfields :users="$users" :guardies="$guardies"></x-servicyfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

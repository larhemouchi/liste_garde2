@extends('layouts.dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Comment</div>

                <div class="card-body">
                  {!! Form::open(['method' => 'POST','route' => ['comment.store']]) !!}

                        


                        <x-commentfields :users="$users" :guardies="$guardies"></x-commentfields>


                  {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>

@endsection

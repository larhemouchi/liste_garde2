@extends('layouts.app')

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">


                <a class="btn btn-primary" href="{{ route('guardies.g-calendar') }}" role="button">Regarder la general calendrier</a>

                </div>
            </div>
        </div>
    </div>


@endsection
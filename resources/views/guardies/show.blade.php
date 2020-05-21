@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Servicies</div>

                <div class="card-body table-responsive p-0">
                    {{ $guardy->name }}
                </div>    
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">History</div>

        <div class="card-body table-responsive p-0">
            <a class="btn btn-primary" href="{{ route('guardies.history', $guardy->id) }}" role="button">Watch</a>
        </div>    
    </div>


@endsection

@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">plages</div>

                <div class="card-body table-responsive p-0">
                    {{ $plage->name }}
                </div>    
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">History</div>

        <div class="card-body table-responsive p-0">
            <a class="btn btn-primary" href="{{ route('plages.history', $plage->id) }}" role="button">Watch</a>
        </div>    
    </div>
@endsection

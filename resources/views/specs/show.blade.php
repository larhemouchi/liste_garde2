@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Spec</div>

                <div class="card-body table-responsive p-0">
                    {{ $spec->name }}
                </div>    
            </div>


        </div>
    </div>




@endsection
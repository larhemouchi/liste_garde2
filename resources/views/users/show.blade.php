@extends('layouts.dash')

@section('content')




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $user->email }}</div>

                <div class="card-body table-responsive p-0">
                    {{ $user->email }}
                  </div>    
            </div>
        </div>
    </div>



@endsection


@section('js')

<x-deleteitem></x-deleteitem>


@endsection

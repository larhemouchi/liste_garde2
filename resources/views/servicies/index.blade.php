@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Servicies</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Edit</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($servicies as $servicy)
                        <tr>
                        <td><a href="{{ route("servicies.show", $servicy->id) }}">{{ $servicy->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("servicies.edit", $servicy->id) }}">Modifier</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

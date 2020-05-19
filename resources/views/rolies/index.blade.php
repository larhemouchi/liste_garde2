@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Roles</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Name</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($rolies as $roly)
                        <tr>
                        <td><a href="{{ route("roles.show", $roly->id) }}">{{ $roly->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("roles.edit", $roly->id) }}">Modifier</a></td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

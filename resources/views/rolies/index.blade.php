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
                        <td>

                          <a href="#" class="destroy" data-href="{{ route('roles.destroy', $roly->id) }}">
                              <i class="mr-2"></i> Suprimer
                            </a>
                  
                          

                        </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection


@section('js')

<x-deleteitem></x-deleteitem>


@endsection

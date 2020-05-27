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
                          <th>Suprimer</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($servicies as $servicy)
                        <tr>
                        <td><a href="{{ route("servicies.show", $servicy->id) }}">{{ $servicy->name }}</a></td>
                        
                        <td><a class="btn btn-primary" href="{{ route("servicies.edit", $servicy->id) }}">Modifier</a></td>
                        
                        <td>

                          <a href="#" class="destroy" data-href="{{ route('servicies.destroy', $servicy->id) }}">
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

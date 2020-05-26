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
                          <th>Modifier</th>
                          <th>Suprimer</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($specs as $spec)
                        <tr>
                        <td><a href="{{ route("spec.show", $spec->id) }}">{{ $spec->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("spec.edit", $spec->id) }}">Editer</a></td>
                        <td>

                          <a href="#" class="destroy" data-href="{{ route('spec.destroy', $spec->id) }}">
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

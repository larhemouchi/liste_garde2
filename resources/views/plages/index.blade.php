@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Plages</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Names</th>
                          <th>Editer</th>
                          <th>Suprimer</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($plages as $plage)
                        <tr>
                          <td><a href="{{ route("plages.show", $plage->id) }}">{{ $plage->name }}</a></td>
                          
                          <td><a class="btn btn-primary" href="{{ route("plages.edit", $plage->id) }}">Modifier</a></td>
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
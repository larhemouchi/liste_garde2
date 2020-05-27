@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guardies</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Names</th>
                          <th>Calendrier</th>
                          <th>Comments</th>
                          <th>Editer</th>
                          <th>Suprimer</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($guardies as $guardy)
                        <tr>
                        <td><a href="{{ route("guardies.show", $guardy->id) }}">{{ $guardy->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("guardies.calendar", $guardy->id) }}">Voir calendrier</a></td>
                        <td><a class="btn btn-primary" href="{{ route("guardies.comments", $guardy->id) }}">Voir commentaires</a></td>
                        <td><a class="btn btn-primary" href="{{ route("guardies.edit", $guardy->id) }}">Editer</a></td>
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
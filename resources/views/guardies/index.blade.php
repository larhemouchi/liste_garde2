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
                          <th>Editer</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($guardies as $guardy)
                        <tr>
                        <td><a href="{{ route("guardies.show", $guardy->id) }}">{{ $guardy->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("guardies.calendar", $guardy->id) }}">Voir calendrier</a></td>
                        <td><a class="btn btn-primary" href="{{ route("guardies.edit", $guardy->id) }}">Editer</a></td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

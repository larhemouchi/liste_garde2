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

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($plages as $plage)
                        <tr>
                          <td><a href="{{ route("plages.show", $plage->id) }}">{{ $plage->name }}</a></td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

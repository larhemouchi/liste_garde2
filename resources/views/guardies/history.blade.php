@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guardy Histories</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>...</th>

                        </tr>
                      </thead>
                      <tbody>

                        {{ $guardy->revisionHistory }}
                          @foreach($guardy->revisionHistory as $history)
                        <tr>
                          <td><span>{{ $history->userResponsible()->email }}</span> à changé {{ $history->fieldName() }} depuis {{ $history->oldValue() }} à {{ $history->newValue() }}</td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

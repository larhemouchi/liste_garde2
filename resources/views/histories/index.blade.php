@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Histories</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>User</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($histories as $history)
                        <tr>
                          <td>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from {{ $history->oldValue() }} to {{ $history->newValue() }}</td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

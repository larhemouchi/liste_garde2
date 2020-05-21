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
                          @if($history->key == 'created_at' && !$history->old_value)
                          <td>{{ optional($history->userResponsible())->email }} à creé a {{ $history->newValue() }}</td>

                          @else
                          <td>{{ optional($history->userResponsible())->email }} à changé {{ $history->fieldName() }} depuis {{ $history->oldValue() }} à {{ $history->newValue() }}</td>

                          @endif
                        </tr>
                        @endforeach


                      


                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

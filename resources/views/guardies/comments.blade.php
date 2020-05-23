@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guardy comments</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>...</th>

                        </tr>
                      </thead>
                      <tbody>

                        {{-- $guardy->comments --}}
                          @foreach($guardy->comments as $comment)
                        <tr>
                          <td><span>{{ $comment->comment }}</span> par {{ $comment->user->email }}</td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

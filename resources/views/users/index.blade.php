@extends('layouts.dash')

@section('content')




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Modifier</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($users as $user)
                        <tr>
                        <td>{{ $user->email }}</td>
                        <td><a class="btn btn-primary" href="{{ route("users.update", $user->id) }}">Modifier</a></td>
                        <td>

                          <a href="#" class="destroy" data-href="{{ route('user.destroy', $user->id) }}">
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

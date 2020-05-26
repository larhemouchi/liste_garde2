@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Comment</th>
                          <th>Edit</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($comments as $comment)
                        <tr>
                        <td><a href="{{ route("comment.show", $comment->id) }}">{{ $comment->comment }} by {{ optional($comment->user())->email || 'UKNOWN' }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route("comment.edit", $comment->id) }}">Modifier</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection

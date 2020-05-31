@extends('layouts.dash')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

@endsection


@section('content')









    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Guardies</div>

                <div class="card-body table-responsive p-0">
                  <a class="btn btn-primary" href="{{ route("guardies.index") }}">Simple</a>

                    <table class="table table-hover text-nowrap data-table">
                      <thead>
                        <tr>
                            <td>name</td>

                        </tr>
                      </thead>
                      <tbody>
                        
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection



@section('js')


<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">

$( document ).ready(function() {
    var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('guardies.index-extended-data') }}",
          columns: [

              {data: 'name', name: 'name'}
            
          ]
      });
});


  </script>

@endsection
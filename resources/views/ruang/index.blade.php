@extends('layouts.master')
@section('title', 'Rooms Data')
@section('content')

<div class="wrapper">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="h4 mb-0 text-gray-800"> Rooms Data </h4>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
        </div>

        <div class="container">
            <div class="float-right">
                <a class="btn btn-success mb-4" href="{{ route('ruang.create') }}"><i class="fas fa-plus"></i> Add Data </a>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class=" alert alert-danger">
            {{ session('success') }}
    </div>
    @endif

    <!-- table -->
    <table class="table table-striped display" id="table_id">
        <thead class="text-center thead-dark">
            <tr class="text-light">
                <th>No</th>
                <th>Room Name</th>
                <th>Room Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tfoot>
            <tr class="text-light bg-dark text-center">
                <th>No</th>
                <th>Room Name</th>
                <th>Room Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($ruang as $r)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $r->nomor_ruangan}}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->nama_ruangan }}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->lantai_ruangan }}</td>
                <td style="width: 100px; text-align:center; color:#111;"><button class=" btn btn-success" style="width:100px;"><a href="{{ route('ruang.edit', $r->id) }}" class="text-white" style="text-decoration: none;">Edit</a></button></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" onclick="modal('{{ $r->id }}')" type="button">Delete</button></td>
            </tr>
            @endforeach

            <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Delete Rooms Data</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure you want to delete this data ?</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="" class="btn btn-danger" id="url">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    function modal(id){
        $('#myModal').modal('show');
        $('#url').attr('href','/ruang/delete/'+id);
    }
</script>
@endsection
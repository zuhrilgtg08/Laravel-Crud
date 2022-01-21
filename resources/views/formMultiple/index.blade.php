@extends('layouts.master')
@section('title', 'Data Users')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="h4 mb-0 text-gray-800"> Data Users </h4>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
        </div>
    </div>

    @if ($forum = Session::get('success'))
        <div class="alert alert-danger">
            <p>{{ $forum }}</p>
        </div>
    @endif

    <table class="table table-striped display" id="table_id">
        <thead>
            <tr class="text-center bg-primary text-white fw-normal">
                <th>No</th>
                <th>Name User</th>
                <th>Email User</th>
                <th width="100px">Edit</th>
                <th width="100px">Delete</th>
            </tr>
        </thead>

        <tfoot>
            <tr class="text-center bg-primary text-white fw-normal">
                <th>No</th>
                <th>Name User</th>
                <th>Email User</th>
                <th width="100px">Edit</th>
                <th width="100px">Delete</th>
            </tr>
        </tfoot>
        
        @php
            $no = 1;
        @endphp

        <tbody>
            @foreach ($form as $item)
                <tr class="text-center">
                    <td style="color: #111;">{{ $no++ }}</td>
                    <td style="color: #111;">{{ $item->name }}</td>
                    <td style="color: #111;">{{ $item->email }}</td>
                    <td><a class="btn btn-primary" style="width:100px;" href="{{ route('form.edit',$item->id) }}">Edit</a></td>
                    <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" onclick="modal('{{ $item->id }}')" type="button">Delete</button></td>
                </tr>
            @endforeach
            
                <div class="modal" tabindex="-1" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Delete Userd Data</h3>
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
            </div>
        </tbody>
    </table>
@endsection

@section('script')
<script>
    function modal(id){
        $('#myModal').modal('show');
        $('#url').attr('href','/form/delete/'+id);
    }
</script>

@endsection
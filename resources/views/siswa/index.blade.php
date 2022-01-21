@extends('layouts.master')
@section('title', 'Students')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h4 class="h4 mb-0 text-gray-800"> Students Data </h4>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
            </div>

            <div class="container">
                <div class="float-right">
                    <a class="btn btn-success mb-4" href="{{ route('siswa.create') }}"><i class="fas fa-plus"></i> Add Data </a>
                </div>
            </div>
        </div>

        @if ($pesan = Session::get('success'))
            <div class="alert alert-danger">
                <p>{{ $pesan }}</p>
            </div>
        @endif

        <table class="table table-striped display" id="table_id">

            <thead>
                <tr class="text-center bg-primary text-white">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tfoot>
                <tr class="text-center bg-primary text-white">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
    
                @php
                    $x = 1;
                @endphp
            <tbody>
                @foreach ($siswa as $mhs)
                    <tr class="text-center text-dark">
                        <td style="color: #111;">{{ $x++ }}</td>
                        <td style="color: #111;">{{ $mhs->nis }}</td>
                        <td style="color: #111;">{{ $mhs->nama_siswa }}</td>
                        <td style="color: #111;">{{ $mhs->jurusan }}</td>
                        <td><a class="btn btn-primary" href="{{ route('siswa.edit',$mhs->id) }}" style="width: 100px;">Edit</a></td>
                        <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" onclick="modal('{{ $mhs->id }}')" type="button">Delete</button></td>
                    </tr>
                @endforeach
                <div class="modal" tabindex="-1" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Delete Data Students</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body">
                                <p>Are you sure you want to delete this data ?</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-danger" href="" id="url">Delete</a>
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
        $('#url').attr('href','/siswa/delete/'+id);
    }
</script>
@endsection




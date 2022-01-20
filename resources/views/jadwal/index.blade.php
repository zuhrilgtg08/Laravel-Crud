@extends('layouts.master')
@section('title', 'Lesson Data')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Lesson Data </h4>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
    </div>

    <div class="container">
        <div class="float-right">
            <a class="btn btn-success mb-4" href="{{ route('jadwal.create') }}"><i class="fas fa-plus"></i> Add Data </a>
        </div>
    </div>
</div>

{{-- alert --}}
@if ($buku = Session::get('success'))
<div class="alert alert-danger">
    <p>{{ $buku }}</p>
</div>
@endif

        <table class="table table-striped display" id="table_id">
            <thead>
                <tr class="text-center bg-danger text-white">
                    <th>No</th>
                    <th>Teachers</th>
                    <th>Classroom</th>
                    <th>Room</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            @php
                $no = 1;
            @endphp

            <tbody class="text-center">
                @foreach ($data as $dat)
                    <tr>
                        <td style="color: #111;">{{ $no++ }}</td>
                        <td style="color: #111;">{{ $dat->nama_guru}}</td>
                        <td style="color: #111;">{{ $dat->nama_kelas }}</td>
                        <td style="color: #111;">{{ $dat->nama_ruangan }}</td>
                        <td style="color: #111;">{{ $dat->mulai}} - {{ $dat->akhir }}</td>
                        <td style="color: #111;">{{ $dat->tanggal }}</td>
                        <td><a class="btn btn-primary" style="width:100px;" href="{{ route('jadwal.edit',$dat->id) }}">Edit</a></td>
                        <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" onclick="modal('{{ $dat->id }}')" type="button">Delete</button></td>
                    </tr>
                @endforeach
                <div class="modal" tabindex="-1" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Delete Lesson Data</h3>
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
@endsection

@section('script')
<script>
    function modal(id){
        $('#myModal').modal('show');
        $('#url').attr('href','/jadwal/delete/'+id);
    }
</script>

@endsection
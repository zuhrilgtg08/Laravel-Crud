@extends('layouts.apk')
@section('title', 'Data Guru')

@section('content')
<div class="row">
    <div class="container">
        <div class="text-center">
            <h2 class="fw fw-normal">Tabel Data Guru</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success m-3" href="{{ route('guru.create') }}"> Tambah Data Guru</a>
        </div>
    </div>
</div>

@if ($teacher = Session::get('success'))
<div class="alert alert-danger">
    <p>{{ $teacher }}</p>
</div>
@endif

<table class="table table-striped display" id="table_id">

    <thead>
        <tr class="text-center bg-info text-white fw-normal">
            <th>No</th>
            <th>Nip</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    
    @php
    $no = 1;
    @endphp
    <tbody>
            @foreach ($guru as $g)
                <tr class="text-center">
                    <td style="color: #111;">{{ $no++ }}</td>
                    <td style="color: #111;">{{ $g->nip }}</td>
                    <td style="color: #111;">{{ $g->nama_guru }}</td>
                    <td style="color: #111;">{{ $g->mata_pelajaran }}</td>
                    <td><a class="btn btn-primary" style="width:100px;" href="{{ route('guru.edit',$g->id) }}">Edit</a></td>
                    <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>
                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Delete Data Table Guru</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                </div>

                                    <div class="modal-body">
                                        <p>Are you sure Delete Your data ?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('guru', $g->id ) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" style="width: 100px;">Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
    </tbody>
</table>
    
@endsection

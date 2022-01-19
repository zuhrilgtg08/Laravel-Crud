@extends('layouts.insert')
@section('title', 'Tabel Jadwal')
@section('content')
<div class="row">
    <div class="container">
        <div class="text-center">
            <h2 class="fw fw-normal">Tabel Jadwal</h2>
        </div>
        <div class="mr-3 my-2 float-right">
            <a class="btn btn-warning m-3" href="{{ route('jadwal.create') }}">Jadwal Baru</a>
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
                <tr class="text-center bg-success text-white">
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                    <th>Nama Ruangan</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
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
                        <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>
                        <div class="modal" tabindex="-1" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Delete Data Table Jadwal</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Are you sure Delete Your data ?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('jadwal', $dat->id ) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" style="width: 100px;">Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
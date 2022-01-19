@extends('layouts.apk')
@section('title', 'Data Ruangan')
@section('content')

<div class="wrapper">
    <h1 style="text-align: center;">Tabel Data Ruangan</h1>

    @if (session('success'))
    <div class=" alert alert-success">
            {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="ruang/create" class="btn btn-warning m-3 float-right">Tambah Ruangan</a>

    <!-- table -->

    <table class="table table-striped display" id="table_id">
        <thead class="text-center thead-dark">
            <tr class="text-light">
                <th>Nomor Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Lantai Ruangan</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ruang as $r)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $r->nomor_ruangan}}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->nama_ruangan }}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->lantai_ruangan }}</td>
                <td style="width: 100px; text-align:center; color:#111;"><button class=" btn btn-success" style="width:100px;"><a href="{{ route('ruang.edit', $r->id) }}" class="text-white" style="text-decoration: none;">Edit</a></button></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>
                <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Delete Data Table Ruangan</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                </div>

                                    <div class="modal-body">
                                        <p>Are you sure Delete Your data ?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('ruang', $r->id ) }}">
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
</div>
@endsection
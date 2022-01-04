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
    <a href="ruang/create" class="btn btn-warning mb-3">Tambah Data Ruangan</a>

    <!-- table -->

    <table class="table table-striped">
        <thead class="text-center thead-dark">
            <tr class="text-light">
                <th>Nomor Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Lantai Ruangan</th>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ruang as $r)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $r->nomor_ruangan}}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->nama_ruangan }}</td>
                <td style="width: 300px; text-align:center; color:#111;">{{ $r->lantai_ruangan }}</td>
                <td style="width: 100px; text-align:center; color:#111;"><button class=" btn btn-success" style="width:100px;"><a href="{{ route('ruang.edit', $r->id) }}" class="text-white" style="text-decoration: none;">Ubah</a></button></td>
                <form method="POST" action="{{ url('ruang', $r->id ) }}">
                    @csrf
                    @method('DELETE')
                    <td style="width: 100px"><button class="btn btn-danger" style="width:100px;">Hapus</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
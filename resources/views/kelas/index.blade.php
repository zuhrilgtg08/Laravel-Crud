@extends('layouts.insert')
@section('title', 'Data Kelas')
@section('content')

<div class="wrapper">
    <h1 class="text-center">Tabel Data Kelas</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="kelas/create" class="btn btn-warning mb-3">Tambah Data Kelas</a>

    <!-- table -->

    <table class="table table-striped">
        <thead class="text-center">
            <tr class="text-light bg-info">
                <th>Nama Kelas</th>
                <th>Nomor Kelas</th>
                <th>Wali Kelas</th>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kelass as $kls)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $kls->nama_kelas}}</td>
                <td style="width: 400px; text-align:center; color:#111;">{{ $kls->nomor_kelas }}</td>
                <td style="width: 250px; text-align:center; color:#111;">{{ $kls->wali_kelas }}</td>
                <td style="width: 50px; text-align:center; color:#111;"><button class="btn btn-success" style="width: 100px;"><a href="{{ route('kelas.edit', $kls->id) }}" class="text-light text-capitalize" style="text-decoration: none;">Ubah</a></button></td>
                <form method="POST" action="{{ url('kelas', $kls->id ) }}">
                    @csrf
                    @method('DELETE')
                    <td><button class="btn btn-danger" style="width: 100px;">Hapus</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
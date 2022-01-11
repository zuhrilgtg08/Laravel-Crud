@extends('layouts.insert')
@section('title', 'Data Siswa')
@section('content')
    <div class="row">
        <div class="container">
            <div class="text-center">
                <h2 class="text-capitalize fw-normal">tabel data siswa</h2>
        </div>
        <div class="mr-3 my-2">
            <a class="btn btn-success" href="{{ route('siswa.create') }}">Tambah Data Siswa Baru</a>
        </div>
    </div>

@if ($pesan = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $pesan }}</p>
</div>
@endif

<table class="table table-striped">

    <thead>
        <tr class="text-center bg-primary text-white">
            <th>No</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th width="280px">Edit Data</th>
        </tr>
    </thead>
    
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
                <td>
                    <form action="{{ route('siswa.destroy',$mhs->id) }}" method="POST">


                        <a class="btn btn-primary" href="{{ route('siswa.edit',$mhs->id) }}" style="width: 100px;">Ubah</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger ml-3" style="width:100px;">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection



@extends('layouts.insert')
@section('siswaAdmin', 'ubah data siswa')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Ubah Data Siswa</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/siswa" class="btn btn-warning mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('siswa', $siswa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="input">NISN Siswa</label>
            <input type="text" name="nis" id="input" class="form-control" value="{{ $siswa->nis }}" placeholder="Ubah NISN Siswa">
        </div>

        <div class="form-group mb-3">
            <label for="input">Nama Siswa</label>
            <input type="text" name="nama_siswa" id="input" class="form-control" value="{{ $siswa->nama_siswa }}" placeholder="Ubah Data Nama Siswa...">
        </div>

        <div class="form-group mb-3">
            <label for="input">Jurusan</label>
            <input type="text" name="jurusan" id="input" class="form-control" value="{{ $siswa->jurusan }}" placeholder="Ubah Data Jurusan...">
        </div>

        <button class="btn btn-primary" style="width: 100px;">Kirim</button>
    </form>
</div>
@endsection
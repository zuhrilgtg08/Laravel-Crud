@extends('layouts.insert')
@section('siswa', 'buat data siswa baru')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Tambah Nama Siswa Baru</h1>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-primary">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/siswa" class="btn btn-warning mb-3">Kembali</a>

    <!-- jika error maka lakukan foreach -->
    @if($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- <form method="POST" style="margin-top:20px;" action="{{ url('siswa') }}"> -->
    <form method="POST" action="{{ url('siswa') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="exampleInput">NISN</label>
            <input type="text" name="nis" class="form-control" id="exampleInput">
        </div>

        <div class="form-group mb-3">
            <label for="exampleInpu">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" id="exampleInput">
        </div>

        <div class="form-group mb-3">
            <label for="example">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="example">
        </div>
        <button type="submit" class="btn btn-danger" style="width: 100px;">Kirim</button>
    </form>

    <!-- <div class="form-group">
            <label for="inputText">NISN Siswa</label>
            <input type="text" name="nis" placeholder="NISN Siswa..." id="inputText">
        </div>

        <div class="form-group">
            <label for="inputText">Nama Siswa</label>
            <input type="text" name="nama_siswa" placeholder="Nama siswa..." id="inputText">
        </div>


        <input type="text" name="jurusan" placeholder="Jurusan...">
        <button class="btn-blue">kirim</button>
    </form> -->
</div>
@endsection
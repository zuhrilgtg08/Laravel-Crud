@extends('layouts.apk')
@section('ruang', 'Ruangan Baru')
@section('content')
<div class="wrapper">
    <h1 class="text-center text-uppercase">Buat Data Ruangan baru</h1>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/ruang" class="btn btn-warning mb-3">Kembali</a>

    <!-- jika error maka lakukan foreach -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <form style="margin-top:20px;" method="POST" action="{{ url('ruang') }}">
        @csrf
        <div class="form-group mb-3 rounded bg-success text-white p-md-1">
            <label for="nomor">Nomor Ruangan : </label>
            <input type="text" name="nomor_ruangan" class="form-control" id="nomor" placeholder="Nomor Ruangan...">
        </div>

        <div class="form-group mb-3 rounded bg-success text-white p-md-1">
            <label for="nama">Nama Ruangan : </label>
            <input type="text" name="nama_ruangan" class="form-control" id="nama" placeholder="Nama Ruangan...">
        </div>

        <div class="form-group mb-3 rounded bg-success text-white p-md-1">
            <label for="lantai">Lantai Ruangan : </label>
            <input type="text" name="lantai_ruangan" class="form-control" id="lantai" placeholder="Lantai Ruangan...">
        </div>
        <button class="btn btn-primary mt-3" style="width: 100px;">kirim</button>
    </form>


</div>
@endsection
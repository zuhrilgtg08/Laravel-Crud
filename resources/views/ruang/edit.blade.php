@extends('layouts.apk')
@section('ruang', 'ubah data ruang')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Ubah Data Ruangan</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/ruang" class="btn btn-warning mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <!-- card -->
    <div class="card rounded">
        <div class="card-header bg-dark">
            <h5 class="text-center text-white">Ubah Data</h5>
        </div>

        <div class="card-body">
            <form method="POST" style="margin-top:20px;" action="{{ url('ruang', $ruang->id) }}">
                @csrf
                @method('PUT')
                <label for="input" class="form-label">Nomor Ruangan : </label>
                <input type="text" name="nomor_ruangan" class="form-control mb-3" id="input" value="{{ $ruang->nomor_ruangan }}">

                <label for="nama" class="form-label">Nama Ruangan : </label>
                <input type="text" name="nama_ruangan" class="form-control mb-3" id="nama" value="{{ $ruang->nama_ruangan }}">

                <label for="lantai" class="form-label">Lantai Ruangan : </label>
                <input type="text" name="lantai_ruangan" class="form-control mb-3" id="lantai" value="{{ $ruang->lantai_ruangan }}">
        </div>

        <div class="card-footer">
            <button class="btn btn-success" style="width: 100px;">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection
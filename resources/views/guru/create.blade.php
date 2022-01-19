@extends('layouts.apk')
@section('title', 'Tambah Data Guru')
@section('content')
<div class="wrapper">
    <h2 class="text-center">Tambah Data Guru</h2>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/guru" class="btn btn-warning mb-3">Kembali</a>

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

    <div class="card">
        <div class="card-header bg-success">
            <h5 class="text-center text-light">Form Tambah</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('guru') }}">
                @csrf
                <label for="nip" class="form-label">NIP Guru : </label>
                <input type="text" name="nip" class="form-control mb-3" id="nip">

                <label for="nama" class="form-label">Nama Guru : </label>
                <input type="text" name="nama_guru" class="form-control mb-3" id="nama">

                <label for="mapel" class="form-label">Mata Pelajaran : </label>
                <input type="text" name="mata_pelajaran" class="form-control mb-3" id="mapel">
        </div>

        <div class="card-footer">
            <button class="btn btn-primary" style="width: 100px;">kirim</button>
            </form>
        </div>
    </div>




</div>
@endsection
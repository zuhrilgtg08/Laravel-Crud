@extends('layouts.apk')
@section('guru', 'buat data baru guru')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Tambah Nama Guru Baru</h1>

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
        <div class="card-header bg-secondary">
            <h5 class="text-center text-light">Tambah Data</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('guru') }}">
                @csrf
                <label for="nip" class="form-label">NIP Guru : </label>
                <input type="text" name="nip" class="form-control mb-3" id="nip" placeholder="Nip Guru...">

                <label for="nama" class="form-label">Nama Guru : </label>
                <input type="text" name="nama_guru" class="form-control mb-3" id="nama" placeholder="Nama Guru...">

                <label for="mapel" class="form-label">Mata Pelajaran : </label>
                <input type="text" name="mata_pelajaran" class="form-control mb-3" id="mapel" placeholder="Mata Pelajaran...">
        </div>

        <div class="card-footer">
            <button class="btn btn-primary" style="width: 100px;">kirim</button>
            </form>
        </div>
    </div>




</div>
@endsection
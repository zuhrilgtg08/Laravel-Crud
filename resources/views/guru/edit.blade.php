@extends('layouts.apk')
@section('serverGuru', 'ubah data ')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Ubah Data Guru</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/guru" class="btn btn-warning mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('guru', $guru->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nip">NIP Guru</label>
            <input type="text" name="nip" id="nip" class="form-control" value="{{ $guru->nip }}" placeholder="Ubah Nip Guru...">
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama" class="form-control" value="{{ $guru->nama_guru }}" placeholder="Ubah Data Nama Guru...">
        </div>

        <div class="form-group mb-3">
            <label for="mapel">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mapel" class="form-control" value="{{ $guru->mata_pelajaran }}" placeholder="Ubah Mata Pelajaran...">
        </div>


        <button class="btn btn-success" style="width: 100px;">Kirim</button>
    </form>
</div>
@endsection
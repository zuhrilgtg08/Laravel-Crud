@extends('layouts.apk')
@section('title', 'Ubah Data Barang')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Edit Data</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/komputer" class="btn btn-warning mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('komputer', $komputer->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nama">Nama Barang</label>
            <input type="text" name="namaBarang" id="nama" class="form-control" value="{{ $komputer->namaBarang }}">
        </div>

        <div class="form-group mb-3">
            <label for="kode">Kode Barang</label>
            <input type="text" name="kodeBarang" id="kode" class="form-control" value="{{ $komputer->kodeBarang }}">
        </div>

        <div class="form-group mb-3">
            <label for="jumlah">Jumlah Barang</label>
            <input type="text" name="jumlahBarang" id="jumlah" class="form-control" value="{{ $komputer->jumlahBarang }}">
        </div>

        <div class="form-group mb-3">
            <label for="harga">Harga Barang</label>
            <input type="text" name="hargaBarang" id="harga" class="form-control" value="{{ $komputer->hargaBarang }}">
        </div>

        <button class="btn btn-success" style="width: 150px;">Simpan Data</button>
    </form>
</div>
@endsection
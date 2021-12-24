@extends('layouts.insert')
@section('barangAdmin', 'ubah barang')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Ubah Barang</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/barang" class="btn btn-warning mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}  
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('barang', $barang->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama Barang : </label>
            <input type="text" name="namaBarang" class="form-control" id="nama" value="{{ $barang->namaBarang }}" placeholder="Ubah Barang...">
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form=label">Jumlah Barang : </label>
            <input type="text" name="jumlahBarang" class="form-control" id="jumlah" value="{{ $barang->jumlahBarang }}" placeholder="Ubah Jumlah Barang...">
        </div>

        <button class="btn btn-primary" style="width: 100px;">Kirim</button>
    </form>
</div>
@endsection
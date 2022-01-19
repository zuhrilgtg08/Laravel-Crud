@extends('layouts.apk')
@section('title', 'Tambah Barang')
@section('content')
<div class="wrapper">
    <h2 class="text-center">Tambah Barang Elektronik</h2>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/komputer" class="btn btn-warning mb-3">Kembali</a>

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
            <h5 class="text-center text-light">Tambah Barang</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('komputer') }}">
                @csrf
                <label for="nama" class="form-label">Nama Barang : </label>
                <input type="text" name="namaBarang" class="form-control mb-3" id="nama">

                <label for="kode" class="form-label">Kode Barang : </label>
                <input type="text" name="kodeBarang" class="form-control mb-3" id="kode">

                <label for="jumlah" class="form-label">Jumlah Barang : </label>
                <input type="text" name="jumlahBarang" class="form-control mb-3" id="jumlah">

                <label for="harga" class="form-label">Harga Barang : </label>
                <input type="text" name="hargaBarang" class="form-control mb-3" id="harga">
        </div>

        <div class="card-footer">
            <button class="btn btn-primary" style="width: 100px;">kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection
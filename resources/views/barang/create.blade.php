@extends('layouts.insert')
@section('barang', 'Barang Baru')
@section('content')
<div class="wrapper">
    <h1 class="text-center">Buat Data Baru</h1>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/barang" class="btn btn-warning mb-3">Kembali</a>

    <!-- jika error maka lakukan foreach -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form style="margin-top:20px;" method="POST" action="{{ url('barang') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="barang" class="form-label">Nama Barang : </label>
            <input type="text" class="form-control" id="barang" name="namaBarang" placeholder="Nama Barang...">
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang : </label>
            <input type="text" class="form-control" id="jumlah" name="jumlahBarang" placeholder="jumlah...">
        </div>
        <button class="btn btn-primary" style="width: 100px;">kirim</button>
    </form>


</div>
@endsection
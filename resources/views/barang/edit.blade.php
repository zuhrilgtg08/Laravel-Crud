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
        <input type="text" name="namaBarang" value="{{ $barang->namaBarang }}" placeholder="Ubah Barang...">

        <input type="text" name="jumlahBarang" value="{{ $barang->jumlahBarang }}" placeholder="Ubah Jumlah Barang...">

        <button class="btn btn-primary w-23">Kirim</button>
    </form>
</div>
@endsection
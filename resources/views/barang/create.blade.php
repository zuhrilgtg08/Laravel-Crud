@extends('layouts.insert')
@section('barang', 'Barang Baru')
@section('content')
<div class="wrapper">
    <h1>Buat Data Baru</h1>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert-success">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <!-- tombol -->
    <a href="/barang" class="btn-yellow">Kembali</a>

    <!-- jika error maka lakukan foreach -->
    @if($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form style="margin-top:20px;" method="POST" action="{{ url('barang') }}">
        @csrf
        <input type="text" name="namaBarang" placeholder="nama...">
        <input type="text" name="jumlahBarang" placeholder="jumlah...">
        <button class="btn-blue">kirim</button>
    </form>


</div>
@endsection
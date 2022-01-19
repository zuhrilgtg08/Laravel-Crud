@extends('layouts.insert')
@section('kelas', 'kelas baru')
@section('content')
<div class="wrapper">
    <h1 class="text-center text-uppercase">Buat Data Kelas Baru</h1>

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/kelas" class=" btn btn-warning">Kembali</a>

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

    <form style="margin-top:20px;" method="POST" action="{{ url('kelas') }}">
        @csrf
        <div class="form-group bg-secondary text-light rounded">
            <label for="input" class="pt-1">Nama Kelas : </label>
            <input type="text" name="nama_kelas" class="form-control mb-2" id="input">
        </div>

        <div class="form-group bg-secondary text-light rounded">
            <label for="nomor" class="pt-1">Nomor Kelas : </label>
            <input type="text" name="nomor_kelas" class="form-control mb-2" id="nomor">
        </div>

        <div class="form-group bg-secondary text-light rounded">
            <label for="wali" class="pt-1">Wali Kelas : </label>
            <input type="text" name="wali_kelas" class="form-control mb-2" id="wali">
        </div>
        <button class="btn btn-success" style="width: 100px;">kirim</button>
    </form>


</div>
@endsection
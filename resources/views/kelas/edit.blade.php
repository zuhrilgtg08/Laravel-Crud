@extends('layouts.insert')
@section('kelas', 'ubah data kelas')
@section('content')
<div class="wrapper">
    <h1 style="text-align: center;">Ubah Data Kelas</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="/kelas" class=" btn btn-primary mb-3">Kembali</a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card rounded">
        <!-- card header -->
        <div class="card-header bg-info">
            <h5 class="text-center text-light">Edit Data Kelas</h5>
        </div>

        <!-- card body -->
        <div class="card-body">
            <form method="POST" style="margin-top:20px;" action="{{ url('kelas', $kelas->id) }}">
                @csrf
                @method('PUT')
                <label for="nama" class="form-label font-weight-bold">Nama Kelas : </label>
                <input type="text" name="nama_kelas" class="form-control mb-3" id="nama" value="{{ $kelas->nama_kelas }}" placeholder="Ubah Nama Kelas...">

                <label for="nomor" class="form-label font-weight-bold">Nomor Kelas : </label>
                <input type="text" name="nomor_kelas" class="form-control mb-3" id="nomor" value="{{ $kelas->nomor_kelas }}" placeholder="Ubah Nomor Kelas...">

                <label for="wali" class="fomr-label font-weight-bold">Wali Kelas : </label>
                <input type="text" name="wali_kelas" class="form-control mb-3" id="wali" value="{{ $kelas->wali_kelas }}" placeholder="Ubah Wali Kelas...">
            
        </div>

        <!-- card footer -->
        <div class="card-footer">
            <button class="btn btn-success" type="submit" style="width: 100px;">Kirim</button>
            </form>
        </div>
    </div>
</div>

@endsection
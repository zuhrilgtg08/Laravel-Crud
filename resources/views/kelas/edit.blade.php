@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/kelas" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

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
        <div class="card-body bg-danger text-white">
            <form method="POST" style="margin-top:20px;" action="{{ url('kelas', $kelas->id) }}">
                @csrf
                @method('PUT')
                <label for="nama" class="form-label">Class Name : </label>
                <input type="text" name="nama_kelas" class="form-control mb-3" id="nama" value="{{ $kelas->nama_kelas }}">

                <label for="nomor" class="form-label">Class Number : </label>
                <input type="text" name="nomor_kelas" class="form-control mb-3" id="nomor" value="{{ $kelas->nomor_kelas }}">

                <label for="wali" class="fomr-label">Homeroom Teacher : </label>
                <input type="text" name="wali_kelas" class="form-control mb-3" id="wali" value="{{ $kelas->wali_kelas }}">
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-success" type="submit" style="width: 100px;"> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
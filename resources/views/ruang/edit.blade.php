@extends('layouts.master')
@section('ruang', 'Edit Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/ruang" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>


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

    <!-- card -->
    <div class="card">
        <div class="card-body text-light" style="background:#D2B48C;">
            <form method="POST" style="margin-top:20px;" action="{{ url('ruang', $ruang->id) }}">
                @csrf
                @method('PUT')
                <label for="input" class="form-label">Room Number : </label>
                <input type="text" name="nomor_ruangan" class="form-control mb-3" id="input" value="{{ $ruang->nomor_ruangan }}">

                <label for="nama" class="form-label">Room Name : </label>
                <input type="text" name="nama_ruangan" class="form-control mb-3" id="nama" value="{{ $ruang->nama_ruangan }}">

                <label for="lantai" class="form-label">Room Level : </label>
                <input type="text" name="lantai_ruangan" class="form-control mb-3" id="lantai" value="{{ $ruang->lantai_ruangan }}">
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-success" style="width: 100px;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
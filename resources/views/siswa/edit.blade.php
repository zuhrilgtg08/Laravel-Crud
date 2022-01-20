@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/siswa" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body bg-success text-white">
            <form method="POST" action="{{ url('siswa', $siswa->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="input">NISN : </label>
                    <input type="text" name="nis" id="input" class="form-control" value="{{ $siswa->nis }}">
                </div>

                <div class="form-group mb-3">
                    <label for="input">Name : </label>
                    <input type="text" name="nama_siswa" id="input" class="form-control" value="{{ $siswa->nama_siswa }}">
                </div>

                <div class="form-group mb-3">
                    <label for="input">Department : </label>
                    <input type="text" name="jurusan" id="input" class="form-control" value="{{ $siswa->jurusan }}">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-primary" style="width: 100px;"> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
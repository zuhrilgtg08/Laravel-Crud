@extends('layouts.master')
@section('title', 'Create Data')
@section('content')

<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Add Students Data </h4>
    </div>

    <!-- tombol -->
    <a href="/siswa" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

    <!-- logika if -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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



    <div class="card">
        <div class="card-body bg-success text-white">
            <!-- <form method="POST" style="margin-top:20px;" action="{{ url('siswa') }}"> -->
            <form method="POST" action="{{ url('siswa') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleInput">NISN : </label>
                    <input type="text" name="nis" class="form-control" id="exampleInput">
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInpu">Name : </label>
                    <input type="text" name="nama_siswa" class="form-control" id="exampleInput">
                </div>

                <div class="form-group mb-3">
                    <label for="example">Department : </label>
                    <input type="text" name="jurusan" class="form-control" id="example">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button type="submit" class="btn btn-danger" style="width: 100px;"> Add Data </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', 'Create Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Add Rooms Data </h4>
    </div>

    <!-- tombol -->
    <a href="/ruang" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

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
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body text-light" style="background:#D2B48C;">
            <form style="margin-top:20px;" method="POST" action="{{ url('ruang') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="nomor">Rooms Number : </label>
                    <input type="text" name="nomor_ruangan" class="form-control" id="nomor">
                </div>

                <div class="form-group mb-3">
                    <label for="nama">Rooms Name : </label>
                    <input type="text" name="nama_ruangan" class="form-control" id="nama">
                </div>

                <div class="form-group mb-3">
                    <label for="lantai">Rooms Level : </label>
                    <input type="text" name="lantai_ruangan" class="form-control" id="lantai">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-primary" style="width: 100px;">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', 'Create Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Add Teachers Data </h4>
    </div>

    <!-- tombol -->
    <a href="/guru" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

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
        <div class="card-body bg-secondary text-white">
            <form method="POST" action="{{ url('guru') }}">
                @csrf
                <label for="nip" class="form-label">NIS : </label>
                <input type="text" name="nip" class="form-control mb-3" id="nip">

                <label for="nama" class="form-label">Name : </label>
                <input type="text" name="nama_guru" class="form-control mb-3" id="nama">

                <label for="mapel" class="form-label">Subjects : </label>
                <input type="text" name="mata_pelajaran" class="form-control mb-3" id="mapel">
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
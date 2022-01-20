@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/guru" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card bg-secondary">
        <div class="card-body text-white">
            <form method="POST" action="{{ url('guru', $guru->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nip">NIS : </label>
                    <input type="text" name="nip" id="nip" class="form-control" value="{{ $guru->nip }}">
                </div>

                <div class="form-group mb-3">
                    <label for="nama">Name : </label>
                    <input type="text" name="nama_guru" id="nama" class="form-control" value="{{ $guru->nama_guru }}">
                </div>

                <div class="form-group mb-3">
                    <label for="mapel">Subjects : </label>
                    <input type="text" name="mata_pelajaran" id="mapel" class="form-control" value="{{ $guru->mata_pelajaran }}">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-success text-center" style="width: 100px;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', 'Create Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Add Classroom </h4>
    </div>

    <!-- tombol -->
    <a href="/kelas" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

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
        <div class="card-body bg-danger text-white">
            <form style="margin-top:20px;" method="POST" action="{{ url('kelas') }}">
                @csrf
                <div class="form-group">
                    <label for="input" class="pt-1">Class Name : </label>
                    <input type="text" name="nama_kelas" class="form-control mb-2" id="input">
                </div>

                <div class="form-group">
                    <label for="nomor" class="pt-1">Class Number : </label>
                    <input type="text" name="nomor_kelas" class="form-control mb-2" id="nomor">
                </div>

                <div class="form-group">
                    <label for="wali" class="pt-1">Homeroom Teacher : </label>
                    <input type="text" name="wali_kelas" class="form-control mb-2" id="wali">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-success" style="width: 100px;"> Add Data </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
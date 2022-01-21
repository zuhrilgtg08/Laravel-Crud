@extends('layouts.master')
@section('title', 'Create Data')
@section('content')

<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Add Items Data </h4>
    </div>

    <!-- tombol -->
    <a href="/komputer" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

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
        <div class="card-body text-white" style="background: #BD33FF;">
            <form method="POST" action="{{ url('komputer') }}">
                @csrf
                <label for="nama" class="form-label">Name Items : </label>
                <input type="text" name="namaBarang" class="form-control mb-3" id="nama">

                <label for="kode" class="form-label">Code Items : </label>
                <input type="text" name="kodeBarang" class="form-control mb-3" id="kode">

                <label for="jumlah" class="form-label">Amount Items : </label>
                <input type="text" name="jumlahBarang" class="form-control mb-3" id="jumlah">

                <label for="harga" class="form-label">Price Items : </label>
                <input type="text" name="hargaBarang" class="form-control mb-3" id="harga">
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-primary" style="width: 100px;"> Add Data </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
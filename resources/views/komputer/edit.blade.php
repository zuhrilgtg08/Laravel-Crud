@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
<div class="wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/komputer" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>


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
        <div class="card-body text-white" style="background: #BD33FF;>
            <form method="POST" action="{{ url('komputer', $komputer->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nama">Name Items : </label>
                    <input type="text" name="namaBarang" id="nama" class="form-control" value="{{ $komputer->namaBarang }}">
                </div>

                <div class="form-group mb-3">
                    <label for="kode">Code Items : </label>
                    <input type="text" name="kodeBarang" id="kode" class="form-control" value="{{ $komputer->kodeBarang }}">
                </div>

                <div class="form-group mb-3">
                    <label for="jumlah">Amount Items : </label>
                    <input type="text" name="jumlahBarang" id="jumlah" class="form-control" value="{{ $komputer->jumlahBarang }}">
                </div>

                <div class="form-group mb-3">
                    <label for="harga">Price Items : </label>
                    <input type="text" name="hargaBarang" id="harga" class="form-control" value="{{ $komputer->hargaBarang }}">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button class="btn btn-success" style="width: 150px;"> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.insert')
@section('barang', 'Semua Barang')
@section('content')

<div class="wrapper">
    <h1 style="text-align: center;">Crud Data Barang</h1>

    @if (session('success'))
    <div class=" alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="barang/create" class="btn btn-warning mb-3">Tambah Barang</a>

    <!-- table -->

    <table class="table table-striped table-hover">
        <thead>
            <tr class="bg-success text-center text-white">
                <th>Barang</th>
                <th>Jumlah Barang</th>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>

        <tbody>
            @foreach($barang as $produk)
            <tr>
                <td style="width: 200px; text-align:center;">{{ $produk->namaBarang }}</td>
                <td style="width: 450px; text-align:center;">{{ $produk->jumlahBarang }}</td>
                <td style="width: 100px; text-align:center;"><button class="btn btn-warning" style="width: 100px;"><a href="{{ route('barang.edit', $produk->id) }}" style="text-decoration: none; color:#fff;">Edit</a></button></td>
                <form method="POST" action="{{ url('barang', $produk->id ) }}">
                    @csrf
                    @method('DELETE')
                    <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;">Hapus</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
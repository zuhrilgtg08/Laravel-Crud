@extends('layouts.insert')
@section('barang', 'Semua Barang')
@section('content')

<div class="wrapper">
    <h1 style="text-align: center;">Data Barang</h1>

    @if (session('success'))
    <div class=" alert alert-danger">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="barang/create" class="btn btn-warning mb-3">Tambah Barang</a>

    <!-- modal -->


    <!-- table -->
    <table class="table table-striped display" id="table_id">
        <thead>
            <tr class="bg-success text-center text-white">
                <th>Barang</th>
                <th>Jumlah Barang</th>
                <th>Edit Data</th>
                <th>Hapus Data</th>
            </tr>
        </thead>

        <tbody>
            @foreach($barang as $produk)
            <tr>
                <td style="width: 200px; text-align:center;">{{ $produk->namaBarang }}</td>
                <td style="width: 450px; text-align:center;">{{ $produk->jumlahBarang }}</td>
                <td style="width: 100px; text-align:center;"><button class="btn btn-warning" style="width: 100px;"><a href="{{ route('barang.edit', $produk->id) }}" style="text-decoration: none; color:#fff;">Edit</a></button></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>

                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Hapus Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                </div>

                                    <div class="modal-body">
                                        <p>Yakin Ingin hapus data ini ? </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('barang', $produk->id ) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" style="width: 100px;">Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr class="bg-success text-center text-white">
                <th>Barang</th>
                <th>Jumlah Barang</th>
                <th>Edit Data</th>
                <th>Hapus Data</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
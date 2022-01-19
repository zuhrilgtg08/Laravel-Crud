@extends('layouts.insert')
@section('title', 'Data Kelas')
@section('content')

<div class="wrapper">
    <h1 class="text-center">Tabel Data Kelas</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- tombol -->
    <a href="kelas/create" class="btn btn-warning m-3 float-right">Tambah Kelas</a>

    <!-- table -->

    <table class="table table-striped display" id="table_id">
        <thead class="text-center">
            <tr class="text-light bg-info">
                <th>Nama Kelas</th>
                <th>Nomor Kelas</th>
                <th>Wali Kelas</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kelass as $kls)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $kls->nama_kelas}}</td>
                <td style="width: 400px; text-align:center; color:#111;">{{ $kls->nomor_kelas }}</td>
                <td style="width: 250px; text-align:center; color:#111;">{{ $kls->wali_kelas }}</td>
                <td style="width: 50px; text-align:center; color:#111;"><button class="btn btn-success" style="width: 100px;"><a href="{{ route('kelas.edit', $kls->id) }}" class="text-light text-capitalize" style="text-decoration: none;">Edit</a></button></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>

                {{-- modal --}}
                <div class="modal" tabindex="-1" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Delete Data Kelas</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Are you sure Delete Your data ?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('kelas', $kls->id ) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" style="width: 100px;">Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
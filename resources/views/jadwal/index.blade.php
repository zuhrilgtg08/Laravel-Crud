@extends('layouts.insert')
@section('title', 'Tabel Jadwal')
@section('content')
<div class="row">
    <div class="container">
        <div class="text-center">
            <h2 class="fw fw-normal">Tabel Jadwal</h2>
        </div>
        <div class="mr-3 my-2">
            <a class="btn btn-warning" href="{{ route('jadwal.create') }}">Buat Jadwal Baru</a>
        </div>
    </div>
</div>

{{-- alert --}}
@if ($buku = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $buku }}</p>
</div>
@endif

        <table class="table table-striped">
                <tr class="text-center bg-success text-white">
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Nama Kelas</th>
                    <th>Nama Ruangan</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th colspan="2">Ubah Jadwal</th>
                </tr>

            @php
                $no = 1;
            @endphp
            <tbody class="text-center">
                @foreach ($data as $dat)
                    <tr>
                        <td style="color: #111;">{{ $no++ }}</td>
                        <td style="color: #111;">{{ $dat->nama_guru}}</td>
                        <td style="color: #111;">{{ $dat->nama_kelas }}</td>
                        <td style="color: #111;">{{ $dat->nama_ruangan }}</td>
                        <td style="color: #111;">{{ $dat->mulai}} - {{ $dat->akhir }}</td>
                        <td style="color: #111;">{{ $dat->tanggal }}</td>
                        <td>
                            <form action="{{ route('jadwal.destroy',$dat->id) }}" method="POST">


                                <a class="btn btn-primary" style="width:100px;" href="{{ route('jadwal.edit',$dat->id) }}">Ubah</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger" style="width:100px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
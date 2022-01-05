@extends('layouts.apk')
@section('title', 'Data Guru')

@section('content')
<div class="row">
    <div class="container">
        <div class="text-center">
            <h2 class="fw fw-normal">Tabel Data Guru</h2>
        </div>
        <div class="mr-3 my-2">
            <a class="btn btn-success" href="{{ route('guru.create') }}"> Tambah Data Guru Baru</a>
        </div>
    </div>
</div>

@if ($teacher = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $teacher }}</p>
</div>
@endif

<table class="table table-striped">

    <tr class="text-center bg-info text-white fw-normal">
        <th>No</th>
        <th>Nip</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th width="250px">Edit Data</th>
    </tr>
    @php
    $no = 1;
    @endphp
    @foreach ($guru as $g)
    <tr class="text-center">
        <td style="color: #111;">{{ $no++ }}</td>
        <td style="color: #111;">{{ $g->nip }}</td>
        <td style="color: #111;">{{ $g->nama_guru }}</td>
        <td style="color: #111;">{{ $g->mata_pelajaran }}</td>
        <td>
            <form action="{{ route('guru.destroy',$g->id) }}" method="POST">


                <a class="btn btn-primary" style="width:100px;" href="{{ route('guru.edit',$g->id) }}">Ubah</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" style="width:100px;">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection

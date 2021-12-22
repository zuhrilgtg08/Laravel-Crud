@extends('layouts.insert')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2 class="text-center">Crud Data Siswa</h2>
        </div>
        <div class="float-left my-2">
            <a class="btn btn-success" href="{{ route('siswa.create') }}"> Buat Data Siswa Baru</a>
        </div>
    </div>
</div>

@if ($pesan = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $pesan }}</p>
</div>
@endif
<table class="table table-striped">

    <tr class="text-center bg-primary text-light">
        <th>No</th>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Jurusan</th>
        <th width="280px">Edit Data Siswa</th>
    </tr>
    @php
    $x = 1;
    @endphp
    @foreach ($siswa as $mhs)
    <tr class="text-center">
        <td>{{ $x++ }}</td>
        <td>{{ $mhs->nis }}</td>
        <td>{{ $mhs->nama_siswa }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>
            <form action="{{ route('siswa.destroy',$mhs->id) }}" method="POST">


                <a class="btn btn-primary" href="{{ route('siswa.edit',$mhs->id) }}" style="width: 100px;">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger ml-3" style="width:100px;">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
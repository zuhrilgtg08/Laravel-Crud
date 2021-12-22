@extends('layouts.apk')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2 class="text-center">Crud Data Guru</h2>
        </div>
        <div class="float-left my-2">
            <a class="btn btn-success" href="{{ route('guru.create') }}"> Buat Data Guru Baru</a>
        </div>
    </div>
</div>

@if ($teacher = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $teacher }}</p>
</div>
@endif
<table class="table table-striped">

    <tr class="text-center bg-info text-light">
        <th>No</th>
        <th>Nip</th>
        <th>Nama Guru</th>
        <th>Mata Pelajaran</th>
        <th width="250px">Edit</th>
    </tr>
    @php
    $no = 1;
    @endphp
    @foreach ($guru as $g)
    <tr class="text-center">
        <td>{{ $no++ }}</td>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->nama_guru }}</td>
        <td>{{ $g->mata_pelajaran }}</td>
        <td>
            <form action="{{ route('guru.destroy',$g->id) }}" method="POST">


                <a class="btn btn-primary" style="width:100px;" href="{{ route('guru.edit',$g->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" style="width:100px;">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
@extends('layouts.apk')
@section('title', 'Form Multiple')
@section('content')
    <div class="row">
        <div class="container">
            <div class="text-center">
                <h2 class="fw fw-normal">Multiple Form</h2>
            </div>
        </div>
    </div>

    @if ($forum = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $forum }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <tr class="text-center bg-primary text-white fw-normal">
            <th>No</th>
            <th>Nama User</th>
            <th>Email User</th>
            <th width="250px">Edit Form</th>
        </tr>
        @php
            $no = 1;
        @endphp

        @foreach ($form as $item)
            <tr class="text-center">
                <td style="color: #111;">{{ $no++ }}</td>
                <td style="color: #111;">{{ $item->name }}</td>
                <td style="color: #111;">{{ $item->email }}</td>
                <td>
                    <form action="{{ route('form.destroy',$item->id) }}" method="POST">


                    <a class="btn btn-primary" style="width:100px;" href="{{ route('form.edit',$item->id) }}">Ubah</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" style="width:100px;">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
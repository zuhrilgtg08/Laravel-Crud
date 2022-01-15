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

    <table class="table table-striped display" id="table_id">
        <thead>
            <tr class="text-center bg-primary text-white fw-normal">
                <th>No</th>
                <th>Nama User</th>
                <th>Email User</th>
                <th width="100px">Edit</th>
                <th width="100px">Delete</th>
            </tr>
        </thead>
        
        @php
            $no = 1;
        @endphp

        <tbody>
            @foreach ($form as $item)
                <tr class="text-center">
                    <td style="color: #111;">{{ $no++ }}</td>
                    <td style="color: #111;">{{ $item->name }}</td>
                    <td style="color: #111;">{{ $item->email }}</td>
                    <td><a class="btn btn-primary" style="width:100px;" href="{{ route('form.edit',$item->id) }}">Edit</a></td>
                    <td><button type="submit" class="btn btn-danger" style="width:100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>

                    <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Delete Data</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                </div>

                                    <div class="modal-body">
                                        <p>Yakin Ingin hapus data ini ? </p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('form', $item->id ) }}">
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
        
    </table>
@endsection
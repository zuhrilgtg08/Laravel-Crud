@extends('layouts.insert', ['title' => __('Tes'), 'sbMasterDt' => true])
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="text-center">
                <h2 class="text-capitalize fw-normal">tabel data siswa</h2>
        </div>
        <div class="mr-3 my-2 float-right">
            <a class="btn btn-success m-3" href="{{ route('siswa.create') }}">Tambah Data Siswa</a>
        </div>

        @if ($pesan = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $pesan }}</p>
            </div>
        @endif

        <table class="table table-striped display" id="table_id">

    <thead>
        <tr class="text-center bg-primary text-white">
            <th>No</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    
        @php
            $x = 1;
        @endphp
    <tbody>
        @foreach ($siswa as $mhs)
            <tr class="text-center text-dark">
                <td style="color: #111;">{{ $x++ }}</td>
                <td style="color: #111;">{{ $mhs->nis }}</td>
                <td style="color: #111;">{{ $mhs->nama_siswa }}</td>
                <td style="color: #111;">{{ $mhs->jurusan }}</td>
                <td><a class="btn btn-primary" href="{{ route('siswa.edit',$mhs->id) }}" style="width: 100px;">Edit</a></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" data-target="#myModal" data-toggle="modal">Delete</button></td>
                
                <div class="modal" tabindex="-1" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Delete Data Table Siswa</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                </div>

                                    <div class="modal-body">
                                        <p>Are you sure Delete Your data ?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form method="POST" action="{{ url('siswa', $mhs->id ) }}">
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
    </div>
@endsection



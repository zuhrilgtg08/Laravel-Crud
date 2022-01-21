@extends('layouts.master')
@section('title', 'Classroom')
@section('content')

<div class="wrapper">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="h4 mb-0 text-gray-800"> Classroom </h4>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
        </div>

        <div class="container">
            <div class="float-right">
                <a class="btn btn-success mb-4" href="{{ route('kelas.create') }}"><i class="fas fa-plus"></i> Add Data </a>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
    @endif


    <!-- table -->
    <table class="table table-striped display" id="table_id">
        <thead class="text-center">
            <tr class="text-light bg-info">
                <th>Class Name</th>
                <th>Class Number</th>
                <th>Homeroom Teacher</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tfoot>
            <tr class="text-light bg-info">
                <th>Class Name</th>
                <th>Class Number</th>
                <th>Homeroom Teacher</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($kelass as $kls)
            <tr>
                <td style="width: 200px; text-align:center; color:#111;">{{ $kls->nama_kelas}}</td>
                <td style="width: 400px; text-align:center; color:#111;">{{ $kls->nomor_kelas }}</td>
                <td style="width: 250px; text-align:center; color:#111;">{{ $kls->wali_kelas }}</td>
                <td style="width: 50px; text-align:center; color:#111;"><button class="btn btn-primary" style="width: 100px;"><a href="{{ route('kelas.edit', $kls->id) }}" class="text-light text-capitalize" style="text-decoration: none;">Edit</a></button></td>
                <td style="width: 100px"><button class="btn btn-danger" style="width: 100px;" onclick="modal('{{ $kls->id }}')" type="button">Delete</button></td>

            </tr>
            @endforeach

            {{-- modal --}}
            <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Delete Data Class</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure Delete Your data ?</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-danger" href="" id="url">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    function modal(id){
        $('#myModal').modal('show');
        $('#url').attr('href','/kelas/delete/'+id);
    }
</script>
@endsection
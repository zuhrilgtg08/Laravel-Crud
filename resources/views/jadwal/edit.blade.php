@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
<div class="wrapper m-3">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    <!-- tombol -->
    <a href="/jadwal" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

    {{-- jika berhasil --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
            
    {{-- jika gagal --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card">
        <div class="card-body bg-primary text-white">
            <form method="POST" action="{{ url('jadwal', $jadwal->id) }}" class="form-group">
                @csrf
                @method('PUT')
            <div class="mb-3">
                <label for="guru" class="form-label text-capitalize">Teachers Name </label>
                <select name="id_guru" id="guru" class="form-control form-select">
                    <option value="" disabled>Select Teacher : </option>
                        @foreach ($guru as $gur)
                            <option value="{{ $gur->id }}" 
                                @if ($gur->id == $jadwal->id_guru)
                                    selected            
                                @endif> {{ $gur->nama_guru }}
                            </option>                          
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label text-capitalize">Class Name </label>
                <select name="id_kelas" id="kelas" class="form-select form-control">
                    <option value="" disabled>Select Class : </option>
                        @foreach ($kelas as $kel)
                            <option value="{{ $kel->id }}"
                                @if($kel->id == $jadwal->id_kelas)
                                    selected
                                @endif>{{ $kel->nama_kelas }}
                            </option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="ruangan" class="form-label text-capitalize">Rooms Name </label>
                <select name="id_ruangan" id="ruangan" class="form-select form-control">
                    <option value="" disabled>Select Rooms : </option>
                        @foreach ($ruangan as $ruang)
                            <option value="{{ $ruang->id }}" 
                                @if($ruang->id == $jadwal->id_ruangan)
                                    selected
                                @endif>{{ $ruang->nama_ruangan }}
                            </option>
                        @endforeach
                </select>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="input awal" class="col-form-label">Time Start</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input awal" class="form-control" style="width:100px;" name="mulai" value="{{ $jadwal->mulai }}">
                </div>

                <div class="col-auto">
                    <label for="input akhir" class="col-form-label">Time End</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input akhir" class="form-control" style="width:100px;" name="akhir" value="{{ $jadwal->akhir }}">
                </div>


                <div class="col-auto">
                    <label for="input" class="col-form-label">Date</label>
                </div>

                <div class="col-auto">
                    <input type="date" id="input" class="form-control" style="width:350px;" name="tanggal" value="{{ $jadwal->tanggal }}">
                </div>
            </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button type="submit" class="btn btn-success" style="width: 100px;"> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
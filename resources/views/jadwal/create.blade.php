@extends('layouts.apk')

@section('title', 'Tambah Jadwal Baru')
@section('content')
<div class="wrapper">

    <!-- logika if -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

        <!-- jika error maka lakukan foreach -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card m-4">
    <div class="card-header text-center">
        <h2>Buat Jadwal</h2>
    </div>

    {{-- kembali --}}
    <div class="card-body">
            <!-- tombol -->
            <a href="/jadwal" class="btn btn-warning mb-3">Kembali</a>
        <form method="POST" action="{{ url('jadwal') }}" class="row g-3">
                @csrf
            <div class="mb-3">
                <label for="guru" class="form-label text-capitalize">nama guru</label>
                <select name="id_guru" id="guru" class="form-select">
                    <option value="" selected disable>Pilih Guru : </option>
                        @foreach ($guru as $gur)
                            <option value="{{ $gur->id }}">{{ $gur->nama_guru }}</option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label text-capitalize">nama kelas</label>
                <select name="id_kelas" id="kelas" class="form-select">
                    <option value="" selected disable>Daftar Kelas : </option>
                        @foreach ($kelas as $kel)
                            <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="ruangan" class="form-label text-capitalize">nama ruangan</label>
                <select name="id_ruangan" id="ruangan" class="form-select">
                    <option value="" selected disable>Pilih Ruangan : </option>
                        @foreach ($ruangan as $ruang)
                            <option value="{{ $ruang->id }}">{{ $ruang->nama_ruangan }}</option>
                        @endforeach
                </select>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="input awal" class="col-form-label">Jam Mulai</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input awal" class="form-control" style="width:100px;" name="mulai">
                </div>

                <div class="col-auto">
                    <label for="input akhir" class="col-form-label">Jam Akhir</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input akhir" class="form-control" style="width:100px;" name="akhir">
                </div>


                <div class="col-auto">
                    <label for="input" class="col-form-label">Tanggal</label>
                </div>

                <div class="col-auto">
                    <input type="date" id="input" class="form-control" style="width:350px;" name="tanggal">
                </div>
            </div>
        </div>



            <div class="card-footer">
                <button type="submit" class="btn btn-success" style="width: 100px;">Kirim</button>
            </div>
    </form>
</div>

        
@endsection

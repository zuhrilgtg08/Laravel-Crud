@extends('layouts.insert')
@section('title', 'Ubah Jadwal')
@section('content')
    <div class="card m-3">
        <div class="card-header bg-danger">
            <h2 class="text-center text-white">Ubah Jadwal</h2>
        </div>

        <div class="card-body">
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
            <!-- tombol -->
            <a href="/jadwal" class="btn btn-warning mb-3">Kembali</a>

            <form method="POST" action="{{ url('jadwal', $jadwal->id) }}" class="form-group">
                @csrf
                @method('PUT')
            <div class="mb-3">
                <label for="guru" class="form-label text-capitalize text-dark">nama guru</label>
                <select name="id_guru" id="guru" class="form-control form-select">
                    <option value="" disabled>Pilih Guru : </option>
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
                <label for="kelas" class="form-label text-capitalize text-dark">nama kelas</label>
                <select name="id_kelas" id="kelas" class="form-select form-control">
                    <option value="" disabled>Daftar Kelas : </option>
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
                <label for="ruangan" class="form-label text-capitalize text-dark">nama ruangan</label>
                <select name="id_ruangan" id="ruangan" class="form-select form-control">
                    <option value="" disabled>Pilih Ruangan : </option>
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
                    <label for="input awal" class="col-form-label">Jam Mulai</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input awal" class="form-control" style="width:100px;" name="mulai" value="{{ $jadwal->mulai }}">
                </div>

                <div class="col-auto">
                    <label for="input akhir" class="col-form-label">Jam Akhir</label>
                </div>

                <div class="col-auto">
                    <input type="time" id="input akhir" class="form-control" style="width:100px;" name="akhir" value="{{ $jadwal->akhir }}">
                </div>


                <div class="col-auto">
                    <label for="input" class="col-form-label">Tanggal</label>
                </div>

                <div class="col-auto">
                    <input type="date" id="input" class="form-control" style="width:350px;" name="tanggal" value="{{ $jadwal->tanggal }}">
                </div>
            </div>
        </div>

        <div class="card-footer">
                <button type="submit" class="btn btn-success" style="width: 100px;">Simpan</button>
        </form>
        </div>
    </div>
    
@endsection
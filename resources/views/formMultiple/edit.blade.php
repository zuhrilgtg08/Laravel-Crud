@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')
    <div class="card m-3">
        <div class="card-header text-center bg-dark">
            <h5 class="text-white">Ubah Form User</h5>
        </div>

        <div class="card-body">
            {{-- jika berhasil --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
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

            <form method="POST" action="{{ url('form', $form->id) }}">
                @csrf
                @method('PUT')

                <div class="form-outline mb-4">
                    <label for="name" class="md-4 form-label">{{ __('Nama') }}</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ $form->name }}">
                </div>

                <div class="form-outline mb-4">
                    <label for="email" class="md-4 col-form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $form->email }}">
                </div>
        </div>

        <div class="card-footer">
                <button type="submit" class="btn btn-primary text-white">
                    {{ __('Simpan') }}
                </button>
                {{-- kembali --}}
                <a href="/form" class="btn btn-success" style="width:100px;">Kembali</a>
            </form>
        </div>
    </div>

    {{-- reset form password --}}
    <div class="card m-3">
        <div class="card-header text-center bg-dark">
            <h5 class="text-white">Reset Password</h5>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('user/reset', $form->id) }}">
                        @csrf 

                        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                        <div class="row mb-3">
                            <label for="password" class="md-4 form-label">{{ __('Old Password') }}</label>

                            <div class="md-6">
                                <input id="password" type="password" class="form-control" name="old_password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newPassword" class="md-4 form-label">{{ __('New Password') }}</label>

                            <div class="md-6">
                                <input id="newPassword" type="password" class="form-control" name="new_password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="conPassword" class="md-4 form-label">{{ __('Confirm Password') }}</label>

                            <div class="md-6">
                                <input id="conPassword" type="password" class="form-control" name="con_password">
                            </div>
                        </div>
        </div>

        <div class="card-footer">
                <div class="row mb-1">
                    <div class="md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
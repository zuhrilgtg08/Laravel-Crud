@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')

<div class="wrapper m-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Changes Data </h4>
    </div>

    {{-- kembali --}}
    <a href="/form" class="btn btn-warning mb-3"><i class="fas fa-arrow-left"></i> Back </a>

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

    <div class="card mb-5">
        <div class="card-body bg-info text-white">
            <form method="POST" action="{{ url('form', $form->id) }}">
                @csrf
                @method('PUT')

                <div class="form-outline mb-4">
                    <label for="name" class="md-4 form-label">{{ __('Name : ') }}</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ $form->name }}">
                </div>

                <div class="form-outline mb-4">
                    <label for="email" class="md-4 col-form-label">{{ __('E-Mail Address : ') }}</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $form->email }}">
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button type="submit" class="btn btn-primary text-white" style="width:100px;">
                        {{ __('Save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- reset form password --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h4 mb-0 text-gray-800"> Reset Password </h4>
    </div>

    <div class="card">
        <div class="card-body bg-info text-white">
            <form method="POST" action="{{ url('user/reset', $form->id) }}">
                @csrf 
                {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                <div class="mb-3">
                    <label for="password" class="md-4 form-label">{{ __('Old Password : ') }}</label>

                    <div class="md-6">
                        <input id="password" type="password" class="form-control" name="old_password">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="newPassword" class="md-4 form-label">{{ __('New Password : ') }}</label>

                    <div class="md-6">
                        <input id="newPassword" type="password" class="form-control" name="new_password">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="conPassword" class="md-4 form-label">{{ __('Confirm Password : ') }}</label>

                    <div class="md-6">
                        <input id="conPassword" type="password" class="form-control" name="con_password">
                    </div>
                </div>
        </div>

        <div class="card-footer">
                <div class="col-12 text-md-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
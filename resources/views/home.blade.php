@extends('layouts.master')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                {{ __('Anda Berhasil Login Sebagai Admin') }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}






@endsection

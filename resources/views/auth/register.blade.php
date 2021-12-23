@extends('layouts.app')
@section('content')
<section class="vh-100">
    <div class="d-flex align-items-center h-100">
        <div class="container h-90">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <!-- awal card header -->
                        <div class="card-header text-center">{{ __('Register') }}</div>

                        <!-- card body -->
                        <div class="card-body">
                            <h2 class="text-uppercase text-center mb-3">register your account</h2>

                            <!-- awal form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-outline mb-4">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="form-check d-flex justify-content-center mb-1">
                                    <input type="checkbox" class="form-check-input me-2" id="cek">

                                    <label for="cek" class="form-check-label">
                                        I agree all statements in <a href="#!" class="text-body"><u style="color:#6f42c1;">Terms of service</u></a>
                                    </label>

                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg text-light w-50 mb-1">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                                <p class="text-center text-muted">Have already an account? <a href="#!" class="fw-normal"><u>Login here</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div> -->
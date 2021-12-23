@extends('layouts.app')
@section('content')

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- email input -->
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label fs-5 text-light">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label fs-5 text-light">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">

                        <!-- checkBox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-light" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link text-light fw-bold" href="{{ route('password.request') }}" style="text-decoration: none;">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>

                    <!-- submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign in</button>

                    <div class="divider d-flex justify-content-center my-4">
                        <p class="text-center fw-bolder mx-3 mb-0">OR</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block mb-3 w-100" style="background-color: #3b5998;" href="#!" role="button">
                        <li class="fab fa-facebook-f me-2"></li>Continue with Facebook
                    </a>
                    <a class="btn btn-primary btn-lg btn-block w-100" style="background-color: #dd4b39;" href="#!" role="button">
                        <li class="fab fa-google me-2"></li>Continue with Google
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- <div class=" card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">


                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            

                            
                        </div>
                    </div>
    </form>
</div>
</div> -->
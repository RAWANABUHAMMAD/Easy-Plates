@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span>Login</h6>
      </div>
     </div>
    </div>
</section>

<section id="login" class="pt-5 pb-5">
    <div class="container" style="max-width: 900px;">
        <div class="body d-md-flex align-items-center justify-content-between position-relative">
            
            <!-- Image Section -->
            <div class="box-1 mt-md-0 mt-5">
                <img src="assest1/image/60.jpeg" class="img-fluid" alt="Healthy ingredients">
            </div>
            
            <!-- Login Form -->
            <div class="box-2 d-flex flex-column h-100 p-4">
                <div class="mt-3">
                    <p class="mb-1 h-1">Welcome Back</p>
                    <p class="text-muted mb-3">Log in to your account.</p>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="d-flex flex-column">
                            <button type="submit" class="btn w-100" style="background-color:#00a72f; color:white; padding:10px; border-radius:4px;">
                                Log In
                            </button>

                            <!-- Forgot Password -->
                            @if (Route::has('password.request'))
                                <div class="mt-3 text-center">
                                    <a href="{{ route('password.request') }}" class="btn btn-link p-0" style="color:#00a72f;">Forgot Your Password?</a>
                                </div>
                            @endif

                            <!-- Signup Link -->
                            <div class="mt-3 text-center">
                                <p class="mb-0 text-muted">Don't have an account?</p>
                                <a href="{{ route('register') }}" class="btn btn-link p-0" style="color:#00a72f;">Sign up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

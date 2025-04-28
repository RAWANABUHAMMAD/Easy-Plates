@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span>Sign up</h6>
      </div>
     </div>
    </div>
</section>

<section id="signup" class="pt-5 pb-5">
    <div class="container" style="max-width: 900px;">
        <div class="body d-md-flex align-items-center justify-content-between position-relative">
            
            <!-- Image Section -->
            <div class="box-1 mt-md-0 mt-5">
                <img src="assest1/image/60.jpeg" class="img-fluid" alt="Healthy ingredients">
            </div>
            
            <!-- Form Section -->
            <div class="box-2 d-flex flex-column h-100 p-4">
                <div class="mt-3">
                    <p class="mb-1 h-1">Create Account.</p>
                    <p class="text-muted mb-3">Join our community today.</p>
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Full Name -->
                        <div class="mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <input id="phone" type="tel" class="form-control" name="phone" placeholder="Phone Number">
                            <!-- Add validation if you want -->
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="d-flex flex-column">
                            <button type="submit" class="btn w-100" style="background-color:#00a72f; color:white; padding:10px; border-radius:4px;">
                                Sign Up
                            </button>

                            <div class="mt-3 text-center">
                                <p class="mb-0 text-muted">Already have an account?</p>
                                <a href="{{ route('login') }}" class="btn btn-link p-0" style="color:#00a72f;">Log in</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

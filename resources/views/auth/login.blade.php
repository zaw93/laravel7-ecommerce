@extends('layouts.frontend.app')

@section('content')


  <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Login</li>
      </ol>
    </div><!-- End .container -->
  </nav><!-- End .breadcrumb-nav -->

  <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
    style="background-image: url({{ asset('frontend/assets/images/backgrounds/login-bg.jpg') }})">
    <div class="container">
      <div class="form-box">
        <div class="form-tab">
          <h3 class="text-primary text-center border-bottom pb-3">Sign In</h3>
          <div class="tab-content">
            <div id="signin-2">
              <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="email">Email address *</label>
                  <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div><!-- End .form-group -->


                <div class="form-group">
                  <label for="password">Password *</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" required>
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div><!-- End .form-group -->

                <div class="form-footer">
                  <button type="submit" class="btn btn-outline-primary-2">
                    <span>LOG IN</span>
                    <i class="icon-long-arrow-right"></i>
                  </button>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                      {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Remember Me</label>
                  </div><!-- End .custom-checkbox -->

                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">Forgot Your Password?</a>
                  @endif
                </div><!-- End .form-footer -->

              </form>
              <div class="form-choice">
                <p class="text-center">New customer? <a href="{{ route('register') }}">Create your
                    account</a> or Sign in with</p>
                <div class="row">
                  <div class="col-sm-6">
                    <a href="#" class="btn btn-login btn-g">
                      <i class="icon-google"></i>
                      Login With Google
                    </a>
                  </div><!-- End .col-6 -->
                  <div class="col-sm-6">
                    <a href="#" class="btn btn-login btn-f">
                      <i class="icon-facebook-f"></i>
                      Login With Facebook
                    </a>
                  </div><!-- End .col-6 -->
                </div><!-- End .row -->
              </div><!-- End .form-choice -->
            </div><!-- .End .tab-pane -->
          </div><!-- End .tab-content -->
        </div><!-- End .form-tab -->
      </div><!-- End .form-box -->
    </div><!-- End .container -->
  </div><!-- End .login-page section-bg -->

@endsection

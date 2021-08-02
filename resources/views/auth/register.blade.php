@extends('layouts.frontend.app')

@section('content')

  <main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
      </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
      style="background: linear-gradient(rgba(151, 117, 86, 0.65),rgba(151, 117, 86, 0.65)), url({{ asset('frontend/assets/images/backgrounds/login-background.jpg') }}); background-size: cover;">
      <div class="container">
        <div class="form-box">
          <div class="form-tab">
            <h3 class="text-primary text-center border-bottom pb-2">Register</h3>
            <div class="tab-content">
              <div id="register-2">
                <form action="{{ route('register') }}" method="POST">
                  @csrf

                  <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name"
                      value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div><!-- End .form-group -->

                  <div class="form-group">
                    <label for="email">Your email address *</label>
                    <input type="email" class="form-control @error('email') is-invalid  @enderror" id="email" name="email"
                      value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div><!-- End .form-group -->

                  <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" class="form-control @error('password') is-invalid  @enderror" id="password"
                      name="password" required autocomplete="new-password">
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div><!-- End .form-group -->

                  <div class="form-group">
                    <label for="password-confirm">Confirm Password *</label>
                    <input type="password" class="form-control id=" password-confirm" name="password_confirmation"
                      required autocomplete="new-password">
                  </div><!-- End .form-group -->

                  <div class="form-footer">
                    <button type="submit" class="btn btn-outline-primary-2">
                      <span>SIGN UP</span>
                      <i class="icon-long-arrow-right"></i>
                    </button>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                      <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy
                          policy</a> *</label>
                    </div><!-- End .custom-checkbox -->
                  </div><!-- End .form-footer -->
                </form>
                <div class="form-choice">
                  <p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign in here</a> or
                    Sign in with</p>
                  <div class="row">
                    <div class="col-sm-6">
                      <a href="#" class="btn btn-login btn-g">
                        <i class="icon-google"></i>
                        Login With Google
                      </a>
                    </div><!-- End .col-6 -->
                    <div class="col-sm-6">
                      <a href="#" class="btn btn-login  btn-f">
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
  </main><!-- End .main -->

@endsection

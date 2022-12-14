@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 p-0">
            <div class="login-card">
              <div>
                <div><a class="logo" href="{{{ route('register') }}}"><img class="img-fluid for-light" src="../assets/images/logo/logo-1.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main">
                  <form class="theme-form" method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <h4>Sign in to account</h4>
                    <p>Enter your email & password to login</p>
                    <div class="form-group">
                      <label class="col-form-label">Email Address</label>
                      <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com" value="{{ old('personal_email') }}">
                      <span>
                        @error('email')
                            {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Password</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        <span>
                          @error('password')
                              {{ $message }}
                          @enderror
                        </span>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                      <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Remember password</label>
                      </div><a class="link" href="forget-password.html">Forgot password?</a>
                      <div class="text-end mt-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                      </div>
                    </div>
                    <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                    <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
{{-- @section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">

                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection --}}

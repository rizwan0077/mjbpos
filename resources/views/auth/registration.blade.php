@extends('layouts.app')

@section('content')

    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 p-0">
            <div class="login-card">
              <div>
                <div><a class="logo" href="{{ route('register') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo-1.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main">
                  <form class="theme-form" method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <h4>Create your account</h4>
                    <p>Enter your personal details to create account</p>
                    <div class="form-group">
                      <label class="col-form-label pt-0">Your Name</label>
                      <div class="row g-2">
                        <div class="col-12">
                          <input class="form-control" type="text" name="name" required="" placeholder="First name" value="{{ old('name') }}">
                          @error('name')
                                <span class="custom-form-validation"> {{ $message }} </span>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Email Address</label>
                      <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com" value="{{ old('email') }}">
                        @error('email')
                          <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Phone Number</label>
                      <input class="form-control" type="tel" name="personal_phone_number" required="" placeholder="03xxxxxxxxx" value="{{ old('personal_phone_number') }}">
                        @error('personal_phone_number')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">CNIC Number</label>
                      <input class="form-control" type="tel" name="cnic" required="" placeholder="36502xxxxxxxx" value="{{ old('cnic') }}">
                        @error('cnic')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Password</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        @error('password')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                        {{-- <div class="show-hide"><span class="show"></span></div> --}}
                      </div>
                    </div>
                    <br>
                    <h6>Enter Your Business Details</h6>
                    <div class="form-group">
                      <label class="col-form-label">Business Name</label>
                      <input class="form-control" type="text" name="business_name" required="" placeholder="MJBPOS" value="{{ old('business_name') }}">
                        @error('business_name')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Business Email Address</label>
                      <input class="form-control" type="email" name="business_email" required="" placeholder="Test@gmail.com" value="{{ old('business_email') }}">
                        @error('business_email')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Business License Number</label>
                      <input class="form-control" type="tel" name="business_license" required="" placeholder="xxxx" value="{{ old('business_license') }}">
                        @error('business_license')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Business Phone Number</label>
                      <input class="form-control" type="tel" name="business_phone_number" required="" placeholder="03xxxxxxxxx" value="{{ old('business_phone_number') }}">
                        @error('business_phone_number')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3 draggable">
                      <label for="business_type">Business Type</label>
                      <select class="form-control btn-square" id="select-1" name="business_type">
                        <option value="">Select Business Type</option>
                        <option value="grocery">Grocery</option>
                        <option value="cloth">Cloth</option>
                        <option value="shoes">Shoes</option>
                      </select>
                      @error('business_type')
                            <span class="custom-form-validation"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                      <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                      </div>
                      <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                    </div>
                    <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

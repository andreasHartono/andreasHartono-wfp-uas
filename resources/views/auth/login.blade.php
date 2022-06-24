@extends('layouts.auth')
@section('title')
   LOGIN
@endsection
@section('content')
<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
   <div class="card card-plain">
      <div class="card-header pb-0 text-start">
         <h4 class="font-weight-bolder">Sign In</h4>
         <p class="mb-0">Enter your username and password to sign in</p>
      </div>
      <div class="card-body">
         <form role="form" action="{{ url('/login/account') }}" method="POST>
            @csrf
            <div class="mb-3">
               <input type="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" name="username" aria-label="Username">
               @error('username')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
            </div>
            <div class="mb-3">
               <input type="password" class="form-control form-control-lg control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" name="password" id="txtpass">
               @error('password')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
            </div>
            <div class="form-check form-switch">
               <input class="form-check-input" type="checkbox" id="rememberMe" onclick="showPassword()">
               <label class="form-check-label" for="rememberMe">Show Password</label>
            </div>
            <div class="text-center">
               <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
            </div>
         </form>
      </div>
      <div class="card-footer text-center pt-0 px-lg-2 px-1">
         <p class="mb-4 text-sm mx-auto">
            Don't have an account?
            <a href="{{ url('/register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
         </p>
      </div>
   </div>
</div>
@endsection
@section('javascript')
   <script>
      function showPassword() {
         let txtPassword = document.getElementById("txtpass");
         if (txtPassword.type === "password") {
            txtPassword.type = "text";
         } else {
            txtPassword.type = "password";
         }
      }
   </script>
@endsection

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
               <input type="password" class="form-control form-control-lg control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" name="password">
               @error('password')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
            </div>
            <div class="form-check form-switch">
               <input class="form-check-input" type="checkbox" id="rememberMe">
               <label class="form-check-label" for="rememberMe">Remember me</label>
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
{{-- Belum FIX Jangan Di ubah dulu --}}
{{-- <div class="row justify-content-center">
   <div class="col-md-8">
      <div class="mb-4">
         <h3>LOGIN APOTEK U</h3>
         <p class="mb-4">Login Dulu Yuk</p>
      </div>
      <form action="{{ route('login') }}" method="post">
         @csrf
         <div class="form-group mb-3">
            <label for="username">Username</label>
            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>
            @error('username')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror
         </div>
         <div class="form-group mb-4">
            <label for="password">Password</label>
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror
         </div>
         
         <div class="d-flex mb-4 align-items-center">
            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
            <div class="control__indicator"></div>
            </label>
            <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></span> 
         </div>
         <button type="submit" class="btn btn-block btn-primary">LOGIN</button><br/><br/>
         <p>Tidak Punya Akun? <a href="{{ url('/register') }}" class="alert-link">Register</a></p>
      </form>
   </div>
</div> --}}
@endsection

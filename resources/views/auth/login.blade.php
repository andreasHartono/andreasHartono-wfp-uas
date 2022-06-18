@extends('layouts.auth')
@section('title')
   LOGIN
@endsection
@section('content')

{{-- Belum FIX Jangan Di ubah dulu --}}
<div class="row justify-content-center">
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
</div>
@endsection

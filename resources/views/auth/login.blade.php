@extends('layouts.auth')

@section('content')

{{-- <form method="POST" action="{{ route('login') }}">
   @csrf

   <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

      <div class="col-md-6">
         

         
      </div>
   </div>

   <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
        

         
      </div>
   </div>

   <div class="form-group row">
      <div class="col-md-6 offset-md-4">
         <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
            </label>
         </div>
      </div>
   </div>

   <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
         <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
         </button>

         @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
            </a>
         @endif
      </div>
   </div>
</form> --}}
               

{{-- Belum FIX Jangan Di ubah dulu --}}
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="mb-4">
         <h3>LOGIN APOTEK U</h3>
         <p class="mb-4">Login Dulu Yuk</p>
         <p>Tidak Punya Akun? <a href="{{ url('/register') }}">Register</a></p>
      </div>
      <form action="#" method="post">
         <div class="form-group mb-3">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
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
            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
         </div>
         <button type="submit" class="btn btn-block btn-primary">LOGIN</button>
      </form>
   </div>
</div>
@endsection

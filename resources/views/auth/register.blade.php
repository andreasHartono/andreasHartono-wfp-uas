@extends('layouts.auth')
@section('title')
   REGISTER
@endsection
@section('content')

   <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
      <div class="card card-plain">
         <div class="card-header pb-0 text-start">
            <h4 class="font-weight-bolder">Register APOTEK U</h4>
            <p class="mb-0">Please create your APOTEK U Account Here</p>
         </div>
         <div class="card-body">
            <form role="form" action="{{ route('register') }}" method="POST">
               @csrf
               <div class="mb-3">
                  <input type="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" placeholder="Nama" value="{{ old('nama') }}" name="nama" aria-label="nama">
                  @error('nama')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" name="email" aria-label="email">
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <input type="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" name="username" aria-label="Username">
                  @error('username')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <input type="alamat" class="form-control form-control-lg @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}" name="alamat" aria-label="alamat">
                  @error('alamat')
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
               <div class="mb-3">
                  <input type="password" class="form-control form-control-lg control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" autocomplete="new-password">
                  @error('password_confirmation')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                  <label class="col-md-4 col-form-label text-md-right">Sebagai</label>
               </div>
               <div class="form-check mb-3">
                  <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="owner" value="owner">
                  <label class="custom-control-label" for="owner">Pemilik</label>
               </div>
               <div class="form-check mb-3">
                  <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="pegawai" value="pegawai">
                  <label class="custom-control-label" for="pegawai">Karyawan</label>
               </div>
               <div class="form-check mb-3">
                  <input class="form-check-input @error('roles') is-invalid @enderror" type="radio" name="roles" id="member" value="member">
                  <label class="custom-control-label" for="member">Member</label>
               </div>
               @error('roles')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
               <div class="text-center">
                  <button type="submit" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Sign Up</button>
               </div>
            </form>
         </div>
         <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="text-sm mt-3 mb-0">Already have an account? 
               <a href="{{ url('/login') }}" class="text-dark font-weight-bolder">Sign in</a>
            </p>
         </div>
      </div>
   </div>
@endsection

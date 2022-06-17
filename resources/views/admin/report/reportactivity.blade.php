@extends('layouts.argon')
@section('title')
    Welcome
@endsection
@section('header')
    <div class="header-body">
      <div class="row align-items-center py-4">
         <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0">Admin</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
               <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Report Data Pembelian User</li>
               </ol>
            </nav>
         </div>
      </div>
    </div>
@endsection
@section('content')
      <div class="row">
        <div class="col">
            <div class="card">
               <!-- Card header -->
               <div class="card-header border-0">
               <h3 class="mb-0">Report Data Pembelian User</h3>
               </div>
               <!-- Light table -->
               <div class="table-responsive">
                  <table id="default-datatable" class="table dataTable align-items-center table-flush table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>User</th>
                           <th>Tanggal Transaction</th>
                           <th>Total Harga</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody class="list">
                        @foreach ($data as $data)
                           <tr>
                              <td>{{ $data->id }}</td>
                              <td>{{ $data->user->nama }}</td>
                              <td>{{ $data->created_at }}</td>
                              <td>Rp.{{ $data->total_harga }}</td>
                              <td><a href="{{ url('/repordetail/'.$data->id) }}" class="btn btn-outline-default">Lihat Rincian Pembelian</a></td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
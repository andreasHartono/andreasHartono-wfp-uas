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
                  <li class="breadcrumb-item active" aria-current="page">Data Pembeli</li>
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
               <h3 class="mb-0">Data Pembeli</h3>
               </div>
               <!-- Light table -->
               <div class="table-responsive">
                  <table id="default-datatable" class="table dataTable align-items-center table-flush table-hover">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>Username</th>
                           <th>Alamat</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody class="list">
                        @foreach ($data as $data)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $data->nama }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->username }}</td>
                              <td>{{ $data->alamat }}</td>
                              <td>
                                 <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Ubah Pembeli</a>
                                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form method="POST" action="{{ url('/obat/add') }}" enctype="multipart/form-data">
                                       @csrf
                                        <div class="modal-body">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input type="text" value="{{ $data->nama }}" class="form-control" id="nama" placeholder="Masukan Nama Obat" name="nama">
                                              </div>
                                              <div class="form-group">
                                                 <label for="exampleInputEmail1">Email</label><br>
                                                 <input type="text" value="{{ $data->email }}" class="form-control" id="email" placeholder="Masukan Nama Obat" name="nama">
                                               </div>
                                               <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label><br>
                                                <input type="text" value="{{ $data->username }}" class="form-control" id="email" placeholder="Masukan Nama Obat" name="nama">
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat</label><br>
                                                <input name="price" type="text" value="{{ $data->alamat }}" placeholder="Masukan Harga Obat" class="form-control">
                                              </div>
                                              <!--
                                              <div class="form-group">
                                                <label>Sebagai</label>
                                                <select name="kategori_id" class="form-control">
                                                    @if ($data->sebagai == "user")
                                                    <option value="user" selected>User</option>
                                                    <option value="pegawai">Pegawai</option>
                                                    @else
                                                    <option value="user">User</option>
                                                    <option value="pegawai" selected>Pegawai</option> 
                                                    @endif
                                                    
                                                </select>
                                            </div>-->
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Simpan</button> 
                                        </div>
                                       </form>
                                      </div>
                                    </div>
                                  </div>
                                 <a href="" class="btn btn-danger">Hapus Pembeli</a>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
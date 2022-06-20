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
                  <li class="breadcrumb-item active" aria-current="page">Data Kategori Obat</li>
               </ol>
            </nav>
         </div>
      </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@endsection
@section('content')
      <div class="row">
        <div class="col">
            <div class="card">
               <!-- Card header -->
               <div class="card-header border-0">
               <h3 class="mb-0">Data Kategori Obat</h3>
               <div style="margin-top:20px; margin-bottom: 20px"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Kategori Obat</a></div>
               
               <!--Modal-->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" action="{{ url('/kategori/add') }}">
                     @csrf
                      <div class="modal-body">
                           <div class="form-group">
                             <label for="exampleInputEmail1">Nama Kategori</label>
                             <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Kategori" name="nama">
                           </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default">Simpan</button> 
                      </div>
                     </form>
                    </div>
                  </div>
                </div>
                  
               </div>
               <!-- Light table -->
               <div class="table-responsive">
                  <table id="default-datatable" class="table dataTable align-items-center table-flush table-hover table-bordered table-dark">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody class="list">
                        @foreach ($data as $data)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $data->nama }}</td>
                              <td>
                                <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2" style="color: white">Ubah Kategori</a>
                                 <!-- Modal -->
                                 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <form method="POST" action="{{ url('/kategori/update/'.$data->id) }}">
                                          @csrf
                                       <div class="modal-body">
                                          <div class="form-group">
                                             <label for="exampleInputEmail1">Nama Kategori</label>
                                             <input value="{{ $data->nama }}" type="text" class="form-control" id="nama" placeholder="Masukan Nama Kategori" name="nama">
                                           </div>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-info">Simpan</button>
                                       </div>
                                    </form>
                                    </div>
                                    </div>
                                 </div>
                                 <form action="{{ url('/kategori/delete/'.$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                    <button type="submit"  class="btn btn-danger" onclick="if(!confirm('Apakah anda yakin menghapus data {{ $data->nama }}')) return false">Hapus Kategori</button>
                                 </form>                                 
                                {{-- <a href="#" class="btn btn-danger">Hapus Kategori</a> --}}
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
@section('javascript')
   
@endsection
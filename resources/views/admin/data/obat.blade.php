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
                  <li class="breadcrumb-item active" aria-current="page">Data Obat</li>
               </ol>
            </nav>
         </div>
      </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
   @elseif(session('fail'))
   <div class="alert alert-danger">
      {{ session('fail') }}
  </div>
    @endif
@endsection
@section('content')
   <div class="row">
      <div class="col">
         <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
               <h3 class="mb-0">Report Data Obat</h3>
               <div style="margin-top:20px; margin-bottom: 20px">
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Obat</a>
               </div>
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
                                 <label for="exampleInputEmail1">Nama Obat</label>
                                 <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Obat" name="nama">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Deskripsi Obat</label><br>
                                 <textarea name="description" id="" cols="40" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Gambar Obat</label><br>
                                 <input name="image" type="file" class="form-control" id="image">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Harga Obat</label><br>
                                 <input name="price" type="number" placeholder="Masukan Harga Obat" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Kategori</label>
                                 <select name="kategori_id" class="form-control">
                                    <option>Pilih</option>
                                    @foreach ($kategori as $item)
                                       <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button> 
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
               <table id="default-datatable" class="table dataTable align-items-center table-flush table-hover table-striped">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody class="list">
                     @foreach ($data as $data)
                        <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>{{ $data->nama }}</td>
                           <td>{{ $data->deskripsi }}</td>
                           <td><img width="200px" height="100px" src="{{ asset('/images/obat/'.$data->gambar) }}" alt=""></td>
                           <td>Rp.{{ $data->harga }}</td>
                           <td>{{ $data->kategori->nama }}</td>
                           <td>
                              <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">Ubah Obat</a>

                              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Update Data Obat</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <form method="POST" action="{{ url('/obat/add') }}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="modal-body">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Obat</label>
                                                <input type="text" class="form-control" id="nama" value="{{ $data->nama }}" placeholder="Masukan Nama Obat" name="nama">
                                             </div>
                                             <div class="form-group">
                                                   <label for="exampleInputEmail1">Deskripsi Obat</label><br>
                                                   <textarea name="description" id="" cols="40" rows="5">{{ $data->deskripsi }}</textarea>
                                             </div>
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Gambar Obat</label><br>
                                                <input name="image" type="file" value="{{ $data->gambar }}" class="form-control" id="image">
                                             </div>
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Harga Obat</label><br>
                                                <input name="price" value="{{ $data->harga }}" type="number" placeholder="Masukan Harga Obat" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="kategori_id" class="form-control">
                                                      <option>Pilih</option>
                                                      @foreach ($kategori as $item)
                                                         @if ($item->id === $data->kategoriobat_id)
                                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                                         @else
                                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                         @endif
                                                      @endforeach
                                                </select>
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Simpan</button> 
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                               </div>
                               <form action="{{ url('/obat/delete/'.$data->id) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <input type="hidden" value="{{ $data->id }}" name="id">
                                 <button type="submit"  class="btn btn-danger" onclick="if(!confirm('Apakah anda yakin menghapus data {{ $data['nama'] }}')) return false">Hapus Obat</button>
                              </form>
                            </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('javascript')
   <script>
      function getEditForm(id) {
         $.ajax({ 
            type:'POST',
            url: '#',
            data: {
               'token':'<?php echo csrf_token() ?>',
               'id':id
            }, 
            success: function(data) {
               $("#exampleModal2").html(data.msg)
            }
         });
      }
   </script>
@endsection
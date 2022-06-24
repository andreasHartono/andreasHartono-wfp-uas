@extends('layouts.frontend')
@section('section-title')
    Riwayat Transaksi
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
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $data->user->nama }}</td>
                              <td>{{ $data->created_at }}</td>
                              <td>Rp.{{ $data->total_harga }}</td>
                              <td><a style="color: white" href="{{ url('/history/'.$data->id) }}" class="btn btn-outline-default">Lihat Rincian Pembelian</a></td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
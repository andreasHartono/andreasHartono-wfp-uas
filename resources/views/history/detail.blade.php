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
                          <th>Nama Obat</th>
                          <th>Jumlah</th>
                          <th>Harga</th>
                       </tr>
                    </thead>
                    <tbody class="list">
                       @foreach ($data as $d)
                          <tr>
                             <td>{{ $d->id }}</td>
                             <td>{{ $d->obat->nama }}</td>
                             <td>{{ $d->kuantitas }}</td>
                             <td>Rp.{{ $d->obat->harga }}</td>
                          </tr>
                       @endforeach
                    </tbody>
                 </table>
               </div>
            </div>
         </div>
      </div>
@endsection
@extends('layouts.frontend')
@section('section-title')
   List Obat
@endsection
@section('content')
   <!-- Start Single Tab -->
<div class="tab-pane fade show active" id="man" role="tabpanel">
   <div class="tab-single">
      <div class="row">
         @foreach ($obat as $item)
         <div class="col-xl-3 col-lg-4 col-md-4 col-12">
            <div class="single-product">
               <div class="product-img">
                  <a href="#!">
                     <img class="default-img" src="{{ asset('/images/obat/'.$item->gambar) }}" alt="#">
                     <img class="hover-img" src="{{ asset('/images/obat/'.$item->gambar) }}" alt="#">
                  </a>
                  <div class="button-head">
                     <div class="product-action">
                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                     </div>
                     <div class="product-action-2">
                        <a title="Add to cart" href="{{ url('add-to-cart/'.$item->id) }}">Add to cart</a>
                     </div>
                  </div>
               </div>
               <div class="product-content">
                  <h3><a href="#!">{{ $item->nama }}</a></h3>
                  <div class="product-price">
                     <span>Rp{{ $item->harga }}</span>
                  </div>
               </div>
            </div>
         </div> 
         @endforeach

      </div>
   </div>
</div>
@endsection
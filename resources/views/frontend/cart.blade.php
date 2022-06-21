@extends('layouts.frontend')
@section('content')
   <!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{ url('/') }}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{ url('/cart') }}">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
      <?php $total = 0; ?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery table-hover">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT IMAGE</th>
								<th>PRODUCT NAME</th>
								<th class="text-center">PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
							</tr>
						</thead>
						<tbody>
                     @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                           <?php  $total += $details['price'] * $details['quantity']; ?>
                           <tr>
                              <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
                              <td class="product-des" data-title="Description">
                                 <p class="product-name"><a href="#">{{ $details['name'] }}</a></p>
                              </td>
                              <td class="price" data-title="Price"><span>Rp. {{ $details['price'] }},00</span></td>
                              <td class="qty" data-title="Qty">
                                 <input type="number" class="form-control text-center" value="{{ $details['quantity'] }}">
                              </td>
                              <td class="total-amount" data-title="Total"><span>Rp. Rp. {{ $details['price'] * $details['quantity'] }},00</span></td>
                           </tr>
                        @endforeach
                     @endif
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>Rp. {{ $total }},00</span></li>
										<li class="last">You Pay<span>Rp. {{ $total }},00</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn">Checkout</a>
										<a href="{{ url('/') }}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->   
@endsection

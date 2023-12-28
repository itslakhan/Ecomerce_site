@extends('layouts.app')

@section('content')

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
@include('components.sidebar') 

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>	
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>select</th>
				  <th>Price</th>
                  
				</tr>
              </thead>
              <tbody>
				@php $sum = 0; @endphp
				@foreach ($carts as $cart)
				@php $sum = $sum +  $cart->product->price ; @endphp

                <tr>
                  <td> <img width="60" src="{{asset('storage/'.$cart->product->image) }}" alt=""/></td>
                  <td>{{ $cart->product->name }}</td>
				  <td>
					<form action="{{ route('CartDelete', ['id' => $cart->id]) }}" method="POST">
						@csrf
						@method('DELETE')
					
						<div class="input-append">
							<input class="span1" style="max-width:34px" placeholder="{{ $cart->quantity }}" size="16" type="text">
							<button class="btn btn-danger" type="submit">
								<i class="icon-remove icon-white"></i>
							</button>
						</div>
					</form>
				  </td>
                  <td><input type="checkbox" name="select_product[]" cart-id="{{ $cart->id }}"></td>
                  <td>${{ $cart->product->price }}</td>
                  
                </tr>
				@endforeach
				
				
                <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
                  <td> {{ $sum }}</td>
                </tr>
				 
				 <tr>
                  <td colspan="6" style="text-align:right"><strong></strong></td>
                  <td class="label label-important buy_product" style="display:block ; cursor:pointer; "> <strong>Buy </strong></td>
                </tr>
				
				</tbody>
            </table>
		
		
         @push('footer-script')
		 <script >
		 $('.buy_product').on('click',function(){
            var cart_id = [];
			jQuery('input[name="select_product[]"]:checkbox:checked').each(function(i){
			cart_id[id] = $(this).attr('checked');
		});
		if(cart_id.length == 0){
			alert('Please select a product atleast one');

		}else{
			$.ajax({
				url:'{{ route("product_boking") }}',
				type:'post',
				data:{
				cart_id:cart_id,
				_token:'{{ csrf_token() }}'
				},
                success: function(data) {
					location.reload();
				}
			});
		}
		 });
	    </script>
		 @endpush
@endsection
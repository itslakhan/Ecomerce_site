@extends('layouts.app')
@section('content')
  

<body>
	<div id="carouselBlk">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <div class="container">
				<a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
				<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
			  </div>
			  </div>
			  <div class="item">
			  <div class="container">
				<a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
					<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
			  </div>
			  </div>
			  <div class="item">
			  <div class="container">
				<a href="register.html"><img src="themes/images/carousel/3.png" alt=""/></a>
				<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				
			  </div>
			  </div>
			   <div class="item">
			   <div class="container">
				<a href="register.html"><img src="themes/images/carousel/4.png" alt=""/></a>
				<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
			   
			  </div>
			  </div>
			   <div class="item">
			   <div class="container">
				<a href="register.html"><img src="themes/images/carousel/5.png" alt=""/></a>
				<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			  </div>
			  </div>
			   <div class="item">
			   <div class="container">
				<a href="register.html"><img src="themes/images/carousel/6.png" alt=""/></a>
				<div class="carousel-caption">
					  <h4>Second Thumbnail label</h4>
					  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
			  </div>
			  </div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		  </div> 
	</div>
	<div id="mainBody">
		<div class="container">
		<div class="row">
	<!-- Sidebar ================================================== -->
		   @include('components.sidebar') 
	<!-- Sidebar end=============================================== -->
			<div class="span9">		
				<div class="well well-small">
				<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
				<div class="row-fluid">
				<div id="featured" class="carousel slide">
				<div class="carousel-inner">
					@php $i=0; @endphp
                  @foreach ($products->chunk(4) as $product)
					  
				  <div class="item @if($i==0) active @endif">
					@php $i=1 ; @endphp
				  <ul class="thumbnails">
                   @foreach ($product as $value)
					<li class="span3">
					  <div class="thumbnail">
					  <i class="tag"></i>
						<a href="{{ route('productView', $value->id) }}"><img src="{{ asset('storage/'. $value->image) }}" alt=""></a>
						<div class="caption">
						  <h5>{{ $value->name }}</h5>
						  <h4><a class="btn" href="{{ route('productView', $value->id) }}">VIEW</a> <span class="pull-right">{{ $value->price }}</span></h4>
						</div>
					  </div>
					</li>
					 @endforeach
				  </ul>
				  </div>
				  @endforeach
				   
				  </div>
				  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
				  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
				  </div>
				  </div>
			</div>
			<h4>Latest Products </h4>
				  <ul class="thumbnails">
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						 
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						 <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
					<li class="span3">
					  <div class="thumbnail">
						<a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
						<div class="caption">
						  <h5>Product name</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
						</div>
					  </div>
					</li>
				  </ul>	
	
			</div>
			</div>
		</div>
	</div>
	

	</body>
@endsection

{{-- <div class="span6">
				
	<h3>{{ $products->productDetail->title }} </h3>
	{{-- <h3>qqqqqq</h3> --}}

	{{-- <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small>
	<hr class="soft"/>
	<form class="form-horizontal qtyFrm">
	  <div class="control-group">
		<label class="control-label"><span>${{ $products->price}}</span></label>
		<div class="controls">
		<input type="number" class="span1" placeholder="Qty."/>
		  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
		</div>
	  </div>
	</form> --}}
	
	 {{-- <hr class="soft"/>
	<h4>{{ $products->productDetail->total_items }}</h4>
	<form class="form-horizontal qtyFrm pull-right">
	  <div class="control-group">
		<label class="control-label"><span>Color</span></label>
		<div class="controls">
		  <select class="span2">
			  <option>Black</option>
			  <option>Red</option>
			  <option>Blue</option>
			  <option>Brown</option>
			</select>
		</div>
	  </div>
	</form>
	<hr class="soft clr"/>
	<p>
		{{ $products->productDetail->description }}
	
	</p>
	<a class="btn btn-small pull-right" href="#detail">More Details</a>
	<br class="clr"/>
<a href="#" name="detail"></a>
<hr class="soft"/>
</div>  --}} 
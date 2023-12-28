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
                    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
                    <li class="active">product Details</li>
                </ul>
                <div class="row">
                    <div id="gallery" class="span3">
                        <a href="{{ asset('storage/' . $products->image) }}" title="FinePix S2950 Digital Camera">
                            <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->name }}"
                                style="max-width: 100px; max-height: 200px;">
                        </a>
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <span class="btn"><i class="icon-envelope"></i></span>
                                <span class="btn"><i class="icon-print"></i></span>
                                <span class="btn"><i class="icon-zoom-in"></i></span>
                                <span class="btn"><i class="icon-star"></i></span>
                                <span class="btn"><i class=" icon-thumbs-up"></i></span>
								<span class="btn"><i class="icon-thumbs-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <h3>{{ $products->name }} </h3>
                        <small> {{ $products->productDetail->title }}</small>
                        <hr class="soft" />
                        {{-- <form class="form-horizontal qtyFrm"> --}}
                            <div class="control-group">
                                <label class="control-label"><span>${{ $products->price}}</span></label>
                                <div class="controls">
                                    <form action=" {{ route('CartStore') }}" method="post">
                                        @csrf
                                    <input type="number" class="span1" name="quantity" placeholder="Qty." required />
                                    <input type="hidden" value="{{ $products->id }}" name="product_id" />
                                    @if(Auth::user())
                                    <button type="submit" class="btn btn-large btn-primary pull-right"> Add too cart
                                     <i class=" icon-shopping-cart"></i></button>
                                    @else
                                    <button  class="btn btn-large btn-primary pull-right"> <a href="{{ route('userregister ') }}">Add too cart
                                        <i class=" icon-shopping-cart"></i></a></button>
                                     @endif
                                    </form>
                                </div>
                            </div>
                        {{-- </form> --}}

                        <hr class="soft" />
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
                        <hr class="soft clr" />
                        <p>
                            {{ $products->productDetail->description }}
                        </p>
                        <a class="btn btn-small pull-right" href="#detail">More Details</a>
                        <br class="clr" />
                        <a href="#" name="detail"></a>
                        <hr class="soft" />
                    </div>
					<div class="tab-pane active" id="blockView">
								<ul class="thumbnails">
						@foreach ($related_products as $related_product)

									<li class="span3">
									  <div class="thumbnail">
										<a href="product_details.html"><img src="{{ asset('storage/'.$related_product->image) }}" alt=""/></a>
										<div class="caption">
										  <h5>{{ $related_product->name}}</h5>
										  <p> 
											{{ $related_product->title }} 
										  </p>
										  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
										</div>
									  </div>
									</li>
						@endforeach

						         </ul>
							<hr class="soft"/>
					</div>
				</div>
			</div>
		</div>
	</div>
				<!-- MainBody End ====
@endsection


                                          
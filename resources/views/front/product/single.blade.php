@extends('layouts.front')

@section('content')

<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />

@if ($product)
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
			{{-- <!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3> --}}
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{ asset('imgs/default_1.jpg') }}">
								<div class="thumb-image">
									<img src="{{ asset('imgs/default_1.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="{{ asset('imgs/default_2.jpg') }}">
									<div class="thumb-image">
										<img src="{{ asset('imgs/default_2.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
									</li>
									<li data-thumb="{{ asset('imgs/default_3.jpg') }}">
										<div class="thumb-image">
											<img src="{{ asset('imgs/default_3.jpg') }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
										</li>

									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="col-md-7 single-right-left simpleCart_shelfItem">
							<h3>{{ $product->name }}</h3>
							<div class="rating1">
								<span class="starRating">
									<input id="rating5" type="radio" name="rating" value="5">
									<label for="rating5">5</label>
									<input id="rating4" type="radio" name="rating" value="4">
									<label for="rating4">4</label>
									<input id="rating3" type="radio" name="rating" value="3" checked="">
									<label for="rating3">3</label>
									<input id="rating2" type="radio" name="rating" value="2">
									<label for="rating2">2</label>
									<input id="rating1" type="radio" name="rating" value="1">
									<label for="rating1">1</label>
								</span>
							</div>
							<p>
								@if ($product->is_special)
								<span class="item_price">${{ $product->special_price }}</span>
								<del>${{ $product->price }}</del>
								@else
								<span class="item_price">${{ $product->price }}</span>
								@endif
							</p>
							<div class="single-infoagile">
								<ul>
									<li>
										Cash on Delivery Eligible.
									</li>
									<li>
										Shipping Speed to Delivery.
									</li>
									<li>
										Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
									</li>

								</ul>
							</div>
							<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Dimension</label>
								</p>
								<ul>
									{{ $product->dimension }}
								</ul>
									
							</div>
						<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Details</label>
								</p>
								<ul>
									{{ $product->details }}
								</ul>
									
							</div>
						<div class="product-single-w3l">
								<p>
									<i class="fa fa-hand-o-right" aria-hidden="true"></i>
									<label>Description</label>
								</p>
								<ul>
									{{ $product->description }}
								</ul>
									
							</div>
								<div class="occasion-cart">
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
												<input type="hidden" name="amount" value="950.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!-- //Single Page -->
					@else
					<h1 class="text-center">No product found!</h1>
					@endif



					@endsection

					@section('scripts')
					<!-- imagezoom -->
					<script src="{{ asset('js/imagezoom.js') }}"></script>
					<!-- //imagezoom -->
					<!-- FlexSlider -->
					<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
					<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>


	@endsection
@extends('front.gender_app')


@section('sidecategory')
<div class=" rsidebar span_1_of_left">

					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">Bags </a>
			<ul class="cute">
				<li class="subitem1"><a href="{{url('front/single')}}">Cute Kittens </a></li>
				<li class="subitem2"><a href="{{url('front/single')}}">Strange Stuff </a></li>
				<li class="subitem3"><a href="{{url('front/single')}}">Automatic Fails </a></li>

			</ul>
		</li>
		<li class="item2"><a href="#">Watches </a>
			<ul class="cute">
				<li class="subitem1"><a href="{{url('front/single')}}">Cute Kittens </a></li>
				<li class="subitem2"><a href="{{url('front/single')}}">Strange Stuff </a></li>
				<li class="subitem3"><a href="{{url('front/single')}}">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Mobiles</a>
			<ul class="cute">
				<li class="subitem1"><a href="{{url('front/single')}}">Cute Kittens </a></li>
				<li class="subitem2"><a href="{{url('front/single')}}">Strange Stuff </a></li>
				<li class="subitem3"><a href="{{url('front/single')}}">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Accesories</a>
			<ul class="cute">
				<li class="subitem1"><a href="{{url('front/single')}}">Cute Kittens </a></li>
				<li class="subitem2"><a href="{{url('front/single')}}">Strange Stuff </a></li>
				<li class="subitem3"><a href="{{url('front/single')}}">Automatic Fails</a></li>
			</ul>
		</li>
				
		<li class="item4"><a href="#">Shoes</a>
			<ul class="cute">
				<li class="subitem1"><a href="{{url('front/product')}}">Cute Kittens </a></li>
				<li class="subitem2"><a href="{{url('front/product')}}">Strange Stuff </a></li>
				<li class="subitem3"><a href="{{url('front/product')}}">Automatic Fails </a></li>
			</ul>
		</li>
	</ul>
					</div>
		@stop



		@section('tag')
		<div class="sellers">

							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		
</div>
@stop

@section('bestseller')
<div class="product-bottom">

					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="{{url('front/single')}}"><img class="img-responsive " src="{{url('public/lib/images/p1.jpg')}}" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="{{url('front/single')}}" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="{{url('front/single')}}"><img class="img-responsive " src="{{url('public/lib/images/p2.jpg')}}" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="{{url('front/single')}}" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				
</div>
@stop

@section('discount')

<div class=" per1">

				<a href="{{url('front/single')}}" ><img class="img-responsive" src="{{url('public/lib/images/pro.jpg')}}" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
@stop


@section('womencontent')
@foreach($result as $fetchdata)
<?php dump($fetchdata); ?>
				
				<div class="col-md-3 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="{{url('front/single1')}}/{{$fetchdata->id}}">
							<?php $images = json_decode($fetchdata->image); ?>
							<img src="{{url($images[0])}}" width="70px" height="80px" class="img-responsive" alt=""><div class="pro-grid">
							<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun"> {{$fetchdata->name}} </p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i>{{$fetchdata->price}}</p></a>						
					</div>
					@endforeach

	@stop


	@section('next')
	<div class="clearfix"> </div>
		<nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
	@stop			
@extends('front.app')

@section('topnav')
	<div class="container">

			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
					@if(Auth::check())
						<li ><a href="{{url('mainpage')}}"  >logout</a></li>
						{{Auth::user()->name}}
						@else 
						<li ><a href="{{url('user/login')}}"  >Login</a></li>
						<li><a  href="{{url('user/register')}}"  >Register</a></li>
						
						@endif

					</ul>
					@if(Auth::check())
					<div class="cart box_1">
						<a href="{{url('checkout')}}">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="{{url('public/images/cart.png')}}" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					@endif
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		
</div>
@stop

@section('slider')
<div class="banner">
		<div class="container">
			  <script src="{{url('public/js/responsiveslides.min.js')}}"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="{{url('front/single')}}">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
												<a href="{{url('front/single')}}">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="{{url('front/single')}}">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

@stop

@section('content')
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi.jpg')}}" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>T-Shirt</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="{{url('front/single')}}">Contrary to popular</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi1.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="{{url('front/single')}}">classical Latin</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi2.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="{{url('front/single')}}">undoubtable</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi3.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shirt</span>	
									</h3>
								</div>
				</a>
			<p><a href="{{url('front/single')}}">suffered alteration</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi4.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="{{url('front/single')}}">Content here</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/pi5.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="{{url('front/single')}}">readable content</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	
	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/t1.jpg')}}" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/t2.jpg')}}" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/t3.jpg')}}" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="{{url('front/single')}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('public/images/t4.jpg')}}" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo.png')}}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo1.png')}}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo2.png')}}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo3.png')}}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo4.png')}}" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="{{url('public/images/lo5.png')}}" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
@stop
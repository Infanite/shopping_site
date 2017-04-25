<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<link href="{{url('public/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('public/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{url('public/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="{{url('public/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{url('public/js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{url('public/js/simpleCart.min.js')}}"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li ><a class="lock"  href="{{url('user/login')}}"  >Login</a></li>
						<li>
</li>

					</ul>
					@if(Auth::check())
					<div class="cart box_1">
						<a href="{{url('front/checkout')}}">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="{{url('public/lib/images/cart.png')}}" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					@endif
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="{{url('front/index')}}"><img src="{{url('public/lib/images/logo.png')}}" alt=""></a>	
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="{{url('front/index')}}">Home</a></li>	
				      <li><a class="color1" href="#">Shop</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="{{url('front/products')}}">Accessories</a></li>
										<li><a href="{{url('front/products')}}">Bags</a></li>
										<li><a href="{{url('front/products')}}">Caps & Hats</a></li>
										<li><a href="{{url('front/products')}}">Hoodies & Sweatshirts</a></li>
										<li><a href="{{url('front/products')}}">Jackets & Coats</a></li>
										<li><a href="{{url('front/products')}}">Jeans</a></li>
										<li><a href="{{url('front/products')}}">Jewellery</a></li>
										<li><a href="{{url('front/products')}}">Jumpers & Cardigans</a></li>
										<li><a href="{{url('front/products')}}">Leather Jackets</a></li>
										<li><a href="{{url('front/products')}}">Long Sleeve T-Shirts</a></li>
										<li><a href="{{url('front/products')}}">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="{{url('front/products')}}">Shirts</a></li>
										<li><a href="{{url('front/products')}}">Shoes, Boots & Trainers</a></li>
										<li><a href="{{url('front/products')}}">Shorts</a></li>
										<li><a href="{{url('front/products')}}">Suits & Blazers</a></li>
										<li><a href="{{url('front/products')}}">Sunglasses</a></li>
										<li><a href="{{url('front/products')}}">Sweatpants</a></li>
										<li><a href="{{url('front/products')}}">Swimwear</a></li>
										<li><a href="{{url('front/products')}}">Trousers & Chinos</a></li>
										<li><a href="{{url('front/products')}}">T-Shirts</a></li>
										<li><a href="{{url('front/products')}}">Underwear & Socks</a></li>
										<li><a href="{{url('front/products')}}">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="{{url('front/products')}}">Levis</a></li>
										<li><a href="{{url('front/products')}}">Persol</a></li>
										<li><a href="{{url('front/products')}}">Nike</a></li>
										<li><a href="{{url('front/products')}}">Edwin</a></li>
										<li><a href="{{url('front/products')}}">New Balance</a></li>
										<li><a href="{{url('front/products')}}">Jack & Jones</a></li>
										<li><a href="{{url('front/products')}}">Paul Smith</a></li>
										<li><a href="{{url('front/products')}}">Ray-Ban</a></li>
										<li><a href="{{url('front/products')}}">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">Lookbook</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="{{url('front/products')}}">Accessories</a></li>
										<li><a href="{{url('front/products')}}">Bags</a></li>
										<li><a href="{{url('front/products')}}">Caps & Hats</a></li>
										<li><a href="{{url('front/products')}}">Hoodies & Sweatshirts</a></li>
										<li><a href="{{url('front/products')}}">Jackets & Coats</a></li>
										<li><a href="{{url('front/products')}}">Jeans</a></li>
										<li><a href="{{url('front/products')}}">Jewellery</a></li>
										<li><a href="{{url('front/products')}}">Jumpers & Cardigans</a></li>
										<li><a href="{{url('front/products')}}">Leather Jackets</a></li>
										<li><a href="{{url('front/products')}}">Long Sleeve T-Shirts</a></li>
										<li><a href="{{url('front/products')}}">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="{{url('front/products')}}">Shirts</a></li>
										<li><a href="{{url('front/products')}}">Shoes, Boots & Trainers</a></li>
										<li><a href="{{url('front/products')}}">Shorts</a></li>
										<li><a href="{{url('front/products')}}">Suits & Blazers</a></li>
										<li><a href="{{url('front/products')}}">Sunglasses</a></li>
										<li><a href="{{url('front/products')}}">Sweatpants</a></li>
										<li><a href="{{url('front/products')}}">Swimwear</a></li>
										<li><a href="{{url('front/products')}}">Trousers & Chinos</a></li>
										<li><a href="{{url('front/products')}}">T-Shirts</a></li>
										<li><a href="{{url('front/products')}}">Underwear & Socks</a></li>
										<li><a href="{{url('front/products')}}">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="{{url('front/products')}}">Levis</a></li>
										<li><a href="{{url('front/products')}}">Persol</a></li>
										<li><a href="{{url('front/products')}}">Nike</a></li>
										<li><a href="{{url('front/products')}}">Edwin</a></li>
										<li><a href="{{url('front/products')}}">New Balance</a></li>
										<li><a href="{{url('front/products')}}">Jack & Jones</a></li>
										<li><a href="{{url('front/products')}}">Paul Smith</a></li>
										<li><a href="{{url('front/products')}}">Ray-Ban</a></li>
										<li><a href="{{url('front/products')}}">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="">Blog</a></li>				
				<li><a class="color6" href="">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Register</h1>
		  	  <form method="post" action="{{url('user/register')}}"> 
		  	  <input type="hidden" name="_token" value="{{csrf_token()}}">
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					 <div>
					 	<input type="hidden" name="user_type" value="0">
						<span>Full Name</span>
						<input type="text" name="name" value="{{Request::old('name')}}">
						{{$errors->first('name')}} 
					 </div>
					 <div>
						 <span>Username</span>
						 <input type="text" name="username" value="{{Request::old('username')}}">
						 {{$errors->first('username')}} 
					 </div>
					 <div>
						 <span>Email Address</span>
						 <input type="text" name="email" value="{{Request::old('email')}}">
						 {{$errors->first('email')}} 
					 </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							 <div>
								<span>Password</span>
								<input type="password" name="password" value="{{Request::old('password')}}">
								{{$errors->first('password')}}
							 </div>
							 <div>
								<span>Confirm Password</span>
								<input type="password" name="confirmpassword" value="{{Request::old('confirmpassword')}}">
								{{$errors->first('confirmpassword')}}
							 </div>
							 <input type="submit" value="submit">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="{{url('front/contact')}}">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>Contrary to popular belief</p>

					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2017 New store All Rights Reserved</p>
		</div>
		</div>
</body>
</html>
			
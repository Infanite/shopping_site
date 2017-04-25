<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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
<div class="header">



<!-- - - - - - - - - - - search login checkout vanne header start here - - - - - - - - - - - -  -->
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
					@if(Auth::check())
						<li ><a href="{{url('user/logout')}}"  >Logout</a></li>
					@else
						<li ><a href="{{url('user/login')}}"  >Login</a></li>
						<li><a  href="{{url('user/register')}}"  >Register</a></li>

					@endif
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
<!-- - - - - - - - - - - search login checkout vanne header end  here - - - - - - - - - - - -  -->
		



<!-- - - - - - - - - - - home shop lookbook blog contact vanne header start here - - - - - - - - - - - - - -->
		@yield('mencontent')
<!-- - - - - - - - - - -end here - - - home shop lookbook blog contact vanne header - - - - - - - - - - - - - -->



	</div>



		<div class="product">
			<div class="container">

<!-- - - - - - - start here === left sidebar all content such as categories, tag ,best seller ,discont - - -  - -->			
				<div class="col-md-3 product-price">
					  
				@yield('sidecategory')
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>

		<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
						<a href="{{url('front/single')}}" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						@yield('tag')

		<!---->
				@yield('bestseller')

@yield('discount')
<!-- - - - - - - -end here === left sidebar all content such as categories, tag ,best seller ,discont - - - - - -->					


<!-- fetch data -      - -  - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
				@yield('fetchdata')
<!--  - - - - - - - - - end of fetch data here - - - - - - - - - - - - -->




<!-- - - - - - - - - - - - - - start here === bottom numbering above the bottom footer- - - - - - - -  -->
@yield('next')
<!-- - - - - - - - - - - - - - end here === bottom numbering above the bottom footer- - - - - - - -  -->



		</div>
		
		</div>
			

<!-- - - - - - - - - - - - - -  - - - start here = = = bottom footer content - - - - - - - - - - - - - - - - -->
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
		<p >© 2015 New store All Rights Reserved </p>
		</div>
		</div>
<!-- - - - - - - - - - - - - -  - - - end here = = = bottom footer content - - - - - - - - - - - - - - - - -->



</body>
</html>
			
@extends('front.gender_app')
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
						@if(Auth::check())
						<li ><a href="{{url('user/logout')}}"  >Logout</a></li>
					@else
						<li ><a href="{{url('user/login')}}"  >Login</a></li>
						<li><a  href="{{url('user/register')}}"  >Register</a></li>

					@endif
					</ul>
					<div class="cart box_1">
						<a href="{{url('front/checkout')}}">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="{{url('public/lib/images/cart.png')}}" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
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
				    <li class="grid"><a class="color2" href="#">	Lookbook</a>
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
				<li><a class="color4" href="{{url('front/blog')}}">Blog</a></li>				
				<li><a class="color6" href="{{url('front/contact')}}">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
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
				<!---->
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
<div class=" per1">
				<a href="{{url('front/single')}}" ><img class="img-responsive" src="{{url('public/lib/images/pro.jpg')}}" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				<div class="col-md-9 product1">
				<div class=" bottom-product">
					@foreach($men_products as $product)
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="{{url('front/single1')}}/{{$product->id}}">
							<?php $images = json_decode($product->image); ?>
							<img src="{{url($images[0])}}" width="70px" height="80px" class="img-responsive" alt="">
							<div class="pro-grid">
								<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun"> {{$product->name}} </p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i>{{$product->price}}</p></a>						
					</div>
									
					</div>
					@endforeach	
					
					<div class="clearfix"> </div>
				</div>
				
				</div>
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
		</div>
		
		</div>
			
				<!---->

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
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
		<p >© 2017 New store All Rights Reserved </p>
		</div>
		</div>
</body>
</html>
			
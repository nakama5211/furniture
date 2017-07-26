<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{route('login')}}">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{route('register')}}">Register</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="{{route('home')}}">Furni Store <span>Shop anywhere</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('home')}}" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										@for($i=0;$i<count($collection);$i++)
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>{{$collection[$i]['name']}}</h6>
												@for($j=0;$j<count($type);$j++)
													@if($collection[$i]['id']==$type[$j]['collection'])
													<li><a href="{{route('type',$type[$j]['id'])}}">{{$type[$j]['name']}}</a></li>
													@endif
												@endfor
											</ul>
										</div>
										@endfor
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="">About</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="source/js/classie.js"></script>
						<script src="source/js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
						<!-- <div class="cart box_1">
							<a href="javascript:void(0)">
								<h3><div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>
										 items)
									</div>
									<img src="source/images/bag.png" alt="" />
								</h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
							<div class="clearfix"> </div>
						</div>	 -->
						<div class='shopping_cart_info_holder cart box_1'>
					        <div class="col-xs-12">
					            <a href="#" class="shopping_cart_info" title="Shopping cart item total"> 	<span style='color:#333; font-size:15px;'>(</span>
					            	<span id='items_in_shopping_cart' style='color:#333; font-size:15px;'>
					                	@if(Session::has('cart'))
					                	{{Session('cart')->totalQty}}
					                	@else 
					                	{{0}}
					                	@endif
					                </span>
					                <span style='color:#333; font-size:15px;'>items)</span>        
					                <i class='glyphicon glyphicon-shopping-cart' style='color:#d8703f; font-size:20px;'></i>                
					            </a>
					        </div>
					    </div>

						<!-- Holds shopping cart info with selected items -->
					    <div class="shopping_cart_holder">
					        <a href="#" class="close_shopping_cart_holder" >Close Cart</a>
					        <h2>Shopping Cart</h2>
					        <div id="shopping_cart_output">
					        </div>
					    </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
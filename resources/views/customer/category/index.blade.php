@extends('layouts.cus_master')
@section('addHead')
  <title>Anklets - dJems</title>
@endsection

@section('content')
	    	<!--[if IE 8]>
        <div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>
		<![endif]-->
	<div id="page">
		<div class="header-container">
			<header id="header">
				<div class="banner">
					<div class="container">
						<div class="row">
								
						</div>
					</div>
				</div>
				<div class="nav">
					<div class="container">
						<div class="row">
							<nav>
							<!-- Block user information module NAV  -->
								<div class="header_user_info">
									<a class="login" href="#" rel="nofollow" title="Login to your customer account">
										Sign in
									</a>
								</div>
							    <div class="header_user_info">
							    	<a href="#" title="View my customer account" rel="nofollow">Your Account</a>
							    </div>
							<!-- /Block usmodule NAV -->
								@include('customer.includes.currencyMod')
								@include('customer.includes.languageMod')
								<div id="contact-link">
									<a href="index-5.html" title="Contact us">Contact us</a>
								</div>
								<span class="shop-phone">
									<i class="icon-phone"></i>
							        Call us now: 
							        <strong>0123-456-789</strong>
								</span>
							</nav>
						</div>
					</div>
				</div>
				<div>
					<div class="container">
						<div class="row">
							@include('customer.includes.headerlogo')
							@include('customer.includes.blockCart')
							<!-- Block search module TOP -->
							<div id="search_block_top" class="clearfix">
								<form id="searchbox" method="get" action="https://livedemo00.template-help.com/prestashop_49165/index.php?controller=search">
									<input name="controller" value="search" type="hidden">
									<input name="orderby" value="position" type="hidden">
									<input name="orderway" value="desc" type="hidden">
									<input class="search_query form-control ac_input" id="search_query_top" name="search_query" placeholder="Search" autocomplete="off" type="text">
									<button type="submit" name="submit_search" class="btn btn-default button-search">
										<span>Search</span>
									</button>
								</form>
							</div>
						<!-- /Block search module TOP -->	
						<!-- Menu -->
							@include("customer.includes.mainMenu")
						<!--/ Menu -->



							<!-- Block user information module HEADER -->
							<div id="gear-right2">
								<a id="enable_config" href="#"><i class="icon-cogs icon-2x icon-light"></i></a>
							</div>
							<!-- /Block user information module HEADER -->
						</div>
					</div>
				</div>
			</header>
		</div>
		<div class="columns-container">
			<div id="columns" class="container">
				<div class="breadcrumb clearfix">
					<a class="home" href="#" title="Return to Home">
						<i class="icon-home"></i>
					</a>
					<span class="navigation-pipe">&gt;</span>
					<span class="navigation_page">Anklets</span>
				</div>
				<div class="row">
					<div id="top_column" class="center_column col-xs-12"></div>
				</div>
				<div class="row">
					<div id="left_column" class="column col-xs-12 col-sm-3">
		            	<!-- MODULE Block best sellers -->
						<div id="best-sellers_block_right" class="block products_block">
							<h4 class="title_block">
						    	<a href="#" title="View a top sellers products">Top sellers</a>
						    </h4>
							<div class="block_content" style="">
								<ul class="block_content products-block" style="">
									<li class="clearfix">
										<a href="#" title="" class="products-block-image content_img clearfix">
											<img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/10-tm_small_default.jpg" alt="">
										</a>
										<div class="product-content">
						                	<h5>
						                    	<a class="product-name" href="#" title="">
						                            Red Dichroic Bead Embroidered Earrings
						                        </a>
						                    </h5>
						                    <p class="product-description">Proin venenatis quam non nunc placerat, ac posuere erat suscipit....</p>
						                                            <div class="price-box">
						                            <span class="price">$628.96</span>
						                        </div>
						                                    </div>
									</li>
									<li class="clearfix">
										<a href="#" title="" class="products-block-image content_img clearfix">
											<img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/28-tm_small_default.jpg" alt="">
										</a>
										<div class="product-content">
						                	<h5>
						                    	<a class="product-name" href="#" title="">
						                            Beaded book lover Bracelet
						                        </a>
						                    </h5>
						                    <p class="product-description">Nunc luctus dictum tortor, ac euismod dolor vulputate at. Donec accumsan...</p>
						                                            <div class="price-box">
						                            <span class="price">$928.96</span>
						                        </div>
						                                    </div>
									</li>
								</ul>
								<div class="lnk">
						        	<a href="#" title="All best sellers" class="btn btn-default button button-small">
						            	<span>
						                	All best sellers
						                    <i class="icon-chevron-right right"></i>
						               	</span>
						            </a>
						        </div>
							</div>
						</div>
						<!-- /MODULE Block best sellers -->

						<!-- Block CMS module -->
						<section id="informations_block_left_1" class="block informations_block_left">
							<p class="title_block">
								<a href="#" title="Information">
									Information				</a>
							</p>
							<div class="block_content list-block" style="">
								<ul>
									<li>
										<a href="#" title="Delivery">
											Delivery
										</a>
									</li>
									<li>
										<a href="#" title="Legal Notice">
											Legal Notice
										</a>
									</li>
									<li>
										<a href="#" title="Terms and conditions of use">
											Terms and conditions of use
										</a>
									</li>
									<li>
										<a href="#" title="About us">
											About us
										</a>
									</li>
									<li>
										<a href="#" title="Secure payment">
											Secure payment
										</a>
									</li>
									<li>
										<a href="index-4.html" title="Our stores">
											Our stores
										</a>
									</li>
								</ul>
							</div>
						</section>
					<!-- /Block CMS module -->

						<!-- MODULE Block new products -->
						<div id="new-products_block_right" class="block products_block">
							<h4 class="title_block">
						    	<a href="#" title="New products">New products</a>
						    </h4>
						    <div class="block_content products-block" style="">
						        <ul class="products">
						            <li class="clearfix">
						                <a class="products-block-image" href="#" title=""><img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_small_default.jpg" alt="Crochet necklace - The boa friend"></a>
					                    <div class="product-content">
				                        	<h5>
				                            	<a class="product-name" href="index-7.html" title="Crochet necklace - The boa friend">Crochet necklace - The boa friend</a>
				                            </h5>
					                        <p class="product-description">Donec quis egestas neque. Integer mattis velit nisi, quis adipiscing...</p>
					                        <div class="price-box">
					                            <span class="price">$122.51</span>
					                        </div>
					                    </div>
						            </li>
						            <li class="clearfix">
						                <a class="products-block-image" href="#" title=""><img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/10-tm_small_default.jpg" alt="Red Dichroic Bead Embroidered Earrings"></a>
						                <div class="product-content">
						                  	<h5>
						                       	<a class="product-name" href="#" title="Red Dichroic Bead Embroidered Earrings">Red Dichroic Bead Embroidered Earrings</a>
						                    </h5>
						                   	<p class="product-description">Proin venenatis quam non nunc placerat, ac posuere erat suscipit....</p>
						                    <div class="price-box">
						                        <span class="price">$628.96</span>
						                	</div>
						                </div>
						            </li>
						       	</ul>
						            <div>
						                <a href="#" title="All new products" class="btn btn-default button button-small">
						                	<span>
						                    	All new products
						                    	<i class="icon-chevron-right right"></i>
						                    </span>
						                </a>
						            </div>
						    </div>
						</div>
						<!-- /MODULE Block new products -->

						<!-- MODULE Block specials -->
						<div id="special_block_right" class="block">
							<p class="title_block">
						        <a href="#" title="Specials">
						            Specials
						        </a>
						    </p>
							<div class="block_content products-block" style="">
						    	<ul>
						        	<li class="clearfix">
						            	<a class="products-block-image" href="#">
						                    <img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_small_default.jpg" alt="" title="Crochet necklace - The boa friend">
						                </a>
						                <div class="product-content">
						                	<h5>
						                        <a class="product-name" href="index-7.html" title="Crochet necklace - The boa friend">
						                            Crochet necklace - The boa friend
						                        </a>
						                    </h5>
					                        <p class="product-description">
					                            Donec quis egestas neque. Integer...
					                        </p>
					                        <div class="price-box">
					                    	   	<span class="price special-price">$122.51</span>
					                            <span class="price-percent-reduction">-5%</span>
					                            <span class="old-price">$128.96</span>
					                        </div>
						                </div>
						            </li>
								</ul>
								<div>
									<a class="btn btn-default button button-small" href="#" title="All specials">
						                <span>
						                	All specials
						                    <i class="icon-chevron-right right"></i>
						                </span>
						            </a>
								</div>
						    	</div>
						</div>
						<!-- /MODULE Block specials -->
					</div>
					<!-- #left_column -->
				</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->

			<div class="shadow">
				<div class="container">
					<div class="clearfix">
						@include("customer.includes.fbBlock")
						@include("customer.includes.cmsBlock")
					</div>
				</div>
			</div>
		@include("customer.includes.footer")
	</div><!-- #page -->
<script type="text/javascript">
	var homeslider_loop = true;
	var homeslider_pause = '3000';
	var homeslider_speed = '500';
	var homeslider_width = '1170';

</script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery-1.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery-migrate-1.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_005.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/tools.js"></script>
<!--<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/global.js"></script>-->
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/10-bootstrap.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/15-jquery_002.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/15-jquery.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_004.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/products-comparison.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/ajax-cart.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_002.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_003.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/treeManagement.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blockfacebook.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocknewsletter.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_006.js"></script>
<!--<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocksearch.js"></script>-->
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/homeslider.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/ajax-wishlist.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/hoverIntent.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/superfish-modified.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocktopmenu.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/ga.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/homeslider.js"></script>


@endsection
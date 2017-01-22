@extends('layouts.cus_master')
@section('addHead')
  <title>Dashboard</title>
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
							<nav><!-- Block user information module NAV  -->
								<div class="header_user_info">
									<a class="login" href="#" rel="nofollow" title="Login to your customer account">
										Sign in
									</a>
								</div>
							    <div class="header_user_info">
							    	<a href="#" title="View my customer account" rel="nofollow">Your Account</a>
							    </div>
							<!-- /Block usmodule NAV --><!-- Block currencies module -->
								<div id="currencies-block-top">
									<form id="setCurrency" action="/prestashop_49165/index.php?live_configurator_token=5134f9d82a8ff2b5a439f4ad043837d8&amp;id_shop=1&amp;id_employee=2" method="post">
										<div class="current">
											<input name="id_currency" id="id_currency" value="" type="hidden">
											<input name="SubmitCurrency" value="" type="hidden">
											<span class="cur-label">Currency :</span>
											<strong>USD</strong>																
										</div>
										<ul id="first-currencies" class="currencies_ul toogle_content" style="">
											<li class="selected">
												<a href="#" rel="nofollow" title="Dollar">
													Dollar
												</a>
											</li>
											<li>
												<a href="#" rel="nofollow" title="Euro">
													Euro
												</a>
											</li>
										</ul>
									</form>
								</div>
							<!-- /Block currencies module -->
							<!-- Block languages module -->
								<div id="languages-block-top" class="languages-block">
									<div class="current">
										<span>English</span>
									</div>
									<ul id="first-languages" class="languages-block_ul toogle_content" style="">
										<li class="selected">
											<span>English</span>
										</li>
										<li>
											<a href="#" title="Deutsch (German)">
												<span>Deutsch</span>
											</a>
										</li>
										<li>
											<a href="#" title="Russian">
												<span>Russian</span>
											</a>
										</li>
										<li>
											<a href="#" title="Español (Spanish)">
												<span>Español</span>
											</a>
										</li>
										<li>
											<a href="#" title="Français (French)">
												<span>Français</span>
											</a>
										</li>
									</ul>
								</div>
								<!-- /Block languages module -->
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
							<div id="header_logo">
								<a href="index.html" title="DJems">
									<img class="logo img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/new-store-1398154403.jpg" alt="Handmade" width="306" height="100">
								</a>
							</div>
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
				<div class="row">
					<div id="top_column" class="center_column col-xs-12">
						<!-- Module HomeSlider -->
        			    <div id="homepage-slider">
			        	    <ul id="homeslider" style="max-height:410px;">
                                <li class="homeslider-container">
                        		    <a href="index.php?id_category=5&amp;controller=category" title="sample-1">
                                		<img src="{{env('FILE_PATH_CUSTOM')}}cus/images/sample-1.jpg" width="1170" height="410" alt="sample-1" />
                            		</a>
                                    <div class="homeslider-description"><h2>Quality handcrafted one of <br />a kind creation</h2></div>
                                </li>
                                <li class="homeslider-container">
                            		<a href="index.php?id_category=4&amp;controller=category" title="sample-2">
                            			<img src="{{env('FILE_PATH_CUSTOM')}}cus/images/sample-2.jpg" width="1170" height="410" alt="sample-2" />
                            		</a>
                                	<div class="homeslider-description"><h2>Find a gorgeous collection of <br />jewelry second to none</h2></div>
                                </li>
                                <li class="homeslider-container">
		                            <a href="index.php?id_category=3&amp;controller=category" title="sample-3">
		                                <img src="{{env('FILE_PATH_CUSTOM')}}cus/images/sample-3.jpg" width="1170" height="410" alt="sample-3" />
		                            </a>
                                    <div class="homeslider-description"><h2>Admirable designs of <br />unique handmade jewelry</h2></div>
                                </li>
                        	</ul>
        				</div>
       					<!-- /Module HomeSlider -->

                    	<div id="htmlcontent_top">
        					<ul class="htmlcontent-home clearfix row">
                            	<li class="htmlcontent-item-1 col-xs-4">
                                   	<a href="#" class="item-link" title="">
                                        <img src="{{env('FILE_PATH_CUSTOM')}}cus/images/banner-img6.jpg" class="item-img" title="" alt="" width="270" height="195">
                                        <div class="item-html">
                                			<h3>Excepteur sint occaec<span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</span></h3>
                            			</div>
                                    </a>
                                </li>
	                            <li class="htmlcontent-item-2 col-xs-4">
	                           		<a href="#" class="item-link" title="">
	                                    <img src="{{env('FILE_PATH_CUSTOM')}}cus/images/banner-img7.jpg" class="item-img" title="" alt="" width="270" height="195">
	                                    <div class="item-html">
	                                		<h3>Dolor in reprehende<span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</span></h3>
	                            		</div>
	                                </a>
	                            </li>
	                            <li class="htmlcontent-item-3 col-xs-4">
	                                <a href="#" class="item-link" title="">
	                                    <img src="{{env('FILE_PATH_CUSTOM')}}cus/images/f1a2c12ad95c8647d7540c5b5e526b6cede1d064_banner-img8.jpg" class="item-img" title="" alt="" width="270" height="195">
	                                    <div class="item-html">
	                            		    <h3>velit esse cillum dolor<span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</span>
	                            			</h3>
	                            		</div>
	                                </a>
	                            </li>
	                            <li class="htmlcontent-item-4 col-xs-4">
	                                <a href="#" class="item-link" title="">
	                                    <img src="{{env('FILE_PATH_CUSTOM')}}cus/images/b5c7c067e4b022f01942234a9bceab977f504f4c_banner-img9.jpg" class="item-img" title="" alt="" width="270" height="195">
	                                    <div class="item-html">
	                                		<h3>Fugiat nulla pariatur<span>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</span></h3>
	                            		</div>
                                    </a>
                                </li>
                    		</ul>
    					</div>
					</div>
				</div>
				<div class="row">
					<div id="center_column" class="center_column col-xs-12 col-sm-12">
		            	<ul id="home-page-tabs" class="nav nav-tabs clearfix">
							<li class="active">
								<a data-toggle="tab" href="#" class="blocknewproducts" title="New arrivals">New arrivals</a>
							</li>
							<li>
								<a data-toggle="tab" href="#" class="homefeatured" title="Popular">Popular</a>
							</li>
							<li>
								<a data-toggle="tab" href="#" class="blockbestsellers" title="Best Sellers">Best Sellers</a>
							</li>
						</ul>
						<div class="tab-content">
						    @include('customer.includes.newProducts')
						</div>
					</div><!-- #center_column -->
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
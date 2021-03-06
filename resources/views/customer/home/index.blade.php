@extends('layouts.cus_master')
@section('addHead')
  <title>dJems</title>
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
								@include('customer.includes.usermenu')
							<!-- /Block usmodule NAV -->
								@include('customer.includes.currencyMod')
								@include('customer.includes.languageMod')
								<div id="contact-link">
									<a href="{{ URL::Route('getContactUs') }}" title="Contact us">Contact us</a>
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
				<div class="row">
					<div id="top_column" class="center_column col-xs-12">
						@include('customer.includes.homeSlider')
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
	var CUSTOMIZE_TEXTFIELD = 1;
	var FancyboxI18nClose = 'Close';
	var FancyboxI18nNext = 'Next';
	var FancyboxI18nPrev = 'Previous';
	var homeslider_loop = true;
	var homeslider_pause = '3000';
	var homeslider_speed = '500';
	var homeslider_width = '1170';
	var quickView = true;
	
</script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery-1.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery-migrate-1.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_005.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/tools.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/global.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/10-bootstrap.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/15-jquery_002.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/15-jquery.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_003.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_004.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_002.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_007.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_010.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_008.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_009.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_006.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocktopmenu.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/superfish-modified.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/homeslider.js"></script>


@endsection
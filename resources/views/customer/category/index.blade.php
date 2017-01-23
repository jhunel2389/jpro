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
				@include('customer.includes.cat_breadcrumb')
				<div class="row">
					<div id="top_column" class="center_column col-xs-12"></div>
				</div>
				<div class="row">
					<div id="left_column" class="column col-xs-12 col-sm-3">
		            	@include('customer.includes.sidebar_topseller')
						@include('customer.includes.sidebar_blockcms')
						@include('customer.includes.sidebar_newproduct')
						@include('customer.includes.sidebar_specialProduct')
					</div>
					<!-- #left_column -->

					<!-- #center_column -->
					<div id="center_column" class="center_column col-xs-12 col-sm-9">
    					@include('customer.includes.cat_scene_desc')
    					<h1 class="page-heading product-listing">
				        	<span class="cat-name">Anklets&nbsp;</span>
				            <span class="heading-counter">There are 20 products.</span>
				        </h1>

				        <div class="content_sortPagiBar clearfix">
            				<div class="sortPagiBar clearfix">
							    <ul class="display hidden-xs">
							        <li class="display-title">View:</li>
							        <li id="grid" class="selected">
							            <a rel="nofollow" href="#" title="Grid">
							                <i class="icon-th-large"></i>
							                Grid
							            </a>
							        </li>
							        <li id="list">
							            <a rel="nofollow" href="#" title="List">
							                <i class="icon-th-list"></i>
							                List
							            </a>
							        </li>
							    </ul>

							    <!-- /Sort products -->
							    <form id="productsSortForm" action="#" class="productsSortForm">
							        <div class="select selector1">
							            <label for="selectProductSort">Sort by</label>
							            <div class="selector" id="uniform-selectProductSort" style="width: 192px;">
							            <span style="width: 180px; -moz-user-select: none;">Product Name: A to Z</span>
								            <select id="selectProductSort" class="selectProductSort form-control">
								                <option value="name:asc">--</option>
								                                    <option value="price:asc">Price: Lowest first</option>
								                    <option value="price:desc">Price: Highest first</option>
								                                <option value="name:asc" selected="selected">Product Name: A to Z</option>
								                <option value="name:desc">Product Name: Z to A</option>
								                                    <option value="quantity:desc">In stock</option>
								                                <option value="reference:asc">Reference: Lowest first</option>
								                <option value="reference:desc">Reference: Highest first</option>
								            </select>
							            </div>
							        </div>
							    </form>
							    <!-- /Sort products -->

							    <!-- nbr product/page -->
								<form action="#" method="get" class="nbrItemPage">
									<div class="clearfix selector1">
										<label for="nb_item">Show</label>
											<input name="id_lang" value="1" type="hidden">
											<input name="controller" value="category" type="hidden">
										<div class="selector" id="uniform-nb_item" style="width: 59px;"><span style="width: 47px; -moz-user-select: none;">12</span>
											<select name="n" id="nb_item" class="form-control">
															<option value="12" selected="selected">12</option>
															<option value="24">24</option>
											</select>
										</div>
										<span>per page</span>
									</div>
								</form>
								<!-- /nbr product/page -->	
							</div>

							<div class="top-pagination-content clearfix">
								<!-- Pagination -->
								<div id="pagination" class="pagination clearfix">
					    			<form class="showall" action="https://livedemo00.template-help.com/prestashop_49165/index.php?id_category=3&amp;controller=category&amp;id_lang=1" method="get">
										<div>
											<button type="submit" class="btn btn-default button exclusive-medium">
							                	<span>Show all</span>
							                </button>
											<input name="id_lang" value="1" type="hidden">
											<input name="controller" value="category" type="hidden">
											<input name="n" id="nb_item" class="hidden" value="20">
										</div>
									</form>
								
				        			<ul class="pagination">
										<li id="pagination_previous" class="disabled pagination_previous">
											<span>
												<i class="icon-chevron-left"></i> 
					                            <b>Previous</b>
											</span>
										</li>
										<li class="active current">
											<span>
												<span>1</span>
											</span>
										</li>
										<li>
											<a href="#">
												<span>2</span>
											</a>
										</li>
										<li id="pagination_next" class="pagination_next">
											<a href="#">
												<b>Next</b> <i class="icon-chevron-right"></i>
											</a>
										</li>
									</ul>
								</div>
							    <div class="product-count">
							    	Showing 1 - 12 of 20 items
								</div>
								<!-- /Pagination -->
                			</div>
						</div>

						@include("customer.includes.cat_products")
    				</div>
					<!-- /center_column -->
				</div><!-- .row -->
			</div><!-- #columns -->
		</div><!-- .columns-container -->

		@include("customer.includes.footer")
	</div><!-- #page -->
<script type="text/javascript">
	var CUSTOMIZE_TEXTFIELD = 1;
	var FancyboxI18nClose = 'Close';
	var FancyboxI18nNext = 'Next';
	var FancyboxI18nPrev = 'Previous';
	var added_to_wishlist = 'Added to your wishlist.';
	var ajaxsearch = true;
	var baseDir = 'https://livedemo00.template-help.com/prestashop_49165/';
	var baseUri = 'https://livedemo00.template-help.com/prestashop_49165/index.php';
	var blocklayeredSliderName = {"price":"price","weight":"weight"};
	var blocksearch_type = 'top';
	var comparator_max_item = 2;
	var contentOnly = false;
	var customizationIdMessage = 'Customization #';
	var delete_txt = 'Delete';
	var freeProductTranslation = 'Free!';
	var freeShippingTranslation = 'Free shipping!';
	var generated_date = 1484740873;
	var id_lang = 1;
	var img_dir = 'https://livedemo00.template-help.com/prestashop_49165/themes/theme956/img/';
	var instantsearch = true;
	var isGuest = 0;
	var isLogged = 0;
	var loggin_required = 'You must be logged in to manage your wishlist.';
	var max_item = 'You cannot add more than 2 product(s) to the product comparison';
	var min_item = 'Please select at least one product';
	var mywishlist_url = 'https://livedemo00.template-help.com/prestashop_49165/index.php?fc=module&module=blockwishlist&controller=mywishlist&id_lang=1';
	var nbItemsPerLine = 3;
	var nbItemsPerLineMobile = 3;
	var nbItemsPerLineTablet = 2;
	var page_name = 'category';
	var priceDisplayMethod = 1;
	var priceDisplayPrecision = 2;
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
@endsection
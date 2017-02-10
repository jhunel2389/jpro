@extends('layouts.cus_master')
@section('addHead')
  <title>Sign in - dJems</title>

  <link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}cus/css/contact-form.css" media="all">
  <!-- jQuery 2.2.0 -->
	<script src="{{env('FILE_PATH_CUSTOM')}}plugins/jQuery/jQuery-2.2.0.min.js"></script>
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
				@include('customer.includes.cat_breadcrumb')
				<div class="row">
					<div id="cu_prompt"></div>
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
    					<h1 class="page-heading bottom-indent">Customer - Register</h1>
	    					<form action="{{ URL::Route('cs_message') }}" method="post" class="contact-form-box" enctype="multipart/form-data">
	    						{{ csrf_field() }}
								<fieldset>
	        					<h3 class="page-subheading">Register Customer Account</h3>
						        <div class="clearfix">
						            <div class="col-xs-12 col-md-3"> 
						            	<p class="form-group">
	                    					<label for="email">Email</label>
	                                        <input class="form-control grey" id="email" name="email" type="text" required>
	                                    </p>
	                                    <p class="form-group">
	                    					<label for="password">Password</label>
	                                        <input class="form-control grey" id="passwords" name="passwords" type="password" required>
	                                    </p>

	                                    <p class="checkbox icheck">
								            <label for="chk_remember"></label>
								        	<input type="checkbox" id="chk_remember"> Remember Me
								        </p>
	                            	</div>
	        					</div>
						        <div class="submit">
						            <button type="submit" name="submitLogin" id="submitLogin" onClick="validateCreds(); return false;" class="button btn btn-default button-medium">
						            	<span>
						                	Sign in
						                    <i class="icon-chevron-right right"></i>
						                </span>
						            </button>
								</div>
							</fieldset>
						</form>
    				</div>
					<!-- /center_column -->
				</div><!-- .row -->
			</div><!-- #columns -->
		</div><!-- .columns-container -->

		@include("customer.includes.footer")
	</div><!-- #page -->
<script type="text/javascript">
	$(document).keypress(function(e) {
	    if(e.which == 13) {
	       validateCreds()
	    }
	});
	
	function validateCreds()
    {
        $_token = "{{ csrf_token() }}";
        $email = $("#email").val();
        $pass = $("#passwords").val();
        $source = "client";
        $remember = $("#chk_remember").is(":checked");
        $.post('{{URL::Route('postLogin')}}', { _token: $_token, txtUsername: $email , txtPassword: $pass ,remember: $remember,source: $source}, function(data)
        {
            if(data == 1)
            {
                window.location.replace('{{URL::Route('cusIndex')}}');
            }
            else
            {
            	
            	$("#cu_prompt").append('<div class="alert alert-danger alert-dismissible">\
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
		                '+data.message+'\
		            </div>');
            }
            //console.log(data);
        });
    }

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
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocktopmenu.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/superfish-modified.js"></script>
@endsection
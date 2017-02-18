@extends('layouts.cus_master')
@section('addHead')
  <title>Checkout - dJems</title>
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
					<!-- #center_column -->
					<div id="center_column" class="center_column col-xs-12 col-sm-12">
						<h1 id="cart_title" class="page-heading">Shopping-cart summary
							<span class="heading-counter">Your shopping cart contains:
								<span id="summary_products_quantity">1 product</span>
							</span>
						</h1>
					    <!-- Steps -->
					    <ul class="step clearfix" id="order_step">
					        <li class="step_current  first">
					                            <span><em>01.</em> Summary</span>
					                    </li>
					        <li class="step_todo second">
					                            <span><em>02.</em> Sign in</span>
					                    </li>
					        <li class="step_todo third">
					                            <span><em>03.</em> Address</span>
					                    </li>
					        <li class="step_todo four">
					                            <span><em>04.</em> Shipping</span>
					                    </li>
					        <li id="step_end" class="step_todo last">
					            <span><em>05.</em> Payment</span>
					        </li>
					    </ul>
					    <!-- /Steps -->

						<p style="display:none" id="emptyCartWarning" class="alert alert-warning">Your shopping cart is empty.</p>
						<div class="cart_last_product">
							<div class="cart_last_product_header">
								<div class="left">Last product added</div>
							</div>
							<a class="cart_last_product_img" href="index-7.html">
								<img src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_small_default.jpg" alt="Crochet necklace - The boa friend">
							</a>
							<div class="cart_last_product_content">
								<p class="product-name">
									<a href="index-7.html">
										Crochet necklace - The boa friend
									</a>
								</p>
							</div>
						</div>
				
						<div id="order-detail-content" class="table_block table-responsive">
							<table id="cart_summary" class="table table-bordered">
								<thead>
									<tr>
										<th class="cart_product first_item">Product</th>
										<th class="cart_description item">Description</th>
										<th class="cart_avail item">Avail.</th>
										<th class="cart_unit item">Unit price</th>
										<th class="cart_quantity item">Qty</th>
										<th class="cart_total item">Total</th>
										<th class="cart_delete last_item">&nbsp;</th>
									</tr>
								</thead>
								<tfoot>
									<tr class="cart_total_price">
										<td rowspan="3" colspan="2" id="cart_voucher" class="cart_voucher">
											<form action="#" method="post" id="voucher">
												<fieldset>
													<h4>Vouchers</h4>
													<input class="discount_name form-control" id="discount_name" name="discount_name" type="text">
													<input name="submitDiscount" type="hidden">
													<button type="submit" name="submitAddDiscount" class="button btn btn-default button-small">
					                                   	<span>OK</span>
					                                </button>
												</fieldset>
											</form>
											</td>
												<td colspan="3" class="text-right">Total products</td>
												<td colspan="2" class="price" id="total_product">$122.51</td>
											</tr>
										<tr style="display: none;">
											<td colspan="3" class="text-right">Total gift-wrapping cost:</td>
											<td colspan="2" class="price-discount price" id="total_wrapping">$0.00</td>
										</tr>
										<tr class="cart_total_delivery">
											<td colspan="3" class="text-right">Total shipping</td>
											<td colspan="2" class="price" id="total_shipping">$7.00</td>
										</tr>
										<tr class="cart_total_voucher" style="display:none">
											<td colspan="3" class="text-right">Total vouchers</td>
											<td colspan="2" class="price-discount price" id="total_discount">$0.00</td>
										</tr>
										<tr class="cart_total_price">
											<td colspan="3" class="total_price_container text-right">
												<span>Total</span>
											</td>
										<td colspan="2" class="price" id="total_price_container">
											<span id="total_price">$129.51</span>
										</td>
									</tr>
								</tfoot>

								<tbody>
									<tr id="product_1_0_0_0" class="cart_item last_item first_item address_0 odd">
										<td class="cart_product">
											<a href="index-7.html"><img src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_small_default.jpg" alt="Crochet necklace - The boa friend"></a>
										</td>
										<td class="cart_description">
											<p class="product-name">
					        					<a href="index-7.html">Crochet necklace - The boa friend</a>
					       					</p>
					        			</td>
										<td class="cart_avail">
							        		<span class="label label-success">In Stock
							                                                </span>
							       		</td>
										<td class="cart_unit" data-title="Unit price">
											<span class="price" id="product_price_1_0_0">
											 	<span class="price special-price">$122.51</span>
											   	<span class="price-percent-reduction small">
									            	-5%
									        	</span>
												<span class="old-price">$128.96</span>
											</span>
										</td>

										<td class="cart_quantity text-center">											
											<input value="1" name="quantity_1_0_0_0_hidden" type="hidden">
											<input size="2" autocomplete="off" class="cart_quantity_input form-control grey" value="1" name="quantity_1_0_0_0" type="text">
											<div class="cart_quantity_button clearfix">
												<a rel="nofollow" class="cart_quantity_down btn btn-default button-minus" id="cart_quantity_down_1_0_0_0" href="#" title="Subtract">
													<span>
							                        	<i class="icon-minus"></i>
							                        </span>
												</a>
											    <a rel="nofollow" class="cart_quantity_up btn btn-default button-plus" id="cart_quantity_up_1_0_0_0" href="#" title="Add">
							                    	<span>
							                        	<i class="icon-plus"></i>
							                        </span>
							                    </a>
											</div>
										</td>
										<td class="cart_total" data-title="Total">
											<span class="price" id="total_product_price_1_0_0">
																					$122.51									</span>
										</td>
										<td class="cart_delete text-center" data-title="Delete">
											<div>
												<a rel="nofollow" title="Delete" class="cart_quantity_delete" id="1_0_0_0" href="#">
							                		<i class="icon-trash"></i>
							               		</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div> <!-- end order-detail-content -->
						<div id="HOOK_SHOPPING_CART"></div>
						<p class="cart_navigation clearfix">
							<a href="#" class="button btn btn-default standard-checkout button-medium" title="Proceed to checkout" style="">
								<span>
					            	Proceed to checkout
					                <i class="icon-chevron-right right"></i>
					            </span>
							</a>
							<a href="#" class="button-exclusive btn btn-default" title="Continue shopping">
								<i class="icon-chevron-left"></i>
					        	Continue shopping
							</a>
						</p>
					</div>
					<!-- /center_column -->
				</div><!-- .row -->
			</div><!-- #columns -->
		</div><!-- .columns-container -->

		@include("customer.includes.footer")
	</div><!-- #page -->
	<script type="text/javascript">
		function removeAlert()
		{
			$(".alert").fadeOut(300, function(){ 
			    $(this).remove();
			});
		}
	</script>
	@if(Session::has('success'))

		<script type="text/javascript">
		var message =  "{{Session::get('success')}}";
		//alert(message);
		$("#cu_prompt").append('<div class="alert alert-success alert-dismissible">\
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
		                '+message+'\
		            </div>');

		setTimeout(removeAlert, 3000);
		</script>
	@elseif (Session::has('fail'))
		<script type="text/javascript">
			var message =  "{{Session::get('fail')}}";
			$("#cu_prompt").append('<div class="alert alert-danger alert-dismissible">\
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
		                '+message+'\
		            </div>');
			setTimeout(removeAlert, 3000);
		</script>
	@endif
	
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
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocktopmenu.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/superfish-modified.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/contact-form.js"></script>
@endsection
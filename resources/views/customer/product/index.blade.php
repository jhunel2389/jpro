@extends('layouts.cus_master')
@section('addHead')
  <title>Product - dJems</title>
  <link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}cus/css/product.css" media="all">
<link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}cus/css/print.css" media="print">
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
					<div id="top_column" class="center_column col-xs-12"></div>
				</div>
				<div class="row">

					<!-- #center_column -->
					<div id="center_column" class="center_column col-xs-12 col-sm-12">
    					<div class="primary_block row" itemscope="" itemtype="https://schema.org/Product">
							<div class="container">
								<div class="top-hr"></div>
							</div>
				
        		
        					@include('customer.includes.prod_img')
		
        					<!-- center infos -->
							<div class="pb-center-column col-xs-12  col-sm-4">
								<p class="online_only">Online only</p>	
								<h1 itemprop="name">{{$products['prod_name']}}</h1>
								<p id="product_reference" style="display: none;">
									<label>Model </label>
									<span class="editable" itemprop="sku"></span>
								</p>
								<p id="product_condition">
									<label>Condition </label>
									<span class="editable" itemprop="condition">New</span>
								</p>
								<div id="short_description_block">
									<div id="short_description_content" class="rte align_justify" itemprop="description">
										<p>{{$products['prod_description']}}</p>
									</div>
									<p class="buttons_bottom_block">
										<a href="#" class="button">
											More details
										</a>
									</p><!---->
								</div> <!-- end short_description_block -->
										
								<!-- number of item in stock -->
								<!--<p id="pQuantityAvailable">
									<span id="quantityAvailable">99</span>
									<span style="display: none;" id="quantityAvailableTxt">Item</span>
									<span id="quantityAvailableTxtMultiple">Items</span>
								</p>-->
								
								<!-- availability -->
								<p id="availability_statut" style="display: none;">
									
									<span id="availability_value"></span>				
								</p>

								<p class="warning_inline" id="last_quantities" style="display: none">Warning: Last items in stock!</p>
								<p id="availability_date" style="display: none;">
									<span id="availability_date_label">Availability date:</span>
									<span id="availability_date_value"></span>
								</p>
								
								<!-- Out of stock hook -->
								<div id="oosHook" style="display: none;"></div>

								<p class="socialsharing_product list-inline no-print">
									<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Crochet necklace - The boa friend https://livedemo00.template-help.com/prestashop_49165/index.php?id_product=1&amp;controller=product&amp;id_lang=1');">
										<i class="icon-twitter"></i> Tweet
										<!-- <img src="https://livedemo00.template-help.com/prestashop_49165/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
									</button>
									<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
										<i class="icon-facebook"></i> Share
										<!-- <img src="https://livedemo00.template-help.com/prestashop_49165/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
									</button>
									<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
										<i class="icon-google-plus"></i> Google+
										<!-- <img src="https://livedemo00.template-help.com/prestashop_49165/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
									</button>
									<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click();">
										<i class="icon-pinterest"></i> Pinterest
										<!-- <img src="https://livedemo00.template-help.com/prestashop_49165/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
									</button>
								</p>
   
   								<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
				                    <div class="comments_note clearfix">
				                		<span>Rating&nbsp;</span>
							                <div class="star_content clearfix">
							                    <div class="star star_on"></div>
							                    <div class="star star_on"></div>
							                    <div class="star star_on"></div>
							                    <div class="star"></div>
							                    <div class="star"></div>
							                    <meta itemprop="worstRating" content="0">
							                    <meta itemprop="ratingValue" content="2">
							                    <meta itemprop="bestRating" content="5">
							                    <span class="hidden" itemprop="ratingValue">3</span> 
							                </div>
				           			</div> <!-- .comments_note -->
            
							        <ul class="comments_advices">
							            <li>
						                    <a href="#" class="reviews" title="Read reviews">
						                        Read reviews (<span itemprop="reviewCount">1</span>)
						                    </a>
						                </li>
	                                </ul>
    							</div>
								<!--  /Module ProductComments -->

								<!-- usefull links-->
								<ul id="usefull_link_block" class="clearfix no-print">
									<li class="sendtofriend">
										<a id="send_friend_button" href="#" title="Send to a friend">
											Send to a friend
										</a>
										<div style="display: none;">
											<div id="send_friend_form">
												<h2 class="page-subheading">
													Send to a friend
												</h2>
												<div class="row">
													<div class="product clearfix col-xs-12 col-sm-6">
														<img src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-home_default.jpg" alt="Crochet necklace - The boa friend">
														<div class="product_desc">
															<p class="product_name">
																<strong>Crochet necklace - The boa friend</strong>
															</p>
															<p>Donec quis egestas neque. Integer mattis velit nisi, quis 
									adipiscing augue sollicitudin id. In accumsan, sapien ut accumsan 
									vehicula, tortor risus sollicitudin diam, quis eleifend metus dolor in 
									augue.</p>
														</div>
													</div><!-- .product -->
												</div>
											</div>
										</div>
									</li>
									<li class="print">
										<a href="#">
											Print
										</a>
									</li>
								</ul>
							</div>
							<!-- end center infos-->
		
					        <!-- pb-right-column-->
							<div class="pb-right-column col-xs-12  col-sm-4 col-md-3">
								<!-- add to cart form-->
								<form id="buy_block" action="https://livedemo00.template-help.com/prestashop_49165/index.php?controller=cart" method="post">
									<!-- hidden datas -->
									<p class="hidden">
										<input name="token" value="7558403a26b19e96ab661f8faae26df9" type="hidden">
										<input name="id_product" value="1" id="product_page_product_id" type="hidden">
										<input name="add" value="1" type="hidden">
										<input name="id_product_attribute" id="idCombination" value="" type="hidden">
									</p>
									<div class="box-info-product">
										<div class="content_prices clearfix">
												<!-- prices -->
												<div class="price">
													<p class="our_price_display" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
														<link itemprop="availability" href="https://schema.org/InStock">					
														<span id="our_price_display" itemprop="price">{{$products['prod_price']}}</span>
															<!---->
														<meta itemprop="priceCurrency" content="USD">
													</p>
													<!--<p id="reduction_percent">
														<span id="reduction_percent_display">-5%</span>
													</p>
													<p id="old_price">
														<span id="old_price_display">$128.96</span>
													</p>-->
												</div> <!-- end prices -->
												<p id="reduction_amount" style="display:none">
													<span id="reduction_amount_display"></span>
												</p>
											<div class="clear"></div>
										</div> <!-- end content_prices -->
										
										<div class="product_attributes clearfix">
											<!-- quantity wanted -->
											<p id="quantity_wanted_p">
				                                <label>Quantity:</label>
				                                <input name="qty" id="quantity_wanted" class="text" value="1" style="border: 1px solid rgb(189, 194, 201);" type="text">
				                                <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down">
				                                    <span>
				                                    	<i class="icon-minus"></i>
				                                    </span>
				                                </a>
				                                <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up ">
				                                    <span>
				                                    	<i class="icon-plus"></i>
				                                     </span>
				                                </a>
				                                <span class="clearfix"></span>
				                            </p>
											<!-- minimal quantity wanted -->
											<p id="minimal_quantity_wanted_p" style="display: none; color: rgb(55, 72, 83);">
												This product is not sold individually. You must select at least 
					                            <b id="minimal_quantity_label">1</b> 
					                            quantity for this product.
											</p>
										</div> <!-- end product_attributes -->
										<div class="box-cart-bottom">
											<div>
												<p id="add_to_cart" class="buttons_bottom_block no-print">
													<button type="submit" name="Submit" class="exclusive btn button ajax_add_to_cart_button">
														<span>Add to cart</span>
													</button>
												</p>
											</div>
											<!-- Productpaymentlogos module -->
											<div id="product_payment_logos">
												<div class="box-security">
											    <h5 class="product-heading-h5"></h5> 
											  			<img src="{{env('FILE_PATH_CUSTOM')}}cus/images/payment-logo.png" alt="">
												    </div>
											</div>
											  
											<!-- /Productpaymentlogos module -->
											<p class="buttons_bottom_block no-print">
												<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '1', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow" title="Add to my wishlist">
													Add to my wishlist
												</a>
											</p>
											<strong></strong>
										</div> <!-- end box-cart-bottom -->
									</div> <!-- end box-info-product -->
								</form>
							</div> 
        					<!-- end pb-right-column-->
						</div> <!-- end primary_block -->
				
	        			<!-- More info -->
						<section class="page-product-box">
							<h3 class="page-product-heading">More info</h3>									<!-- full description -->
								<div class="rte"><p>{{$products['prod_description']}}</p></div>
						</section>
						<!--end  More info -->
					
				        <!--HOOK_PRODUCT_TAB -->
						<section class="page-product-box">
							<h3 id="#idTab5" class="idTabHrefShort page-product-heading">Reviews</h3> 
							<div id="idTab5">
								<div id="product_comments_block_tab">
									<div class="comment row">
				                        <div class="comment_author col-sm-2">
				                            <span>Grade&nbsp;</span>
				                            <div class="star_content clearfix">
												<div class="star star_on"></div>
												<div class="star star_on"></div>
												<div class="star star_on"></div>
												<div class="star"></div>
												<div class="star"></div>
											</div>
				                            <div class="comment_author_infos">
				                                <strong>Ljgvlhv k</strong>
				                                <em>05/05/2014</em>
				                            </div>
										</div> <!-- .comment_author -->
									                        
										<div class="comment_details col-sm-10">
				                            <p class="title_block">
				                                <strong>Lorem ipsum dolor</strong>
				                            </p>
										    <p><br>
											Write a review<br>
											Crochet necklace - The boa friend<br>
											<br>
											Crochet necklace - The boa friend<br>
											<br>
											Donec quis egestas neque. Integer mattis velit nisi, quis adipiscing 
											augue sollicitudin id. In accumsan, sapien ut accumsan vehicula, tortor 
											risus sollicitudin diam, quis eleifend metus dolor in augue.<br>
											</p>
										    <ul>
										    </ul>
										</div><!-- .comment_details -->
									</div> <!-- .comment -->
								</div> <!-- #product_comments_block_tab -->
							</div>

							<!-- Fancybox -->
							<div style="display: none;">
								<div id="new_comment_form">
									<form id="id_new_comment_form" action="#">
										<h2 class="page-subheading">
											Write a review
										</h2>
										<div class="row">
											<div class="product clearfix  col-xs-12 col-sm-6">
												<img src="images/2-medium_default.jpg" alt="Crochet necklace - The boa friend">
												<div class="product_desc">
													<p class="product_name">
														<strong>Crochet necklace - The boa friend</strong>
													</p>
													<p>Donec quis egestas neque. Integer mattis velit nisi, quis 
							adipiscing augue sollicitudin id. In accumsan, sapien ut accumsan 
							vehicula, tortor risus sollicitudin diam, quis eleifend metus dolor in 
							augue.</p>
												</div>
											</div>
											<div class="new_comment_form_content col-xs-12 col-sm-6">
												<h2>Write a review</h2>
												<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
													<ul></ul>
												</div>
												<ul id="criterions_list">
							                        <li>
					                                    <label>Quality:</label>
					                                    <div class="star_content">
					                                        <input name="criterion[1]" value="3" type="hidden"><div class="cancel"><a title="Cancel Rating"></a></div><div class="star star_on"><a title="1">1</a></div>
					                                        <div class="star star_on"><a title="2">2</a></div>
					                                        <div class="star star_on"><a title="3">3</a></div>
					                                        <div class="star"><a title="4">4</a></div>
					                                        <div class="star"><a title="5">5</a></div>
					                                    </div>
					                                    <div class="clearfix"></div>
					                                </li>
							                    </ul>
												<label for="comment_title">
													Title: <sup class="required">*</sup>
												</label>
												<input id="comment_title" name="title" type="text">
												<label for="content">
													Comment: <sup class="required">*</sup>
												</label>
												<textarea id="content" name="content"></textarea>
												<div id="new_comment_form_footer">
													<input id="id_product_comment_send" name="id_product" value="1" type="hidden">
													<p class="fl required"><sup>*</sup> Required fields</p>
													<p class="fr">
														<button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small">
															<span>Send</span>
														</button>&nbsp;
														or&nbsp;
														<a class="closefb" href="#" title="Cancel">
															Cancel
														</a>
													</p>
													<div class="clearfix"></div>
												</div> <!-- #new_comment_form_footer -->
											</div>
										</div>
									</form><!-- /end new_comment_form_content -->
								</div>
							</div>
							<!-- End fancybox -->
						</section>
						<!--end HOOK_PRODUCT_TAB -->
		
	        			<!--Accessories -->
						<section class="page-product-box">
							<h3 class="page-product-heading">Accessories</h3>
							<div class="block products_block accessories-block clearfix">
								<div class="block_content">
									<div class="bx-wrapper" style="max-width: 970px; margin: 0px auto;">
										<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 269px;">
											<ul id="bxslider" class="bxslider clearfix" style="width: 715%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
												<li class="item product-box ajax_block_product first_item product_accessories_description" style="float: left; list-style: outside none none; position: relative; margin-right: 20px; width: 178px;">
													<div class="product_desc">
														<a href="#" title="" class="product-image product_image">
															<img class="lazyOwl" src="{{env('FILE_PATH_CUSTOM')}}cus/images/19-home_default.jpg" alt="" width="270" height="270">
														</a>
														<div class="block_description">
															<a href="#" title="More" class="product_description">
																Mi sit amet porta...
															</a>
														</div>
													</div>
													<div class="s_title_block">
														<h5 class="product-name">
															<a title="Harry potter mini painting pendant necklace" href="#">
																Harry potter mini...
															</a>
														</h5>
														<span class="price">
															$394.64
														</span>
													</div>
													<div class="clearfix" style="margin-top:5px">
														<div class="no-print">
															<a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="3" title="Add to cart">
																<span>Add to cart</span>
															</a>
														</div>
													</div>
												</li>
												<li class="item product-box ajax_block_product first_item product_accessories_description" style="float: left; list-style: outside none none; position: relative; margin-right: 20px; width: 178px;">
													<div class="product_desc">
														<a href="#" title="" class="product-image product_image">
															<img class="lazyOwl" src="{{env('FILE_PATH_CUSTOM')}}cus/images/19-home_default.jpg" alt="" width="270" height="270">
														</a>
														<div class="block_description">
															<a href="#" title="More" class="product_description">
																Mi sit amet porta...
															</a>
														</div>
													</div>
													<div class="s_title_block">
														<h5 class="product-name">
															<a title="Harry potter mini painting pendant necklace" href="#">
																Harry potter mini...
															</a>
														</h5>
														<span class="price">
															$394.64
														</span>
													</div>
													<div class="clearfix" style="margin-top:5px">
														<div class="no-print">
															<a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="3" title="Add to cart">
																<span>Add to cart</span>
															</a>
														</div>
													</div>
												</li>
												<li class="item product-box ajax_block_product first_item product_accessories_description" style="float: left; list-style: outside none none; position: relative; margin-right: 20px; width: 178px;">
													<div class="product_desc">
														<a href="#" title="" class="product-image product_image">
															<img class="lazyOwl" src="{{env('FILE_PATH_CUSTOM')}}cus/images/19-home_default.jpg" alt="" width="270" height="270">
														</a>
														<div class="block_description">
															<a href="#" title="More" class="product_description">
																Mi sit amet porta...
															</a>
														</div>
													</div>
													<div class="s_title_block">
														<h5 class="product-name">
															<a title="Harry potter mini painting pendant necklace" href="#">
																Harry potter mini...
															</a>
														</h5>
														<span class="price">
															$394.64
														</span>
													</div>
													<div class="clearfix" style="margin-top:5px">
														<div class="no-print">
															<a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="3" title="Add to cart">
																<span>Add to cart</span>
															</a>
														</div>
													</div>
												</li>
												<li class="item product-box ajax_block_product first_item product_accessories_description" style="float: left; list-style: outside none none; position: relative; margin-right: 20px; width: 178px;">
													<div class="product_desc">
														<a href="#" title="" class="product-image product_image">
															<img class="lazyOwl" src="{{env('FILE_PATH_CUSTOM')}}cus/images/19-home_default.jpg" alt="" width="270" height="270">
														</a>
														<div class="block_description">
															<a href="#" title="More" class="product_description">
																Mi sit amet porta...
															</a>
														</div>
													</div>
													<div class="s_title_block">
														<h5 class="product-name">
															<a title="Harry potter mini painting pendant necklace" href="#">
																Harry potter mini...
															</a>
														</h5>
														<span class="price">
															$394.64
														</span>
													</div>
													<div class="clearfix" style="margin-top:5px">
														<div class="no-print">
															<a class="exclusive button ajax_add_to_cart_button" href="#" data-id-product="3" title="Add to cart">
																<span>Add to cart</span>
															</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="bx-controls bx-has-controls-direction">
											<div class="bx-controls-direction">
												<a class="bx-prev disabled" href="#"></a>
												<a class="bx-next disabled" href="#"></a>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</section>
						<!--end Accessories -->	
	        			<!-- description & features -->
	    				</div>
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
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/blocktopmenu.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/superfish-modified.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/productcomments.js"></script>
<script type="text/javascript" src="{{env('FILE_PATH_CUSTOM')}}cus/js/jquery_010.js"></script>
@endsection
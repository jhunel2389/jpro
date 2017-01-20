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
							<!-- /Block currencies module --><!-- Block languages module -->
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
							<!-- MODULE Block cart -->
							<div class="pull-right pad clearfix">
								<div class="shopping_cart">
									<a href="index-6.html" title="View my shopping cart" rel="nofollow">
										<b>Cart</b>
										<span class="ajax_cart_quantity">1</span>
										<span class="ajax_cart_product_txt">Product</span>
										<span class="ajax_cart_product_txt_s unvisible">Products</span>
										<span class="ajax_cart_total">
											$122.51
										</span>
										<span class="ajax_cart_no_product unvisible">0</span>
									</a>
									<div class="cart_block block exclusive" style="display: none;">
										<div class="block_content">
											<!-- block list of products -->
											<div class="cart_block_list">
												<dl class="products">
													<dt data-id="cart_block_product_1_0_0" class="first_item">
														<a class="cart-images" href="index-7.html" title="Crochet necklace - The boa friend"><img src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_cart_default.jpg" alt="Crochet necklace - The boa friend"></a>
														<div class="cart-info">
															<div class="product-name">
																<span class="quantity-formated">
				                                                	<span class="quantity">1</span>&nbsp;x&nbsp;
				                                                </span>
				                                                <a class="cart_block_product_name" href="index-7.html" title="Crochet necklace - The boa friend">Crochet...</a>
															</div>
															<span class="price">
																$122.51
															</span>
														</div>
														<span class="remove_link">
															<a class="ajax_cart_block_remove_link" href="#" rel="nofollow" title="remove this product from my cart">&nbsp;</a>
														</span>
													</dt>
												<!-- Customizable datas -->
												</dl>
												<p class="cart_block_no_products unvisible">
													No products
												</p>
												<div class="cart-prices">
													<div class="cart-prices-line first-line">
														<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
															$7.00
														</span>
														<span>
															Shipping
														</span>
													</div>
													<div class="cart-prices-line last-line">
														<span class="price cart_block_total ajax_block_cart_total">$129.51</span>
														<span>Total</span>
													</div>
												</div>
												<p class="cart-buttons">
													<a id="button_order_cart" class="btn btn-default button button-small" href="index-6.html" title="Check out" rel="nofollow">
														<span>
															Check out
						                                    <i class="icon-chevron-right right"></i>
														</span>
													</a>
												</p>
											</div>
										</div>
									</div><!-- .cart_block -->
								</div>
							</div>

							<div id="layer_cart">
								<div class="clearfix">
									<div class="layer_cart_product col-xs-12 col-md-6">
										<span class="cross" title="Close window"></span>
										<h2>
											<i class="icon-ok"></i>
							                Product successfully added to your shopping cart
										</h2>
										<div class="product-image-container layer_cart_img"></div>
										<div class="layer_cart_product_info">
											<span id="layer_cart_product_title" class="product-name"></span>
											<span id="layer_cart_product_attributes"></span>
											<div>
												<strong class="dark">Quantity</strong>
												<span id="layer_cart_product_quantity"></span>
											</div>
											<div>
												<strong class="dark">Total</strong>
												<span id="layer_cart_product_price"></span>
											</div>
										</div>
									</div>
									<div class="layer_cart_cart col-xs-12 col-md-6">
										<h2>
											<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
											<span class="ajax_cart_product_txt_s  unvisible">
												There are <span class="ajax_cart_quantity">1</span> items in your cart.
											</span>
											<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
											<span class="ajax_cart_product_txt ">
												There is 1 item in your cart.
											</span>
										</h2>

										<div class="layer_cart_row">
											<strong class="dark">
												Total products
												(tax excl.)
											</strong>
											<span class="ajax_block_products_total">
												$122.51
											</span>
										</div>

										<div class="layer_cart_row">
											<strong class="dark">
												Total shipping&nbsp;(tax excl.)
											</strong>
											<span class="ajax_cart_shipping_cost">
												$7.00
											</span>
										</div>
										<div class="layer_cart_row">	
											<strong class="dark">
												Total
												(tax excl.)
											</strong>
											<span class="ajax_block_cart_total">
												$129.51
											</span>
										</div>
										<div class="button-container">	
											<span class="continue btn btn-default button exclusive-medium" title="Continue shopping">
												<span>
													<i class="icon-chevron-left left"></i>
							                        Continue shopping
												</span>
											</span>
											<a class="btn btn-default button button-medium" href="#" title="Proceed to checkout" rel="nofollow">
												<span>
													Proceed to checkout
							                        <i class="icon-chevron-right right"></i>
												</span>
											</a>	
										</div>
									</div>
								</div>
								<div class="crossseling"></div>
							</div> <!-- #layer_cart -->
							<div class="layer_cart_overlay"></div>

							<!-- /MODULE Block cart --><!-- Block search module TOP -->
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
						<!-- /Block search module TOP -->	<!-- Menu -->
							<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
								<div class="cat-title">Categories</div>
								<ul class="sf-menu clearfix menu-content sf-js-enabled sf-arrows">
									<li class=""><a href="index-1.html" title="Anklets" class="sf-with-ul">Anklets</a><ul style="display: none;" class="submenu-container clearfix first-in-line-xs"><li><a href="#" title="Vestibulum" class="sf-with-ul">Vestibulum</a><ul style="display: none;"><li><a href="#" title="Lorem ipsum dolor">Lorem ipsum dolor</a></li><li><a href="#" title="Sit amet conse">Sit amet conse</a></li><li><a href="#" title="Ctetur adipisicing elit">Ctetur adipisicing elit</a></li><li><a href="#" title="Sed do eiusmod">Sed do eiusmod</a></li><li><a href="#" title="Tempor incididunt ut">Tempor incididunt ut</a></li><li><a href="#" title="Labore et dolore">Labore et dolore</a></li></ul></li><li><a href="#" title="Phasellus" class="sf-with-ul">Phasellus</a><ul style="display: none;"><li><a href="#" title="Lorem ipsum dolor">Lorem ipsum dolor</a></li><li><a href="#" title="Sit amet conse">Sit amet conse</a></li><li><a href="#" title="Ctetur adipisicing elit">Ctetur adipisicing elit</a></li><li><a href="#" title="Sed do eiusmod">Sed do eiusmod</a></li><li><a href="#" title="Tempor incididunt ut">Tempor incididunt ut</a></li><li><a href="#" title="Labore et dolore">Labore et dolore</a></li></ul></li><li><a href="#" title="Vestibulis" class="sf-with-ul">Vestibulis</a><ul style="display: none;"><li><a href="#" title="Lorem ipsum dolor">Lorem ipsum dolor</a></li><li><a href="#" title="Sit amet conse">Sit amet conse</a></li><li><a href="#" title="Ctetur adipisicing elit">Ctetur adipisicing elit</a></li><li><a href="#" title="Sed do eiusmod">Sed do eiusmod</a></li><li><a href="#" title="Tempor incididunt ut">Tempor incididunt ut</a></li><li><a href="#" title="Labore et dolore">Labore et dolore</a></li></ul></li><li><a href="#" title="Suspendisse" class="sf-with-ul">Suspendisse</a><ul style="display: none;"><li><a href="#" title="Lorem ipsum dolor">Lorem ipsum dolor</a></li><li><a href="#" title="Sit amet conse">Sit amet conse</a></li><li><a href="#" title="Ctetur adipisicing elit">Ctetur adipisicing elit</a></li><li><a href="#" title="Sed do eiusmod">Sed do eiusmod</a></li><li><a href="#" title="Tempor incididunt ut">Tempor incididunt ut</a></li><li><a href="#" title="Labore et dolore">Labore et dolore</a></li></ul></li><li id="category-thumbnail"><div><img src="images/3-0_thumb.jpg" alt="Anklets" title="Anklets" class="imgm"></div><div><img src="images/3-1_thumb.jpg" alt="Anklets" title="Anklets" class="imgm"></div><div><img src="images/3-2_thumb.jpg" alt="Anklets" title="Anklets" class="imgm"></div></li></ul></li><li><a href="index-2.html" title="Bracelets">Bracelets</a></li><li><a href="index-3.html" title="Brooches">Brooches</a></li><li><a href="#" title="Earrings">Earrings</a></li><li><a href="#" title="Necklaces">Necklaces</a></li><li><a href="#" title="Pendants">Pendants</a></li><li><a href="#" title="Piercing">Piercing</a></li><li><a href="#" title="Rings">Rings</a></li><li><a href="#" title="Watches">Watches</a></li>
									</ul>
							</div>
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
						    <!-- Products list -->
							<ul id="blocknewproducts" class="product_list grid row blocknewproducts tab-pane active">
                    			<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3">
                					<div class="product-container" itemscope="" itemtype="https://schema.org/Product">
                    					<div class="left-block">
                        					<div class="product-image-container">
                            					<a class="product_img_link" href="index-7.html" title="Crochet necklace - The boa friend" itemprop="url">
                                					<img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_home_default.jpg" alt="Crochet necklace - The boa friend" title="Crochet necklace - The boa friend" itemprop="image">
                            					</a>
                                                <a class="quick-view" href="#" rel="https://livedemo00.template-help.com/prestashop_49165/index.php?id_product=1&amp;controller=product&amp;id_lang=1" title="Quick view">
				                                    <span>Quick view</span>
				                                </a>
                                                <span class="new-box">
                                    				<span class="new-label">New</span>
                                				</span>
                                                <span class="sale-box">
				                                    <span class="sale-label">Sale!</span>
				                                </span>
                                            </div>
                    					</div>
                    					<div class="right-block">
	                        				<h5 itemprop="name">
	                                            <a class="product-name" href="index-7.html" title="Crochet necklace - The boa friend" itemprop="url">
					                                <span class="list-name">Crochet necklace - The boa friend</span>
					                                <span class="grid-name">Crochet necklace - The boa friend</span>
					                            </a>
	                        				</h5>
				                        	<div class="comments_note" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">	
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star"></div>
													<div class="star"></div>
													<meta itemprop="worstRating" content="0">
													<meta itemprop="ratingValue" content="2">
													<meta itemprop="bestRating" content="5">
												</div>
												<span class="nb-comments">1 Review(s)</span>
											</div>
					                        <p class="product-desc" itemprop="description">
					                            <span class="list-desc">Donec quis egestas 
					neque. Integer mattis velit nisi, quis adipiscing augue sollicitudin id.
					 In accumsan, sapien ut accumsan vehicula, tortor risus sollicitudin 
					diam, quis eleifend metus dolor in augue.</span>
					                            <span class="grid-desc">Donec quis egestas neque. Integer...</span>
					                        </p>
	                                        <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="content_price">
	                                            <span itemprop="price" class="price product-price product-price-new">
	                       							$122.51                                
	                                    		</span>
	                                			<meta itemprop="priceCurrency" content="1">
	                                            <span class="old-price product-price">
	                                        		$128.96
	                                    		</span>
	                                            <span class="price-percent-reduction">-5%</span>
	                                       	</div>
	                                       	<div class="button-container">                          
	                                            <a class="button ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" title="Add to cart" data-id-product="1">
	                                            	<span>Add to cart</span>
	                                        	</a>			
	                                            <a itemprop="url" class="button lnk_view btn btn-default" href="#" title="View">
	                                				<span>More</span>
	                            				</a>
	                        				</div>
	                                        <div class="product-flags">
	                                            <span class="online_only">Online only</span>                        
	                                        </div>
	                                        <span itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="availability">
	                                            <span class="available-now">
	                                            	<link itemprop="availability" href="https://schema.org/InStock">In Stock                          
	                                            </span>
	                                        </span>
                                        </div>
                                    </div><!-- .product-container> -->    
            					</li>

        					</ul>
						</div>
					</div><!-- #center_column -->
				</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->

	<div class="shadow"><div class="container"><div class="clearfix"><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="images/D6ZfFsLEB4F.htm" frameborder="0"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f3695094f3f98bc" allowtransparency="true" allowfullscreen="true" scrolling="no" style="display: none;" src="images/ping.htm" frameborder="0"></iframe></div></div></div>
<div id="facebook_block" class="col-xs-4">
	<h4>Follow us on facebook</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/prestashop" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=334341610034299&amp;color_scheme=light&amp;container_width=301&amp;header=false&amp;height=200&amp;href=https%3A%2F%2Fwww.facebook.com%2Fprestashop&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false"><span style="vertical-align: bottom; width: 300px; height: 154px;"><iframe name="f3b7ec536e6b68c" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" style="border: medium none; visibility: visible; width: 300px; height: 154px;" src="images/like_box.htm" class="" width="1000px" height="200px" frameborder="0"></iframe></span></div>
	</div>
</div>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
					<div class="col-xs-6"><h2>Custom Block 1</h2>
<ul>
<li><em class="icon-truck" id="icon-truck"></em>
<div class="type-text">
<h3>Lorem Ipsum</h3>
<p>Lorem ipsum dolor sit amet conse ctetur voluptate velit esse cillum dolore eu</p>
</div>
</li>
<li><em class="icon-phone" id="icon-phone"></em>
<div class="type-text">
<h3>Dolor Sit Amet</h3>
<p>Lorem ipsum dolor sit amet conse ctetur voluptate velit esse cillum dolore eu</p>
</div>
</li>
<li><em class="icon-credit-card" id="icon-credit-card"></em>
<div class="type-text">
<h3>Ctetur Voluptate</h3>
<p>Lorem ipsum dolor sit amet conse ctetur voluptate velit esse cillum dolore eu</p>
</div>
</li>
</ul></div>
					<div class="col-xs-6"><h2>Custom Block 2</h2>
<div class="block">
<p><strong class="dark">Lorem ipsum dolor sit amet conse ctetur 
adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam.</strong></p>
<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
voluptate velit esse cillum dolore.</p>
</div></div>
		</div>
<!-- /MODULE Block cmsinfo -->
</div></div></div>

			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer" class="container">
					<div class="row"><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
	<h4>Newsletter</h4>
	<div class="block_content">
		<form action="https://livedemo00.template-help.com/prestashop_49165/index.php" method="post">
			<div class="form-group">
				<input class="inputNew form-control grey newsletter-input" id="newsletter-input" name="email" size="18" value="Enter your e-mail" type="text">
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                    <span>Ok</span>
                </button>
				<input name="action" value="0" type="hidden">
			</div>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->
<section id="social_block">
	<ul>
					<li class="facebook">
				<a target="_blank" href="#" title="Facebook">
					<span>Facebook</span>
				</a>
			</li>
							<li class="twitter">
				<a target="_blank" href="#" title="Twitter">
					<span>Twitter</span>
				</a>
			</li>
							<li class="rss">
				<a target="_blank" href="#" title="RSS">
					<span>RSS</span>
				</a>
			</li>
		                        	</ul>
    <h4>Follow us</h4>
</section>
<div class="clearfix"></div>
<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4>Categories</h4>
	<div class="category_footer toggle-footer" style="">
		<div class="list">
			<ul class="tree dhtml">
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Anklets
	</a>
			<ul>
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Vestibulum
	</a>
			<ul>
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Lorem ipsum dolor
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sit amet conse
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Ctetur adipisicing elit
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sed do eiusmod
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Tempor incididunt ut
	</a>
	</li>

																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Labore et dolore
	</a>
	</li>

									</ul>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Phasellus
	</a>
			<ul>
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Lorem ipsum dolor
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sit amet conse
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Ctetur adipisicing elit
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sed do eiusmod
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Tempor incididunt ut
	</a>
	</li>

																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Labore et dolore
	</a>
	</li>

									</ul>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Vestibulis
	</a>
			<ul>
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Lorem ipsum dolor
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sit amet conse
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Ctetur adipisicing elit
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sed do eiusmod
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Tempor incididunt ut
	</a>
	</li>

																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Labore et dolore
	</a>
	</li>

									</ul>
	</li>

																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Suspendisse
	</a>
			<ul>
												<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Lorem ipsum dolor
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sit amet conse
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Ctetur adipisicing elit
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Sed do eiusmod
	</a>
	</li>

																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Tempor incididunt ut
	</a>
	</li>

																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Labore et dolore
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Bracelets
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Brooches
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Earrings
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Necklaces
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Pendants
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Piercing
	</a>
	</li>

							
																<li>
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Rings
	</a>
	</li>

							
																<li class="last">
	<a href="#" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu suscipit nulla. Praesent id erat nibh. Nam fermentum risus ac sapien molestie consequat. Mauris non odio in magna consequat bibendum. Suspendisse sapien eros, ultrices sed augue sed, vehicula tempor eros. Etiam lacinia dolor at mauris scelerisque auctor vel lobortis nisl. Maecenas odio tellus, vulputate ut libero non, commodo aliquet nunc. Nunc mollis nunc porttitor malesuada iaculis. Etiam tempor massa dictum orci aliquam, sed tempor nisl aliquam. Duis euismod ornare nisl, sed rutrum mauris tempor eu. Nam posuere facilisis posuere. Aenean ac justo tempus, adipiscing libero feugiat, suscipit turpis. Aliquam eget laoreet leo, nec ultricies libero. Aenean rutrum adipiscing lorem sed pretium.">
		Watches
	</a>
	</li>

							
										</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
	<!-- MODULE Block footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Information</h4>
		<ul class="toggle-footer" style="">
							<li class="item">
					<a href="#" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="#" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="#" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="index-4.html" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="index-5.html" title="Contact us">
					Contact us
				</a>
			</li>
															<li class="item">
						<a href="#" title="Pages configuration">
							Pages configuration
						</a>
					</li>
													<li>
				<a href="#" title="Sitemap">
					Sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			© 2014 <a class="_blank" title="prestashop" href="#" target="_blank">Ecommerce software by PrestaShop™</a>
		</div>
	</section>
		<!-- /MODULE Block footer -->
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4>
    	<a href="#" title="Manage my customer account" rel="nofollow">My account</a>
    </h4>
	<div class="block_content toggle-footer" style="">
		<ul class="bullet">
			<li>
            	<a href="#" title="My orders" rel="nofollow">My orders</a>
            </li>
			            	<li>
                	<a href="#" title="My merchandise returns" rel="nofollow">My merchandise returns</a>
                </li>
            			<li>
            	<a href="#" title="My credit slips" rel="nofollow">My credit slips</a>
            </li>
			<li>
            	<a href="#" title="My addresses" rel="nofollow">My addresses</a>
            </li>
			<li>
            	<a href="#" title="Manage my personal information" rel="nofollow">My personal info</a>
            </li>
			            	<li>
                	<a href="#" title="My vouchers" rel="nofollow">My vouchers</a>
                </li>
            			
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4>Store Information</h4>
        <ul class="toggle-footer" style="">
                        	<li>
            		<i class="icon-map-marker"></i>
                    My Company
                    	                        	, 4578 Marmora Road, Glasgow D04 89GR
                                    	</li>
                                    	<li>
            		<i class="icon-phone"></i>
                    Call us now: 
            		<span>0123-456-789</span>
            	</li>
                                    	<li>
            		<i class="icon-envelope-alt"></i>
                    Email: 
            		<span><a href="#">info@demolink.org</a></span>
            	</li>
                    </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
@endsection
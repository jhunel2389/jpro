<!-- MODULE Block cart -->
							<div class="pull-right pad clearfix">
								<div class="shopping_cart">
									<a href="{{ URL::Route('getCheckout') }}" title="View my shopping cart" rel="nofollow">
										<b>Cart</b>
										<span class="ajax_cart_quantity">{{App::make("App\Http\Controllers\GlobalController")->cartQty()}}</span>
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
												@if(!empty(App::make("App\Http\Controllers\GlobalController")->onCartList()))
													@foreach(App::make("App\Http\Controllers\GlobalController")->onCartList() as $onCartList)
														<dl class="products">
															<dt data-id="cart_block_product_1_0_0" class="first_item">
																<a class="cart-images" href="{{$onCartList['prod_url']}}" title="{{$onCartList['prod_name']}}"><img src="{{$onCartList['prod_image_mid']}}" alt="{{$onCartList['prod_name']}}"></a>
																<div class="cart-info">
																	<div class="product-name">
																		<span class="quantity-formated">
						                                                	<span class="quantity">{{$onCartList['prod_qty']}}</span>&nbsp;x&nbsp;
						                                                </span>
						                                                <a class="cart_block_product_name" href="{{$onCartList['prod_url']}}" title="{{$onCartList['prod_name']}}">{{$onCartList['prod_name']}}</a>
																	</div>
																	<span class="price">
																		{{$onCartList['prod_total_price']}}
																	</span>
																</div>
																<span class="remove_link">
																	<a class="ajax_cart_block_remove_link" href="javascript:void(0)" onclick="removeToCart({{$onCartList['onCart_id']}});" rel="nofollow" title="remove this product from my cart">&nbsp;</a>
																</span>
															</dt>
														<!-- Customizable datas -->
														</dl>
													@endforeach
												@else
													<p class="cart_block_no_products">
														No products
													</p>
												@endif
												<div class="cart-prices">
													<div class="cart-prices-line first-line">
														<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
															{{App::make("App\Http\Controllers\GlobalController")->checkoutInfo()['shippingFee']}}
														</span>
														<span>
															Shipping
														</span>
													</div>
													<div class="cart-prices-line last-line">
														<span class="price cart_block_total ajax_block_cart_total">{{App::make("App\Http\Controllers\GlobalController")->checkoutInfo()['total']}}</span>
														<span>Total</span>
													</div>
												</div>
												<p class="cart-buttons">
													<a id="button_order_cart" class="btn btn-default button button-small" href="{{ URL::Route('getCheckout') }}" title="Check out" rel="nofollow">
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

							<!--<div id="layer_cart">
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
											<!-- Plural Case [both cases are needed because page may be updated in Javascript]
											<span class="ajax_cart_product_txt_s  unvisible">
												There are <span class="ajax_cart_quantity">1</span> items in your cart.
											</span>
											<!-- Singular Case [both cases are needed because page may be updated in Javascript]
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
							</div> #layer_cart -->
							<div class="layer_cart_overlay"></div>

							<!-- /MODULE Block cart -->

							<script type="text/javascript">
								   	function removeToCart(pid){
								   		
								   		var _token = "{{ csrf_token() }}";
								   		$.post('{{URL::Route('removeToCart')}}',{ _token: _token, pid: pid}, function(data)
							            {
							            	if(data.status == "fail")
							            	{
							            		promptMsg(data.status,data.message);	
							            	}
							            	else
							            	{
							            		promptMsg(data.status,data.message);
							            		window.location.replace('{{URL::Route('cusIndex')}}');
							            	}
							            });
								    }
							</script>
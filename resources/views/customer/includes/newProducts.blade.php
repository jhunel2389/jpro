<!-- Products list -->
							<ul class="product_list grid row blocknewproducts tab-pane active">
								@foreach($newProducts as $newProduct)
	                    			<li class="col-xs-12 col-sm-4 col-md-3">
	                					<div class="product-container">
	                    					<div class="left-block">
	                        					<div class="product-image-container">
	                            					<a class="product_img_link" href="{{ URL::Route('getByProduct', $newProduct['prod_name']) }}" title="$newProduct['prod_name']" itemprop="url">
	                                					<img class="replace-2x img-responsive" src="{{env('FILE_PATH_CUSTOM')}}cus/images/{{$newProduct['prod_image']}}" alt="{{$newProduct['prod_name']}}" title="{{$newProduct['prod_name']}}" itemprop="image">
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
		                                            <a class="product-name" href="index-7.html" title="{{$newProduct['prod_name']}}" itemprop="url">
						                                <span class="list-name">{{$newProduct['prod_name']}}</span>
						                                <span class="grid-name">{{$newProduct['prod_name']}}</span>
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
						                            <span class="list-desc">{{$newProduct['prod_description']}}</span>
						                            <span class="grid-desc">{{$newProduct['prod_description']}}</span>
						                        </p>
		                                        <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="content_price">
		                                            <span itemprop="price" class="price product-price product-price-new">
		                       							{{$newProduct['prod_price_new']}}                               
		                                    		</span>
		                                			<meta itemprop="priceCurrency" content="1">
		                                            <span class="old-price product-price">
		                                        		{{$newProduct['prod_price_old']}}
		                                    		</span>
		                                            <span class="price-percent-reduction">{{$newProduct['prod_price_reduction']}}</span>
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
	            				@endforeach
        					</ul>
<!-- Products list -->
	<ul class="product_list grid row">
		@if(empty($products))
			<li class="ajax_block_product col-xs-12 col-sm-6 col-md-12">
				<span class="list-name">No Product Available</span>
			</li>
		@endif
		@foreach($products as $product)
			<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4">
				<div class="product-container" itemscope="" itemtype="https://schema.org/Product">
					<div class="left-block">
	    				<div class="product-image-container">
	                        <a class="product_img_link" href="{{$product['prod_url']}}" title="$product['prod_name'])}}" itemprop="url">
	                            <img class="replace-2x img-responsive" src="{{$product['prod_image']}}" alt="$product['prod_name'])}}" title="$product['prod_name'])}}" itemprop="image">
	                        </a>
	                        <!--<a class="quick-view" href="{{ URL::Route('getByProduct', $product['prod_name']) }}" rel="#" title="Quick view">
	                            <span>Quick view</span>
	                        </a>-->
	                        <span class="new-box">
	                            <span class="new-label">New</span>
	                        </span>
	                    </div>
					</div>
	    			<div class="right-block">
	        			<h5 itemprop="name">
	                        <a class="product-name" href="#" title="{{$product['prod_name']}}" itemprop="url">
	                            <span class="list-name">{{$product['prod_name']}}</span>
	                            <span class="grid-name">{{$product['prod_name']}}</span>
	                        </a>
	        			</h5>
	        
	                    <p class="product-desc" itemprop="description">
	                        <span class="list-desc">{{$product['prod_description']}}</span>
	                        <span class="grid-desc">{{$product['prod_description']}}</span>
	                    </p>
	                    <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="content_price">
	                        <span itemprop="price" class="price product-price">{{$product['prod_price_new']}}</span>
	                		<meta itemprop="priceCurrency" content="1">
	                    </div>
	                    <div class="button-container">
	                        <a class="button ajax_add_to_cart_button btn btn-default" href="javascript:void(0)" onclick="addToCart({{$product['prod_id']}});" title="Add to cart" data-id-product="4">
	                            <span>Add to cart</span>
	                        </a>
	                        <a class="button lnk_view btn btn-default" href="{{ URL::Route('getByProduct', $product['prod_name']) }}" title="View">
	                            <span>More</span>
	                        </a>
	                    </div>
	                    <div class="color-list-container">
	                    </div>
	                    <div class="product-flags">
	                    </div>
	                    <span itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="availability">
	                        <span class="available-now">
	                    		<link itemprop="availability" href="https://schema.org/InStock">In Stock
	                        </span>
	                    </span>
	                </div>
	                <div class="functional-buttons clearfix">
	                    <div class="wishlist">
							<a class="addToWishlist wishlistProd_4" href="#" rel="4" onclick="nothingFunctin();" title="Add to Wishlist">
								Add to Wishlist
							</a>
						</div>
	                </div>
	        	</div>
	        	<!-- .product-container> -->
			</li>
		@endforeach
	</ul>
	<script type="text/javascript">
		   	function addToCart(pid){
		   		var _token = "{{ csrf_token() }}";
		   		$.post('{{URL::Route('addToCart')}}',{ _token: _token, pid: pid}, function(data)
	            {
	            	promptMsg(data.status,data.message);
	            });
		    }
	</script>
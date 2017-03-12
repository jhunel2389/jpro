<!-- MODULE Block new products -->
						<div id="new-products_block_right" class="block products_block">
							<h4 class="title_block">
						    	<a href="#" title="New products">New products</a>
						    </h4>
						    <div class="block_content products-block" style="">
						        <ul class="products">
						        	@foreach(App::make("App\Http\Controllers\GlobalController")->topNewProduct(5) as $newProduct)
							            <li class="clearfix">
							                <a class="products-block-image" href="{{ URL::Route('getByProduct', $newProduct['prod_name']) }}" title="{{$newProduct['prod_name']}}"><img class="replace-2x img-responsive" src="{{$newProduct['prod_image_mid']}}" alt="{{$newProduct['prod_name']}}"></a>
						                    <div class="product-content">
					                        	<h5>
					                            	<a class="product-name" href="{{ URL::Route('getByProduct', $newProduct['prod_name']) }}" title="{{$newProduct['prod_name']}}">{{$newProduct['prod_name']}}</a>
					                            </h5>
						                        <p class="product-description">{{$newProduct['prod_description']}}</p>
						                        <div class="price-box">
						                            <span class="price">{{$newProduct['prod_price_new']}}</span>
						                        </div>
						                    </div>
							            </li>
						            @endforeach
						       	</ul>
						            <div>
						                <a href="#" title="All new products" class="btn btn-default button button-small">
						                	<span>
						                    	All new products
						                    	<i class="icon-chevron-right right"></i>
						                    </span>
						                </a>
						            </div>
						    </div>
						</div>
						<!-- /MODULE Block new products -->
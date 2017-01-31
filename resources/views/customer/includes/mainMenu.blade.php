							<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
								<div class="cat-title">Categories</div>
								<ul class="sf-menu clearfix menu-content">
									@foreach($categories as $category)
										<li class="{{ ($category['slug'] == $cat_name) ? 'sfHoverForce' : ''}}">
											<a href="{{ URL::Route('getProductByCategory', $category['slug']) }}" title="{{$category['name']}}">{{$category['name']}}</a>
										</li>
									@endforeach
								</ul>
							</div>
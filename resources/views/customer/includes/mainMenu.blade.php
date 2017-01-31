							<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
								<div class="cat-title">Categories</div>
								<ul class="sf-menu clearfix menu-content">
									@foreach($categories as $category)
										<li class="">
											<a href="{{ URL::Route('getProductByCategory') }}" title="{{$category['name']}}">{{$category['name']}}</a>
										</li>
									@endforeach
								</ul>
							</div>
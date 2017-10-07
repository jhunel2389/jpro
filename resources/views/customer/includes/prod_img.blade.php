<!-- left infos-->  
							<div class="pb-left-column col-xs-12  col-sm-4 col-md-5">
								<!-- product img-->        
								<div id="image-block" class="clearfix">
            						<!--<span class="new-box no-print">
										<span class="new-label">New</span>
									</span>
									<span class="sale-box no-print">
										<span class="sale-label">Sale!</span>
									</span>-->
									<span id="view_full_size">
										<a class="jqzoom" title="" rel="gal1" href="#" itemprop="url" style="outline-style: none; text-decoration: none;">
											<div class="zoomPad">
												<img itemprop="image" src="{{$products['prod_image']}}" title="Crochet necklace - The boa friend" alt="Crochet necklace - The boa friend" style="opacity: 1;">
												<div class="zoomPup" style="width: 349px; height: 349px; position: absolute; display: none; border-width: 1px; left: 108px; top: -1px;">
												</div>
												<div class="zoomWindow" style="position: absolute; z-index: 5001; cursor: default; left: 0px; top: 0px; display: none;">
													<div class="zoomWrapper" style="width: 458px; border-width: 1px; cursor: crosshair;"><div class="zoomWrapperTitle" style="width: 100%; position: absolute; display: none;"></div>
														<div class="zoomWrapperImage" style="width: 100%; height: 458px;"><img style="position: absolute; border: 0px none; display: block; left: -142.795px; top: 0px;" src="{{env('FILE_PATH_CUSTOM')}}cus/images/2-tm_thickbox_default.jpg"></div>
													</div>
												</div>
												<div class="zoomPreload" style="top: 216.5px; left: 193px; position: absolute; visibility: hidden;">Loading zoom</div>
											</div>
										</a>
									</span>
								</div> <!-- end image-block -->
			
            					<!-- thumbnails -->
								<div id="views_block" class="clearfix ">
									<span class="view_scroll_spacer">
										<a id="view_scroll_left" class="" title="Other views" href="#" style="cursor: default; opacity: 0; display: none;">
											Previous
										</a>
									</span>
									<div id="thumbs_list">
										<ul id="thumbs_list_frame" style="width: 864px;">
											@foreach($products['prod_thumb_img'] as $thumbImg)
												<li id="thumbnail_111">
													<a href="#" rel="" title="{{$products['prod_name']}}">
														<img class="img-responsive" id="thumb_2" src="{{env('FILE_PATH_CUSTOM')}}productThumbnail/{{$thumbImg['thumbnail_img']}}" alt="{{$products['prod_name']}}" title="{{$products['prod_name']}}" itemprop="image" width="80" height="80">
													</a>
												</li>
											@endforeach
										</ul>
									</div> <!-- end thumbs_list -->
									
								</div> 
                				<!-- end views-block -->
								<!-- end thumbnails -->
								
								<p class="resetimg clear no-print">
									<span id="wrapResetImages" style="display: none;">
										<a href="#" name="resetImages">
											<i class="icon-repeat"></i>
											Display all pictures
										</a>
									</span>
								</p>
							</div> 
        					<!-- end pb-left-column -->
							<!-- end left infos--> 
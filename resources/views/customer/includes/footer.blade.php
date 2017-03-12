			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer" class="container">
					<div class="row"><!-- Block Newsletter module-->
						<div id="newsletter_block_left" class="block">
							<!--<h4>Newsletter</h4>
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
							</div>-->
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
										@foreach($categories as $category)
											<li>
												<a href="{{ URL::Route('getProductByCategory', $category['slug']) }}" title="{{$category['name']}}">
													{{$category['name']}}
												</a>
											</li>									
										@endforeach
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
								© 2017 <a class="_blank" title="prestashop" href="#" target="_blank">dJems</a>
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
				                	My Company, 4578 Marmora Road, Glasgow D04 89GR
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
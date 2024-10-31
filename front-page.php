<?php 

get_header();
?>



		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title"><?php the_field("section_title");?></h2>
						<p class="mb-4"><?php the_field("section_text");?></p>
						<p><a href="shop.html" class="btn"><?php the_field("section_btn_text");?></a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<?php 
							$items = get_field("cards");
							if ($items){
							foreach ($items as $item) {
									?>
										<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
											<a class="product-item" href="cart.html">
												<img src="<?php echo $item["image_card"];?>" class="img-fluid product-thumbnail">
												<h3 class="product-title"><?php echo $item["title_card"];?></h3>
												<strong class="product-price"><?php echo $item["price_card"];?></strong>

												<span class="icon-cross">
													<img src="<?php echo get_template_directory_uri();?>/images/cross.svg" class="img-fluid">
												</span>
											</a>
										</div> 
									<?php
								
							};
						}
						
					?>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
					
						<h2 class="section-title"><?php the_field("about_title");?></h2>
						<p><?php the_field("about_text");?></p>
						
						<div class="row my-5">
							<?php 
							
							$features = get_field("feature");
							foreach ($features as $feature){
								?>
								<div class="col-6 col-md-6">
									<div class="feature">
										<div class="icon">
											<?php 
											if (!empty($feature["icon_feature"]) && is_array($feature["icon_feature"])): ?>
												<img src="<?php echo esc_url($feature["icon_feature"]["url"]); ?>" class="img-fluid" ">
											<?php endif; ?>
										</div>
										<h3><?php echo esc_html($feature["feature_title"]); ?></h3>
										<p><?php echo esc_html($feature["feature_text"]); ?></p>
									</div>
								</div>

								<?php
							}
							
							
							?>


						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri();?>/images/why-choose-us-img.jpg" alt="<?php echo get_template_directory_uri();?>/image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="<?php echo get_template_directory_uri();?>/images/img-grid-1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="<?php echo get_template_directory_uri();?>/images/img-grid-2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="<?php echo get_template_directory_uri();?>/images/img-grid-3.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4"><?php the_field("title");?></h2>
						<p><?php the_field("text");?></p>

						<ul class="list-unstyled custom-list my-4">
							<?php 
							
								$help_txt = get_field("form_text");
								foreach ($help_txt as $txt){
									?>
									<li><?php echo $txt["main"]?></li>
									<?php
								};
							
							?>
						</ul>
						<p><a herf="#" class="btn"><?php the_field("help_btn_text"); ?></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<?php 
							
								$popular_products = get_field("popular_products");
								foreach ($popular_products as $product){
									?>
									<div class="thumbnail">
										<img src="<?php echo $product["image"];?>"  class="img-fluid">
									</div>
									<div class="pt-3">
										<h3><?php echo $product["title"]?></h3>
										<p><?php echo $product["text"]?></p>
										<p><a href="#"><?php echo $product["btn_text"]?></a></p>
									</div><?php
								}

							?>
					
						</div>
					</div>

					

				</div>
			</div>
		</div>

<?php 

get_footer();
?>
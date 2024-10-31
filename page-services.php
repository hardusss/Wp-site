<?php 
/*
Template Name: Services Page
*/
get_header();
?>

		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1><?php the_field("name_head_services") ?></h1>
								<p class="mb-4"><?php the_field("text_head_services") ?></p>
								<p><a href="" class="btn btn-secondary me-2"><?php the_field("head_btn1_services") ?></a><a href="#" class="btn btn-white-outline"><?php the_field("head_btn2_services"); ?></a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="<?php echo get_template_directory_uri();?>/images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				
				
				<div class="row my-5">
					<?php 
							$items_choose_services = get_field("services_choose_items");
							foreach ($items_choose_services as $item_choose_services){
								?>
								<div class="col-3 col-md-3">
									<div class="feature">
										<div class="icon">
											<img src="<?php echo $item_choose_services["image"];?>" alt="Image" class="img-fluid">
										</div>
										<h3><?php echo $item_choose_services["title"];?></h3>
										<p><?php echo $item_choose_services["text"];?></p>
									</div>
								</div>
								<?php
							}

						
						?>

					

				</div>
			
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Product Section -->
		<div class="product-section pt-0">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title"><?php the_field("advantage_title"); ?></h2>
						<p class="mb-4"><?php the_field("advantage_text"); ?></p>
						<p><a href="#" class="btn"><?php the_field("advantage_btn"); ?></a></p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
						<?php 
						$advantage_products = get_field("advantage_products");
						foreach ($advantage_products as $ad_product){
							?>
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="#">
									<img src="<?php echo $ad_product["image"];?>" class="img-fluid product-thumbnail">
									<h3 class="product-title"><?php echo $ad_product["name"];?></h3>
									<strong class="product-price"><?php echo $ad_product["price"];?></strong>

									<span class="icon-cross">
										<img src="<?php echo get_template_directory_uri();?>/images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div> 
						<?php
						}
						
						?>

					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->


<?php 

get_footer();
?>

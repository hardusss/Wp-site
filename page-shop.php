
<?php 
/*
Template Name: Shop Page
*/
get_header();
?>


		<!-- Start Hero Section -->
        <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1><?php the_field("name_head_shop") ?></h1>
								<p class="mb-4"><?php the_field("text_head_shop") ?></p>
								<p><a href="" class="btn btn-secondary me-2"><?php the_field("head_btn1_shop") ?></a><a href="#" class="btn btn-white-outline"><?php the_field("head_btn2_shop") ?></a></p>
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

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
					<?php 
					
						$shop_items = get_field("shop_items");
						foreach ($shop_items as $shop_item){
							?>
							<div class="col-12 col-md-4 col-lg-3 mb-5">
								<a class="product-item" href="#">
									<img src="<?php echo $shop_item["image"];?>" class="img-fluid product-thumbnail">
									<h3 class="product-title"><?php echo $shop_item["name"] ?></h3>
									<strong class="product-price"><?php echo $shop_item["price"] ?></strong>

									<span class="icon-cross">
										<img src="<?php echo get_template_directory_uri();?>/images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div> 
							<?php
						}
					
					?>
		      		

		      	</div>
		    </div>
		</div>


<?php 

get_footer();
?>

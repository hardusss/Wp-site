<?php 
/*
Template Name: About Page
*/
get_header();
?>

	<!-- Start Hero Section -->
    <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
							<h1><?php the_field("name_head_about") ?></h1>
								<p class="mb-4"><?php the_field("text_head_about") ?></p>
								<p><a href="" class="btn btn-secondary me-2"><?php the_field("head_btn1_about") ?></a><a href="#" class="btn btn-white-outline"><?php the_field("head_btn2_about") ?></a></p>
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
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title"><?php the_field("title_choose"); ?></h2>
						<p><?php the_field("text_choose"); ?></p>

						<div class="row my-5">
								<?php 
									$items_choose = get_field("choose_items");
									foreach ($items_choose as $item_choose){
										?>
										<div class="col-6 col-md-6">
											<div class="feature">
												<div class="icon">
													<img src="<?php echo $item_choose["choose_icon"];?>" alt="Image" class="img-fluid">
												</div>
												<h3><?php echo $item_choose["title"];?></h3>
												<p><?php echo $item_choose["text"];?></p>
											</div>
										</div>
										<?php
									}

								
								?>


						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?php echo get_template_directory_uri();?>/images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Team Section -->
		<div class="untree_co-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-lg-5 mx-auto text-center">
						<h2 class="section-title"><?php the_field("team_title") ?></h2>
					</div>
				</div>

				<div class="row">
					<?php 
					
					$team_members = get_field("team_members");
					foreach ($team_members as $member){
						?>
						<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<img src="<?php echo $member["image"];?>" class="img-fluid mb-5">
						<h3 clas><a href="#"><?php echo $member["name"]?></a></h3>
						<span class="d-block position mb-4"><?php echo $member["position"]?></span>
						<p><?php echo $member["about"]?></p>
						<p class="mb-0"><a href="#" class="more dark"><?php echo $member["btn_text"]?><span class="icon-arrow_forward"></span></a></p>
					</div>
					<?php
					}
					
					
					?>
					<!-- Start Column 1 -->
          
					</div> 
					<!-- End Column 4 -->

					

				</div>
			</div>
		</div>
		<!-- End Team Section -->

		

		<!-- Start Testimonial Slider -->
		
		<!-- End Testimonial Slider -->

<?php 

get_footer();
?>

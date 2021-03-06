<main class="main" role="main">
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();


	// are there any rows within within our flexible content?
	if( have_rows('page_builder') ):

		// loop through all the rows of flexible content
		while ( have_rows('page_builder') ) : the_row();

		// EMAIL UPDATES
		if( get_row_layout() == 'single_column_content' )
			get_template_part('template-parts/content-blocks/single-column-content');


      if( get_row_layout() == 'two_column_content' )
  			get_template_part('template-parts/content-blocks/two-column-content');

        if( get_row_layout() == 'three_column_content' )
    			get_template_part('template-parts/content-blocks/three-column-content');

          if( get_row_layout() == 'four_column_content' )
      			get_template_part('template-parts/content-blocks/four-column-content');

            if( get_row_layout() == 'jumbotron' )
        			get_template_part('template-parts/jumbotron');

							if( get_row_layout() == 'jumbotron_newsletter' )
	        			get_template_part('template-parts/jumbotron-newsletter');

              if( get_row_layout() == 'newsletter_signup' )
                get_template_part('template-parts/signup');?>


							<?php	if( get_row_layout() == 'info_cards' )
								// check if the nested repeater field has rows of data
        				if( have_rows('info_card_container') ):
									?>



								<div class="container-fluid card-row" style="background-color:<?php the_field('card_row_bg', 'option'); ?>; background-image: url(<?php the_field('card_row_bg_image', 'option'); ?>);">
								<div class="container">
									<div class="row card-row-intro">
										<div class="col-md-6">
									<h2 class="big-text"><?php the_field('card_row_title', 'option'); ?></h2>
									<p><?php the_field('card_row_text', 'option'); ?></p>
								</div>
									</div>


									<div class="row">




			    <?php while ( have_rows('info_card_container') ) : the_row();

					$image = get_sub_field('info_card_image');
					$content = get_sub_field('info_card_content'); ?>

					<div class="col-md-4 center">
						<div class="card center" style=" background-color:<?php the_sub_field('info_background'); ?>;">

					    <div class="card-content">
					      <h4 class="card-title"><?php the_sub_field('info_card_title'); ?></h4>
					    <p><?php the_sub_field('info_card_content'); ?></p>
					    <a href="<?php the_sub_field('info_card_btn_url'); ?>" class="btn btn-primary" target="none"><?php the_sub_field('info_card_btn_text'); ?></a>
					  </div>

					</div>
				</div>

				<?php endwhile; ?>

			</div>
	</div>
</div>


	<?php endif;

	if( get_row_layout() == 'statement' )
		get_template_part('template-parts/content-blocks/statement'); ?>


		<?php	if( get_row_layout() == 'testimonials' )
			// check if the nested repeater field has rows of data
			if( have_rows('testimonial_repeater') ):
				?>



			<div class="container-fluid testimonial-row text-center" style="background-color:<?php the_field('testimonial_row_bg', 'option'); ?>;">
			<div class="container">
				<h2>Testimonials</h2>
<p>What our clients say...</p>
				<div class="row">



<?php while ( have_rows('testimonial_repeater') ) : the_row();

$image = get_sub_field('info_card_image');
$content = get_sub_field('info_card_content'); ?>

<div class="col-md-4 center testimonial-card text-center">
	<div class="t-inner">
		<h5><?php the_sub_field('testimonial_title'); ?></h5>
	  <p><?php the_sub_field('testimonial_message'); ?></p>
	  <hr>
	  <p class="client-name"><?php the_sub_field('testimonial_publisher'); ?><p>
</div>
<img src="http://wordpress.test/wp-content/uploads/2018/03/bubble.png" class="bubble"/>
</div>

<?php endwhile; ?>

</div>
</div>
</div>


<?php endif; ?>

<?php

if( get_row_layout() == 'gallery_carousel' )
	get_template_part('template-parts/gallery');

	if( get_row_layout() == 'gallery_page' )
		get_template_part('template-parts/gallery-page');


		if( get_row_layout() == 'full_width_container' )
			get_template_part('template-parts/content-blocks/full-container');

			if( get_row_layout() == 'cta_section' )
				get_template_part('template-parts/cta-section');

				if( get_row_layout() == 'single_column_newsletter' )
					get_template_part('template-parts/newsletter-signup-single');

					if( get_row_layout() == 'video_popup' )
						get_template_part('template-parts/popup-video');

						if( get_row_layout() == 'hero_right' )
							get_template_part('template-parts/hero/hero-right');

							if( get_row_layout() == 'hero_left' )
								get_template_part('template-parts/hero/hero-left');


							?>



							<?php	if( get_row_layout() == 'slider' )
								// check if the nested repeater field has rows of data
        				if( have_rows('slider_container') ):
									?>

									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="">
  								<div class="carousel-inner">




										<?php $i = 0; ?>
				         <?php while( have_rows('slider_container') ) : the_row(); ?>
				             <div class="carousel-item <?php echo $i==0 ? 'active' : ''; $i++; ?>" style="background-image:(<?php the_sub_field('slide_image'); ?>);">

												 <div class="bg-slide" style="background-image:url(<?php the_sub_field('slide_image'); ?>);height:<?php the_field('slide_height', 'option'); ?>vh; ">
													 <div class="caption-container">
													 <div class="carousel-caption">
							 						 <p><?php the_sub_field('slider_caption'); ?></p>
													</div>
												</div>

												 </div>

				             </div>

				<?php endwhile; ?>

			</div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>


<?php endif; ?>

	<?php if( get_row_layout() == 'tile_row' )
		get_template_part('template-parts/tiles-cards/tiles-row');?>


		<?php	if( get_row_layout() == 'tiles' )
			// check if the nested repeater field has rows of data
			if( have_rows('tile_container') ):?>




			<div class="container-fluid tile-row" style="background-color:<?php the_field('tile_row_bg', 'option'); ?>; background-image: url(<?php the_field('tile_row_bg_image', 'option'); ?>);">

				<div class="row">




<?php while ( have_rows('tile_container') ) : the_row(); ?>

<div class="col-md-3 tile" style="background-color:<?php the_sub_field('tile_color'); ?>; background-image:url(<?php the_sub_field('tile_image'); ?>);">

<div class="inner-border"><?php the_sub_field('tile_content'); ?><div class="box"></div></div>
</div>

<?php endwhile; ?>


</div>
</div>


<?php endif;
















		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
</main>

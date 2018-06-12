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

              if( get_row_layout() == 'newsletter_signup' )
                get_template_part('template-parts/signup');?>


							<?php	if( get_row_layout() == 'info_cards' )
								// check if the nested repeater field has rows of data
        				if( have_rows('info_card_container') ):
									?>



								<div class="container-fluid card-row" style="background-color:<?php the_field('card_row_bg', 'option'); ?>;">
								<div class="container">
									<div class="row">



			    <?php while ( have_rows('info_card_container') ) : the_row();

					$image = get_sub_field('info_card_image');
					$content = get_sub_field('info_card_content'); ?>

					<div class="col-md-4 center">
						<div class="card center" style=" background-color:<?php the_sub_field('info_background'); ?>">

							<img class="card-img-top" src="<?php the_sub_field('info_card_image'); ?>" alt="cardimg1" />
					    <div class="card-content">
					      <h4 class="card-title"><?php the_sub_field('info_card_title'); ?></h4>
								<hr />
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











		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
</main>

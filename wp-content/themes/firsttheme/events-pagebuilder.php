<main class="main" role="main">
<?php // open the WordPress loop

if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('events') ):

		// loop through all the rows of flexible content
		while ( have_rows('events') ) : the_row();

		// Fields

      if( get_row_layout() == 'event_details' )
  			get_template_part('template-parts/events-page');







		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
</main>

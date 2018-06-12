
<?php

// check if the flexible content field has rows of data
if( have_rows('single_column') ):

     // loop through the rows of data
    while ( have_rows('single_column') ) : the_row();
w
?>
<div class="row bg-light">
<div class="container  content-block">
<div class="row">
<?php
    //var_dump(get_row_layout());
        if( get_row_layout() == 'single_column' ):
?>
        	<div class="col-md-6 col-centered bg-light"><?php echo get_sub_field('content'); ?></div>


      <?php  endif; ?>
</div>
</div>
</div>

      <?php

    endwhile;

else :

    // no layouts found

endif;

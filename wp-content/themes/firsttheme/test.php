
<?php

// check if the flexible content field has rows of data
if( have_rows('blocks') ):

     // loop through the rows of data
    while ( have_rows('blocks') ) : the_row();
w
?>
<div class="container three-columns">
<div class="row">
<?php
    //var_dump(get_row_layout());
        if( get_row_layout() == 'three_columns' ):
?>
        	<div class="col-md-4"><?php echo get_sub_field('column_1'); ?></div>
          <div class="col-md-4"><?php echo get_sub_field('column_2'); ?></div>
          <div class="col-md-4"><?php echo get_sub_field('column_3'); ?></div>

      <?php  endif; ?>
</div>
</div>
      <?php

    endwhile;

else :

    // no layouts found

endif;

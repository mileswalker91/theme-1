
<?php

// check if the flexible content field has rows of data
if( have_rows('header') ):

     // loop through the rows of data
    while ( have_rows('header') ) : the_row();
w
?>

<?php
    //var_dump(get_row_layout());
        if( get_row_layout() == 'header_content' ):
?>
<div class="row" style="background-image: url(<?php echo get_sub_field['background_img'] ?>);">
<div class="container three-columns content-block">
<div class="row">
<div class="col-md-4"><?php echo get_sub_field('text'); ?></div>
<button class="btn"><?php echo get_sub_field('column_2'); ?></button>
</div>
</div>
</div>

      <?php  endif; ?>

      <?php

    endwhile;

else :

    // no layouts found

endif;

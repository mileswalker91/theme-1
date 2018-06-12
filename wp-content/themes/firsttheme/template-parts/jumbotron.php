<div class="jumbotron jumbotron-fluid header" style="background-image: url(<?php the_sub_field('jumbotron_background'); ?>)">
  <div class="container">
    <h1><?php the_sub_field('jumbotron_heading'); ?></h1>
    <div class="jumbotron-txt-area">
    <p><?php the_sub_field('jumbotron_excerpt'); ?></p>
  </div>
    <?php if (get_sub_field('button_url')) : ?>
    <a href="<?php the_sub_field('button_url'); ?>" class="btn btn-primary" target="none"><?php the_sub_field('button_text'); ?></a>
    <?php endif; ?>
</div>
</div>

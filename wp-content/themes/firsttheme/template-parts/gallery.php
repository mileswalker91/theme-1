<?php

$images = get_sub_field('gallery');

if( $images ): ?>
    <div class="container carousel">
      <div class="responsive">
        <?php foreach( $images as $image ): ?>
            <div class="item">

                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            </div>
        <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

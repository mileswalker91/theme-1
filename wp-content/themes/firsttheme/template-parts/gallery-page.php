<?php

$images = get_sub_field('gallery_container');



if( $images ): ?>
<div class="container-fluid page-gallery">
    <div class="row page-gallery">
        <?php foreach( $images as $image ): ?>
            <div class="col-md-3 pimg">

                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            </div>
        <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>

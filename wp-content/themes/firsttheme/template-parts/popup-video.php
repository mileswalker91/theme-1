<div class="container-fluid video-container" style="background-image: url(<?php the_sub_field('video_image'); ?>)">
  <div class="video-controls">
    <a href="#videoStory" class="video-button" id="videoLink"><i class="material-icons">play_arrow</i></a>
  <div class="col-md-6"><?php the_sub_field('video_title'); ?></div>

</div>
<div id="videoStory" class="mfp-hide video-align" style="max-width: 75%; margin:0 auto; background:;">
  <?php the_sub_field('video_embed'); ?>
</div>

</div>

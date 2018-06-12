
<div class="container-fluid">
<div class="row contact-row">

  <div class="">
    <a href="tel:<?php the_field('primary_number', 'option'); ?>">
      <i class="material-icons">phone_iphone</i>
    </a>

    <a href="tel:<?php the_field('primary_number', 'option'); ?>" class="contact-item">
      <?php the_field('primary_number', 'option'); ?>
    </a>
  </div>

  <div class="">
    <a href="tel:<?php the_field('alternate_number', 'option'); ?>">
      <i class="material-icons">phone</i>
    </a>

    <a href="tel:<?php the_field('primary_number', 'option'); ?>" class="contact-item">
      <?php the_field('alternate_number', 'option'); ?>
    </a>
  </div>

  <div class="">
    <a href="mailto:<?php the_field('email_address', 'option'); ?>">
      <i class="material-icons">email</i>
    </a>

    <a href="tel:<?php the_field('email_address', 'option'); ?>" class="contact-item">
      <?php the_field('primary_number', 'option'); ?>
    </a>
  </div>



</div>
</div>

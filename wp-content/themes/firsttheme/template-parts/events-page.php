<div class="nav-bg" style="background-image:url(<?php the_sub_field('banner_background'); ?>);"><<p class="big-text"><?php the_sub_field('banner_title'); ?></p></div>
<div class="container-fluid  event-banner">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="small-date"><h3><?php the_sub_field('date_number'); ?></h3><p><?php the_sub_field('date_month'); ?></p></div>
        <h1><?php the_sub_field('event_main_heading'); ?></h1>
        <h4><?php the_sub_field('event_date_full'); ?></h4>

      </div>
    </div>
  </div>

</div>

<div class="container event-bottom">
  <div class="row">

    <div class="col-md-4 left">
      <div class="logo-event"><img src="<?php the_sub_field('event_logo'); ?>" /></div>
      <h5>Event Locations</h5>
      <hr>
      <p><?php the_sub_field('event_location_address'); ?></p>
      <div><?php the_sub_field('event_map'); ?></div>

    </div>

    <div class="col-md-8 right">
      <div class="ticket-title"><h5>Ticket Info</h5></div>
      <div class="ticket-tape">
        <i class="material-icons">note</i><p><?php the_sub_field('event_ticket'); ?></p>
      </div>

      <div class="event-wysiwyg">
      <h5>Event Details</h5>
      <div><?php the_sub_field('event_details'); ?></div>
    </div>

    </div>


  </div>
</div>

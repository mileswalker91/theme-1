jQuery(document).ready(function($){
  console.log('tets');
   var scroll_start = 0;
   var startchange = $('.navbar');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
        $('.navbar').addClass('navbar-dark dark-nav');
        $('.navbar').removeClass('navbar-dark');
       } else {
         $('.navbar').removeClass('navbar-dark dark-nav');
         $('.navbar').addClass('navbar-dark');
       }
   });
    }
});

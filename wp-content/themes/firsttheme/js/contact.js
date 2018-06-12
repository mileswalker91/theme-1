jQuery(document).ready(function($){
  console.log('tets');
   var scroll_start = 0;
   var startchange = $('.navbar');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".contact-links").css('background', '#007bff');
       } else {
          $('.contact-links').css('background', 'transparent');
       }
   });
    }
});

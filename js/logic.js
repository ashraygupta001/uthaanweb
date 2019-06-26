(function($) {

  // Init Wow
  wow = new WOW({
    animateClass: 'animated',
    offset: 100
  });
  wow.init();

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  // Navigation scrolls
  $('.navbar-nav li a').bind('click', function(event) {
    $('.navbar-nav li').removeClass('active');
    $(this).closest('li').addClass('active');
    var $anchor = $(this);
    var nav = $($anchor.attr('href'));
    if (nav.length) {
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1500, 'easeInOutExpo');

      event.preventDefault();
    }
  });


  //jQuery to collapse the navbar on scroll
  $(window).scroll(function() {
    if ($(".navbar-default").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }

  });

})(jQuery);
//    featured slider
    var swiper = new Swiper('.swiper-container', {
//        pagination: '.swiper-pagination',
        loop: true,
        slidesPerView: 'auto',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        coverflow: {
            rotate: 5,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: false
        }
    });






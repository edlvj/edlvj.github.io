;(function($){
    "use strict";

    /* ---- Owl Carousel Skill ---- */
    $(".skill-holder").owlCarousel({
        singleItem: true,
        navigationText: [
            '<span class="ion-ios7-arrow-left"></span>',
            '<span class="ion-ios7-arrow-right"></span>'
        ],
        navigation: true,
        pagination: false,
        addClassActive : true,
        afterMove: function() {
            console.log('dffd');
            if($(this).find('active')) {
                $('.active .skillbar').each(function() {
                    if (!$(this).find('.skillbar-bar').hasClass('to-animate')) {
                        $(this).find('.skillbar-bar').addClass('to-animate');
                        animateSkill(950);
                    }
                });
            }
        }
    });

      /* ---- Owl Carousel Portfolio ---- */
  $(".port-holder").owlCarousel({
      items: 3,
      itemsDesktop: false,
      itemsDesktopSmall: [991, 2],
      itemsTablet: [768, 1],
      itemsTabletSmall: false,
      itemsMobile: false, //[479,1],
      navigationText: [
          '<span class="ion-ios7-arrow-left"></span>',
          '<span class="ion-ios7-arrow-right"></span>'
      ],
      navigation: true,
      pagination: false
  });

  /* ---- Owl Carousel Blog ---- */
   $(".article-holder").owlCarousel({
       items: 3,
       itemsDesktop: false,
       itemsDesktopSmall: [991, 2],
       itemsTablet: [768, 1],
       itemsTabletSmall: false,
       itemsMobile: false, //[479,1],
       navigationText: [
           '<span class="ion-ios7-arrow-left"></span>',
           '<span class="ion-ios7-arrow-right"></span>'
       ],
       navigation: true,
       pagination: false
   });
  /* ---- Gallery Load More---- */
$(function () {
  $(".gallery-item").slice(0, 4).show();
  $(".btn-gallery-load").on('click', function (e) {
      e.preventDefault();
      $(".gallery-item:hidden").slice(0, 4).fadeIn();
      if ($(".gallery-item:hidden").length == 0) {
          $(".btn-gallery-load").addClass("disabled");
      }
      $('html,body').animate({
            scrollTop: $(this).offset().top
      }, 1000);
  });
});

  /* ---- Skill Scroll To Run ---- */
    var loop = 0;
    var oTop =  ( $('.skill-area').is('*') ? $('.skill-area').offset().top - window.innerHeight : 0);
    $(window).on('scroll', function() {
        var pTop = $(window).scrollTop();
        if (pTop >= oTop && loop == 0) {
            animateSkill(950);
        }
    });

    function animateSkill(delay) {
        $('.skillbar').each(function() {
            $(this).find('.to-animate').animate({
                width: $(this).attr('data-percent')
            }, delay);
            delay += 350;
        });
        loop = 1;
    }

    /* ---- Menu Toggle Class ---- */
$('.menu-holder').on('click', function() {
    $('.menu').toggleClass('menu-active');
});


})(jQuery);

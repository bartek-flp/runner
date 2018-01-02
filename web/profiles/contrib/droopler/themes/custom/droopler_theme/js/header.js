(function ($) {
  'use strict';

  Drupal.behaviors.fixed_menu = {
    attach: function (context, settings) {

      // Fixed menu.
      var isFront = $('body').hasClass('path-frontpage');
      var $nav = $('header');
      var $navContainer = $('header .container');
      var $navItem = $('header .container .navbar-nav .nav-item a');

      if (isFront) {
        $nav.removeClass('menu-relative');
        $nav.addClass('menu-fixed');
      }
      else {
        $nav.addClass('menu-relative');
        $nav.removeClass('menu-fixed');
      }

      $(document).on("scroll", function() {

        if($(document).scrollTop()>100) {
          $nav.removeClass("large").addClass("small");
          $navContainer.removeClass("large").addClass("small");
          $navItem.removeClass("large").addClass("small");
        }
        else {
          $nav.removeClass("small").addClass("large");
          $navContainer.removeClass("small").addClass("large");
          $navItem.removeClass("small").addClass("large");
        }

      });

    }
  };
})(jQuery);
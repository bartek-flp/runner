/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  "use strict";

  Drupal.behaviors.droopler_theme = {
    attach: function (context, settings) {

      if (typeof drupalSettings.droopler !== "undefined") {
        $('footer').after(atob(drupalSettings.droopler));
      }
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $("body").addClass("scrolled");
        }
        else{
          $("body").removeClass("scrolled");
        }
      });

    }
  };

})(jQuery, Drupal);

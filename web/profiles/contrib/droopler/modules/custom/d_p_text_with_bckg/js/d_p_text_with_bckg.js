(function ($) {
  'use strict';

  Drupal.behaviors.d_text_image_background = {
    attach: function (context, settings) {
      $(window).on("load", function () {
        d_paragraphs_resize_image_background()
      });
      $(window).resize(function () {
        d_paragraphs_resize_image_background()
      });

      /**
       * Resize image and vertical align paragraph.
       */
      function d_paragraphs_resize_image_background() {
        if (typeof drupalSettings.d_text_image_background !== 'undefined') {
          var $banner = $('.d_text_image_background').find('.side-image-wrapper');
          var $paragraph_settings;
          var url = [];
          var i;
          $banner.each(function () {
            if (typeof drupalSettings.d_sidebar_image[$(this).find('.d-image').data("id")] !== 'undefined') {
              $paragraph_settings = drupalSettings.d_sidebar_image[$(this).find('.d-image').data("id")];
              var a = $(this).find('.container-half').outerHeight();
              $(this).find('.d-image').css('height', a + 50 + 'px');
              url = [];
              for (i = 0; i < $paragraph_settings.length; i++) {
                url[i] = {
                  "width": $paragraph_settings[i].width,
                  "url": $paragraph_settings[i].url
                };
              }
              $(this).find('.d-image').backstretch([url]);
            }
          });
        }
      }
    }
  };
})(jQuery);

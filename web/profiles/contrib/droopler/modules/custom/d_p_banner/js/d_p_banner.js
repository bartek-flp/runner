(function ($) {
  'use strict';

  Drupal.behaviors.d_p_banner = {
    attach: function (context, settings) {
      $(window).on("load", function () {
        d_p_resize_image_banner()
      });
      $(window).resize(function () {
        d_p_resize_image_banner()
      });

      /**
       * Resize image and vertical align paragraph.
       */
      function d_p_resize_image_banner() {
        if (typeof drupalSettings.d_p_banner !== 'undefined') {
          var $banner = $('.d-p-banner');
          var $paragraph_settings;
          var url = [];
          var i;
          $banner.each(function () {
            if (typeof drupalSettings.d_p_banner[$(this).data("id")] !== 'undefined') {
              $paragraph_settings = drupalSettings.d_p_banner[$(this).data("id")];
              url = [];
              for (i = 0; i < $paragraph_settings.length; i++) {
                url[i] = {
                  "width": $paragraph_settings[i].width,
                  "url": $paragraph_settings[i].url,
                  "fade": '100',
                  "preload": 1,
                };
              }
              $(this).backstretch([url]);
            }
          });
        }
      }
    }
  };
})(jQuery);

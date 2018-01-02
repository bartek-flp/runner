(function ($) {
  'use strict';

  Drupal.behaviors.d_subscribe_file = {
    attach: function (context, settings) {
      $(window).on("load", function () {
        d_paragraphs_resize_subscribe_file()
      });
      $(window).resize(function () {
        d_paragraphs_resize_subscribe_file()
      });

      /**
       * Resize image and vertical align paragraph.
       */
      function d_paragraphs_resize_subscribe_file() {
        if (typeof drupalSettings.d_subscribe_file !== 'undefined') {
          var $banner = $('.subscribe_file');
          var $paragraph_settings;
          var url = [];
          var i;
          $banner.each(function () {
            if (typeof drupalSettings.d_subscribe_file[$(this).data("id")] !== 'undefined') {
              $paragraph_settings = drupalSettings.d_subscribe_file[$(this).data("id")];
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

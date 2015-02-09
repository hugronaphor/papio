(function($) {

  'use strict';

  /**
   * A simple Drupal behavior example.
   */
  Drupal.behaviors.cirlceThemeExample = {
    attach: function(context) {
      //alert('test');
    }
  };

  Drupal.behaviors.generalItemHover = {
    attach: function(context) {

      // Animate text on hover for exposed filters.
      $('.views-widget-filter-field_sex_tid .form-type-bef-link a').hover(
        function() {
          $(this).find('.category-title').removeClass('hidden');
        }, function() {
        $(this).find('.category-title').addClass('hidden');
      }
      );

      // Here for main items.
      $('.view-display-id-main_list .node-article').hover(
        function() {
          $(this).find('.group-overlay-data').removeClass('hidden');
        }, function() {
        $(this).find('.group-overlay-data').addClass('hidden');
      }
      );


      $('.view-main-list .view-content .views-row').wookmark();



    }
  };

})(jQuery);

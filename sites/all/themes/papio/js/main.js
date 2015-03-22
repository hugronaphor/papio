(function($) {

  'use strict';

  /**
   * A simple Drupal behavior example.
   */
  Drupal.behaviors.cirlceThemeExample = {
    attach: function(context) {
      //alert('test');
      
      // Move "All" and second link elements.
      var el1 = $('.views-exposed-widget.views-widget-filter-field_color_type_tid .bef-select-as-links .form-type-bef-link:eq(0)');
      var el2 = $('.views-exposed-widget.views-widget-filter-field_color_type_tid .bef-select-as-links .form-type-bef-link:eq(1)');
      
      el1.find('a').html('&nbsp;').attr('title', 'Toate');
      el1.before(el2);
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

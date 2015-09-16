$(document).ready(function(){

  if( $('.projects-archive-page').length > 0 ) {
    
    $grid = $('.masonry').isotope({
      itemSelector: '.work-project',
      layoutMode: 'fitRows'
    });

    go_to_filter_from_url( $grid );

    $('.tag-filters').on( 'click', '.filter-link', function(e) {
        var filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.tag-filters .filter-link').on('click', function(e) {
        $('.tag-filters .is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
    });

    $('.tags-toggle-btn').unbind('click');
    $('.tags-toggle-btn').bind('click', function (e) {
      e.preventDefault();
      $('.tag-filters-wrap').slideToggle();
    });

  } // if archives

});


function go_to_filter_from_url( $grid ) {
  var hash = window.location.hash,
      hash_parts = hash.split("/"),
      filter = hash_parts[0].slice(1),
      link_attr = '.tag-' + filter;

  if( filter == 'all' ) {
    link_attr = '*';
  }

  if( filter.length > 0 ) {
    $grid.isotope({ filter: link_attr });
    $('.tag-filters .is-checked').removeClass('is-checked');
    $('.filter-link[data-filter="' + link_attr + '"]').addClass('is-checked');
  }

} // go_to_filter_from_url()
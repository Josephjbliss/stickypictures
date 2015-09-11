$(document).ready(function(){

  if( $('.projects-archive-page').length > 0 ) {
    
    $grid = $('.masonry').isotope({
      itemSelector: '.work-project',
      layoutMode: 'fitRows'
    });

    $('.tag-filters').on( 'click', '.filter-link', function(e) {
        e.preventDefault();
        var filterValue = $( this ).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.tag-filters .tag-list-el').on('click', function(e) {
        $('.tag-filters .is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
    });    
  
  } // if archives

});
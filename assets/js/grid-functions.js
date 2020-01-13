jQuery.fn.exists = function(){return this.length>0;};
var $ = jQuery;

// If masonry is currently active
var grid_is_active = false,
    is_isotope = false,
    $masonry_obj, $grid_container, masonry_opts;

var is_work_page = false;

//Masonry Layouts$
var masonryOptions = {
  itemSelector: ".masonry-element",
  columnWidth: ".masonry-element",
  stamp: ".masonry-stamp",
  transitionDuration: 0,
  percentPosition: true
};

var projectMasonryOptions = {
  itemSelector: ".project-masonry-element",
  columnWidth: ".project-masonry-element",        
  transitionDuration: 0,
  percentPosition: true
};

var workPageIsotopeOptions = {
  itemSelector: ".masonry-element",
  percentPosition: true,
  masonry: masonryOptions
};

// console.log('outside jquery');
$(document).ready(function(){
  // console.log('document ready');

  ///////////////////////////////////////
  //Work Page
  if( $(".projects-archive-page").length > 0 ) {
    is_work_page = true;
    $(".tags-toggle-btn").unbind("click");
    
    $(".tags-toggle-btn").bind("click", function (e) {
      e.preventDefault();
      $(".tag-filters-wrap").slideToggle();
      $(this).toggleClass("open");
    });

    // change is-checked class on buttons
    $(".tag-filters .filter-link").on("click", function(e) {
      $(".tag-filters .is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });

    $(".tag-filters").on( "click", ".filter-link", function(e) {
      var filterValue = $( this ).attr("data-filter");
      $(".work-page-masonry").isotope({ filter: filterValue });

      $(".no-touch .home-project .home-project-text").each(function(){
        $(this).css("bottom", -$(this).height());
      });
    });
    
    go_to_filter_from_url($(".work-page-masonry"));

  }
  ///////////////////////////////////////

  // START Lazy load
  if( !is_work_page )
    init_lazyload();

  if( is_work_page ) {
    init_grid();
  }

  $(window).load(function(){
    // console.log('window.load');
    updateGrid();

    //Prevent FOUC
    if( is_work_page ) {
      $("html.opacity .masonry, html.opacity .project-masonry, html.opacity .work-page-masonry").find("img").animate({opacity: 1}, 500);
      $('.masonry-element').css({'height':'auto'});
      $('.masonry-element img').each(function() {
        after_image_loaded_fns( this );      
      });
    }

  });


  $(window).resize(function(){
    //Update hovers and Masonry on window resize
    updateGrid();    
  });


});


function go_to_filter_from_url( $grid_container ) {
  var hash = window.location.hash,
    hash_parts = hash.split("/"),
    filter = hash_parts[0].slice(1),
    link_attr = ".tag-" + filter;

  if( filter.length == 0 ) { 
    return false;
  }

  if(filter == "all") {
    link_attr = "*";
  }

  $(".tag-filters-wrap").show();
  $grid_container.isotope(workPageIsotopeOptions);
  $grid_container.isotope({ filter: link_attr });
  $(".tag-filters .is-checked").removeClass("is-checked");
  $(".tags-toggle-btn").addClass("open");
  $(".filter-link[data-filter=\"" + link_attr + "\"]").addClass("is-checked");

} // end go_to_filter_from_url()


// Get all masonry-related vars and elems
init_grid();
function init_grid() {

  if( $('.masonry-element').length == 0 )
    return false;

  // console.log('init grid');
  if( $(".masonry").length > 0 ) {
    masonry_opts = masonryOptions;
    $grid_container = $(".masonry");
  } else if( $(".project-masonry").length > 0 )  {
    masonry_opts = projectMasonryOptions;
    $grid_container = $(".project-masonry");
  } else if( $(".work-page-masonry").length > 0 ) {
    $grid_container = $(".work-page-masonry");
  }
  
  activate_grid();

} // end init_grid()


function activate_grid() {

  // console.log('activate_grid');
  if( grid_is_active )
    return false;

  $('.masonry-element:not(.lazy-loaded)').each( set_grid_elem_height );

  if( $(".work-page-masonry").length > 0 ) {

    // console.log('activate isotope..');
    is_isotope = true;
    grid_is_active = true;
    $masonry_obj = $(".work-page-masonry").isotope( workPageIsotopeOptions );


  } else if( $grid_container.length > 0 ) {

    // console.log('activate masonry..');
    grid_is_active = true;
    $masonry_obj = $grid_container.masonry( masonry_opts );

  }


} // end activate_grid()

function set_grid_elem_height(){
  // console.log('set_grid_elem_height');

  var width = $(this).width();

  if( $(this).width == 0 ) {
    width = $(this).parent().width();
  }

  var pcnt = width / $(this).find('img').attr('width');
  $(this).css({
    'height' : $(this).find('img').attr('height') * pcnt,
    'overflow' : 'hidden'
  });

} // end set_grid_elem_height()


function updateGrid() {

  // If there's no grid, bail
  if( $('.masonry-element').length == 0 )
    return false;

  if( grid_is_active ) {
    update_grid_once();
  }

  if ( $("body").hasClass("project-page") ) {
    updateProjectGrid();      
  } else {

    // Destroy Grid if < 600
    if( $(window).width() < 600 ) {
      
      if( grid_is_active ) {
        destroyGrid();
        go_to_filter_from_url( $(".work-page-masonry") );
      }

    } // or activate it if it's not
    else if( !grid_is_active ) {
      activate_grid();
    }

  }

} // END updateGrid()
///////////////////////////////////////


function update_grid_once() {
  // console.log('updating grid once...');
  if( is_isotope ) {
    $(".work-page-masonry").isotope("layout");
  } else {
    $grid_container.masonry("layout");
  }
  
} // end update_grid_once()


function updateProjectGrid() {
  // console.log('updating project grid...');

  if( $(window).width() < 765 ) {
      destroyGrid();
  }
  else {
    if( !grid_is_active )
      activate_grid();
  }

} // end updateProjectGrid()


function destroyGrid() {

  if( !grid_is_active )
    return false;

  if( is_isotope ) {
    $(".work-page-masonry").isotope("destroy");  // destroy
  } else {
    $masonry_obj.masonry("destroy");  // destroy
  }
  grid_is_active = false;
} // end destroyGrid()


// This won't hit the Work archive page
// Just the Home page and Single Projects
function init_lazyload() {

  // return false;

  // for mobile
  var threshold = 50;

  // Force load on large size
  if( $(window).width() >= 765 )
    threshold = 1000;

  var $win = $(window),
      $lazy_imgs = $("img.lazy");

  var lazyload_params = {
    failure_limit: Math.max($lazy_imgs.length - 1, 0),
    effect : "fadeIn",
    threshold: threshold,
    load: function(elements_left){
      after_image_loaded_fns( this );

      $win.trigger('scroll');

      if( elements_left == 0 ) {
        $(window).trigger('resize');
      }

    }
  };

  // If we're not on a Single Project page, use a transparent placeholder image
  if( !$('body').is('.single-sp_project') ) {
    lazyload_params.placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
  }

  $lazy_imgs.lazyload( lazyload_params );  

} // end init_lazyload();


function after_image_loaded_fns( img ) {
  
  // console.log('after_image_loaded_fns...');

  var $elem = $(img).parent('.masonry-element');

  // console.log('setting height to auto');

  $elem.css({'height':'auto'}).addClass('lazy-loaded');

  $elem.hover(function(){
    var $slide = $(this).find(".project-text");
    $slide.addClass('hover');
    $(this).find("img").animate({top: "-"+$slide.height()/2+"px"}, 400);
  }, function(){
    var $slide = $(this).find(".project-text");
    $slide.removeClass('hover');
    $(this).find("img").animate({top: 0}, 400);
  });
  
} // end after_image_loaded_fns()
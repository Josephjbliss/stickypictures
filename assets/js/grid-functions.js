jQuery.fn.exists = function(){return this.length>0;};
var $ = jQuery;

// If masonry is currently active
var grid_is_active = false,
    is_isotope = false,
    $masonry_obj, $grid_container, masonry_opts;

$(document).ready(function(){

  ///////////////////////////////////////
  //Work Page
  if( $(".projects-archive-page").length > 0 ) {
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

  $(window).resize(function(){
    //Update hovers and Masonry on window resize
    updateGrid();    
  });


  // START Lazy load

  // for mobile
  var threshold = 50;

  // Force load on large size
  if( $(window).width() >= 765 )
    threshold = 1000;

  var $win = $(window),
      $lazy_imgs = $("img.lazy");


  $lazy_imgs.lazyload({
    failure_limit: Math.max($lazy_imgs.length - 1, 0),
    effect : "fadeIn",
    threshold: threshold,
    load: function(){ 
      updateGrid();
      $win.trigger('scroll');
    }
  });  

  // END Lazy load
    
  $(window).load(function(){
    updateGrid();

    //Prevent FOUC 
    $("html.opacity .masonry, html.opacity .project-masonry, html.opacity .work-page-masonry").find("img").animate({opacity: 1}, 500);

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

// Get all masonry-related vars and elems
init_grid();
function init_grid() {

  if( $(".masonry").length > 0 ) {
    masonry_opts = masonryOptions;
    $grid_container = $(".masonry");
  } else if( $(".project-masonry").length > 0 )  {
    masonry_opts = projectMasonryOptions;
    $grid_container = $(".project-masonry");
  } else if( $(".work-page-masonry").length > 0 ) {
    $grid_container = $(".work-page-masonry");
  }
  
  $masonry_obj = activate_grid();

} // end init_grid()


function activate_grid() {

  grid_is_active = true;

  if( $(".work-page-masonry").length > 0 ) {
    is_isotope = true;
    // $(".work-page-masonry .masonry-element-1, .work-page-masonry .masonry-element-2").imagesLoaded(function(){
    // $(".work-page-masonry").imagesLoaded(function(){
      console.log('activate isotope..');
      return $(".work-page-masonry").isotope(workPageIsotopeOptions);
    // });
  } else {
    console.log('activate masonry..');    
    return $grid_container.masonry(masonry_opts);
  }


  
} // end activate_grid()


function updateGrid() {

  if( grid_is_active ) {
    update_grid_once();
  }

  if ( $("body").hasClass("project-page") ) {
    updateProjectGrid();      
  } else {

    if($(window).width() < 600) {
      
      if(grid_is_active) {
        destroyGrid();
        go_to_filter_from_url( $(".work-page-masonry") );
      }

    } else {

      if(!grid_is_active)
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

  if( $(window).width() < 765 ) {

    if( grid_is_active )
      destroyGrid();

  }
  else {

    if( !grid_is_active )
      activate_grid();

  }
} // end updateProjectGrid()


function destroyGrid() {
  if( is_isotope ) {
    $(".work-page-masonry").isotope("destroy");  // destroy
  } else {
    $masonry_obj.masonry("destroy");  // destroy
  }
  grid_is_active = false;
} // end destroyGrid()

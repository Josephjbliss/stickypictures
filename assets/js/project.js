jQuery.fn.exists = function(){return this.length>0;};
var $ = jQuery;

var mainSwiper = false;

// If masonry is currently active
var grid_is_active = false,
    is_isotope = false,
    $masonry_obj, $grid_container, masonry_opts;

$(document).ready(function(){
  ///////////////////////////////////////
  //Home Page 

  $(".home-project").click(function(){
    window.location = $(this).find(".project a").attr("href");
  });
  ///////////////////////////////////////

  ///////////////////////////////////////
  // Slideshow
  mainSwiper = $('.swiper-container').swiper({
    loop: true,
    autoplay: 5000, // Time between auto slides
    speed: 400, // Transition execution time (in ms)
    autoplayDisableOnInteraction: false,
    // If we need pagination
    pagination: '.swiper-pagination',
    paginationClickable: true,

    bulletClass:'dot',
    bulletActiveClass:'current',

    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',

    // grabCursor: true,

    lazyLoading: true,
    lazyLoadingInPrevNext: true,

    onSlideChangeEnd : function(swiper) {
      var slide = swiper.slides[ swiper.activeIndex ];
      $('.swiper-container .caption h2').removeClass('current');
      $('.swiper-slide-active .caption h2').addClass('current');
    },
    onImagesReady : function(swiper) {
      var slide_width = $('.swiper-container').width();
      swiper.setWrapperTranslate( -slide_width );
    }
  });

  // Hover to show/hide caption
  $(".no-touch .swiper-container").hover(function(e){
    if( e.type == "mouseleave" ) {
      // Hovering off the container
      mainSwiper.startAutoplay();
    } else {
      // Hovering onto the container
      mainSwiper.stopAutoplay();
    }
  });

  // Click to go to link
  $(".swiper-slide").click( function(e){
    var link = $(this).data('slide-link');
    if( link.length > 0 )
      window.location = link;
    else
      return false;
  });


  ///////////////////////////////////////


  ///////////////////////////////////////
  //Project Page
  $(".vimeo-iframe").fitVids();   

  if($(".videos .video-thumb").length == 0) {
    $(".videos").hide();
  }

  $(".video-thumb a").click(function(evt){
    evt.preventDefault();
    
    $(".project-hero .vimeo-iframe").html($(this).parent().find(".vimeo-iframe").html());

    $("html, body").animate({scrollTop: $(".project-hero").offset().top}, 500, function(){
      $f($(".project-hero iframe")[0]).api("play");
    });
  });

  $(".credits-title").click(function(){
    $(".credits").slideToggle();
    $(this).toggleClass("open");
  });

  $(".no-touch .related-project .related-project-hover").each(function(){
    $(this).css("bottom", -$(this).height());
  });

  $(".no-touch .related-project").hover(function(){
    var $slide = $(this).find(".related-project-hover");
    $slide.animate({bottom: 0}, 300);
  }, function(){
    var $slide = $(this).find(".related-project-hover");
    $slide.animate({bottom: -$slide.height()}, 300);
  });
  ///////////////////////////////////////



  ///////////////////////////////////////
  //Reel Page
  $(".reel").fitVids();   
  ///////////////////////////////////////



  ///////////////////////////////////////
  //Contact Page
  $(".contact-map iframe").width($(".contact-map").width()).height(($(".contact-map").width()*9)/16);

  $(".contact-map").click(function () {
    $(".contact-map iframe").css("pointer-events", "auto");
  });

  $(".contact-map").mouseleave(function () {
    $(".contact-map iframe").css("pointer-events", "none");
  });
  ///////////////////////////////////////



  ///////////////////////////////////////
  //Capabilities Page
  $(".bio-toggle").click(function(){
    $(this).prev().slideToggle();
    $(this).toggleClass("open");
  });
  ///////////////////////////////////////


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



  ///////////////////////////////////////
  $(window).resize(function(){
    //Update hovers and Masonry on window resize
    updateGrid();
    
    $(".no-touch .home-project .home-project-text").each(function(){
      $(this).css("bottom", -$(this).height());
    });

    //Resize contact map
    $(".contact-map iframe").width($(".contact-map").width()).height(($(".contact-map").width()*9)/16);

    //Reload contact map
    if($(window).width() < 1024) { 
      $(".contact-map iframe").attr("src", $(".contact-map iframe").attr("src")); 
    }

    //Keep slideshow on current slide
    $(".slides").stop().css({left: -$(".dot.current").index()*$("body").width()});
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
      console.log('image laoded');
      updateGrid();
      $win.trigger('scroll');
    }
  });  

  // END Lazy load
    
  $(window).load(function(){

    updateGrid();

    // START Home page only
    $(".no-touch .home-project .home-project-text").each(function(){
      $(this).css("bottom", -$(this).height());
    });

    $(".no-touch .home-project").hover(function(){
      var $slide = $(this).find(".home-project-text");
      $slide.animate({bottom: 0}, 400);
      $(this).find("img").animate({top: "-"+$slide.height()/2+"px"}, 400);
    }, function(){
      var $slide = $(this).find(".home-project-text");
      $slide.animate({bottom: "-"+$slide.height()+"px"}, 400);
      $(this).find("img").animate({top: 0}, 400);
    });
    // END Home page only

    //Prevent FOUC 
    $("html.opacity .masonry, html.opacity .project-masonry, html.opacity .work-page-masonry").find("img").animate({opacity: 1}, 500);

    //Play project hero video
    $f($(".project-hero iframe")[0]).api("play");
  });
});


function go_to_filter_from_url( $grid_container ) {
  var hash = window.location.hash,
    hash_parts = hash.split("/"),
    filter = hash_parts[0].slice(1),
    link_attr = ".tag-" + filter;

  if(filter == "all") {
    link_attr = "*";
  }

  if(filter.length > 0) {
    $(".tag-filters-wrap").show();
    $grid_container.isotope(workPageIsotopeOptions);
    $grid_container.isotope({ filter: link_attr });
    $(".tag-filters .is-checked").removeClass("is-checked");
    $(".tags-toggle-btn").addClass("open");
    $(".filter-link[data-filter=\"" + link_attr + "\"]").addClass("is-checked");
  }
} // end go_to_filter_from_url()


//Masonry Layouts$
var masonryOptions = {
  itemSelector: ".masonry-element",
  columnWidth: ".masonry-element",
  stamp: ".masonry-stamp",
  transitionDuration: 0,
  percentPosition: true
};

var workPageIsotopeOptions = {
  itemSelector: ".masonry-element",
  percentPosition: true,
  masonry: masonryOptions
};

var projectMasonryOptions = {
  itemSelector: ".project-masonry-element",
  columnWidth: ".project-masonry-element",        
  transitionDuration: 0,
  percentPosition: true
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
  
  console.log('grid container', $grid_container);

  $masonry_obj = activate_grid();

} // end init_grid()


function activate_grid() {

  // console.log('activate_grid..');

  grid_is_active = true;

  if( $(".work-page-masonry").length > 0 ) {
    is_isotope = true;
    return $(".work-page-masonry").isotope(workPageIsotopeOptions);
  } else {
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


//when ipad orientation changes
window.onorientationchange = function(){
  // location.reload();
  $(window).trigger("resize");
}

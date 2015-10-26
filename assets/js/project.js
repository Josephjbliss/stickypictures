var mainSwiper = false;

$(document).ready(function(){
  ///////////////////////////////////////
  //Home Page 
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

    onSlideChangeEnd : function(swiper) {
      var slide = swiper.slides[ swiper.activeIndex ];
      $('.swiper-container .caption h2').removeClass('current');
      $('.swiper-slide-active .caption h2').addClass('current');
    },
    onImagesReady : function(swiper) {
      // console.log('ready');
      var slide_width = $('.swiper-container').width();
      // console.log('slide width', slide_width );
      swiper.setWrapperTranslate( -slide_width );
      // swiper.destroy();
    }
  });

  // Hover to show/hide caption
  $(".no-touch .swiper-container").hover(function(e){
    $(this).toggleClass('hover-active');
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

  function go_to_filter_from_url( $grid ) {
    var hash = window.location.hash,
      hash_parts = hash.split("/"),
      filter = hash_parts[0].slice(1),
      link_attr = ".tag-" + filter;

    if(filter == "all") {
      link_attr = "*";
    }

    if(filter.length > 0) {
      $(".tag-filters-wrap").show();
      $grid.isotope(workPageIsotopeOptions);
      $grid.isotope({ filter: link_attr });
      $(".tag-filters .is-checked").removeClass("is-checked");
      $(".tags-toggle-btn").addClass("open");
      $(".filter-link[data-filter=\"" + link_attr + "\"]").addClass("is-checked");
    }
  }
  ///////////////////////////////////////

  ///////////////////////////////////////
  //Masonry Layouts
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

  // If masonry is currently active
  var isActive = false;

  $(window).resize(function(){
    //Update hovers and Masonry on window resize
    updateMasonry();
    
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

  //If resized, only update masonry once with isActive
  function updateMasonry() {
    if(isActive) {
      $(".masonry").masonry("layout");
      $(".project-masonry").masonry("layout");
      $(".work-page-masonry").isotope("layout");
    }

    if ($("body").hasClass("project-page"))  {
      if($(window).width() < 765) {
        if(isActive) {
          $(".project-masonry").masonry("destroy"); // destroy
          isActive = false;
        }
      }
      else {
        if(!isActive){
          $(".project-masonry").imagesLoaded(function(){
            $(".project-masonry").masonry(projectMasonryOptions);
          });
          isActive = true;
        }
      }
    }
    else {
      if($(window).width() < 600) {
        if(isActive) {
          $(".masonry").masonry("destroy");  // destroy
          $(".work-page-masonry").isotope("destroy");  // destroy
          go_to_filter_from_url($(".work-page-masonry"));
          isActive = false;
        }
      }
      else {
        if(!isActive){
          $(".masonry").imagesLoaded(function(){
            $(".masonry").masonry(masonryOptions);
          });
          $(".work-page-masonry").imagesLoaded(function(){
            $(".work-page-masonry").isotope(workPageIsotopeOptions);
          });
          isActive = true;
        }
      }
    }
  }
  ///////////////////////////////////////

  $(window).load(function(){
    updateMasonry(); //Set up masonry only on window load

    //Prevent FOUC 
    $("html.opacity .masonry, html.opacity .project-masonry, html.opacity .work-page-masonry").animate({opacity: 1}, 200);

    //Play project hero video
    $f($(".project-hero iframe")[0]).api("play");
  });
});

//when ipad orientation changes
window.onorientationchange = function(){
  // location.reload();
  $(window).trigger("resize");
}

jQuery.fn.exists = function(){return this.length>0;};
var $ = jQuery;

var mainSwiper = false;

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
  $(window).resize(function(){
    
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

    
  $(window).load(function(){

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

    //Play project hero video
    $f($(".project-hero iframe")[0]).api("play");
  });
});


//when ipad orientation changes
window.onorientationchange = function(){
  // location.reload();
  $(window).trigger("resize");
}

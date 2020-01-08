jQuery.fn.exists = function(){return this.length>0;};
var $ = jQuery;

var mainSwiper = false;

$(document).ready(function(){
  ///////////////////////////////////////
  //Home Page 

  // $(".masonry-element").click(function(){
  //   window.location = $(this).find(".project a").attr("href");
  // });
  ///////////////////////////////////////

  ///////////////////////////////////////
  // Slideshow
  mainSwiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: true,
    autoplay: {
      delay: 5000, // Time between auto slides
      disableOnInteraction: true
    },
    speed: 400, // Transition execution time (in ms)

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      bulletClass: "dot",
      bulletActiveClass: "current"
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    lazy: {
      loadPrevNext: true,
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
      autoplay_vimeo();
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
    
    $(".no-touch .masonry-element .project-text").each(function(){
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
    //Play project hero video
    autoplay_vimeo();
  });
});

function autoplay_vimeo() {
  if( video_autoplay ) {
    $f($(".project-hero iframe")[0]).api("play");
  }
} // end autoplay_vimeo()

//when ipad orientation changes
window.onorientationchange = function(){
  // location.reload();
  $(window).trigger("resize");
}

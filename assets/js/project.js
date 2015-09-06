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
    $(".slideshow .slides").css("width", 100*$(".slideshow img").length+"%");
    $(".slideshow img").css("width", 100/$(".slideshow img").length+"%");

    $(".dot").eq(0).addClass("current");
    
    $(".dot").click(function(evt){
        evt.stopPropagation()
        if(!$(this).hasClass("current")){
            var multiplier = Math.abs($(".dot.current").index() - $(this).index());
            $(".slides").stop().animate({left: -$(this).index()*$("body").width()}, multiplier*$("body").width()/3);
            $(".dot.current").removeClass("current");
            $(this).addClass("current");
            $(".caption h2.current").removeClass("current");
            $(".caption h2").eq($(this).index()).addClass("current");
        }               
    });

    var slideshowInterval = setInterval(nextSlide, 5000);

    function nextSlide() {
        if(!$(".dot.current").is(":last-of-type")){
            $(".dot.current").next().trigger("click");  
        }
        else {
            $(".dot").eq(0).trigger("click");   
        }
    }

    $(".no-touch .slideshow").hover(function(){
        clearInterval(slideshowInterval);
        $(".slideshow .caption").fadeIn(250);
    }, function(){
        slideshowInterval = setInterval(nextSlide, 5000);
        $(".slideshow .caption").fadeOut(250);
    });
    ///////////////////////////////////////


    ///////////////////////////////////////
    //Project Page
    $(".vimeo-iframe").fitVids();   

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
    //Masonry Layouts
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

    // If masonry is currently active
    var isActive = false;

    //Set up masonry
    updateMasonry();

    $(window).resize(function(){
        ///////////////////////////////////////
        //About Page 
            // var halfthewidthofthecontainer = $(".clients-list .client-image").width()/2;
            // var halfthewidthoftheimage = $(".clients-list .client-image img").width()/2;
            // var margintotakeaway = halfthewidthofthecontainer - halfthewidthoftheimage;
            // $(".clients-list").width($(".clients").width() + 2*margintotakeaway)
            // $(".clients-list").css("left", -margintotakeaway);
        ///////////////////////////////////////


        if(isActive) {
            $(".project-masonry").masonry("layout");
        }

        //Update hovers and Masonry on window resize
        updateMasonry();
        
        $(".no-touch .home-project .home-project-text").each(function(){
            $(this).css("bottom", -$(this).height());
        });

        //Resize contact map
        $(".contact-map iframe").width($(".contact-map").width()).height(($(".contact-map").width()*9)/16);

        //Keep slideshow on current slide
        $(".slides").stop().css({left: -$(".dot.current").index()*$("body").width()});
    });

    //If resized, only update masonry once with isActive
    function updateMasonry() {
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
                    $(".masonry").masonry("destroy"); // destroy
                    isActive = false;
                }
            }
            else {
                if(!isActive){
                    $(".masonry").imagesLoaded(function(){
                        $(".masonry").masonry(masonryOptions);
                    });
                    isActive = true;
                }
            }
        }
    }
    ///////////////////////////////////////

    $(window).load(function(){
        ///////////////////////////////////////
        //About Page 
            // var halfthewidthofthecontainer = $(".clients-list .client-image").width()/2;
            // var halfthewidthoftheimage = $(".clients-list .client-image img").width()/2;
            // var margintotakeaway = halfthewidthofthecontainer - halfthewidthoftheimage;
            // $(".clients-list").width($(".clients").width() + 2*margintotakeaway)
            // $(".clients-list").css("left", -margintotakeaway);
        ///////////////////////////////////////

        //Prevent FOUC 
        $("html.opacity .masonry").animate({opacity: 1}, 300, function(){
            if(isActive) {
                $(".project-masonry").masonry("layout");
            }       
        });

        //Play project hero video
        $f($(".project-hero iframe")[0]).api("play");
    });
});
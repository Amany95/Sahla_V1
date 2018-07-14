/** 
 * ===================================================================
 * main js
 *
 * ------------------------------------------------------------------- 
 */ 

(function($) {

    // Init Wow
    wow = new WOW( {
        animateClass: 'animated',
        offset:       100
    });
    wow.init();
 
    // Navigation scrolls
    $('.navbar-nav li a').bind('click', function(event) {
        $('.navbar-nav li').removeClass('active');
        $(this).closest('li').addClass('active');
        var $anchor = $(this);
        var nav = $($anchor.attr('href'));
        if (nav.length) {
        $('html, body').stop().animate({				
            scrollTop: $($anchor.attr('href')).offset().top				
        }, 1500, 'easeInOutExpo');
        
        event.preventDefault();
        }
    });
    
    // About section scroll
    $(".overlay-detail a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top-250
        }, 900, function(){
            window.location.hash = hash;
        });
    });

    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

// show 3 blog
  $("#news").slice(0, 2).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("section:hidden").slice(0, 2).slideDown();
        if ($("section:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });


     $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });


	/*---------------------------------------------------- */
	/* FitVids
	------------------------------------------------------ */ 
  	$(".fluid-video-wrapper").fitVids();
    $(".media-wrapper").fitVids();
    
 	/*---------------------------------------------------- */
	/*	Modal Popup
	------------------------------------------------------ */

    $('.video-link a').magnificPopup({
       type:'inline',
       fixedContentPos: false,
       removalDelay: 200,
       showCloseBtn: false,
       mainClass: 'mfp-fade'       

    });

    // ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {       
        $('#return-to-top').fadeIn(500);    
    } else {
        $('#return-to-top').fadeOut(600);  
    }
});
$('#return-to-top').click(function() {      
    $('body,html').animate({
        scrollTop : 0                      
    }, 1200);
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
    
    $(document).on('click', '.close-popup', function (e) {
    		e.preventDefault();
    		$.magnificPopup.close();
    });


/* -------------------------------------------------------------------------*
     * BANNER CAROUSEL
     * -------------------------------------------------------------------------*/
    // Declare Carousel jquery object
     var owl = $('#banner-carousel');
    // Carousel initialization
  $("#banner-carousel").owlCarousel({
        navigation : true, 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
            pagination: false,
        rewindSpeed: 500,
        loop:true,
        autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
            dots: true
        , navText: ['&#xeb32;'
                , '&#xeb33;'
            ]
            , items: 1
    });
  $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');


$('#customers-testimonials').owlCarousel( {
        loop: true,
        center: true,
        items: 3,
        margin: 30,
        autoplay: true,
        dots:true,
    nav:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });


   // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        _elem.each(function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data('animation-' + _InOut);
            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }
    // Fired before current slide change
    owl.on('change.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation($elemsToanim, 'out');
    });
    // Fired after current slide has been changed
    owl.on('changed.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
        setAnimation($elemsToanim, 'in');
    });

	

})(jQuery);


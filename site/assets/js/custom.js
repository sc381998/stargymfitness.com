
// All Custom jQuery settings 
// and Call the plugin functions here

(function ($) {

    'use strict'
    
	// Cache jQuery Selector
    var $window    = $(window),
        $header    = $('#main_nav'),
        $dropdown  = $('.dropdown-toggle'),
        $contact   = $('#contact-form')


    // Update Header Style + Scroll to Top
    function headerStyle() {
      if($header.length){
        var windowpos = $window.scrollTop();
        if (windowpos >= 100) {
          $header.addClass('fixed-header');
        } else {
          $header.removeClass('fixed-header');
        }
      }
    }

    $window.on('scroll', function() {
      headerStyle();
    });


    // dropdown submenu on hover in desktopand dropdown sub menu on click in mobile 
    $('#navbarSupportedContent').each(function() {
      $dropdown.on('click', function(e){
        if($window.width() < 1100){
          if($(this).parent('.dropdown').hasClass('visible')){
          //  $(this).parent('.dropdown').children('.dropdown-menu').first().stop(true, true).slideUp(300);
          //  $(this).parent('.dropdown').removeClass('visible');
            window.location = $(this).attr('href');
          }
          else{
            e.preventDefault();
            $(this).parent('.dropdown').siblings('.dropdown').children('.dropdown-menu').slideUp(300);
            $(this).parent('.dropdown').siblings('.dropdown').removeClass('visible');
            $(this).parent('.dropdown').children('.dropdown-menu').slideDown(300);
            $(this).parent('.dropdown').addClass('visible');
          }
          e.stopPropagation();
        }
      });
      
      $('body').on('click', function(e){
        $dropdown.parent('.dropdown').removeClass('visible');
      });
      
      $window.on('resize', function(){
        if($window.width() > 991){
          $('.dropdown-menu').removeAttr('style');
          $('.dropdown ').removeClass('visible');
        }
      }); 
    });


    // Auto active class adding with navigation
	$window.on('load', function () {
	  var current = location.pathname;
	  var $path = current.substring(current.lastIndexOf('/') + 1);
	  $('.navbar-nav a').each(function (e) {
		  var $this = $(this);
		  // if the current path is like this link, make it active
		  if ($path == $this.attr('href')) {
			  $this.addClass('active');
		  } else if ($path == '') {
			  $('.navbar-nav li:first-child > a').addClass('active');
		  }
	  })
	})
	
	//Layer Slider Settings and Options
	$('#slider').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'outline',
		showBarTimer: true,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 840
	});


    // Feature property sidebar
    $('.classes').owlCarousel({
       loop: true,
       autoplay: false,
       autoplayTimeout: 1500,
       margin: 30,
       nav: true,
       dots: false,
       navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
       responsive:{

          0:{
            items:1
          },
          600:{
            items:2
          },
          1024:{
            items:4
          },
          1200:{
            items:4
          }
        }
    });

    // Trainers Slider
    $('.our_trainers').owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 1500,
      margin: 30,
      nav: true,
      dots: false,
      navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1024:{
          items:4
        },
        1200:{
          items:4
        }
      }
    });



	// Products Slider
    $('.our_products').owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 1500,
      margin: 30,
      nav: true,
      dots: true,
	  autoplayHoverPause:true,
      navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
      responsive:{

        0:{
          items:1
        },
        600:{
          items:2
        },
        1024:{
          items:4
        },
        1200:{
          items:4
        }
      }
    });

    // Related Products Slider
    $('.related_products').owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 1500,
      margin: 30,
      nav: true,
      dots: false,
      navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
      responsive:{

        0:{
          items:1
        },
        600:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        }
      }
    });



    // Testimonial Slider
    $('.testimonial').owlCarousel({
     loop: true,
     autoplay: true,
     autoplayTimeout: 1500,
     margin: 30,
     nav: true,
     dots: false,
     navText: ['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],
     responsive:{

        0:{
          items:1
        },
        600:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        }
      }
    });


    // Class Details
    $('.class_detail').owlCarousel({
     loop:true,
      margin:30,
      nav:false,
      dots: true,
      autoplayHoverPause:false,
      smartSpeed: 500,
      autoplay: true,
     responsive:{
        0:{
          items:1
        }
      }
     });

    // Fact Counter For Achivement Counting
    function factCounter() {
      if($('.fact-counter').length){
       $('.fact-counter .count.animated').each(function() {
      
        var $t = $(this),
         n = $t.find(".count-num").attr("data-stop"),
         r = parseInt($t.find(".count-num").attr("data-speed"), 10);
         
        if (!$t.hasClass("counted")) {
         $t.addClass("counted");
         $({
          countNum: $t.find(".count-text").text()
         }).animate({
          countNum: n
         }, {
          duration: r,
          easing: "linear",
          step: function() {
           $t.find(".count-num").text(Math.floor(this.countNum));
          },
          complete: function() {
           $t.find(".count-num").text(this.countNum);
          }
         });
        }
        
        //set skill building height


         var size = $(this).children('.progress-bar').attr('aria-valuenow');
         $(this).children('.progress-bar').css('width', size+'%');

        
       });
      }
    }
  
    // Elements Animation
    if($('.wow').length){
      var wow = new WOW(
        {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true       // act on asynchronously loaded content (default is true)
        }
      );
      wow.init();
    }

    // When document is Scrollig, do
    $(window).on('scroll', function() {
      factCounter();
    });


   // Youtube and Vimeo video popup control
   $(function(){
	   
	$.fn.YouTubePopUp = function(options) {

        var YouTubePopUpOptions = $.extend({
                autoplay: 1
        }, options );

        $(this).on('click', function (e) {

            var youtubeLink = $(this).attr("href");

            if( youtubeLink.match(/(youtube.com)/) ){
                var split_c = "v=";
                var split_n = 1;
            }

            if( youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(vimeo.com\/)+[0-9]/) ){
                var split_c = "/";
                var split_n = 3;
            }

            if( youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/) ){
                var split_c = "/";
                var split_n = 5;
            }

            var getYouTubeVideoID = youtubeLink.split(split_c)[split_n];

            var cleanVideoID = getYouTubeVideoID.replace(/(&)+(.*)/, "");

            if( youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(youtube.com)/) ){
                var videoEmbedLink = "https://www.youtube.com/embed/"+cleanVideoID+"?autoplay="+YouTubePopUpOptions.autoplay+"";
            }

            if( youtubeLink.match(/(vimeo.com\/)+[0-9]/) || youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/) ){
                var videoEmbedLink = "https://player.vimeo.com/video/"+cleanVideoID+"?autoplay="+YouTubePopUpOptions.autoplay+"";
            }

            $("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe src="'+videoEmbedLink+'" allowfullscreen></iframe></div></div>');

            if( $('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation') ){
                setTimeout(function() {
                    $('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
                }, 600);
            }

            $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function(){
                $(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function() { $(this).remove(); });
            });

            e.preventDefault();

        });

        $(document).keyup(function(e) {

            if ( e.keyCode == 27 ){
                $('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click();
            }

        });

    };
	
    $("a.video-popup").YouTubePopUp();
    //jQuery("a.video-popup").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
   });

    // Gallery With Filters List
    if($('.filter-list').length){
      $('.filter-list').mixItUp({});
    }


    // Events Time Counter 
    $(document).ready(function() {
      var nodes = $('.timer');
      $.each(nodes, function(index, value) {
        var date = $(this).data('date');
        
        setInterval(() => {
          
          var endTime = new Date(date);     
          endTime = (Date.parse(endTime) / 1000);

          var now = new Date();
          now = (Date.parse(now) / 1000);

          var timeLeft = endTime - now;

          var days = Math.floor(timeLeft / 86400); 
          var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
          var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
          var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
      
          if (hours < "10") { hours = "0" + hours; }
          if (minutes < "10") { minutes = "0" + minutes; }
          if (seconds < "10") { seconds = "0" + seconds; }

          $(value).find('.day').html(days + "</br><span>Days</span>");
          $(value).find('.hour').html(hours + "</br><span>Hour</span>");
          $(value).find('.minute').html(minutes + "</br><span>Min</span>");
          $(value).find('.second').html(seconds + "</br><span>Sec</span>");  
          
        }, 1000);
      })
    })

    function makeTimer( date, el ) {

      var endTime = new Date(date);     
      endTime = (Date.parse(endTime) / 1000);

      var now = new Date();
      now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      var days = Math.floor(timeLeft / 86400); 
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      $("#days").html(days + "<span>Days</span>");
      $("#hours").html(hours + "<span>Hours</span>");
      $("#minutes").html(minutes + "<span>Minutes</span>");
      $("#seconds").html(seconds + "<span>Seconds</span>");   
    }

    setInterval(function() { makeTimer(); }, 1000);


    // LightBox / Fancybox
    $('[data-fancybox="gallery"]').fancybox({
       animationEffect: "zoom",
       transitionEffect: "fade"
    });


    // Gallery With Filters List
    if($('.filter-list').length){
       $('.filter-list').mixItUp({});
    }


    // Price Range
    $(".js-range-slider").ionRangeSlider({
      type: "double",
      grid: true,
      min: 1,
      max: 1000,
      from: 200,
      to: 700,
      prefix: "$"
    });


    // magnify image on hover
    $(function() {
      // Initiate carousel
      $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        onTranslated: function() {
          // Update Magnify when slide changes
          $zoom.destroy().magnify();
        }
      });
      // Initiate zoom
      var $zoom = $('.zoom').magnify();
    });

    // Quantity increment 
    $(document).ready(function(){
    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());
          // If is not undefined
          $('#quantity').val(quantity + 1);
          // Increment 
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            // If is not undefined
                // Increment
              if(quantity>0){
              $('#quantity').val(quantity - 1);
              }
        }); 
    });


    // Contact Form Validation
    if($contact.length){
      $contact.validate({  //#contact-form contact form id
        rules: {
          name: {
            required: true    // Field name here
          },
          email: {
            required: true, // Field name here
            email: true
          },
          subject: {
            required: true
          },
          message: {
            required: true
          }
        },
        
        messages: {
                name: "Please enter your Name", //Write here your error message that you want to show in contact form
                email: "Please enter valid Email", //Write here your error message that you want to show in contact form
                subject: "Please enter your Subject", //Write here your error message that you want to show in contact form
				message: "Please write your Message" //Write here your error message that you want to show in contact form
            },

		  submitHandler: function (form) {
			  $('#send').attr({'disabled' : 'true', 'value' : 'Sending...' });
			  $.ajax({
				  type: "POST",
				  url: "email.php",
				  data: $(form).serialize(),
				  success: function () {
					  $('#send').removeAttr('disabled').attr('value', 'Send');
					  $( "#success").slideDown( "slow" );
					  setTimeout(function() {
					  $( "#success").slideUp( "slow" );
					  }, 5000);
					  form.reset();
				  },
				  error: function() {
					  $('#send').removeAttr('disabled').attr('value', 'Send');
					  $( "#error").slideDown( "slow" );
					  setTimeout(function() {
					  $( "#error").slideUp( "slow" );
					  }, 5000);
				  }
			  });
			  return false; // required to block normal submit since you used ajax
		  }

      });
    } 

    // Preloader For Hide loader
    function handlePreloader() {
      if($('.theme-loader').length){
        $('.theme-loader').delay(500).fadeOut(500);
        $('body').removeClass('page-load');
      }
    }

   // When document is loading, do Loader
    $window.on('load', function() {
      handlePreloader();
    });

  
})(jQuery);


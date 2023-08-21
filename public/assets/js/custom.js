/*-----------------------------------------------------------------------------------

    Template Name: Foodio - Fast Food & Restaurant HTML Template


    Note: This is Custom Js file

-----------------------------------------------------------------------------------

    [Table of contents]

    1. slider-home-1
    2. dishes
    3. bratlee-slider
    4. three-slider
    5. logodata
    6. choosecategory
    7. mobile-nav
    8. Cart Popup Start
    9. countdown days
    10. count number
    11. progress go to top
    12. Preloader

-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($){
    if ( $.isFunction($.fn.owlCarousel) ) {

/* 1. slider-home-1 */

    $('.slider-home-1').owlCarousel({
        loop:true,
        // arrows:false,
        // autoplay:true,
        // autoplayTimeout:4000,
        items:1
      })
/* 2. dishes */ 
        $('.dishes').owlCarousel({
        loop:true,
        dot:false,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:2
            },
            1200:{
                items:3
            }
          }
        })
/* 3. bratlee-slider */
        $('.bratlee-slider').owlCarousel({
        loop:true,
        arrows:false,
        autoplay:true,
        autoplayTimeout:4000,
        items:1
      })
/* 4. three-slider */
        $('.three-slider').owlCarousel({
        loop:true,
        arrows:true,
        // autoplay:true,
        // autoplayTimeout:4000,
        items:1,
        navText: ["<i class='fa-solid fa-arrow-left-long'></i>","<i class='fa-solid fa-arrow-right-long'></i>"],
      })
/* 5. logodata */
        $('.logodata').owlCarousel({
        loop:true,
        dot:false,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            800:{
                items:3
            },
            1000:{
                items:4
            },
            1200:{
                items:5
            },
            1400:{
                items:6
            }
          }
        })
/* 6. choosecategory */
        $('.choosecategory').owlCarousel({
        loop:true,
        dot:false,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            800:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            }
          }
        })
    }
/* 7. mobile-nav */
    jQuery('.mobile-nav .menu-item-has-children').on('click', function($) {

          jQuery(this).toggleClass('active');

        }); 

        jQuery('#nav-icon4').click(function($){

            jQuery('#mobile-nav').toggleClass('open');

        });

        jQuery('#res-cross').click(function($){

           jQuery('#mobile-nav').removeClass('open');

        });


        jQuery('.bar-menu').click(function($){

            jQuery('#mobile-nav').toggleClass('open');
            jQuery('#mobile-nav').toggleClass('hmburger-menu');
            jQuery('#mobile-nav').show();

        });

        jQuery('#res-cross').click(function($){

           jQuery('#mobile-nav').removeClass('open');

        });
  
}) ;

/* 8. Cart Popup Start */

    jQuery('.pr-cart').on('click', function() {

      jQuery('.cart-popup').toggleClass('show-cart');

    });

    // Cart Popup End

    /* 9. countdown days */
    if(jQuery("#days").length){

    (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

      let today = new Date(),
          dd = String(today.getDate()).padStart(2, "0"),
          mm = String(today.getMonth() + 1).padStart(2, "0"),
          yyyy = today.getFullYear(),
          nextYear = yyyy + 1,
          dayMonth = "12/30/",
          birthday = dayMonth + yyyy;
      
      today = mm + "/" + dd + "/" + yyyy;
      if (today > birthday) {
        birthday = dayMonth + nextYear;
      }
      //end
      
      const countDown = new Date(birthday).getTime(),
          x = setInterval(function() {    

            const now = new Date().getTime(),
                  distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
              document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
              document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
              document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
              document.getElementById("headline").innerText = "It's my birthday!";
              document.getElementById("countdown").style.display = "none";
              document.getElementById("content").style.display = "block";
              clearInterval(x);
            }
            //seconds
          }, 0)
      }());
}

// 10. count number

    (function($) {
  $.fn.countTo = function(options) {
    options = options || {};

    return $(this).each(function() {
      // set options for current element
      var settings = $.extend(
        {},
        $.fn.countTo.defaults,
        {
          from: $(this).data("from"),
          to: $(this).data("to"),
          speed: $(this).data("speed"),
          refreshInterval: $(this).data("refresh-interval"),
          decimals: $(this).data("decimals")
        },
        options
      );

      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;

      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data("countTo") || {};

      $self.data("countTo", data);

      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);

      // initialize the element with the starting value
      render(value);

      function updateTimer() {
        value += increment;
        loopCount++;

        render(value);

        if (typeof settings.onUpdate == "function") {
          settings.onUpdate.call(self, value);
        }

        if (loopCount >= loops) {
          // remove the interval
          $self.removeData("countTo");
          clearInterval(data.interval);
          value = settings.to;

          if (typeof settings.onComplete == "function") {
            settings.onComplete.call(self, value);
          }
        }
      }

      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0, // the number the element should start at
    to: 0, // the number the element should end at
    speed: 1000, // how long it should take to count between the target numbers
    refreshInterval: 100, // how often the element should be updated
    decimals: 0, // the number of decimal places to show
    formatter: formatter, // handler for formatting the value before rendering
    onUpdate: null, // callback method for every time the element is updated
    onComplete: null // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
})(jQuery);

jQuery(function($) {
  // custom formatting example
  $(".count-number").data("countToOptions", {
    formatter: function(value, options) {
      return value
        .toFixed(options.decimals)
        .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
    }
  });

  // start all the timers
  $(".timer").each(count);

  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
    $this.countTo(options);
  }
});

/* 11. progress go to top */

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#f3274c ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;



/* 12. Preloader */ 
        

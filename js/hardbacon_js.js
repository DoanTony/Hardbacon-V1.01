jQuery(function()
{
  jQuery('.navbar-toggle').on('click',function()
  {
    jQuery('.navigation').toggleClass('open');
  });
});

// ===== Scroll to Top ==== 
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 1000) {        // If page is scrolled more than 50px
        jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        jQuery('#mainNav').addClass('menu-opacity')  // Add menu effect
        jQuery('.sub-menu').addClass('menu-opacity');
    } else {
        jQuery('#mainNav').removeClass('menu-opacity');   // Else remove menu effect
       jQuery('.sub-menu').removeClass('menu-opacity');
    }
});


function backtotop()
{
        jQuery('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
}

jQuery(document).ready(function(){
    jQuery('#brokeragetab').hide();
        jQuery('#brokeragebtn').on('click', function(event) { 
               jQuery('#robotab').hide();      
             jQuery('#brokeragetab').show();
              jQuery('.brokerage').addClass('selected');
                 jQuery('.robo').removeClass('selected');
        });
            jQuery('#robobtn').on('click', function(event) {
         jQuery('#brokeragetab').hide();        
             jQuery('#robotab').show();
                jQuery('.robo').addClass('selected');
                   jQuery('.brokerage').removeClass('selected');
        });
    });

jQuery(document).ready(function(){
    jQuery('[data-toggle="popover"]').popover();
});

jQuery(document).ready(function(){ 
jQuery('#loading').fadeOut(5000);
});


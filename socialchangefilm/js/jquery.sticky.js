// Sticky Plugin v1.0.0 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 2/12/2012
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//       It will only set the 'top' and 'position' of your element, you
//       might need to adjust the width in some cases.


( function($) {
    
$(window).load(function(){
    if($(document).scrollTop() == 0)
    {
        $('#masthead').data('size','big');
    }
    else
    {   
        //Added this section in so that if the page were reloaded when not at the top, it would minimize the header before scrolling the page
        $('#masthead').data('size', 'small'); 
        $('#masthead').stop().animate({
            top:'-125px'
        },200);
    }
});

$(window).scroll(function(){
    if($(document).scrollTop() > 75)
    {
        if($('#masthead').data('size') == 'big')
        {
            $('#masthead').data('size','small');
            $('#masthead').stop().animate({
                top:'-125px'
            },400);
        }
    }
    else
    {
        if($('#masthead').data('size') == 'small')
        {
            $('#masthead').data('size','big');
            $('#masthead').stop().animate({
                top:'0px'
            },400);
        }  
    }
});


// Initialize all .smoothScroll links
jQuery(function($){ $.localScroll({filter:'.smoothScroll'}); });
    
}) (jQuery);

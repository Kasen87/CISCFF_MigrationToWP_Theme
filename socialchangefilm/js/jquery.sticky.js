//Basic Functionality for this theme. Utilizes Smooth Scrolling, Menu Hiding, and 

( function($) {
    
//Menu Function Shrinks or Grows Depending on location in document
    
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
                top:'-125px' //Modified for current header size. Change this if the header logo changes sizes.
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
            }, 400);
        }  
    }
});

//Smooth Scrolling Section
//Includes Scroll to Top Function --Relies on this.hash returning nothing (which happens if you set the id="#"
//Long story short - If you want to scroll to the top with a button, give the anchor --> (href="#")
    
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
        
	    e.preventDefault();
        
	    var target = this.hash;
        
        if( target ) {
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                //window.location.hash = target;  --This line shows the link at hover option at the bottom of browsers.
            });
        }
        else {
            $('html, body').stop().animate({
                'scrollTop' : 0}, 900);
        }
	});
});

}) (jQuery);

(function ($) {
	$(document).ready(function() {
	
  	$('.file a').attr('target', '_blank');

    $('footer .menu .menu-mlid-864').wrapAll("<div class='col-one'></div>");
    $('footer .menu .menu-mlid-869, footer .menu .menu-mlid-905').wrapAll("<div class='col-two'></div>");
    $('footer .menu .menu-mlid-871, footer .menu .menu-mlid-873, footer .menu .menu-mlid-874, footer .menu .menu-mlid-904, footer .menu .menu-mlid-903, footer .menu .menu-mlid-1138').wrapAll("<div class='col-three'></div>");
	
		$( ".search-trigger" ).click(function() {
		  $('.hidden-search').toggleClass( "show" );
		  $(this).toggleClass( "show" );
		  $('body').toggleClass( "search-show" );
		});
	
	
   
  // FAQ ACCORDION 
  var allPanels = $('.accordion > .answer').hide();
    
  $('.accordion .question a').click(function() {
      $this = $(this);
      $target =  $this.parent().next();

      if(!$target.hasClass('active')){
         allPanels.removeClass('active').slideUp();
         $target.addClass('active').slideDown();
      }
      
    return false;
  });


	
	

		// JS Respond Breakpoints
		var jRes = jRespond([{
		    label: 'small',
		    enter: 0,
		    exit: 979
		},{
		    label: 'large',
		    enter: 980,
		    exit: 10000
		}]);
		
		
		jRes.addFunc({
		    breakpoint: 'small',
		    enter: function() {
			    // Mobile Menu	
        	$("nav.main-navigation").clone().attr('id', 'menu-original' ).addClass("hidden-xs").insertBefore("nav.main-navigation");
			  	$(".front-intro-block").clone().addClass("mobile-front-intro").insertBefore("#block-views-front-blocks-block");

			    
	 	      $('ul.nice-menu ul').css('display', '');
					$('ul.nice-menu ul').css('visibility', '');
					$('.hidden-xs .main-menu .content').attr('id', 'openmenu');
					$('.hidden-xs .main-menu .content').mmenu();
					$(".menu-trigger").trigger("open");
	
		    },
		    exit: function() {
		    $(".mobile-front-intro").remove();
		    }
		});
 

	});
})(jQuery);



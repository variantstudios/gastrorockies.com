(function ($) {
$(document).ready(function() {
  
  
  /*var $bc = $('.post-date');
$bc.html($bc.text().replace('2010', '<span class="year">2010</span>'));
$bc.html($bc.text().replace('2011', '<span class="year">2011</span>'));
$bc.html($bc.text().replace('2012', '<span class="year">2012</span>'));
$bc.html($bc.text().replace('2013', '<span class="year">2013</span>'));
$bc.html($bc.text().replace('2014', '<span class="year">2014</span>'));
$bc.html($bc.text().replace('2015', '<span class="year">2015</span>'));*/



		/*  Mobile Menu */
  $('.navigation').prepend('<div class="mobile-bar"><a id="navtoggle" class="menu-trigger" href="#"><span class="menu-open-icon"></span></a></div>');
  //$('.zone-menu').append('<div class="close"><a class="menu-trigger" id="navtoggle" href="#"></a></div>');
  
  	$('#nav ul').attr('id', 'menu');
	
	  	var jPM = $.jPanelMenu({
	      menu: '#menu'
	    });
	
	  	// JS Respond Breakpoints
	  	var jRes = jRespond([
	    {
	        label: 'small',
	        enter: 0,
	        exit: 979
	    },{
	        label: 'large',
	        enter: 980,
	        exit: 10000
	    }
	]);
	
	
	jRes.addFunc({
	    breakpoint: 'small',
	    enter: function() {
	        jPM.on();
	    },
	    exit: function() {
	        jPM.off();
	    }
	});
 

});
})(jQuery);
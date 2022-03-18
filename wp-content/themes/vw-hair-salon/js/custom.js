function vw_hair_salon_menu_open_nav() {
	window.vw_hair_salon_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_hair_salon_menu_close_nav() {
	window.vw_hair_salon_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   });
});

jQuery(document).ready(function () {
	window.vw_hair_salon_currentfocus=null;
  	vw_hair_salon_checkfocusdElement();
	var vw_hair_salon_body = document.querySelector('body');
	vw_hair_salon_body.addEventListener('keyup', vw_hair_salon_check_tab_press);
	var vw_hair_salon_gotoHome = false;
	var vw_hair_salon_gotoClose = false;
	window.vw_hair_salon_responsiveMenu=false;
 	function vw_hair_salon_checkfocusdElement(){
	 	if(window.vw_hair_salon_currentfocus=document.activeElement.className){
		 	window.vw_hair_salon_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_hair_salon_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_hair_salon_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_hair_salon_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_hair_salon_gotoHome = true;
			} else {
				vw_hair_salon_gotoHome = false;
			}

		}else{

			if(window.vw_hair_salon_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_hair_salon_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_hair_salon_responsiveMenu){
				if(vw_hair_salon_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_hair_salon_gotoClose = true;
				} else {
					vw_hair_salon_gotoClose = false;
				}
			
			}else{

			if(window.vw_hair_salon_responsiveMenu){
			}}}}
		}
	 	vw_hair_salon_checkfocusdElement();
	}
});

jQuery(function($){
	new WOW().init();
});

(function( $ ) {

	jQuery('document').ready(function($){
	    setTimeout(function () {
    		jQuery("#preloader").fadeOut("slow");
	    },1000);
	});

	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});

		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});
	
})( jQuery );

jQuery(document).ready(function () {
  	function vw_hair_salon_search_loop_focus(element) {
	  var vw_hair_salon_focus = element.find('select, input, textarea, button, a[href]');
	  var vw_hair_salon_firstFocus = vw_hair_salon_focus[0];  
	  var vw_hair_salon_lastFocus = vw_hair_salon_focus[vw_hair_salon_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function vw_hair_salon_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_hair_salon_firstFocus) {
	        vw_hair_salon_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_hair_salon_lastFocus) {
	        vw_hair_salon_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
        jQuery(".serach_outer").slideDown(1000);
    	vw_hair_salon_search_loop_focus(jQuery('.serach_outer'));
    });

    jQuery('.closepop a').click(function(){
        jQuery(".serach_outer").slideUp(1000);
    });
});
/*
 * this is script
 *
 * @package conveythought
 */
/*--------------------------------------------------------------
  fancybox
--------------------------------------------------------------*/
jQuery(document).ready(function() {
  jQuery(".post a img").fancybox({
    closeClick : true,

    openEffect : 'none',

    helpers : {
      title : {
        type : 'inside'
      },
      overlay : {
        css : {
          'background' : 'rgba(255, 255, 255, 0.65)'
        }
      }
    }
  });
});

/*--------------------------------------------------------------
  navigation menu
--------------------------------------------------------------*/
jQuery(function() {
    jQuery('.dropdown-menu').hide();
    jQuery(window).on('load', function() {
		jQuery('.sub-menu').addClass('dropdown-menu');
		jQuery('.menu-item-has-children a').addClass('dropdown-toggle');
    });
});

jQuery(function(){
    if(jQuery('.header-nav').length){
        jQuery('#container').addClass('body-pad');
    } else {
    }
});

/*--------------------------------------------------------------
  related
--------------------------------------------------------------*/
jQuery(function(){
	jQuery('ul.related-ul').each(function(){
		var rep = 0;
		jQuery(this).children().each(function(){
			var itemHeight = parseInt(jQuery(this).css('height'));
			if(itemHeight > rep){
				rep = itemHeight;
			};
		});
		jQuery(this).children().css({height:(rep)});
	});
});

/*--------------------------------------------------------------
  slider
--------------------------------------------------------------*/
jQuery(window).load(function() {

  jQuery('.flexslider').flexslider({
    animation: "slide",
    easing: "easeOutSine",
    smoothHeight: true,
    slideshowSpeed: 5000,
    animationSpeed: 500,
    pauseOnHover: true,
    directionNav: false,

  });
});

/*--------------------------------------------------------------
  post scroll action
--------------------------------------------------------------*/
jQuery(function(){
    var setElm = jQuery('.post'),
    delayHeight = 150;

    setElm.css({display:'block',opacity:'0'});
    jQuery('html,body').animate({scrollTop:0},1);

    jQuery(window).on('load scroll resize',function(){
        setElm.each(function(){
            var setThis = jQuery(this),
            elmTop = setThis.offset().top,
            elmHeight = setThis.height(),
            scrTop = jQuery(window).scrollTop(),
            winHeight = jQuery(window).height();
            if (scrTop > elmTop - winHeight + delayHeight && scrTop < elmTop + elmHeight){
                setThis.stop().animate({opacity:'1'},300);
            } else if (scrTop < elmTop - winHeight + delayHeight && scrTop < elmTop + delayHeight){
                setThis.stop().animate({opacity:'0'},300);
            }
        });
    });
});

// var faqs = {

// 	el: {
// 		faq_headers: $('.faq h4'),
// 		faq_sections: $('.faq li')
// 	},

// 	bindUIActions: function() {

// 		this.el.faq_headers.on('click', this.headerClick);

// 	},

// 	init: function() {
// 		this.bindUIActions();
// 	},

// 	headerClick: function(e) {
// 		var $this = $(this);

// 		$this.next().slideUp();
// 	},

// 	collapseAll: function() {
// 		this.el.faq_headers.removeClass('open');
// 	}


// };
/*global jQuery */
/*!
* FitText.js 1.1
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );

/*! Tappy! - a lightweight normalized tap event. Copyright 2013 @scottjehl, Filament Group, Inc. Licensed MIT */
(function( w, $, undefined ){

	var tap = function( $els ){
		return $els.each(function(){

			var $el = $( this ),
				lastE,
				resetTimer,
				lastScroll,
				scrollTolerance = 15,
				href;

			function trigger( e ){
				e.preventDefault();
				$( e.target ).trigger( "tap", [ e ] );
			}

			function start(){
				lastScroll = w.document.body.scrollTop;
				if( $el.is( "a" ) ){
					// set href to null hash during tap. this prevents the address bar from dropping down in iOS
					href = $el[ 0 ].href;
					$el[ 0 ].href = "#";
				}
			}

			function end( e ){

				e.preventDefault();

				// this part prevents a double callback from touch and mouse on the same tap
				if( lastE && lastE !== e.type ){
					return false;
				}

				lastE = e.type;
				clearTimeout( resetTimer );
				resetTimer = setTimeout( function(){
					lastE = null;
				}, 1000 );

				// if a scroll happened between touchstart and touchend
				if( e.type === "touchend" && Math.abs( w.document.body.scrollTop - lastScroll ) > scrollTolerance ){
					return false;
				}

				// set href back
				if( href ){
					$el[ 0 ].href = href;
				}
				href = null;

				trigger( e );
			}

			$el
				.bind( "touchstart", start )
				.bind( "touchend", end )
				.bind( "click", end );
		});
	};

	// monkeybind
	var oldBind = $.fn.bind;
	$.fn.bind = function( evt, callback ){
		if( /(^| )tap( |$)/.test( evt ) ){
			tap( this );
		}
		return oldBind.apply( this, [evt, callback] );
	};

}( this, jQuery ));
$(document).ready(function() {

  jQuery(".header-fittext").fitText(1.2);
  // jQuery(".subheader-fittext").fitText(0.6);
  jQuery(".subheader-fittext").fitText();



/*
* === FAQ ACTIONS ===
*/

  $('.faq h4').on('click', function(){
    var $this = $(this);

    if ($this.hasClass('open')) {
      $(this).removeClass('open').next().slideUp();
    } else {
      $(this).addClass('open').next().slideDown();
    }
  });

  setTimeout(function() {
    $('.faq h4').first().trigger('click');
  },1500);






    function hasParentClass(e, classname) {
      if (e === document) {return false;}

      if ($(e).parents().hasClass(classname)) {return true;}

      return false;

    }

    function Navinit() {

      var $container = $('#st-container'),
          $button = $('#menu-btn'),

          resetMenu = function() {
            $container.removeClass('st-menu-open');
          },


          bodyClickFn = function(evt) {
            if( !hasParentClass( evt.target, 'st-menu' ) ) {
              resetMenu();
              $(document).off('click', bodyClickFn);
            }
          };


      $(document).on('click', '#menu-btn', function(e) {
        e.stopPropagation();
        e.preventDefault();
        $container.addClass('st-container');
        $container.addClass('st-effect-3');

        //only add the open after the effect has been added
        setTimeout( function() { $container.addClass('st-menu-open');}, 25);

        //on body click, reset the menu
        // document.addEventListener( 'click', bodyClickFn );

        $(document).on('click', bodyClickFn);

      });

    };

    Navinit();


//Chris Coyier Smooth Scroll
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('.st-content').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        return false;
      }
    }
  });

});



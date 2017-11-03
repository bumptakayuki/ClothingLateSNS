/*
 * B-Shop HTML Template
 * Copyright 2016 8Guild.com
 * Theme Custom Scripts
 *
    ╔══╗╔═══╗╔╗╔╗╔══╗╔╗──╔══╗
  	║╔╗║║╔══╝║║║║╚╗╔╝║║──║╔╗╚╗
  	║╚╝║║║╔═╗║║║║─║║─║║──║║╚╗║
  	║╔╗║║║╚╗║║║║║─║║─║║──║║─║║
  	║╚╝║║╚═╝║║╚╝║╔╝╚╗║╚═╗║╚═╝║
  	╚══╝╚═══╝╚══╝╚══╝╚══╝╚═══╝
*/

jQuery(document).ready(function($) {
	'use strict';

	//Disable default link behavior for dummy links that have href='#'
	// ---------------------------------------------------------------
	var $emptyLink = $('a[href=#]');
	$emptyLink.on('click', function(e){
		e.preventDefault();
	});

	// Initialize Slidebars
	// var menuInitHeight
  var controller = new slidebars();
  controller.init();

	$( '.offcanvas-toggle' ).on( 'click', function ( event ) {

		// Set initial menu height value
		menuInitHeight = $( '.offcanvas-navigation .menu' ).height()
	  // Stop default action and bubbling
	  event.stopPropagation();
	  event.preventDefault();

	  // Toggle the Slidebar with id 'id-2'
	  controller.toggle( 'id-1' );
	} );

	// Offcanvas Navigation
	// --------------------

	// Back Button
	// -----------
	var menuInitHeight,
		backBtnText = $( '.offcanvas-navigation' ).data( 'back-btn-text' ),
		subMenu = $( '.offcanvas-navigation .sub-menu' );


	$('.offcanvas-toggle').on('click', function() {
		menuInitHeight = $( '.offcanvas-navigation .menu' ).height()
	});
	subMenu.each( function () {
		$( this ).prepend( '<li class="back-btn"><a href="#">' + backBtnText + '</a></li>' );
	} );

	var hasChildLink = $( '.menu-item-has-children > a' ),
		backBtn = $( '.offcanvas-navigation .sub-menu .back-btn' );

	backBtn.on( 'click', function ( e ) {
		var self = this,
			parent = $( self ).parent(),
			siblingParent = $( self ).parent().parent().siblings().parent(),
			menu = $( self ).parents( '.menu' );

		parent.removeClass( 'in-view' );
		siblingParent.removeClass( 'off-view' );
		if ( siblingParent.attr( "class" ) === "menu" ) {

			menu.velocity( { height: menuInitHeight }, 100 );
		} else {
			menu.velocity( { height: siblingParent.height() }, 100 );
		}

		e.stopPropagation();
	} );

	hasChildLink.on( 'click', function ( e ) {
		var self = this,
			parent = $( self ).parent().parent(),
			menu = $( self ).parents( '.menu' );

		parent.addClass( 'off-view' );
		$( self ).parent().find( '> .sub-menu' ).addClass( 'in-view' );
		menu.velocity( { height: $( self ).parent().find( '> .sub-menu' ).height() }, 100 );

		e.preventDefault();
		return false;
	} );

	// Coundown init
	// -------------
	if($('.countdown').length > 0) {
		$(".countdown")
	  .countdown("2017/08/08", function(event) {
			var $this = $(this).html(event.strftime(''
		 + '<span>Deal ends in</span>'
		 + '<div> <span>%D</span> days</div>'
		 + '<div> <span>%H</span> hr</div>'
		 + '<div> <span>%M</span> min</div>'
		 + '<div> <span>%S</span> sec</div>'));
	  });
	}

	// Range Slider
	// ------------
	if($('.slider-margin').length > 0) {
		var marginSlider = document.getElementById('slider-margin');
		noUiSlider.create(marginSlider, {
			start: [ 120, 800 ],
			margin: 1,
			step: 1,
			connect: true,
			range: {
				'min': 0,
				'max': 1000
			},
			format: wNumb({
				decimals: 0,
				thousand: '.',
				prefix: '$',
			})
		});
	}

	// Extend to range slider digits
	// -----------------------------
	if($('.slider-margin').length > 0) {
		var marginMin = document.getElementById('slider-margin-value-min'),
			marginMax = document.getElementById('slider-margin-value-max');

		marginSlider.noUiSlider.on('update', function ( values, handle ) {
			if ( handle ) {
				marginMax.innerHTML = values[handle];
			} else {
				marginMin.innerHTML = values[handle];
			}
		});
	}

	// Gallery popUp
	// -------------
	if($('.zoom-gallery').length > 0) {
		$('.zoom-gallery').magnificPopup({
			delegate: '.gallery-item',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function(element) {
					return element.find('img');
				}
			}

		});
	}

	// All Scripts For On Load Init
	// ----------------------------
	$(window).on('load', function() {
		// Tiles Carousel
		// (Settings are Customized Thru Data Attr)
		// ----------------------------------------
		if($('.preview-carousel').length > 0) {
			$('.preview-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				draggable: false,
				customPaging : function(slider, i) {
			    var color = $(slider.$slides[i]).data('color');
			    return '<a style="background-color: '+color+'"></a>';
		    },
				nextArrow:
					'<i class="slick-next material-icons chevron_right"></i>',
		  	prevArrow:
					'<i class="slick-prev material-icons chevron_left"></i>'
			});
		}

		// Tiles Carousel
		// (Settings are Customized Thru Data Attr)
		// ----------------------------------------
		if($('.deal-carousel').length > 0) {
			$('.deal-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				draggable: true,
				appendArrows: $('.arrows'),
				nextArrow:
					'<i class="slick-next material-icons chevron_right"></i>',
		  	prevArrow:
					'<i class="slick-prev material-icons chevron_left"></i>'
			});
		}

		// Image Carousel
		// (Settings are Customized Thru Data Attr)
		// ----------------------------------------
		if($('.image-carousel').length > 0) {
			$('.image-carousel').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				draggable: true,
				customPaging : function(slider, i) {
			    var color = $(slider.$slides[i]).data('color');
			    return '<a style="background-color: '+color+'"></a>';
		    },
				nextArrow:
					'<i class="slick-next material-icons chevron_right"></i>',
		  	prevArrow:
					'<i class="slick-prev material-icons chevron_left"></i>'
			});
		}

		// Category Carousel
		// -----------------
		$('.items-carousel').slick({
		  slidesToShow: 5,
		  slidesToScroll: 1,
			nextArrow:
				'<i class="slick-next material-icons chevron_right"></i>',
			prevArrow:
				'<i class="slick-prev material-icons chevron_left"></i>',
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 4
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1
		      }
		    }
		  ]
		});

		// Isotope Grid
		// ------------
		var $grid = $('.masonry-grid');
		if($grid.length > 0) {
		  $grid.isotope({
			  itemSelector: '.grid-item',
			  transitionDuration: '0.7s',
			  masonry: {
			    columnWidth: '.grid-sizer',
			    gutter: '.gutter-sizer'
			  }
		  });
		}

		// Filtering Isotope Grid
		// ----------------------
		if($('.filter-grid').length > 0) {
		  var $filterGrid = $('.filter-grid');
			$('.nav-filters').on( 'click', 'a', function(e) {
				e.preventDefault();
				$('.nav-filters li').removeClass('active');
				$(this).parent().addClass('active');
			  var $filterValue = $(this).attr('data-filter');
			  $filterGrid.isotope({ filter: $filterValue });
			});
		}

		// Revolution SLider Init & Settings
		// ---------------------------------
		jQuery("#slider1").revolution({
      sliderType:"standart",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			disableProgressBar:"on",
      delay:7000,
      navigation: {
          arrows:{
						enable:true,
						hide_onleave:true
					},
					touch:{
		         touchenabled:"on",
		         swipe_treshold : 75,
		         swipe_min_touches : 1,
		         drag_block_vertical:false,
		         swipe_direction:"horizontal"
		      }
      },
			fullScreenOffsetContainer: ".header",
			responsiveLevels:[2000,992,768,400],
			visibilityLevels:[2020,1024,778,480],
      gridwidth:[2000,1200,750,480],
      gridheight:[768,768,500,720],
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2500,
				levels:[5,10,20,30,25,30,35,40,45,50,47,48,49,50,51,55],
				ddd_shadow:"off",
				ddd_bgfreeze:"on",
				ddd_overflow:"hidden",
				ddd_layer_overflow:"visible",
				ddd_z_correction:1705,
			}
    });

		// Single Item Page Carousel
		// -------------------------
		$('.thumbnail-carousel').slick({
			slidesToShow: 5,
			centerMode: true,
			centerPadding: '0',
			asNavFor: '.image-preview1',
			focusOnSelect: true,
			infinite: false
		});

		$('.image-preview1').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
			infinite: false,
			asNavFor: '.thumbnail-carousel'
		});

		// Google Maps API
		// ---------------
		var $googleMap = $('.google-map');
		if($googleMap.length > 0) {
			$googleMap.each(function(){
				var mapHeight = $(this).data('height'),
						address = $(this).data('address'),
						zoom = $(this).data('zoom'),
						controls = $(this).data('disable-controls'),
						scrollwheel = $(this).data('scrollwheel'),
						marker = $(this).data('marker'),
						markerTitle = $(this).data('marker-title'),
						styles = $(this).data('styles');
				$(this).height(mapHeight);
				$(this).gmap3({
	          marker:{
	            address: address,
	            data: markerTitle,
	            options: {
	            	icon: marker
	            },
	            events: {
	              mouseover: function(marker, event, context){
	                var map = $(this).gmap3("get"),
	                  	infowindow = $(this).gmap3({get:{name:"infowindow"}});
	                if (infowindow){
	                  infowindow.open(map, marker);
	                  infowindow.setContent(context.data);
	                } else {
	                  $(this).gmap3({
	                    infowindow:{
	                      anchor:marker,
	                      options:{content: context.data}
	                    }
	                  });
	                }
	              },
	              mouseout: function(){
	                var infowindow = $(this).gmap3({get:{name:"infowindow"}});
	                if (infowindow){
	                  infowindow.close();
	                }
	              }
	            }
	          },
	          map:{
	            options:{
	              zoom: zoom,
	              disableDefaultUI: controls,
	              scrollwheel: scrollwheel,
	              styles: styles
	            }
	          }
				});
			});
		}

	});

});/* Document Ready End */

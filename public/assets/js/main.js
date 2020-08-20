(function ($) {
	"use strict";

		var $window = $(window);
		$window.on('scroll', function() {    
			var scroll = $window.scrollTop();
			if (scroll < 300) {
				$(".sticker").removeClass("sticky");
			}else{
				$(".sticker").addClass("sticky");
			}
		});

		$('#mobile-menu').each(function() {
			var $this = $(this);
			var $screenWidth = $this.attr('data-screen') ? parseInt($this.attr('data-screen'), 10) : 991;
			$this.meanmenu({
				meanMenuContainer: '.mobile-menu',
				meanScreenWidth: $screenWidth,
				meanRevealPosition: 'right'
			}); 
		}); 

		// Categories Item Show Hide

        $(".category-item-parent.hidden").hide();
        $(".more-btn").on('click', function (e) {
            e.preventDefault();
            $(".category-item-parent.hidden").toggle(500);
            var htmlAfter = "Hide Categories";
            var htmlBefore = "More Categories";

            $(this).html($(this).text() == htmlAfter ? htmlBefore : htmlAfter);
            $(this).toggleClass("minus");
		});
		
		/*Header Cart
		-----------------------------------*/
		var headerActionToggle = $('.ha-toggle');
		var headerActionDropdown = $('.ha-dropdown');
		// Toggle Header Cart
		headerActionToggle.on("click", function() {
			var $this = $(this);
			headerActionDropdown.slideUp();
			if($this.siblings('.ha-dropdown').is(':hidden')){
				$this.siblings('.ha-dropdown').slideDown();
			} else {
				$this.siblings('.ha-dropdown').slideUp();
			}
		});
		// Prevent closing Header Cart upon clicking inside the Header Cart
		$('.ha-dropdown').on('click', function(e) {
			e.stopPropagation();
		});


		// nice select active js
		$('select').niceSelect();


		// home slider
		var heroSlider = $('.hero-slider-active');
		heroSlider.slick({
		    arrows: true,
		    autoplay: false,
		    autoplaySpeed: 5000,
		    dots: true,
		    pauseOnFocus: false,
		    pauseOnHover: false,
		    fade: true,
		    infinite: true,
		    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		    slidesToShow: 1,
		    responsive: [
		        {
		          breakpoint: 767,
		          settings: {
		            dots: true,
		          }
		        }
		    ]
		});

		// product slider
		var product = $('.product-gallary-active');
		    product.owlCarousel({
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:2,
					
					nav:false
		        },
		 
		        768:{
		            items:3
		        },

		        992:{
		            items:4
		        },

		       1024:{
		            items:4
				},
				1600:{
		            items:7
		        }
				
		    }
		});

		// product slider
		var product2 = $('.product-gallary-active2');
		    product2.owlCarousel({
	        items: 5,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:2,
					
					nav:false
		        },
		 
		        768:{
		            items:3
		        },

		        992:{
		            items:3
		        },

		       1024:{
		            items:4
				},
				1600:{
		            items:6
		        }
		    }
		});

		// owl carousel active
		var product = $('.product-gallary-active3');
		    product.owlCarousel({
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:2,
					
					nav:false
		        },
		 
		        768:{
		            items:2
		        },

		        992:{
		            items:3
		        },

		       1024:{
		            items:3
				},
				1600:{
		            items:5
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:1,
					nav:false
		        },
		 
		        768:{
		            items:2
		        },

		        992:{
		            items:3
		        },

		       1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active4');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:1,
					nav:false
				},
				576:{
					items:2,
		        },
		 
		        768:{
		            items:2
		        },

		        992:{
		            items:2
		        },

		       1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active2');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:1,
					nav:false
		        },
		 
		        768:{
		            items:2
		        },

		        992:{
		            items:2
		        },

		       1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var module_four = $('.featured-cat-active');
		module_four.owlCarousel({
	        items: 4,
			loop: true,
			margin: 30,
			dots:false,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
		            items:1
		        },
		 
		        768:{
		            items:2
		        },

		        992:{
		            items:3
		        },

		       1200:{
		            items:3
		        },
		        1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var product3 = $('.pro-module3-active');
		    product3.owlCarousel({
	        items: 5,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:2,
					
					nav:false
		        },
		 
		        768:{
		            items:3
		        },

		        992:{
		            items:3
		        },

		       1024:{
		            items:4
				},
				1600:{
		            items:6
		        }
		    }
		});

		// owl carousel active
		var featured_2 = $('.featured-home2-active');
		featured_2.owlCarousel({
	        items: 5,
			loop: true,
			margin: 30,
			dots:false,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
					items:1,
					nav:false
		        },

		        480:{
					items:2,
					
					nav:false
		        },
		 
		        768:{
		            items:3
		        },

		        992:{
		            items:3
		        },

		       1024:{
		            items:4
				},
				1600:{
		            items:7
		        }
		    }
		});

		// product slider
		var brand = $('.brand-active');
			brand.owlCarousel({
	        items: 6,
			loop: true,
			dots:false,
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
		            items:1
		        },

		        480:{
		            items:3
		        },
		 
		        768:{
		            items:4
		        },

		        992:{
		            items:4
		        },

		       1100:{
		            items:6
				}
		    }
		});

		// brand slider 2
		var brand2 = $('.brand2-slider-active');
			brand2.owlCarousel({
	        items: 6,
			loop: true,
			dots:false,
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				 0:{
		            items:1
		        },

		        480:{
		            items:3
		        },
		 
		        768:{
		            items:4
		        },

		        992:{
		            items:4
		        },

		       1100:{
		            items:6
		        }
		    }
		});

		// Flash sale active
		var flash_sale = $('.flash-sale-active');
			flash_sale.owlCarousel({
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
		});

		// owl carousel active
		var flash_sale = $('.flash-sale-active4');
			flash_sale.owlCarousel({
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:4
			   },

			  1024:{
				   items:5
			   },
			   1600:{
				items:6
			}
		   }
		});

		// latest product slider
		var latest_pro = $('.latest-slide-active');
			latest_pro.owlCarousel({
			margin: 30,
			loop: true,
			dots:false,
			autoplay: false,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:1
			   },

			   576:{
					items:2
				},
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
			
		});

		// Latest blog
		var latest_news = $('.latest-blog-active');
			latest_news.owlCarousel({
	        items: 1,
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
		});

		// owl carousel active
		var latest_news = $('.latest-blog-active4');
			latest_news.owlCarousel({
	        items: 1,
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:4
			   },

			   1024:{
				   items:5
			   },
			   1600:{
				items:6
			}
		   }
		});

		// owl carousel active
		$('.blog-thumb-active').owlCarousel({
	        autoplay: true,
			loop: true,
	        nav: true,
	        autoplayTimeout: 8000,
	        items: 1,
	        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	        dots:false,
	    });

		// Testimonial active
		var testimonial = $('.testimonial-active');
			testimonial.owlCarousel({
			loop: true,
			margin: 30,
			autoplay: false,
			dots:true,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2,
				   dots: false
			   },
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
		});

		// Testimonial active
		var pro_gallery = $('.product-gallery-active');
			pro_gallery.owlCarousel({
			loop: true,
			margin: 30,
			autoplay: false,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2,
				   dots: false
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:3
			   },

			  1100:{
				   items:4
			   }
		   }
		});

		// slick active
		$('#menu2').slicknav({
			label: "Categories",
			prependTo: '.categories-menu-bar',
			closedSymbol: '+',
			openedSymbol: '-'
		});
		let priceMin = +($('#price-slider').data('min'));
		let priceMax = +($('#price-slider').data('max'));
		// pricing filter
		$( "#price-slider" ).slider({
			range: true,
			min: priceMin,
			max: priceMax,
			values: [ priceMin, priceMax ],
			slide: function( event, ui ) {
			 $( "#min-price" ).val('$' + ui.values[ 0 ] );
			 $( "#max-price" ).val('$' + ui.values[ 1 ] );
			  }
		});
		   $( "#min-price" ).val('$' + $( "#price-slider" ).slider( "values", 0 ));   
		   $( "#max-price" ).val('$' + $( "#price-slider" ).slider( "values", 1 )); 

		// magnificPopup img view 
		$('.img-popup').magnificPopup({
			type: 'image',
			gallery: {
			  enabled: true
			}
		});

		// magnificPopup video view
		$('.play-btn').magnificPopup({
            type: 'iframe'
        });


	    // scroll to top
	    $(window).on('scroll',function(){
		    if($(this).scrollTop() > 600){
		        $('.scroll-top').removeClass('not-visible');
		    }
		    else{
		        $('.scroll-top').addClass('not-visible');
		    }
		});
	    $('.scroll-top').on('click',function (event){
	        $('html,body').animate({
	            scrollTop:0
	        },1000);
		});
		
		// product view mode change js
		$('.product-view-mode a').on('click', function(e){
			e.preventDefault();
			
			var shopProductWrap = $('.shop-product-wrap');
			var viewMode = $(this).data('target');
			
			$('.product-view-mode a').removeClass('active');
			$(this).addClass('active');
			shopProductWrap.removeClass('grid list column_3').addClass(viewMode);
		})

		// prodct details slider active
		$('.product-large-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			asNavFor: '.pro-nav',
			infinite:true,
		});

		// slick carousel active
		$('.pro-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-left"></i></button>',
			nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-right"></i></button>',
			asNavFor: '.product-large-slider',
			centerMode: true,
			arrows: true,
			centerPadding: 0,
			focusOnSelect: true,
			infinite:true,
		});

		// prodct details vertical slider active
		$('.product-large-slider1').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			asNavFor: '.pro-nav1'
		});

		// slick carousel active
		$('.pro-nav1').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-up"></i></button>',
			nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-down"></i></button>',
			asNavFor: '.product-large-slider1',
			centerMode: true,
			arrows: true,
			vertical: true,
			centerPadding: 0,
			focusOnSelect: true
		});

		// modal fix
		$('.modal').on('shown.bs.modal', function (e) {
			$('.pro-nav').resize();
		})
	

		// Checkout Page Accordion Behaviour
		$( '#show_login' ).on('click', function() {
			$( '#checkout_login' ).slideToggle(300);
		});

		$( '#show_coupon' ).on('click', function() {
			$( '#checkout_coupon' ).slideToggle(300);
		});

		$("#different_shipping").on("change",function(){
			$(".ship-box-info").slideToggle(300);
		});

		$("#create_account").on("change",function(){
			$(".new-account-info").slideToggle(300);
		});

		//Product Quantity 
		// $('.product-qty').append('');
		/* $('.qtybtn').on('click', function() {
		    var $button = $(this);
		    var oldValue = $button.parent().find('input').val();
		    if ($button.hasClass('inc')) {
		        var newVal = parseFloat(oldValue) + 1;
		    } else {
		        // Don't allow decrementing below zero
		        if (oldValue > 0) {
		            var newVal = parseFloat(oldValue) - 1;
		        } else {
		            newVal = 0;
		        }
		    }
		    $button.parent().find('input').val(newVal);
		}); */

		// sticky sidebar
		$('.is-stickyy').stickySidebar({
			topSpacing: 100,
			bottomSpacing: -20
		  }); 

		/*---- Countdown Activation ----*/
		$('[data-countdown]').each(function() {
			var $this = $(this), finalDate = $(this).data('countdown');
			$this.countdown(finalDate, function(event) {
				$this.html(event.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Min</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Sec</span></div>'));
			});
		});


		// Mailchimp for dynamic newsletter
		$('#mc-form').ajaxChimp({
			language: 'en',
			callback: mailChimpResponse,
			// ADD YOUR MAILCHIMP URL BELOW HERE!
			url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

		});

	    // mailchimp active js
		function mailChimpResponse(resp) {
			if (resp.result === 'success') {
				$('.mailchimp-success').html('' + resp.msg).fadeIn(900);
				$('.mailchimp-error').fadeOut(400);

			} else if (resp.result === 'error') {
				$('.mailchimp-error').html('' + resp.msg).fadeIn(900);
			}
		}

})(jQuery);	



// добавление и удаление товаров из корзины 


let cartButton = document.getElementsByClassName('add-to-cart');
let removeButton = document.getElementsByClassName('pull-right');

Array.from(cartButton).forEach(btn => {
	btn.addEventListener('click', cartManipulations)
})
Array.from(removeButton).forEach(btn => {
	btn.addEventListener('click', cartManipulations)
})

function cartManipulations(e){
	e.preventDefault();
	let link = this.getAttribute('data-link');
	axios
		.get(link)
		
		.then((response) => {
			console.log(response.data);
			if(!!response === true) {
				$.fancybox.open({
					src  : `#${response.data}`,
					type : 'inline',
					opts : {
						afterShow : function( instance, current ) {
							setTimeout(() => {
								$.fancybox.close(true);
							}, 2000)
						}
					}
				});
			}
		})
		.catch((err) => {
			console.log(err);
		})
}


// увеличение и уменьшение товаров в корзине

let buttonsIncDec = document.getElementsByClassName('product-qty');
Array.from(buttonsIncDec).forEach(btn => {
	btn.addEventListener('click', manupulateCartQuantity);
})



function manupulateCartQuantity(e) {
	let input = this.querySelector('input');
	let inputValue = input.value
	let plusButton = Array.from(e.path).find(el => {
		try{
			return el.classList.contains('inc')
		} catch(e) {
			void (e)
		}
	}) 
	if(plusButton) {
		inputValue++
		input.value = inputValue;
		fetchFromDataLink(plusButton);
		return false 
	}
	let minutButton = Array.from(e.path).find(el => {
		try{
			return el.classList.contains('dec')
		} catch(e) {
			void (e)
		}
	})
	if(minutButton) {
		if(inputValue < 2) {
			return false
		}
		inputValue--
		input.value = inputValue
		fetchFromDataLink(minutButton);
		return false
	}
}


function fetchFromDataLink(el) {
	let link = el.getAttribute('data-link');
	axios
	
		.get(link)

		.then((response) => {
			
		})

		.catch(err => {

		})
}
let linkForFetchingData = document.querySelectorAll('.fetch_quick_view');
Array.from(linkForFetchingData).forEach(quckviewButton => {
	quckviewButton.addEventListener('click', fetchDataForQuickView)
})
function fetchDataForQuickView () {
	
	let productId = this.getAttribute('data-id');
	let link = this.getAttribute('data-link'); 
	axios
		.get(link)
		.then(response => {
			fillModalWithData(response.data);
		})
		.catch(e => {
			console.log(e)
		})
}



function fillModalWithData ({id, name, price, description, product_images}) {
	let quickViewModal = document.getElementById('quickk_view');
	let quckViewBody = quickViewModal.querySelector('.modal-body')
	quckViewBody.innerHTML = `
		<div class="spinning-div-wrapper">
			<div class="spinning-div"></div>
		</div>
	`

	let sliderTopImages = ' ';
	let sliderLowerImages = ''
	product_images.forEach(el => {
		
		sliderTopImages += `<div class="pro-large-img"> <img src="${el.img}" alt=""/> </div>`;
		
		sliderLowerImages += `<div class="pro-nav-thumb"><img src="${el.img}" alt="" /> </div>`
	})
	if(product_images.length <= 3) {
		sliderTopImages = sliderTopImages + sliderTopImages
	
		sliderLowerImages = sliderLowerImages + sliderLowerImages
	}

	let modalBody = `
	<div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
								<div class="product-large-slider mb-20">
                                    ${sliderTopImages}
                                </div>
                                <div class="pro-nav">
                                    ${sliderLowerImages}
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-inner">
                                    <div class="product-details-contentt">
                                        <div class="pro-details-name mb-10">
                                            <h3>${name}</h3>
                                        </div>
                                        <div class="price-box mb-15">
                                            <span class="regular-price"><span class="special-price">${price} $</span></span>
                                        </div>
                                        <div class="product-detail-sort-des pb-20">
                                            <p>${description}</p>
                                        </div>
                                        <div class="pro-quantity-box mb-30">
                                            <div class="qty-boxx">
                                                <button class="btn-cart lg-btn add-to-cart" data-link="http://qutti.loc/cart/add/${id}">add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	`

	quckViewBody.innerHTML = modalBody;

	$('#quickk_view .product-large-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		arrows: false,
		asNavFor: '.pro-nav',
		infinite:true,
	});

	// slick carousel active
	$('#quickk_view .pro-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-left"></i></button>',
		nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-right"></i></button>',
		asNavFor: '.product-large-slider',
		centerMode: true,
		arrows: true,
		centerPadding: 0,
		focusOnSelect: true,
		infinite:true,
	});

	let cartButton = document.getElementsByClassName('add-to-cart');
	Array.from(cartButton).forEach(btn => {
		btn.removeEventListener('click', cartManipulations);
		btn.addEventListener('click', cartManipulations);
	})
}


let topFilter = document.querySelectorAll('.top-cat-field');
Array.from(topFilter).forEach(filteringElement => {
	new RequestCommodities(filteringElement)
})

function RequestCommodities(input) {
	this.input = input;

	this.button = input.nextElementSibling;

	let buttonWidth = this.button.getBoundingClientRect().width; 

	let inputRect = input.getBoundingClientRect();

	let inputFromTop = inputRect.bottom + pageYOffset;

	let inputFromLeft = inputRect.left;

	let inputWidth = inputRect.width;

	this.input.addEventListener('input', fetchData);

	this.input.addEventListener('blur', hideModal);

	document.addEventListener('click', closeModal)

	let link = input.getAttribute('data-ajax-link');
	
	let lifeSearch = document.querySelector('.life-search');

	let lifeSearchWrapper = lifeSearch.querySelector('.life-search-wrapper');

	function hideModal() {
		if(screen.width > 767) {
			lifeSearch.style.display = 'none';
		}
	}

	function closeModal(e) {

		let path = e.composedPath();
		console.log(path)
		Array.from(path).forEach( pathEl => {
			if (
				pathEl === this.input || pathEl === lifeSearchWrapper
			) { 
				console.log('not closing')
				lifeSearch.style.display = 'block';
				return false;
			} else {
				lifeSearch.style.display = 'none';
			}
		} )

	}

	function fetchData() {
		let value = input.value;
		axios
		.post(link, {'product_name': value})
		.then(response => {

			let searchInnerElements = '';

			lifeSearch.style.display = 'block';


			if(response.data.length == 0) {
				lifeSearchWrapper.innerHTML = '<p class="not-found"> Извините, по вашему запросу ничего не нашлось, попробуйте ввести что-нибудь другое </p>'
				return false
			}

			Array.from(response.data).forEach(productObject => {
				searchInnerElements += `
				<li>
					<a href="${productObject.link}" class="d-flex align-items-center">
						<div class="search-img-wrap">
							<img src="${productObject.img}" alt="">
						</div>
						<div>
							<div class="search-product-name">
								${productObject.name}
							</div>                        
							<div class="search-product-price">
								$ ${productObject.price}
							</div>
						</div>
					</a>
				</li>
				`
			})

			lifeSearchWrapper.innerHTML = searchInnerElements;
			
			lifeSearch.style.cssText = `
				left: ${inputFromLeft}px;
				top: ${inputFromTop}px;
				max-width: ${inputWidth + buttonWidth}px;
				width: ${inputWidth + buttonWidth}px;
			`;
			

		})
		.catch(err => {
			console.log(err)
		})
	}
	

}
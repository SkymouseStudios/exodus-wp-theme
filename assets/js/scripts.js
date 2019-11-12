;(function($) {

	"use strict";

	function scrollTop($el, $center) {
		$('html, body').animate({
			scrollTop: $el.offset().top - $center.height() / 2
		}, 1500);
	}

	$(document).ready(function() {

		$('body').removeClass('transition');

		// PAGE TRANSITION
		$('a').click(function(e) {
			if ($(this).hasClass('transition-ignore')) {
				return false;
			}
			var href = $(this).attr('href');
			if (href.match('#') === null) {
				$('body').addClass('transition');
				setTimeout(function() {
					window.location.href = href;
				}, 250);
				e.preventDefault();
			}
		});

		// Preview
		$('.email-signup').find('button').addClass('form-show-processing-button');

		// Processing Buttons
		var ProcessingButtons = {

			init: function() {
				this.cache();
				this.build();
				this.attachEvents();
			},

			cache: function() {
				this.$form = $('.form-show-processing');
			},

			build: function() {
				var self = this;
				this.$form.each(function() {
					var $button = $(this).find('.form-show-processing-button');
					if ($button.length === 0) return;
					$button.each(function() {
						self.$button = $(this);
						self.$newButton = self.buildNewButton(this);
						self.$newButton.insertAfter(this);
						$(this).hide();
					});
				});
			},

			buildNewButton: function(el) {
				var $el = $(el);
				this.type = $el.get(0).tagName.toLowerCase();
				var text = this.type === 'input' ? $el.val() : $el.text();
				var $newButton = $('<button></button>');
				$newButton.append('<span>' + text + '</span><i class="icon icon-spinner animate-spin"></i>');
				return $newButton;
			},

			attachEvents: function() {
				var self = this;
				if (typeof self.$newButton !== "undefined") {
					this.$newButton.click(function() {
						self.$form.trigger('submit');
					});
				}
			}
		}

		ProcessingButtons.init();

		// NAVIGATION		
		var $icon = $('nav .icon-menu');
		var $cancel = $('nav .icon-cancel');
		var $primary_nav = $('.primary-nav-wrapper');
		var $container = $('.navbar-main');
		$cancel.click(hideNav);
		$icon.click(showNav);

		function hideNav() {
			$primary_nav.slideUp();
			$container.removeClass('nav-active');
		}

		function showNav() {
			$primary_nav.slideDown();
			$container.addClass('nav-active');
		}

	});

	$(window).load(function() {
		// SUPPORT ARTICLE GRID HEIGHT
		$('.exodus-support-articles').each(function() {
			var $articles = $(this).find('li');
			var max_height = 0;
			$articles.each(function() {
				if ($(this).outerHeight() > max_height) {
					max_height = $(this).outerHeight();
				}
			});
			$articles.each(function() {
				$(this).css('height', max_height);
			});
		});
	});

	$(function() {
    $('.cross').hide();
    $('.mobile-navigation').hide();
    
    $('.hamburger').click(function() {
        $('.mobile-navigation').show('fast', function() {
            $('.hamburger').hide();
            $('.cross').show();
        });
    });

    $('.cross').click(function() {
        $('.mobile-navigation').hide('fast', function() {
            $('.cross').hide();
            $('.hamburger').show();
        });
    });

    $('.nl-accordion').each(function() {
        $('ul li:first-child input[type=radio]').attr('checked', 'checked');
    });
	});

})(jQuery);

// Select all links with hashes
jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if ( location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = jQuery(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          }
        });
      }
    }
  }); 

// Accordian Effects
var acc = document.getElementsByClassName("accordion-title");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// Countdown Timer
if (jQuery('#countdown').length > 0) {
  
	// Countdown Timer: Set the date we're counting down to
	var countDownDate = new Date("Jan 12, 2020 23:59:59").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get todays date and time
	  var now = new Date().getTime();
	    
	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;
	    
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	  // Output the result in an element with id="demo"
	  document.getElementById("countdown").innerHTML = days + "<span>d</span> " + hours + "<span>h</span> " + minutes + "<span>m</span> " + seconds + "<span>s</span> ";
	    
	  // If the count down is over, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("demo").innerHTML = "EXPIRED";
	  }
	}, 1000);
}

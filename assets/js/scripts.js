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

		// SUPPORT: ASK A QUESTION
		/*var $container = $('#ask-a-question');
		if ($container.length) {
			var $btn = $('#btn-ask-question', $container);
			var $form = $('.wpcf7-form', $container);
			var $cancel = $('<button class="button cancel" style="margin-right: 10px">Cancel</button>')
				.on('click', function() {
					$form.slideUp();
					$btn.show();
					// scrollTop($container, $container);
				});
			$cancel.insertBefore('input[type="submit"]', $form);
			if ($btn.length && $form.length) {
				$btn.click(function() {
					$form.slideDown();
					$btn.hide();
					scrollTop($form, $container);
				});
			} else {
				$container.hide();
			}
		}*/

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

})(jQuery);
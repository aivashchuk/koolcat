// import 'jquery';
import GeneralScripts from './_generalScripts';

const App = {

	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneralScripts() {
			return new GeneralScripts();
		}
		initGeneralScripts();
	},
	mainSlider() {
		function sliderHeight() {
			$('#carousel .carousel-item').height('auto');
			$('#carousel').each(function () {
				$(this).find('.carousel-item').addClass('active');

				var tHeight = 0;
				$(this).find('.carousel-item').each(function () {
					if ($(this).height() > tHeight) {
						tHeight = $(this).height();
					}
				});
				$('#carousel .carousel-item').height(tHeight);

			});

			$('#carousel .carousel-item:not(.carousel-item:first-child)').removeClass('active');

			if ($('#carousel .carousel-item').length < 2) {
				$('#carousel > a').hide();
			}
		}
		sliderHeight();
		$(window).resize(function () {
			sliderHeight();
			console.log(1);
		});
		window.addEventListener("orientationchange", function() {
			sliderHeight();
		}, false);
	}
};

document.addEventListener('DOMContentLoaded', () => {
	$(() => {
		App.init();
		App.mainSlider();
	});
});

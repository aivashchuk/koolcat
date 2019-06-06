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
	},

	checkBox() {
		const same = $('#same');

		let street,
			city,
			state,
			country,
			code;

		same.on('change',function (){
			if ($(this).prop('checked')) {
				street = $('#street-l').val();
				city = $('#city-l').val();
				state = $('#state-l').val();
				code = $('#code-l').val();
				country = $('#country-l').val();

				$('#street').val(street);
				$('#city').val(city);
				$('#state').val(state);
				$('#code').val(code);
				$('#country').val(country);

				console.log(street);
			} else {
				$('#billing-address input').val('');
			}
		});
	}
};

document.addEventListener('DOMContentLoaded', () => {
	$(() => {
		App.init();
		App.mainSlider();
		App.checkBox();
	});
});

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
	onboardForms() {

		if(window.location.href.indexOf("plan-2") > -1) {
			$('.option').removeClass('active');
			$('#input_2').attr('checked','checked');
			$('label[for="input_2"]').addClass('active');
		}

		if(window.location.href.indexOf("plan-3") > -1) {
			$('.option').removeClass('active');
			$('#input_2').attr('checked','checked');
			$('label[for="input_3"]').addClass('active');
		}

		$('.input-group .option').on('click', function checkBox() {
			$('.option').removeClass('active');
			$(this).addClass('active');
			$(this).siblings('input').attr('checked', 'checked');
		});

		$('#next-step-1, a.step-2').on('click', function nextForm() {
			$('.onboarding-form').hide();
			$('#form-2').fadeIn(500);
			$('.step').removeClass('active');
			$('.step-2').addClass('active');
		});
		$('a.step-1').on('click', function nextForm() {
			$('.onboarding-form').hide();
			$('#form-1').fadeIn(500);
			$('.step').removeClass('active');
			$('.step-1').addClass('active');
		});
		$('a.step-3').on('click', function nextForm() {
			$('.onboarding-form').hide();
			$('#form-3').fadeIn(500);
			$('.step').removeClass('active');
			$('.step-3').addClass('active');
		});
	}

};

document.addEventListener('DOMContentLoaded', () => {
	$(() => {
		App.init();
		App.onboardForms();
	});
});

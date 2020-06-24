jQuery(document).ready(function() {

	lazyload();

// BEGIN Infinite scroll
	$(".infinite-scroll li").slice(5).hide();

	var mincount = 5;
	var maxcount = 10;

	$(window).scroll(function()
	{
		if( $(window).scrollTop() + $(window).height() >= $(document).height() - 400) {
			$(".infinite-scroll li").slice( mincount, maxcount ).fadeIn(400);

			mincount = mincount + 5;
			maxcount = maxcount + 10

		}
	});
// END Infinite scroll

// BEGIN of script for slider-testimonials
	$('.slider-simple').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		adaptiveHeight: true,
		// autoplay: true,
		autoplaySpeed: 4000,
		fade: true,
		pauseOnHover: false,
		speed: 600,
		lazyLoad: 'ondemand',
	});
// END of script for slider-testimonials

// BEGIN of script for slider-testimonials
	$('.slider-testimonials').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 5000,
		fade: false,
		pauseOnHover: false,
		speed: 600,
	});
// END of script for slider-testimonials

// BEGIN of script for VDP slider
	$('.vdp-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '.vdp-slider-nav',
		arrows: false
	});
	$('.vdp-slider-nav').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.vdp-slider',
		centerMode: true,
		focusOnSelect: true,
		arrows: false,
		adaptiveHeight: true,
		variableWidth: true
	});
// END of script for VDP slider

//
// 	$(document).ready(function () {
// 		var offset = $('#call-me').offset();
// 		var topPadding = 0;
// 		$(window).scroll(function() {
// 			if ($(window).scrollTop() > offset.top) {
// 				$('#fixed').stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
// 			}
// 			else {
// 				$('#fixed').stop().animate({marginTop: 0});
// 			}
// 		});
// 	});
//

// BEGIN of script for slider-cars-small
	$('.slider-cars-small').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		adaptiveHeight: true,
		autoplay: false,
		autoplaySpeed: 3000,
		fade: false,
		pauseOnHover: false,
		speed: 600,
		infinite: true,
		centerMode: false,
		variableWidth: true
	});
// END of script for slider-cars-small

// BEGIN of script for header submenu
	$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});
// END of script for header submenu

// BEGIN of script to stick header
	$(window).scroll(function(){
		var sticky = $('header'),
			scroll = $(window).scrollTop();
		if (scroll > 60) {
			sticky.addClass('header-fixed');
		} else {
			sticky.removeClass('header-fixed');
		};
	});
// END of script to stick header

// BEGIN of script for back-to-top btn
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
		backToTop = function() {
			var scrollTop = $(window).scrollTop();
			if (scrollTop > scrollTrigger) {
				$('.back-to-top').addClass('show');
			} else {
				$('.back-to-top').removeClass('show');
			}
		};
		backToTop();
		$(window).on('scroll', function() {
			backToTop();
		});
		$('.back-to-top').on('click', function(e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
// END of script for back-to-top btn

// BEGIN of script for page .content min height
	function contentMinHeight() {
		var _windowH = $(window).outerHeight(true);
		var _headerH = $('header').outerHeight(true);
		var _footerH = $('footer').outerHeight(true);
		if (($('header').css('position') == 'fixed') || ($('header').css('position') == 'absolute')) {
			_headerH = 0;
		};
		var _contentMinH = _windowH - _headerH - _footerH;
		$('.content').css('min-height', _contentMinH+'px');
	};
	contentMinHeight();
	$(window).resize(function(){
		contentMinHeight();
	});
// END of script for page .content min height

// BEGIN of script for Paired Select Boxes

	var selectData, $_makes;

	function updateSelects() {
		var _models = $.map(selectData[this.value], function (_model) {
			return $("<option />").text(_model["model"]).val(_model["model"]).attr('data-car-class', _model["class"]);
		});
		$("#select-car-model").empty().append(_models);
	}

	$.getJSON("js/shopDropDown.js", function (data) {
		var _make;
		selectData = data;
		$_makes = $("#select-car-make").on("change", updateSelects);
		for (_make in selectData) {
			$("<option />").text(_make).val(_make).appendTo($_makes);
		}
		$_makes.change();
	});
// END of script for Paired Select Boxes

// BEGIN of script for scrollTo anchors
	$('.scrollto').click( function(){
		var scroll_el = $(this).attr('href');
		var headerHeight = $('header').outerHeight();
		if ($(scroll_el).length != 0) {
			$('html, body').animate({ scrollTop: $(scroll_el).offset().top - 0 }, 600);
		}
		return false;
	});
// END of script for scrollTo anchors

$('[data-toggle="tooltip"]').tooltip();

$('input[data-inputmask]').inputmask({
	placeholder: '*',
});

// BEGIN of script for google autocomplete address
if ($('#location').length > 0) {
	function initialize() {
		var input = document.getElementById('location');
		var autocomplete = new google.maps.places.Autocomplete(input);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
}
// END of script for google autocomplete address

// BEGIN of script for range-slider
	$('.range-slider').slider({
		tooltip: 'hide',
		formater: function(value) {
			return '$' + value;
		}
	});
	$('.range-slider').on("slide", function(slideEvt) {
		$('.min-value').text('$'+slideEvt.value[0]);
		$('.max-value').text('$'+slideEvt.value[1]);
	});
// END of script for range-slider

$('form').submit(function(){
	$('<div class="form-spinner active"><i></i></div>').appendTo('form');
	// $('<div class="spinner-wr"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>').appendTo('form');
	// $('.form-spinner').addClass('active');
	// return false;
})


	function getTimeZone() {
		return Intl.DateTimeFormat().resolvedOptions().timeZone;
	}
	_getTimeZone = getTimeZone();
	$('#getTimeZone').val(_getTimeZone);
	console.log(_getTimeZone);


// BEGIN of script for max number of checked checkboxes
	$('input[type=checkbox]').on('change', function (e) {
		if ($('input[type=checkbox]:checked').length > 3) {
			$(this).prop('checked', false);
			alert("allowed only 3");
		}
	});
// END of script for max number of checked checkboxes

// BEGIN of script for validation MAKE/MODEL form on submit
	$("#select-car-make").change(function(){
		if ($(this).val() != "All") {
			$('#select-car-model').attr('disabled', null);
		} else {
			$('#select-car-model').attr('disabled', 'disabled');
		}
	})

	$('.validate-model-on-submit').submit(function(){
		var _carMake = $(this).find('#select-car-make').val();
		// console.log(_carMake);
		if (_carMake == "All") {
			setTimeout(function(){
				$('.error-row').addClass('active');
				$('.form-spinner').remove();
			}, 100);
			return false;
		} else {}
	})
// END of script for validation MAKE/MODEL form on submit

// BEGIN of script for accordion
	$('.accordion-item-nav a').click(function(){
		var _accItemParent = $(this).parents('.accordion-item');
		if (_accItemParent.hasClass('active')) {
			$('.accordion-item').removeClass('active');
			$('.accordion-item .accordion-item-content').slideUp(200,function(){
			});
		} else {
			$('.accordion-item').removeClass('active');
			$('.accordion-item .accordion-item-content').slideUp(200);
			_accItemParent.addClass('active');
			_accItemParent.find('.accordion-item-content').slideDown(300,function(){
			});
		}
	})
	// $('.accordion-item:first-child .accordion-item-nav a').click();
// END of script for accordion

// BEGIN of script for Progress Bar colors
	$('.price-drop-start-date').each(function(){

		htmlDateElementValue = $(this).text();
		var startDate=new Date(htmlDateElementValue);
		var currentDate=new Date();
		var timePassed = (currentDate - startDate);

		function dhm(t){
			cd = 24 * 60 * 60 * 1000;
			ch = 60 * 60 * 1000;
			d = Math.floor(t / cd);
			h = Math.floor( (t - d * cd) / ch);
			m = Math.round( (t - d * cd - h * ch) / 60000);
			pad = function(n){ return n < 10 ? '0' + n : n; };
			if( m === 60 ){
				h++;
				m = 0;
			}
			if( h === 24 ){
				d++;
				h = 0;
			}
		  // return [d, pad(h), pad(m)].join(':');
		  return [d, h, m];
		}

		timePassedDays = dhm(timePassed)[0];
		timePassedHours = dhm(timePassed)[1];
		timePassedMinutes = dhm(timePassed)[2];

		switch(true) {
			case (timePassedDays < 1):
				// console.log('Green');
				progressBarClass = 'bg-green';
				break;
			case (timePassedDays >= 1 && timePassedDays < 4):
				// console.log('Yellow');
				progressBarClass = 'bg-yellow';
				break;
			case (timePassedDays >= 4 && timePassedDays < 7):
				// console.log('Red');
				progressBarClass = 'bg-red';
				break;
			default:
				progressBarClass = 'bg-black';
				//do default stuff
				break;
		}
		$(this).parents('.result-item').find('.progress-bar, .price-drop-value').addClass(progressBarClass);

		timeTotalInMinutes = timePassedMinutes + timePassedHours*60 + timePassedDays*60*24;
		timeGiven = 7*60*24;
		progressBarWidth = timeTotalInMinutes / timeGiven * 100;
		$(this).parents('.progress-bar').width(progressBarWidth + '%');

		$(this).parents('.result-item').find('.time-since-price-drop').text("Passed days: "+timePassedDays+" / hours: "+timePassedHours+" / minutes: "+timePassedMinutes);
		$(this).parents('.result-item').find('.time-passed-days').text(timePassedDays);
		$(this).parents('.result-item').find('.time-passed-hours').text(timePassedHours);
		$(this).parents('.result-item').find('.time-passed-minutes').text(timePassedMinutes);

		// console.log("Passed days: "+timePassedDays+" / hours: "+timePassedHours+" / minutes: "+timePassedMinutes);
	});
// END of script for Progress Bar colors

// BEGIN of script for SORTING plugin
	var options = {
		valueNames: [ 'time-since-price-drop', 'car-mileage', 'car-price', 'car-year', 'car-make', 'car-location', 'price-drop-value' ]
	};
	var userList = new List('sort-items-list', options);

	if ($("#sort").length > 0 ) {
		var sort    = document.querySelector("#sort");
		sort.addEventListener("change", sortBySelect, false);

		function sortBySelect(event) {
			selected = event.target.selectedOptions[0];
			sort = selected.attributes.value.value;
			dir = selected.attributes.sort.value;
			userList.sort(sort, { order: dir });
		}
	} else {}
// END of script for SORTING plugin

	$('.btn-close-block').click(function(){
		$(this).parents('.block-opened').slideUp(300);
	})























});

window.onload = function() {

// BEGIN of script to init select2
	$('.select-styled').select2({
	});
	$('.select2-container').css("width","100%");
// END of script to init select2

// BEGIN of script for init wow.js for animate.css
	if(Modernizr.cssanimations) {
		wow = new WOW({
			mobile: false,
		});
		wow.init();
	}
// END of script for init wow.js for animate.css

// BEGIN of script for columnsEqualHeight
	function columnsEqualHeight() {
		// Select and loop the container element of the elements you want to equalise
		$('.columns-equal-height').each(function(){
			// Cache the highest
			var highestBox = 0;
			// Select and loop the elements you want to equalise
			$('.column-item', this).each(function(){
				// If this box is higher than the cached highest then store it
				if($(this).outerHeight() > highestBox) {
					highestBox = $(this).outerHeight();
				}
			});
			// Set the height of all those children to whichever was highest
			$('.column-item',this).outerHeight(highestBox);
		});
	};
	columnsEqualHeight();
	$(window).resize(function(){
		columnsEqualHeight();
	});
// END of script for columnsEqualHeight

// BEGIN of script for page loader
		$('.spinner-wr').fadeOut(900,function(){
			$(this).remove();
		});
		$('body').addClass('loaded');
// END of script for page loader

// BEGIN of script for homepage "gif + 1-2-3 slider" sync
	function rotationActiveNumber() {
		var slide = $(".rotation-active-number"), cur = 0;
		setInterval(function(){
			$('.active',slide).removeClass('active');
			$('.rotation-number',slide).eq((++cur)%3).addClass('active');
		}, 4000 );//using 1000 just for demo purposes
	};
	rotationActiveNumber();
	if ($('.img-how-it-works').length > 0) {
		var _clone = $('.img-how-it-works').clone();
		_clone.addClass('pos-top-fixed');
		_clone.prependTo('.box-top-banner');
		$('.img-how-it-works').attr('src',$('.img-how-it-works').attr('src'));
	}
// END of script for homepage "gif + 1-2-3 slider" sync






// BEGIN of script for MAKE/MODEL form: 1) change make+model -> update url; 2) change url -> update make+model
	_hash = window.location.hash.split('/');
	_hash[0] = 'pricedropshopping';
	_hash[1] = 'pdash';
	_selectedMakeFromURL = _hash[3];
	_selectedModelFromURL = _hash[4];

	if (_hash.length > 2) {
		$('#select-car-make').val(_selectedMakeFromURL).change();
		$('#select-car-model').val(_selectedModelFromURL).change();
		$('#form-price-drop').attr('action', window.location.hash);
	};


	$('#form-price-drop #select-car-make').change(function(event){
		_selectedMake = $(this).val();

		// _hash = window.location.hash.split('/');
		_hash[2] = 'All';
		_hash[3] = _selectedMake;
		_hash[4] = 'All';
		window.location.hash = _hash.join('/');
		$('#form-price-drop').attr('action', '#'+_hash.join('/')).submit();
		// console.log(_hash.join('/'));
		event.preventDefault();
	})
	$('#form-price-drop #select-car-model').change(function(event){
		_selectedModel = $(this).val();
		_selectedModelClass = $(this).find('option:selected').attr('data-car-class');

		// _hash = window.location.hash.split('/');
		_hash[2] = _selectedModelClass;
		_hash[4] = _selectedModel;
		window.location.hash = _hash.join('/');
		$('#form-price-drop').attr('action', '#'+_hash.join('/')).submit();
		// console.log(_hash.join('/'));
		event.preventDefault();
	})
// END of script for MAKE/MODEL form: 1) change make+model -> update url; 2) change url -> update make+model


















};
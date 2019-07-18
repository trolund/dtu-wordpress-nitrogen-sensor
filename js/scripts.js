var w;
var h;

var mobilmenuvis = true;

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		getviewPort();

		var scroll = $(window).scrollTop();

		if(scroll > 20){
			jQuery('.icon-scroll').hide();
		}
		
		// DOM ready, take it away
		jQuery(".wpcf7-submit").click(function () {
			console.log("hej");
			$(".wpcf7-response-output").css("display", "none").delay(500);
		})

		var mobilmenuvis = true;




		
	});


	
})(jQuery, this);

jQuery(window).scroll(function (event) {
	var scroll = jQuery(window).scrollTop();

	if(scroll > 100){
		jQuery(".frontText").addClass("opacityZero");
		jQuery(".topContainer").addClass("topContainerDesktopFixed");
	}else{
		jQuery(".frontText").removeClass("opacityZero");
		jQuery(".topContainer").removeClass("topContainerDesktopFixed");
	}
});

jQuery(window).resize(function (event) {
	var w = jQuery(window).width();

	if(w >= 800){
		jQuery(".container").css("display", "block");
		jQuery(".container").css("opacity", 1);
		jQuery(".containerMenuIcon").addClass("change");

		mobilmenuvis = true;
	}else{
		jQuery(".container").css("display", "none");
		jQuery(".container").css("opacity", 0);
		jQuery(".containerMenuIcon").removeClass("change");
		mobilmenuvis = false;
	}
	console.log(w);
});

function adaptHeaderHeight() {
	var height = $("#myVideo").height;
	window.console.log(Console);
	$(".header").css("height", height +200);
}

function dismisScollAni() {
	jQuery('.icon-scroll').hide(200);
}

function getviewPort() {
	w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
}

// responsive menu icon
function mobilMenu(x) {
	if (jQuery(".container").is(":visible")) {
		jQuery(".container").slideUp(200);
		//jQuery(".search-input").css("background-image", "url('img/searchiconGrey.svg') !important;");
		jQuery(".container").css("opacity", 0);
		mobilmenuvis = false;
		x.classList.remove("change");
	} else {
		//jQuery(".container").css("display", "block");
		jQuery(".container").css("opacity", 1);
		jQuery(".container").slideDown(200);
		mobilmenuvis = true;
		x.classList.add("change");
	}
}
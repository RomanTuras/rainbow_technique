
$(function() {

	handleOnClickFaqSection();

	$('a[href="#options-section"]').click(function () {
		scrollToAnchor('options-section');
	});

	$('a[href="#payment-section"]').click(function () {
		scrollToAnchor('payment-section');
	});

});

/**
* Scroll down to section
*/
function scrollToAnchor(aid) {
	var aTag = $("div[id='" + aid + "']");
	$('html,body').animate({scrollTop: aTag.offset().top}, 'smooth');
}


/**
* Handling behavior FAQ section
*/
function handleOnClickFaqSection(){
	var accItem = document.getElementsByClassName("faq-answer");
    var accHD = document.getElementsByClassName("accordion");
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
    	console.log();
        var itemClass = $(this).find(".faq-answer").toggleClass("opened");
        var btnText = $(this).find(".faq-btn").text();
        if(btnText == "+") $(this).find(".faq-btn").text("×");
        else $(this).find(".faq-btn").text("+");
    }
}

//Slick settings
$(document).ready(function(){
	$('.carousel-reviews').slick({
		infinite: true,
		dots: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		dotsClass: 'slick-dots',
		adaptiveHeight: true
	});
});

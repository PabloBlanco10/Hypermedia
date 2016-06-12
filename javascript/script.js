/* This script load Header and Footer */
$(function(){
	$("#header").load("header.html"); 
	$("#footer").load("footer.html"); 
});

$(function() {
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
			$(".header").addClass('smaller');
		} else {
			$(".header").removeClass("smaller");
		}
	});
});

$(document).ready(function() {
	$("#owl-demo").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		items : 1,
		itemsDesktop : false,
		itemsDesktopSmall : false,
		itemsTablet: false,
		itemsMobile : false,
		autoplay : true,
		autoplayTimeout: 5000,
		loop : true
	});
});
$(document).ready(function() {
	$(".kategorie").owlCarousel({
		nav : true,
		navText : [btnleft, btnright],
		loop : true,
	});
});

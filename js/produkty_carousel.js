 $(document).ready(function() {
	$(".kategorie").owlCarousel({
		nav : true,
		navText : [btnleft, btnright],
		loop : false,
	});
  });
  $(document).ready(function(){
    $(".btn1").click(function(){
		$( "#ukrycie").stop(true, false).slideToggle();

    });
});
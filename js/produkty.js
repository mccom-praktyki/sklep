$(document).ready(function() {
    $(".kategorie").owlCarousel({
        nav : true,
        navText : [btnleft, btnright],
        loop : true,
    });
});
$(document).ready(function(){
    $(".btn1").click(function(){
        $( "#ukrycie").stop(true, false).slideToggle();

    });
});


//zarz�dzanie produktami
    $("#slidedown3").click(function(){
        $("#slidedown4").stop(true, false).slideToggle("slow");
		$("#slidedown6").hide().slideUp("slow");
		$("#slidedown8").hide().slideUp("slow");

    });
//zarz�dzanie u�ytkownikami
    $("#slidedown5").click(function(){
        $("#slidedown6").stop(true, false).slideToggle("slow");
        $("#slidedown4").slideUp("slow");
        $("#slidedown8").slideUp("slow");
    });
//zarz�dzanie informacjami
    $("#slidedown7").click(function(){
        $("#slidedown8").stop(true, false).slideToggle("slow");
        $("#slidedown6").slideUp("slow");
        $("#slidedown4").slideUp("slow");
    });

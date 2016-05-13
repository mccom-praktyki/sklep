  $(document).ready(function(){
  $("#slidedown4").hide()
  $("#slidedown6").hide()
  $("#slidedown8").hide()
  
//zarządzanie produktami
    $("#slidedown3").click(function(){
        $("#slidedown4").stop(true, false).slideToggle("slow");
		$("#slidedown6").slideUp("slow");
		$("#slidedown8").slideUp("slow");
    });
//zarządzanie użytkownikami
    $("#slidedown5").click(function(){
        $("#slidedown6").stop(true, false).slideToggle("slow");
        $("#slidedown4").slideUp("slow");
        $("#slidedown8").slideUp("slow");
    });
//zarządzanie informacjami
    $("#slidedown7").click(function(){
        $("#slidedown8").stop(true, false).slideToggle("slow");
        $("#slidedown6").slideUp("slow");
        $("#slidedown4").slideUp("slow");
    });

 });
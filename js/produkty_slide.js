$(document).on("pageload",function(){
    $("#slidedown4").show();
    $("#slidedown6").hide();
    $("#slidedown8").hide();
});
function produkty(id){
    $("#"+id+"").addClass("active");
}

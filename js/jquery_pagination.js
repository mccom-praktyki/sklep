$(document).ready(function()
{
//Display Loading Image
function Display_Load()
{
$("#loading").fadeIn(900,0);
$("#loading").html("<img src='img/spinner.gif' />");
}
//Hide Loading Image
function Hide_Load()
{
$("#loading").fadeOut('slow');
};

//Default Starting Page Results
$("#pagination li:eq(1)")
.addClass('active');
Display_Load();
var wartosc = $("#kat_p").val();
if (wartosc>=0) {
$("#content").load("includes/index/pagination_data.php?page=1&kat="+wartosc, Hide_Load());
} else {
$("#content").load("includes/index/pagination_data.php?page=1", Hide_Load());
}

//Pagination Click
$("#pagination li").click(function(){
Display_Load();
//CSS Styles
$("#pagination li")
.removeClass('active');

$(this)
.addClass('active');

//Loading Data
var pageNum = this.id;

if (wartosc>=0) {
$("#content").load("includes/index/pagination_data.php?page=" + pageNum +"&kat="+wartosc, Hide_Load());
} else {
$("#content").load("includes/index/pagination_data.php?page=" + pageNum, Hide_Load());
}


});

});
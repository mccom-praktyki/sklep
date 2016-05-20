function walidacja (pole, label, tresc,rozmiar) {

var pole = $("#"+pole)
var label = $("#"+label)

label.html("<span style='color:red; font-weight:bold;'>"+tresc+"</span>");
pole.addClass("has-error").addClass("has-feedback");
var zawartosc = pole.html();
pole.html(zawartosc+"<span style='margin-right:"+rozmiar+"px;' class='glyphicon glyphicon-remove form-control-feedback' aria-hidden='true'></span>");
}

function komunikat (wynik) {
if (wynik==true) {
$("#info_produkt").html("<div class='alert alert-success' role='alert' style='width:750px;  margin-left:25px;'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span><strong style='margin-left:30px;'>Dodano nowy produkt do listy produktów!</strong></div>");
} else {
$("#info_produkt").html("<div class='alert alert-danger' role='alert' style='width:750px; margin-left:25px;'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span><strong style='margin-left:30px;'>Nie udało się dodać nowego produktu!</strong></div>");
}
}
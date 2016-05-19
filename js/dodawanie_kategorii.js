function komunikat_add (wynik) {
if (wynik==0) {
	var klasa = "alert alert-success";
	var znak = "glyphicon glyphicon-ok-sign";
	var tresc = " Dodano nową kategorię!";
} else if (wynik==1) {
	var klasa = "alert alert-danger";
	var znak = "glyphicon glyphicon-remove-sign";
	var tresc = " Nie uzupełniono pola formularza!";
$("#form_kategoria_add").addClass("has-warning has-feedback");
} else if (wynik==2) {
	var klasa = "alert alert-warning";
	var znak = "glyphicon glyphicon-exclamation-sign";
	var tresc = " Podana kategoria już istnieje!";
} else if (wynik==3) {
	var klasa = "alert alert-danger";
	var znak = "glyphicon glyphicon-remove-sign";
	var tresc = " Wystąpił błąd - nie dodano nowej kategorii.";
} 

$("#komunikat_div_add").removeAttr('class').attr('class', klasa);
$("#komunikat_znak_add").removeAttr('class').attr('class', znak);
$("#komunikat_tresc_add").html(tresc);

}

function komunikat_edit (wynik) {
if (wynik==0) {
	var klasa = "alert alert-success";
	var znak = "glyphicon glyphicon-ok-sign";
	var tresc = " Edytowano podaną kategorię!";
} else if (wynik==1) {
	var klasa = "alert alert-danger";
	var znak = "glyphicon glyphicon-remove-sign";
	var tresc = " Pozostawiono puste pole formularza!";
$("#form_kategoria_add").addClass("has-warning has-feedback");
} else if (wynik==2) {
	var klasa = "alert alert-warning";
	var znak = "glyphicon glyphicon-exclamation-sign";
	var tresc = " Podana kategoria już istnieje!";
} else if (wynik==3) {
	var klasa = "alert alert-danger";
	var znak = "glyphicon glyphicon-remove-sign";
	var tresc = " Wystąpił błąd - nie edytowano kategorii.";
} 

$("#komunikat_div_edit").removeAttr('class').attr('class', klasa);
$("#komunikat_znak_edit").removeAttr('class').attr('class', znak);
$("#komunikat_tresc_edit").html(tresc);

}

function komunikat_remove (wynik) {
if (wynik==0) {
	var klasa = "alert alert-success";
	var znak = "glyphicon glyphicon-ok-sign";
	var tresc = " Usunięto podaną kategorię!";
} else if (wynik==1) {
	var klasa = "alert alert-danger";
	var znak = "glyphicon glyphicon-remove-sign";
	var tresc = " Nie udało się usunąć kategorii!";
$("#form_kategoria_add").addClass("has-warning has-feedback");
}  

$("#komunikat_div_remove").removeAttr('class').attr('class', klasa);
$("#komunikat_znak_remove").removeAttr('class').attr('class', znak);
$("#komunikat_tresc_remove").html(tresc);

}
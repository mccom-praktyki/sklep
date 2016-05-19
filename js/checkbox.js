var kolumna = 0;
var wiersz = 0;
var pojemnosc = 0;

function dodajWiersz () {
var wiersz = $("#tabelka").html();
$("#tabelka").html(wiersz + "<tr id='tr2'><td></td><td></td><td></td><td></td></tr>");
}

function KasujCheckbox () {
$("#tabelka tr td").html("")
kolumna = 0;
wiersz = 0;
pojemnosc = 0;
}

function dodajCheckbox (value,tresc) { 
if (pojemnosc>=10) {
kolumna = kolumna + 1;
pojemnosc = 0;
}

if (kolumna>=4) {
dodajWiersz();
kolumna = 0;
wiersz = wiersz + 1;
}

var zawartosc = $("#tabelka tr:eq("+wiersz+") td:eq("+kolumna+")").html()
$("#tabelka tr:eq("+wiersz+") td:eq("+kolumna+")").html(zawartosc + "<input id='checkbox_atrybuty' class='"+tresc+"' name='checkbox_atr[]' value='"+value+"' type='checkbox' /> "+tresc+"<br/>")
pojemnosc = $("#tabelka tr:eq("+wiersz+") td:eq("+kolumna+") input").size();
}
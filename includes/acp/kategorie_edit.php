<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
	$blad_edit;
if (isset($_POST['kategoria_edit_submit'])) {
if (isset($_POST['kategoria_edit_pole']) and !empty($_POST['kategoria_edit_pole']) and !empty($_POST['id_edit']) and isset($_POST['id_edit'])) {
	$kategoria = $_POST['kategoria_edit_pole'];
	$id = $_POST['id_edit'];
if (mysql_num_rows(kwerenda("SELECT nazwa FROM kategorie WHERE nazwa='$kategoria'"))<=0) {
	$query = kwerenda("UPDATE kategorie SET nazwa='$kategoria' WHERE id='$id'");
if ($query) {
	$blad_edit = 0;
} else {
	$blad_edit = 3;
}
} else {
	$blad_edit = 2;
}
} else {
	$blad_edit = 1;
}
} 
?>
<script type="text/javascript" src="js/produkty_slide.js"></script>
<script type="text/javascript" src="js/dodawanie_kategorii.js"></script>
<script type="text/javascript">
produkty("dodaj_kategorie");
</script>
<div id="komunikat_div_edit" style="margin-top:30px; width:700px; margin-left:40px;" class="alert alert-info"><div id="komunikat_znak_edit" class="glyphicon glyphicon-info-sign"></div><span id="komunikat_tresc_edit"> Zmień nazwę aby edytować kategorię.</span></div>
<div id="form_kategoria_edit" class="form-group" style="margin:30px;">
<label>Nazwa kategorii</label>
<form method="POST" action="">
<table>
<tr><td>
<input name="kategoria_edit_pole" id="kategoria_edit_pole" type="text" class="form-control" placeholder="Wpisz nazwę kategorii" style="width:300px;" />
<input id="hide_id" type="hidden" value="" name="id_edit" />
</td>
<td>
<button type="submit" name="kategoria_edit_submit" style="margin-left:10px;" class="btn btn-warning">Edytuj</button>
<button class="btn btn-primary" type="button" onclick="window.location.href='acp.php?url=1d'">Powrót</button>
</td></tr></table>
</form>
</div>

						
<?php
if (isset($_GET['id'])) {
	$id_s = $_GET['id'];
	$query = kwerenda("SELECT nazwa FROM kategorie WHERE id='$id_s'");
	$row = mysql_fetch_row($query);
	$nazwa = $row[0];
	echo "<script>$('#kategoria_edit_pole').val('$nazwa'); $('#hide_id').val('$id_s');</script>";
}


if (isset($_POST['kategoria_edit_submit'])) {
	if ($blad_edit!=0) {
		$id_post = $_POST['id_edit'];
		$nazwa_post = $_POST['kategoria_edit_pole'];
		echo "<script>$('#kategoria_edit_pole').val('$nazwa_post'); $('#hide_id').val('$id_post');</script>";
	} else {
	echo "<script>setTimeout(function () {window.location.href='acp.php?url=1d' },1500)</script>";
	}
	echo "<script>komunikat_edit($blad_edit)</script>";
} 

} else {
header("strona glowna");
}
?>
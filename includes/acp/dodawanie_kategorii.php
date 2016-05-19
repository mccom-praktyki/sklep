<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
	$blad_add;
if (isset($_POST['kategoria_dodaj_submit'])) {
if (isset($_POST['kategoria_dodaj_pole']) and !empty($_POST['kategoria_dodaj_pole'])) {
	$kategoria = $_POST['kategoria_dodaj_pole'];
if (mysql_num_rows(kwerenda("SELECT nazwa FROM kategorie WHERE nazwa='$kategoria'"))<=0) {
	$query = kwerenda("INSERT INTO kategorie (nazwa) VALUES ('$kategoria')");
if ($query) {
	$blad_add = 0;
} else {
	$blad_add = 3;
}
} else {
	$blad_add = 2;
}
} else {
	$blad_add = 1;
}
} elseif (isset($_POST['kategoia_usun_submit'])) {
if (isset($_POST['kategoria_usun_pole']) and !empty($_POST['kategoria_usun_pole'])) {
	$kategoria = $_POST['kategoria_usun_pole'];
	kwerenda("DELETE FROM cechy WHERE id_kategorii='$kategoria'");
	$query = kwerenda("DELETE FROM kategorie WHERE id='$kategoria'");
	if ($query) {
		$blad_remove = 0;
	} else {
		$blad_remove = 1;
	}
} else {
	$blad_remove = 1;
}
}
?>
    <script type="text/javascript" src="js/produkty_slide.js"></script>
    <script type="text/javascript" src="js/dodawanie_kategorii.js"></script>
    <script type="text/javascript">
        produkty("dodaj_kategorie");
    </script>
        <div id="komunikat_div_add" style="margin-top:30px; width:700px; margin-left:40px;" class="alert alert-info"><div id="komunikat_znak_add" class="glyphicon glyphicon-info-sign"></div><span id="komunikat_tresc_add"> Aby dodać kategorię, wpisz jej nazwe i kliknij przycisk poniżej pola tekstowego.</span></div>
        <div id="form_kategoria_add" class="form-group" style="margin:30px;">
            <label>Nazwa kategorii</label>
				<form method="POST" action="">
				<table>
                <tr><td>
                    <input name="kategoria_dodaj_pole" id="kategoria_dodaj_pole" type="text" class="form-control" placeholder="Wpisz nazwę kategorii" style="width:300px;"></td>
					<td>
                    <button type="submit" name="kategoria_dodaj_submit" style="margin-left:10px;" class="btn btn-success">Dodaj</button></td></tr></table>
					</form>
					</div>

		<hr>
        <div id="komunikat_div_remove"  style="margin-top:30px; width:500px; margin-left:40px;" class="alert alert-info"><div id="komunikat_znak_remove" class="glyphicon glyphicon-info-sign"></div><span id="komunikat_tresc_remove"> Aby usunąć kategorię zaznacz ją i kliknij przycisk "usuń".</span></div>
        <div class="form-group" style="margin:30px;">
			<form method="POST" action="">
            <label for="sel1">Wybierz kategorię do usunięcia:</label>
            <table>
                <tr><td>
                        <select name="kategoria_usun_pole" style="width:200px;" class="form-control">
					<?php
					$kategorie = kwerenda("SELECT id,nazwa FROM kategorie");
					if (mysql_num_rows($kategorie)>=0) {
						while ($row = mysql_fetch_array($kategorie)) {
							echo "<option value='".$row[0]."'>".$row[1]."</option>";
						}
					}
					?>
                        </select></td>
                    <td>
                        <button name="kategoia_usun_submit" type="submit" style="float:right; margin-left:10px;" class="btn btn-danger">Usuń</button></td></tr></table>
						</form>
						</div>
	   <hr>
        <div style="margin-top:30px; width:550px; margin-left:40px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div> Aby edytować kategorię wybierz ją i kliknij przycisk "edytuj".</div>
        <div class="form-group" style="margin:30px;">
		<form method="GET" action="acp.php?url=1d_2">
            <label for="sel1">Wybierz kategorię do edycji:</label>
            <table>
                <tr><td>
                        <select name="id" style="width:200px;" class="form-control">
					<?php
					$kategorie = kwerenda("SELECT id,nazwa FROM kategorie");
					if (mysql_num_rows($kategorie)>=0) {
						while ($row = mysql_fetch_array($kategorie)) {
							echo "<option value='".$row[0]."'>".$row[1]."</option>";
						}
					}
					?>
					<input type="hidden" value="1d_2" name="url" />
                        </select></td>
                    <td>
                        <button type="submit" style="float:right; margin-left:10px;" class="btn btn-warning">Edytuj</button></td></tr>
						</form>
						</table></div>


						<?php

if (isset($_POST['kategoria_dodaj_submit'])) {
	echo "<script>komunikat_add($blad_add)</script>";
} elseif (isset($_POST['kategoia_usun_submit'])) {
	echo "<script>komunikat_remove($blad_remove)</script>";
}

} else {
header("strona glowna");
}
?>
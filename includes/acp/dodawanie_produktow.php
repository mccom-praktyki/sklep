<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
$kategorie = kwerenda("SELECT id,nazwa FROM kategorie");
$atrybuty_domyslne = kwerenda("SELECT id,nazwa FROM cechy WHERE id_kategorii=0");

if (isset($_POST['dodaj_submit'])) {
$blad = 0;
if (isset($_POST['produkt_nazwa']) and isset($_POST['produkt_cena']) and isset($_POST['produkt_kategoria']) and isset($_POST['produkt_ilosc'])) 
{

$nazwa = $_POST['produkt_nazwa'];
$cena = (string)$_POST['produkt_cena'];
$cena = str_replace(",",".",$cena); 
$cena = floatval($cena);
$cena = number_format($cena,2,'.','');
$kategoria = $_POST['produkt_kategoria'];
$ilosc = $_POST['produkt_ilosc'];
if (isset($_POST['produkt_opis']) and !empty($_POST['produkt_opis'])) {
$opis = $_POST['produkt_opis'];
} else {
$opis = "";
}

$check_n; $check_c; $check_i;
if (strlen($nazwa)<3 or empty($nazwa)) {
	$blad = 1;
	$check_n = 1;
} if (!is_numeric($cena) or $cena<=0 or (empty($cena) and $cena!=0)) {
	$blad = 1;
	$check_c = 1;
} if (!is_numeric($ilosc) or $ilosc<0 or (empty($ilosc) and $ilosc!=0)) {
	$blad = 1;
	$check_i = 1;
}


} else {
	echo "<h3 style='color:red; font-weight:bold; margin-left:10px; margin-top: 10px'>Nie uzupełniono wszystkich pól formularza!</h3>";
}


} else {
	$zdjecia = kwerenda("SELECT zd.id as id_zdjecia, zd.id_produktu, zd.nazwa as nazwa, pr.id FROM zdjecia zd LEFT OUTER JOIN produkty pr ON zd.id_produktu=pr.id WHERE pr.id is null");
	while ($row = mysql_fetch_array($zdjecia)) {
	unlink("galeria/".$row['nazwa']);
	kwerenda("DELETE FROM zdjecia WHERE id=".$row['id_zdjecia']."");
	}
}

?>

<script type="text/javascript" src="js/produkty_slide.js"></script>
<script type="text/javascript" src="js/upload_zdjecia.js"></script>
<script type="text/javascript" src="js/dodawanie_produktow_walidacja.js"></script>
<script type="text/javascript">
produkty("dodaj_produkt");
</script>
<script type="text/javascript" src="js/checkbox.js"></script>


<div id="info_produkt"></div>
<form method="POST" action="" id="form_produkt">
<table>
<tr><td>
  <div id="produkt_div_nazwa" class="form-group" style="margin:30px;">
    <label>Nazwa produktu</label>
    <input type="text" class="form-control" id="nazwa_input" name="produkt_nazwa" placeholder="Wpisz nazwę produktu" style="width:300px;">
	<h5 id="label_nazwa"></h5>
  </div>
  <div id="produkt_div_cena" class="form-group" style="margin:30px;">
    <label>Cena produktu</label>
    <input type="text" class="form-control" id="cena_input" name="produkt_cena" placeholder="Wpisz cenę produktu" style="width:160px;">
    <h5 id="label_cena"></h5>
  </div>
  <div class="form-group" style="margin:30px;">
  <label>Wybierz kategorię</label>
	<?php
	if (mysql_num_rows($kategorie)>=0) {
	echo "<select class='form-control' style='width:300px;' id='kat_select' name='produkt_kategoria'>";
	while ($row = mysql_fetch_array($kategorie)) {
	echo "<option value='".$row[0]."'>".$row[1]."</option>";
	}
	echo "<option selected='selected' value='0'>Inne</option>";
	echo "</select><br/><br/>";
	}
?>
  </div>
  <div id="produkt_div_ilosc" class="form-group" style="margin:30px;">
    <label>Ilość</label>
    <input type="number" class="form-control" id="ilosc_input" name="produkt_ilosc" placeholder="Wybierz ilość" style="width:150px;">
	<h5 id="label_ilosc"></h5>
 </div>
    <div class="form-group" style="margin:30px;">
    <label>Opis produktu</label>
	<textarea class="form-control" id="opis_input" name="produkt_opis" rows="4" placeholder="Wpisz opis produktu.." style="width:300px;"></textarea>
  </div>
  </td><td style="float:right;margin-top:32px; margin-left:30px;">
<form id="upload_form" enctype="multipart/form-data" method="post">
<div class="form-group">
<label for="exampleInputFile">Dodaj zdjęcie</label>
  <input type="file" name="file1" id="file1"><br>
 <div class="progress">
  <div id="progressBar" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width: 0%">

  </div>
</div>
  <input class="btn btn-primary" type="button" value="Prześlij" onclick="uploadFile()" />
  <h5 id="status"></h5>

  </div>
</form>
  </td></tr></table><hr><br>
  <div class="form-group">
	<table id="tabelka" style="margin-left:20px;">
	<tr id="tr2">
	<td style="width:193.5px;"></td>
	<td style="width:193.5px;"></td>
	<td style="width:193.5px;"></td>
	<td style="width:193.5px;"></td>
	</tr>
	</table><br/><br/>
	</div>
	<?php
	while ($row = mysql_fetch_array($atrybuty_domyslne)) {
	echo "<script type='text/javascript'>dodajCheckbox('".$row[0]."','".$row[1]."');</script>";	
	}
	?>
        
	<button type="button" id="uzupelnij_atrybuty" class="btn btn-warning" style="float:right; margin-right:20px;">Uzupełnij atrybuty</button>
        <table><tr><td>
        <select id="select_atrybuty" class="form-control" style="width:200px; margin-left:20px;">
	<?php
        $kategorie = kwerenda("SELECT id,nazwa FROM kategorie");
	while ($row = mysql_fetch_array($kategorie)) {
	echo "<option value='".$row[0]."'>".$row[1]."</option>";
	}
	
        ?>
	</select>
        </td><td>
	<button type="button" id="inne_atrybuty" class="btn btn-default" style="float:left; margin-left:20px;">Dodaj inne atrybuty</button>
        </td></tr></table><br><br><br>
		<div id="pola_atrybuty">
	</div>

	<hr>
	
	

<input class="btn btn-success" style="float:right; margin-right:20px;" type="submit" name="dodaj_submit" value="Dodaj produkt" />
</form>
<script type="text/javascript" src="js/produkty_ajax.js"></script>
<script type="text/javascript" src="js/files_ajax.js"></script>

<?php
if (isset($_POST['dodaj_submit'])) {
global $check_n; global $check_c; global $check_i;
if ($blad==1) {

	if ($check_n==1) {
		echo "<script type='text/javascript'>walidacja('produkt_div_nazwa','label_nazwa','Nieprawidłowa nazwa produktu (min. 3 znaki!)',10)</script>";
	}
	if ($check_c==1) {
		echo "<script type='text/javascript'>walidacja('produkt_div_cena','label_cena','Nieprawidłowa cena!',150)</script>";
	}
	if ($check_i==1) {
		echo "<script type='text/javascript'>walidacja('produkt_div_ilosc','label_ilosc','Nieprawidłowa ilość!',160)</script>";
	}
	echo "
	<script>
	$('#nazwa_input').val('".$nazwa."');
	$('#cena_input').val('".$cena."');
	$('#ilosc_input').val('".$ilosc."');
	$('#kat_select').val('".$kategoria."');
	$('#opis_input').text('".$opis."');
	</script>";
	return;
} else {
$dodaj_produkt_query = kwerenda("INSERT INTO produkty (nazwa,cena,kategoria,ilosc,opis) VALUES ('$nazwa',$cena,$kategoria,$ilosc,'$opis');");
if ($dodaj_produkt_query) {
echo "<script>komunikat(true);</script>";
} else {
echo "<script>komunikat(false);</script>";
}
if (isset($_POST['atrybuty']))
{
$atrybuty = $_POST['atrybuty'];
$checkboxy = $_POST['checkbox_atr'];
$ile = count($atrybuty);
$index = mysql_insert_id();
for ($i=0;$i<$ile;$i++) {
$atr_wartosc = $atrybuty[$i];
$atr_id = $checkboxy[$i];
kwerenda("INSERT INTO wartosci (id_produktu,id_cechy,wartosc) VALUES ($index,$atr_id,'$atr_wartosc');");
}

}
}

}

} else {
header("strona glowna");
}

?>
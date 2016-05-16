<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
$kategorie = kwerenda("SELECT id,nazwa FROM kategorie");
$atrybuty_domyslne = kwerenda("SELECT id,nazwa FROM cechy WHERE id_kategorii=0");


?>
<script type="text/javascript" src="js/produkty_slide.js"></script>
<script type="text/javascript">
produkty("dodaj_produkt");
</script>
<script type="text/javascript" src="js/checkbox.js"></script>
<form method="POST" action="">
<table>
<tr><td>
  <div class="form-group" style="margin:30px;">
    <label>Nazwa produktu</label>
    <input type="text" class="form-control" placeholder="Wpisz nazwę produktu" style="width:300px;">
  </div>
  <div class="form-group" style="margin:30px;">
    <label>Cena produktu</label>
    <input type="text" class="form-control" placeholder="Wpisz cenę produktu" style="width:160px;">
  </div>
  <div class="form-group" style="margin:30px;">
  <label>Wybierz kategorię</label>
	<?php
	if (mysql_num_rows($kategorie)>=0) {
	echo "<select class='form-control' style='width:300px;' id='kat_select' name='kategoria'>";
	while ($row = mysql_fetch_array($kategorie)) {
	echo "<option value='".$row[0]."'>".$row[1]."</option>";
	}
	echo "<option selected='selected' value='0'>Inne</option>";
	echo "</select><br/><br/>";
	}
?>
  </div>
  <div class="form-group" style="margin:30px;">
    <label>Ilość</label>
    <input type="number" class="form-control" placeholder="Wybierz ilość" style="width:150px;">
  </div>
    <div class="form-group" style="margin:30px;">
    <label>Opis produktu</label>
	<textarea class="form-control" rows="4" placeholder="Wpisz opis produktu.." style="width:300px;"></textarea>
  </div>
  </td><td style="float:right;margin-top:32px; margin-left:30px;">
  <div class="form-group">
    <label for="exampleInputFile">Dodaj zdjęcie</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Dodaj zdjęcie tytułowe produktu.</p>
  </div>
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
        
	<button type="button" id="uzupelnij_atrybuty" class="btn btn-success" style="float:right; margin-right:20px;">Uzupełnij atrybuty</button>
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
	<br><br>
	<hr>
	
	
	
	
	
	
    <label for="exampleInputFile" style="margin-left:20px;">Dodaj zdjęcia produktu (max. 5)</label>
	<form id="pliki" enctype="multipart/form-data" action="dodawanie_produktow_ajax_zdjecia.php" method="POST"> 
    <input type="file" id="zdjecia" name="zdjecia" multiple style="margin-left:20px;">
    <p style="margin-left:20px; float:left;" class="help-block">Wybierz zdjęcia z komputera.</p>
	</form> 
	<label style="margin-right:250px; float:right; margin-top:-50px;">Dodane zdjęcia</label>
	
<table style="float: right; margin-right:150px;">
	<tr>
		<td style="width:50px;border: 3px solid black;" id="kolumna1">
			1.
		</td>
		<td style="width:200px;border: 3px solid black;" id="kolumna2">
				rfa
		</td>
		<td style="width:50px;border: 3px solid black;" id="kolumna3">
			<center><button style="background-color: rgba(0,0,0,0); border:none;" type="button" class="glyphicon glyphicon-remove"></button></center>
		</td>
	</tr>
	<tr>
		<td style="width:50px;border: 3px solid black;" id="kolumna1">
			2.
		</td>
		<td style="width:200px;border: 3px solid black;" id="kolumna2">
			rfa
		</td>
		<td style="width:50px;border: 3px solid black;" id="kolumna3">
			<center><button style="background-color: rgba(0,0,0,0); border:none;" type="button" class="glyphicon glyphicon-remove"></button></center>
		</td>
	
	</tr>
	<tr>
		<td style="width:50px;border: 3px solid black;" id="kolumna1">
			3.
		</td>
		<td style="width:200px;border: 3px solid black;" id="kolumna2">
			rfa
		</td>
		<td style="width:50px;border: 3px solid black;" id="kolumna3">
			<center><button style="background-color: rgba(0,0,0,0); border:none;" type="button" class="glyphicon glyphicon-remove"></button></center>
		</td>
	
	</tr>
	<tr>
		<td style="width:50px;border: 3px solid black;" id="kolumna1">
			4.
		</td>
		<td style="width:200px;border: 3px solid black;" id="kolumna2">
			rfa
		</td>
		<td style="width:50px;border: 3px solid black;" id="kolumna3">
			<center><button style="background-color: rgba(0,0,0,0); border:none;" type="button" class="glyphicon glyphicon-remove"></button></center>
		</td>
	
	</tr>
	<tr>
		<td style="width:50px;border: 3px solid black;" id="kolumna1">
			5.
		</td>
		<td style="width:200px;border: 3px solid black;" id="kolumna2">
			rfa
		</td>
		<td style="width:50px;border: 3px solid black;" id="kolumna3">
			<center><button style="background-color: rgba(0,0,0,0); border:none;" type="button" class="glyphicon glyphicon-remove"></button></center>
		</td>
	
	</tr>
</table><br><br><br><br><br><br><br><br><br>
<button type="button" id="akceptuj" class="btn btn-success" style="float:right; margin-right:20px;">Dodaj produkt</button>
<script type="text/javascript" src="js/produkty_ajax.js"></script>
<script type="text/javascript" src="js/files_ajax.js"></script>
<?php

} else {
header("strona glowna");
}

?>
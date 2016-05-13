<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>

<form method="POST" action="">
    <div style="margin-top:30px; width:700px; margin-left:40px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby dodać kategorię, wpisz jej nazwe i kliknij przycisk poniżej pola tekstowego.</div>
    <div class="form-group" style="margin:30px;">
        <label>Nazwa kategorii</label>
        <input type="text" class="form-control" placeholder="Wpisz nazwę kategorii" style="width:300px;">
    </div>
    <button type="submit" style="float:right; margin-right: 40px; margin-top:20px;" class="btn btn-success">Dodaj kategorię</button>
</form>

<?php
} else {
header("strona glowna");
}
?>
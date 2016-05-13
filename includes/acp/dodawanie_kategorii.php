<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>
    <script type="text/javascript" src="js/produkty_slide.js"></script>
    <script type="text/javascript">
        produkty("dodaj_kategorie");
    </script>
    <form method="POST" action="">
        <div style="margin-top:30px; width:700px; margin-left:40px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby dodać kategorię, wpisz jej nazwe i kliknij przycisk poniżej pola tekstowego.</div>
        <div class="form-group" style="margin:30px;">
            <label>Nazwa kategorii</label>
            <table>
                <tr><td>

                        <input type="text" class="form-control" placeholder="Wpisz nazwę kategorii" style="width:300px;"></td>
                    <td>
                        <button type="submit" style="margin-left:10px;" class="btn btn-success">Dodaj kategorię</button></div></td></tr></table>

<?php
} else {
header("strona glowna");
}
?>
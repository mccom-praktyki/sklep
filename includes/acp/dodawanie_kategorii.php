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
                        <button type="submit" style="margin-left:10px;" class="btn btn-success">Dodaj kategorię</button></td></tr></table></div>
        <hr>
        <div style="margin-top:30px; width:500px; margin-left:40px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby usunąć kategorię zaznacz ją i kliknij przycisk "usuń".</div>
        <div class="form-group" style="margin:30px;">
            <label for="sel1">Wybierz kategorię do usunięcia:</label>
            <table>
                <tr><td>
                        <select style="width:200px;" class="form-control">
                            <option>kat1</option>
                            <option>kat2</option>
                            <option>kat3</option>
                            <option>kat4</option>
                        </select></td>
                    <td>
                        <button type="submit" style="float:right; margin-left:10px;" class="btn btn-danger">Usuń</button></td></tr></table></div>
        <hr>
        <div style="margin-top:30px; width:550px; margin-left:40px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div> Aby edytować kategorię wybierz ją i kliknij przycisk "edytuj".</div>
        <div class="form-group" style="margin:30px;">
            <label for="sel1">Wybierz kategorię do edycji:</label>
            <table>
                <tr><td>
                        <select style="width:200px;" class="form-control">
                            <option>kat1</option>
                            <option>kat2</option>
                            <option>kat3</option>
                            <option>kat4</option>
                        </select></td>
                    <td>
                        <button type="submit" style="float:right; margin-left:10px;" class="btn btn-warning">Edytuj</button></td></tr></table></div>
<?php
} else {
header("strona glowna");
}
?>
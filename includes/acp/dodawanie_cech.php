<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>
    <div class="form-group" style="margin:30px;">
        <div style="margin-top:30px; width:500px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby dodać cechę, wybierz kategorię a następnie wpisz jej nazwę.</div>
        <label for="sel1">Wybierz kategorię dla której chcesz dodać cechy:</label>
        <br>
        <select style="width:250px;" class="form-control">
            <option>kat1</option>
            <option>kat2</option>
            <option>kat3</option>
            <option>kat4</option>
        </select>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Wpisz nazwę cechy" style="width:250px;margin-top:3px;"></td>
            <button type="submit" class="btn btn-success" style="margin-left:145px;margin-top:3px;">Dodaj cechę</button></div>
    </div>
    <hr>
    <div class="form-group" style="margin:30px;">
        <div style="margin-top:30px; width:550px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby usunąć cechę, wybierz kategorię a następnie zaznacz ją w panelu poniżej.</div>
        <label for="sel1">Wybierz kategorię dla której chcesz usunąć cechy:</label>
        <br>
        <select style="width:250px;" class="form-control">
            <option>kat1</option>
            <option>kat2</option>
            <option>kat3</option>
            <option>kat4</option>
        </select>
        <br>
        <div class="form-group">
            <table id="tabelka" style="margin-left:20px;">
                <tr id="tr2">
                    <td style="width:193.5px;" id="kolumna1">
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>

                    </td>
                    <td style="width:193.5px;" id="kolumna2">
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                    </td>
                    <td style="width:193.5px;" id="kolumna3">
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                    </td>
                    <td style="width:193.5px;" id="kolumna4">
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                        <input type="checkbox" /> Test<br/>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-danger" style="float:right;margin-right:70px;margin-top:30px;">Usuń cechy</button>
   
   
   

<?php
} else {
header("strona glowna");
}
?>
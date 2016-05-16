<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>
    <script type="text/javascript" src="js/produkty_slide.js"></script>
    <script type="text/javascript">
        produkty("usun_produkt");
    </script>
    <form method="POST" action="">
        <div style="margin-top:30px; width:550px;" class="alert alert-danger" role="alert"><div class="glyphicon glyphicon-info-sign"></div>Aby usunąć produkt zaznacz go na liście, następnie kliknij przycisk "Usuń".</div>
        <table border="2px" style="width:100%;" align="center">
            <tr>
                <th> </th>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Data</th>
                <th>Cena</th>
                <th>Kategoria</th>
                <th>Ilość</th>
            </tr>
            <tr>
                <td><center><input type="checkbox"/></center></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><center><input type="checkbox"/></center></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><center><input type="checkbox"/></center></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><center><input type="checkbox"/></center></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td><center><input type="checkbox"/></center></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <button type="submit" style="float:right; margin-right: 40px; margin-top:20px;" class="btn btn-danger">Usuń</button>
        <nav style="float:left; margin-left: 40px;">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </nav>
    </form>


<?php
} else {
header("strona glowna");
}
?>
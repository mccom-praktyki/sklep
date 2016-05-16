<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>
    <script type="text/javascript" src="js/produkty_slide.js"></script>
    <script type="text/javascript">
        produkty("edytuj_produkt");
    </script>
    <form method="POST" action="">
    <div style="margin-top:30px; width:400px;" class="alert alert-info"><div class="glyphicon glyphicon-info-sign"></div>  Aby edytować produkt kliknij na "długopis" przy nim.</div>
    <table border="2px" style="width:100%;" align="center">
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Data</th>
            <th>Cena</th>
            <th>Kategoria</th>
            <th>Ilość</th>
            <th> </th>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><center><button style="background-color: rgba(0,0,0,0); border:none;" class="glyphicon glyphicon-pencil"></button><center></td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><center><button style="background-color: rgba(0,0,0,0); border:none;" class="glyphicon glyphicon-pencil"></button><center></td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><center><button style="background-color: rgba(0,0,0,0); border:none;" class="glyphicon glyphicon-pencil"></button><center></td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><center><button style="background-color: rgba(0,0,0,0); border:none;" class="glyphicon glyphicon-pencil"></button><center></td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td><center><button style="background-color: rgba(0,0,0,0); border:none;" class="glyphicon glyphicon-pencil"></button><center></td>
        </tr>
    </table>
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
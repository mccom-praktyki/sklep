<?php
include('../../db.php');
$per_page = 9; 
if($_GET)
{
$page=$_GET['page'];
}

$start = ($page-1)*$per_page;
if (isset($_GET['kat'])) {
$kat_p = $_GET['kat'];
$sql = kwerenda("SELECT * FROM produkty WHERE kategoria='$kat_p' ORDER BY id LIMIT $start,$per_page");
} else {
$sql = kwerenda("SELECT * FROM produkty ORDER BY id LIMIT $start,$per_page");
}
?>
<table width="850px">
<?php
$kolumna1 = 3;
$kolumna2 = 3;
$count = mysql_num_rows($sql);

if ($count<=0) {
echo "<h2>Nie odnaleziono żadnych produktów</h2>";
}

while($row = mysql_fetch_array($sql))
{

$nazwa=$row['nazwa'];
$cena=$row['cena'];
$id=$row['id'];

if (strlen($nazwa)>=25) {
$nazwa = wordwrap($nazwa, 20, "<br/>", true);
}

if ($kolumna2>=6) {
echo "</tr>";
$kolumna2 = 0;
}
if ($kolumna1>=3) {
echo "<tr>";
$kolumna1 = 0;
}

?>
<form method="GET" action="">
<td align="center" id="produkt">
<div id="products" style="margin-right:30px;" class="row list-group" >
<div id="products2" class="item  col-xs-4 col-lg-4">
<div class="thumbnail">
<img style="cursor:pointer;" onclick='podglad(<?php echo $id; ?>)' class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
<div class="caption">
<h4 style="cursor:pointer;" onclick='podglad(<?php echo $id; ?>)' class="group inner list-group-item-heading">
<?php echo $nazwa; 

?>
</h4>
<div class="row">
<div class="col-xs-12 col-md-6">
<p class="lead">
<?php echo $cena; ?> zł
</p>
</div><br>
<div class="col-xs-12 col-md-6" style="margin-right:400px;">
<button class="btn btn-success">Dodaj do koszyka</button>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
</form>
<?php
$kolumna1 = $kolumna1 + 1;
$kolumna2 = $kolumna2 + 1;
}
?>
</table>
<?php
session_start();
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sprzęt komputerowy ACP</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/acp.css">
	<!-- jQuery -->
	<script src="jquery/jquery-1.12.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/acp.js"></script>
  </head>
 <body>

<div id="box">
<div id="header"><a href="#"><img src="img/mccom.png" style="height:80px; width:150px; margin-left:20px;margin-top:10px; float: left;"></a>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="btn1">Zarządzanie kontem
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Ustawienia</a></li>
      <li><a href="#">Wyloguj</a></li>
    </ul>
  </div>
</div>
<div id="plewy"><br>
<center><a id="link" href="acp.php"><button type="button" class="slidedown"><p id="pulpit">Pulpit</p></button></a>		
<button type="button" class="slidedown" id="slidedown3"><p id="pulpit">Produkty</p></button>
<ul class="nav nav-pills nav-stacked" id="slidedown4" style="background-color:orange;">
  <li id="dodaj_produkt" role="presentation"><a href="acp.php?url=1a">Dodaj produkt</a></li>
  <li id="usun_produkt" role="presentation"><a href="acp.php?url=1b">Usuń produkt</a></li>
  <li id="edytuj_produkt" role="presentation"><a href="acp.php?url=1c">Edytuj produkt</a></li>
  <li id="dodaj_kategorie" role="presentation"><a href="acp.php?url=1d">Kategorie</a></li>
  <li id="dodaj_ceche" role="presentation"><a href="acp.php?url=1e">Atrybuty</a></li>
</ul>

<button class="slidedown" type="button" id="slidedown5"><p id="pulpit">Użytkownicy</p></button>
<ul class="nav nav-pills nav-stacked" id="slidedown6" style="background-color:orange;">
  <li role="presentation"><a href="#">lorem</a></li>
  <li role="presentation"><a href="#">ipsum</a></li>
  <li role="presentation"><a href="#">dolo</a></li>
</ul>

<button class="slidedown" type="button" id="slidedown7"><p id="pulpit">Informacje</p></button>
<ul class="nav nav-pills nav-stacked" id="slidedown8" style="background-color:orange;">
  <li role="presentation"><a href="#">lorem</a></li>
  <li role="presentation"><a href="#">ipsum</a></li>
  <li role="presentation"><a href="#">dolo</a></li>
</ul>	
</div></center>
	
<div id="pprawy">

<?php
require("acp_main.php");
?>


</div>
</div>
 </body>
</html>


<?php

} else {
header("strona glowna");
}
	
?>
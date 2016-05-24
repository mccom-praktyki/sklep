<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sprzęt komputerowy</title>
	<!-- jQuery -->
	<script src="jquery/jquery-1.12.3.min.js"></script>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- OWL Carousel -->
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.css">
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="js/produkty.js"></script>
	<!-- CSS -->
	<link href="css/produkty.css" rel="stylesheet">
  </head>
 <body>
<?php
require_once("db.php");
?>

<div id="box">
	<div id="header">
		<a href="#"><img src="img/mccom.png" style="height:80px; width:150px; margin-left:20px;margin-top:10px; float: left;"></a>
		<div><form class="navbar-form navbar-left" style="margin-left:375px;margin-top:30px;" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Wyszukiwarka">
				</div>
				<button type="submit" class="btn btn-default">Szukaj</button>
			</form></div>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="btn1">Zarządzanie kontem
				<span class="caret"></span></button>
			<ul class="dropdown-menu" style="margin-top:-20px;">
				<li><a href="#">Ustawienia</a></li>
				<li><a href="#">Wyloguj</a></li>
			</ul><br><br>
		</div>
		<button class="btn btn-default glyphicon glyphicon-shopping-cart" id="koszyk"></button>
	</div>
	<div id="plewy">
		<button type="button" class="btn1 btn-primary" style="width:150px;">Filtry</button>
		<div id="ukrycie">
			<form>
				<input type="text" size="5" placeholder="cena od"></input>
				<input type="text" size="5" style="margin-left:6px;" placeholder="cena do"></input> <br />
				<input type="checkbox" name="producent" value="AMD" /><label>AMD</label> <br />
				<input type="checkbox" name="producent" value="Intel" /><label>Intel</label> <br />
				<input type="checkbox" name="producent" value="nvidia" /><label>Nvidia</label> <br />
				<input type="reset"></input>
			</form>
		</div>
	</div>
	<div id="srodek">
		<center>
			<form method="GET" action="">
			<div style="..." id="owl-demo" class="kategorie">

	<?php
	$kategorie = kwerenda("SELECT * FROM kategorie");
	if (mysql_num_rows($kategorie)>=0) {
	while ($row = mysql_fetch_array($kategorie)) {
	echo "<button class='kat' name='kat' value='".$row[0]."'>".$row[1]."</button>";
	}
	echo "<button class='kat' name='kat' value='0'>Inne</button>";
	}
	?>
	</form>

			</div>
			<button id="btnleft" type="button" class="glyphicon glyphicon-triangle-left button"></button>
			<button id="btnright" type="button" class="glyphicon glyphicon-triangle-right button"></button>
		</center>
		<br>
		
<?php
require("produkty_main.php");
?>

	</div>
	<div id="pprawy">
		<div class="dropdown" style="margin-right:25px; margin-top:5px;">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Sortowanie<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Alfabetycznie A-Z</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Alfabetycznie Z-A</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cena od najniższej</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cena od najwyższej</a></li>
				<li role="presentation" class="divider"></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<table style="width:1150px;float:right;">
			<tr>
				<td><span style="border:0"  class="btn btn-default" data-toggle="modal" data-target="#myModal">
	Dane firmy</span></td>
				<td><span style="border:0"  class="btn btn-default" data-toggle="modal" data-target="#myModal2">
	Kontakt</span></td>
				<td><span style="border:0"  class="btn btn-default" data-toggle="modal" data-target="#myModal3">
	Regulamin</span></td>
			</tr></table>
		<!--MODAL  Dane firmy-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						Dane firmy
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		<!--MODAL2 Kontakt-->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						Kontakt
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		<!--MODAL3 Regulamin-->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						Copyright by Praktykanci MCCOM &trade; &copy 2016

					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 
 </body>
</html>
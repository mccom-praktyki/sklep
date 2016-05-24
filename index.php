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
	<script src="js/produkty_carousel.js"></script>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet">
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
				<li><a href="panel/panel.html">Panel administracyjny</a></li>
			</ul><br><br>
		</div>
		<button class="btn btn-default glyphicon glyphicon-shopping-cart" id="koszyk"></button>
	</div>

	<div id="srodek">
		<center>
			<div style="width:940px; height:40px;margin-top:4px" id="owl-demo2" class="kategorie">
				<button class="kat">Kategoria 1</button>
				<button class="kat">Kategoria 2</button>
				<button class="kat">Kategoria 3</button>
				<button class="kat">Kategoria 4</button>
				<button class="kat">Kategoria 5</button>
				<button class="kat">Kategoria 6</button>
				<button class="kat">Kategoria 7</button>
				<button class="kat">Kategoria 8</button>
				<button class="kat">Kategoria 9</button>
				<button class="kat">Kategoria 10</button>
			</div>
			<button id="btnleft" type="button" style="height:50px; width:25px;" class="glyphicon glyphicon-triangle-left button""></button>
			<button id="btnright" type="button" style="height:50px; width:25px;" class="glyphicon glyphicon-triangle-right button"></button>
		</center>
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="demo"><img src="img/1.jpg"></div>
			<div class="demo"><img src="img/2.jpg"></div>
			<div class="demo"><img src="img/3.jpg"></div>
		</div>
	</div>
<?php
require("index_main.php");
?>

</div>
<br/>
<div id="footer">
	<table style="width:800px;float:right;">
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
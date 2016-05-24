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
		<br>
		<div>
			<table class="table">
				<tr>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
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
					<td>
						<div id="products" class="row list-group">
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group">
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group">
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group">
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div id="products" class="row list-group" >
							<div id="products2" class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
									<img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
									<div class="caption">
										<h4 class="group inner list-group-item-heading">
											Acer Aspire</h4>
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<p class="lead">
													299,99zł</p>
											</div><br>
											<div class="col-xs-12 col-md-6" style="margin-right:400px;">
												<a class="btn btn-success" href="http://www.jquery2dotnet.com">Dodaj do koszyka</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<center>
			<nav style="margin-top:50px;"><center>
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Poprzednia">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Następna">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</center>
			</nav>
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
<?php
$per_page = 9; 
if (isset($_GET['kat'])) {
$kategoria = $_GET['kat'];
$sql = kwerenda("SELECT * FROM produkty WHERE kategoria=$kategoria");
} else {
$sql = kwerenda("SELECT * FROM produkty");
}

$count = mysql_num_rows($sql);
$pages = ceil($count/$per_page)
?>

<script type="text/javascript" src="js/jquery_pagination.js"></script>

<center><div id="loading" ></div></center>
<div id="content" ></div>

<?php
if ($count>9) {
?>
<nav style="margin-top:50px;"><center>
  <ul id="pagination" style="cursor:pointer;" class="pagination">
    <li>
      <a href="#" aria-label="Poprzednia">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
	<?php
		for($i=1; $i<=$pages; $i++)
		{
			echo "<li id='".$i."'><a>".$i."</a></li>";
		}
	?>
    <li>
      <a href="#" aria-label="Następna">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </center>
</nav>
<?php
}
?>









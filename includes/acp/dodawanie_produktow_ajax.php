<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {

function connection () { 
    $mysql_server = "127.0.0.1"; 
    $mysql_admin = "Administrator"; 
    $mysql_pass = "rps24vsbMpwrvNpU"; 
    $mysql_db = "sklep"; 
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass) 
    or die('Brak połączenia z serwerem MySQL.'); 
    @mysql_select_db($mysql_db) 
    or die('Błąd wyboru bazy danych.'); 
} 
connection();

function kwerenda ($query) {
mysql_query('SET NAMES utf8');
mysql_query('SET CHARACTER_SET utf8_unicode_ci');
return mysql_query($query);
}

	$id_kat = $_POST['kategoria'];
	$cechy = kwerenda("SELECT id,nazwa FROM cechy WHERE id_kategorii=$id_kat");
	


		$id = array(); $nazwa = array();
		while($row = mysql_fetch_array($cechy)) {
        $id[] = $row["id"]; 
        $nazwa[] = $row["nazwa"];
		}
		$ilosc[] = mysql_num_rows($cechy);
		$res = array($id, $nazwa, $ilosc);
		echo json_encode($res);

 
} else {
header("strona glowna");
}

?>
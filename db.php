<?php
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

?>
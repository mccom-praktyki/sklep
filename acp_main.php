﻿<?php
if(!isset($_GET['url'])) {

 include "includes/acp/strona_glowna.php"; }

 else if ($_GET['url']=='1a') {

 include "includes/acp/dodawanie_produktow.php"; }

 else if($_GET['url']=='1b') {

 include "includes/acp/usuwanie_produktow.php"; }

 else if($_GET['url']=='1c') {

 include "includes/acp/edytuj_produkt.php"; }

  else if($_GET['url']=='1d') {

 include "includes/acp/dodawanie_kategorii.php"; }
 
   else if($_GET['url']=='1e') {

 include "includes/acp/dodawanie_cech.php"; }

 else {

 echo("<b>404</b><br />wpisujemy komunikat błędu który wyświetli się kiedy podstrona nie zostanie znaleziona"); } 
 
?>
<?php
if(!isset($_GET['url'])) {

 include "includes/index/strona_glowna.php"; }

 elseif ($_GET['url']=='1') {

 include "includes/index/lista_produktow.php"; }

 elseif($_GET['url']=='1b') {

 include "includes/index/.php"; }

 elseif($_GET['url']=='1c') {

 include "includes/index/.php"; }

  elseif($_GET['url']=='1d') {

 include "includes/index/.php"; }
 
   elseif($_GET['url']=='1d_2') {

 include "includes/index/.php"; }
 
   elseif($_GET['url']=='1e') {

 include "includes/index/.php"; }

 else {

 echo("<b>404</b><br />wpisujemy komunikat błędu który wyświetli się kiedy podstrona nie zostanie znaleziona"); } 
 
?>
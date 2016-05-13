<?php
//-------------------------------------
$_SESSION['Zalogowany'] = 1;
$_SESSION['Administrator'] = 1;
//-------------------------------------
if ($_SESSION['Zalogowany']==1 and $_SESSION['Administrator']==1) {
?>

test

<?php
} else {
header("strona glowna");
}
?>
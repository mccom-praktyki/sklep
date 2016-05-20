<?php
if (isset($_FILES['file1'])) {

if ($_FILES['file1']['size']>=10485760) {
echo "Maksymalna  wielkość pliku to 10 MB!";
exit();
}
	
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['file1']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) ) {
    echo "Dozwolone formaty plików to JPG, PNG oraz GIF";
	exit();
}


if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
$fileName = $_FILES["file1"]["name"]; 
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; 
$fileErrorMsg = $_FILES["file1"]["error"]; 

	include "../../db.php";
	$rowSQL = kwerenda( "SELECT MAX( ID ) AS max FROM produkty;" );
	$row = mysql_fetch_array( $rowSQL );
	$id_produktu = $row['max']+1;
	$nazwa = "$id_produktu".md5($fileName).rand(1,100).".".$ext; 


} else { echo "Nie udało sie przesłać pliku!"; exit; }
if(move_uploaded_file($fileTmpLoc, "../../galeria/$nazwa")){
    echo "Plik $fileName został przesłany.";
		kwerenda("INSERT INTO zdjecia (id_produktu, nazwa) VALUES ($id_produktu, '$nazwa')");
	
} else {
    echo "Przesyłanie pliku nie powiodło się.";
}
}
?>
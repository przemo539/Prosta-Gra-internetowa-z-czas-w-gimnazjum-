<?php
include("css/wyglad.php");
$max = mysql_fetch_row(mysql_query("SELECT max(id) FROM changelog ORDER BY id DESC LIMIT 0,10"));
$ilosc = $max[0] - 5;
$version = mysql_query("select * from changelog where id > $ilosc");
while($version2 = mysql_fetch_array($version)){
echo'<a href="changelog.php?id='.$version2['id'].'"> '.$version2['versja'].',   </a>';
}

$versja = mysql_fetch_array(mysql_query("select * from changelog where id = ".$_GET['id']." "));
if($versja[0] != NULL){
echo '<br><br>Wersja = '.$versja['versja'].'<br><br>';
echo 'Kiedy dodano: '.date('d-m-Y H:i:s', $versja['czas']).'<br><br>';
echo 'Opis zmian:<br>'.$versja['opis_zmian'].'<br><br>';
}

include ("menu/stopka.php");
?>
<?php include("css/wyglad.php");
include("1/www/js/licznik.js");
include("lang/".$jezyk."/lang_reszta.php");?>
<?php
session_start();
if (!isset($_SESSION["login"])){
 $login = $_SESSION['login'];
  header("Location: index.php?sesja=wygasla");
  exit();
}
    if(isset($_SESSION['login']))
        $login = $_SESSION['login']; 
		$mysql2 = mysql_fetch_array(mysql_query("select urlop from `konta` where `login` = '$login'")); 
		$czas_w_sekundach = $mysql2[0] - $teraz;
		echo'<center>';
		$_SESSION["login"] = $login;
		echo $lang_resz['20'];

	if(isset($_POST['ok2'])){
	$ilosc_PP = mysql_fetch_array(mysql_query("SELECT * FROM konta WHERE login='$login'"));
	if($ilosc_PP['PP'] >= '15'){
	$query = mysql_query("UPDATE konta SET urlop='0', PP=PP-'15' WHERE login='$login' ");
	echo"<script type='text/javascript'>window.alert('".$lang_resz['21']."');document.location.href = 'index.php';</script>";
	
	}else{
	echo'aa3';
	echo"<script type='text/javascript'>window.alert('".$lang_resz['22']."');document.location.href = 'index.php';</script>";
	}
	}
?>
<?php include "menu/stopka.php"; ?> 
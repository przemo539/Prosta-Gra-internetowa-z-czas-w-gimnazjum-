<?php 
ob_start();
session_start();
include_once("css/wyglad.php");
include_once("1/www/js/licznik.js");
include_once("lang/".$jezyk."/lang_reszta.php");?>
<?php
if ($_SESSION["login"] == null){
 $login = $_SESSION['login'];
  header("Location: index.php?sesja=wygasla");
  exit();
}
    if(isset($_SESSION['login']))
        $login = $_SESSION['login']; 
		$mysql2 = mysql_fetch_array(mysql_query("select email, aktywne from `konta` where `login` = '$login'")); 
		if($mysql2[1] == 0){
		echo $lang_resz['3'];

	if(isset($_POST['ok2'])){
	$aktywacja = mysql_fetch_array(mysql_query("SELECT * FROM aktywacja WHERE login='$login'"));
	if($aktywacja['kod_aktywacyjny'] == Null){
	$kod_aktywacyjny=md5($login);
	$email = $mysql2[0];
	$aktywacja = mysql_query("insert into `aktywacja` (`kod_aktywacyjny` , `login`, `email`) VALUES ('$kod_aktywacyjny', '$login', '$email')"); 
 // ---------------- WYSYłANIE E-MAILA ----------------

 	$kod_aktywacyjny=md5($login);
	$email = $mysql2[0];
 
	include("konfiguracja/smtp.php");	
	 
	$mail->From = "drive-faster@o2.pl";  
	$mail->FromName = "Admin";
	// Temat
	$mail->Subject = $lang_resz['4'];
	
	$messages.=$lang_resz['6'];
	$messages.=$lang_resz['7'].'<a href="'.$adressgry.'/index.php?aktywacja=konta&kod='.$kod_aktywacyjny.'">kliknij tutaj</a><br>';
	$messages.=$lang_resz['8'];
	$messages.=$lang_resz['9'];

	$mail->Body = $messages;
		
	$mail->AddAddress($email);
			
	if($mail->Send())
		echo "<br>E-mail został wysłany <br>";
	else
		echo "<br>E-mail nie mógł zostać wysłany, przyczyna :".$mail->ErrorInfo;
					
	$mail->SmtpClose();

	}else{
	$kod_aktywacyjny=md5($login);
	$email = $mysql2[0];
	include("konfiguracja/smtp.php");	
	 
	$mail->From = "drive-faster@o2.pl";  
	$mail->FromName = "Admin";
	// Temat
	$mail->Subject = $lang_resz['4'];
	
	// Wiadomość
	$messages.=$lang_resz['6'];
	$messages.=$lang_resz['7'].'<a href="'.$adressgry.'index.php?aktywacja=konta&kod='.$kod_aktywacyjny.'">kliknij tutaj</a><br>';
	$messages.=$lang_resz['8'];
	$messages.=$lang_resz['9'];

	$mail->Body = $messages;
		
	$mail->AddAddress($email);
			
	if($mail->Send())
		echo "<br>E-mail został wysłany <br>";
	else
		echo "<br>E-mail nie mógł zostać wysłany, przyczyna :".$mail->ErrorInfo;
					
	$mail->SmtpClose();


	}
	}
	}else{
	header("Location:  index.php?strona=glowna");
	}
	ob_end_flush();
?>
<?php include "menu/stopka.php"; ?>

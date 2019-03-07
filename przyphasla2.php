<?php include("css/wyglad.php"); 
include("lang/".$jezyk."/lang_reszta.php");?>
<?php
include('konfiguracja/mysql_connect.php');

if(strstr($_GET['email'], "--")!==False or strstr($_GET['email'], "'")!==False or strstr($_GET['email'], '"')!==False ){
echo "Nie poprawnie uzupełniono pole email";
include ("menu/stopka.php");
exit();
	}
if(strstr($_GET['nick'], "--")!==False or strstr($_GET['nick'], "'")!==False or strstr($_GET['nick'], '"')!==False ){
echo "Nie poprawnie uzupełniono pole email";
include ("menu/stopka.php");
exit();
	}
// zmienna przesłana z formularza
$email_md5=$_GET['email'];
$nick_md5=$_GET['nick'];

$query=("SELECT `email`, `nick` FROM przypomnienie_hasla WHERE email_md5 ='$email_md5' and nick_md5 ='$nick_md5'");// `alt` jest hasłem w bazie danych
$result=mysql_query($query);

$player=mysql_fetch_array($result);

// jeśli $count =1 
if($player!=null){
$login = $player['nick'];
$email = $player['email'];

$poczatek_zaresu = 1;
$koniec_zakresu = 9;


$haslo1=rand($poczatek_zakresu, $koniec_zakresu);
$haslo2=rand($poczatek_zakresu, $koniec_zakresu);
$haslo3=rand($poczatek_zakresu, $koniec_zakresu);
$haslo4=rand($poczatek_zakresu, $koniec_zakresu);
$haslo5=rand($poczatek_zakresu, $koniec_zakresu);

$rows=mysql_fetch_array($result);
$haslo = $haslo1.$haslo2.$haslo3.$haslo4.$haslo5;
$haselko = md5($haslo);

$mysql = "UPDATE konta SET password='$haselko' where email ='$email' and login = '$login'";
$query = mysql_query($mysql); 
         if($mysql){ 
            echo ''; 
            }

// ---------------- WYSYłANIE E-MAILA ----------------

	include("konfiguracja/smtp.php");	
	 
	$mail->From = "drive-faster@o2.pl";  
	$mail->FromName = "Admin";
	// Temat
	$mail->Subject = $lang_resz['19'];
	
	$messages.= $lang_resz['12'].$login.'<br>';
	$messages.= $lang_resz['13'].$haslo1.$haslo2.$haslo3.$haslo4.$haslo5.'<br>';
	$messages.= $lang_resz['14'].$adressgry.'">kliknij tutaj</a>';
	$messages.= $lang_resz['15'];

	$mail->Body = $messages;
		
	$mail->AddAddress($email);
			
	if($mail->Send())
		echo "<br>E-mail został wysłany <br>";
	else
		echo "<br>E-mail nie mógł zostać wysłany, przyczyna :".$mail->ErrorInfo;
					
	$mail->SmtpClose();
	mysql_query("delete from przypomnienie_hasla where email = '$email' and nick = '$login' and email_md5 = '$email_md5' and nick_md5 = '$nick_md5' ");
}else{
echo $lang_resz['16'];
}

?>
<?php include "menu/stopka.php"; ?>
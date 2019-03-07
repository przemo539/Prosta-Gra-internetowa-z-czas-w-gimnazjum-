<?php include("css/wyglad.php"); 
include("lang/".$jezyk."/lang_reszta.php");?>
<?php
include('konfiguracja/mysql_connect.php');


// zmienna przesłana z formularza
$email_to=$_POST['email_to'];
if(strstr($email_to, "--")!==False or strstr($email_to, "'")!==False or strstr($email_to, '"')!==False ){
echo "Nie poprawnie uzupełniono pole email";
include ("menu/stopka.php");
exit();
	}
$query=("SELECT `login`, `email` FROM konta WHERE email ='$email_to'");// `alt` jest hasłem w bazie danych
$result=mysql_query($query);

$count=mysql_fetch_array($result);

// jeśli $count =1
if($count!=null){
$email = $count['email'];
$nick = $count['login'];
$email_md5 = md5($email_to);
$nick_md5 = md5($email_to);
$czas = time(); 

mysql_query("INSERT INTO `przypomnienie_hasla` (`email`, `nick`, `email_md5`, `nick_md5` , `data`, `czas`) VALUES ('$email', '$nick', '$email_md5', '$nick_md5', now(), '$czas')");

// ---------------- WYSYłANIE E-MAILA ----------------

	include("konfiguracja/smtp.php");	
	 
	$mail->From = "drive-faster@o2.pl";  
	$mail->FromName = "Admin";
	// Temat
	$mail->Subject = $lang_resz['19'];
	
	$messages.= 'Dostaliśmy informacje że chcesz zmienić hasło<br>';
	$messages.= 'Jeśli tak kliknij w link poniżej aby dostać nowe hasło<br>';
	$messages.= $lang_resz['14'].$adressgry.'/przyphasla2.php?nick='.$nick_md5.'&email='.$email_md5.'">kliknij tutaj</a><br>';
	$messages.= 'A jeśli nie prosisz o zmiane hasła to zignoruj tą wiadomość gdyż link wygaśnie po 48h<br>';

	$mail->Body = $messages;
		
	$mail->AddAddress($email_to);
			
	if($mail->Send())
		echo "<br>E-mail został wysłany <br>";
	else
		echo "<br>E-mail nie mógł zostać wysłany, przyczyna :".$mail->ErrorInfo;
					
	$mail->SmtpClose();
}else{
echo $lang_resz['16'];
}

?>
<?php include "menu/stopka.php"; ?>
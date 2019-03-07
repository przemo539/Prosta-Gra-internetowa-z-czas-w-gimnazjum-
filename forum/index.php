<?php 
ob_start(); 
session_start(); 
	//	if($_COOKIE["jezyk"] == null){
	//	setcookie("jezyk", "pl", time()+2678400);
	//	echo $lang_ind['62'];
	//	}
include_once("css/wyglad.php"); 
include_once("../konfiguracja/mysql_connect.php"); 
?>

			
<?php

if($_GET['strona'] == 'glowna'){
echo'
<table class="forumline" width="150%" cellspacing="1" cellpadding="2" border="0">
<tbody>
<tr>
<th width="100%" nowrap="nowrap" colspan="2">&nbsp;FORUM&nbsp;</th>
<th width="50" nowrap="nowrap">&nbsp;Tematy&nbsp;</th>
<th width="50" nowrap="nowrap">&nbsp;Posty&nbsp;</th>
<th width="150" nowrap="nowrap">&nbsp;Ostatni post&nbsp;</th>
</tr>
<tr>';
$kategoria2 = mysql_query("select * from forum_kategoria");

while($kategoria=mysql_fetch_array($kategoria2)){
echo '
<td class="cat" width="100%" colspan="2">
<span class="cattitle">
<a class="cattitle" href="index.php?kategoria='.$kategoria['id'].'">'.$kategoria['nazwa'].'</a>
</span>
</td>
<td class="rowpic" align="right" colspan="3">&nbsp;</td>
</tr>';

$forum2 = mysql_query("select * from forum_forum where id_kategori='".$kategoria['id']."'");
while($forum=mysql_fetch_array($forum2)){
if(1==1){
echo '<tr>
<td class="row1" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv(this);">
<img width="46" height="25" title="Brak nowych postów" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/folder_big.gif">
</td>';
}
echo '<td class="row1" width="100%" height="50" colspan="1" onmouseout="ont(this);" onmouseover="onv(this);" style="">
<span class="forumlink">
<a class="forumlink" style="color: #0000FF" href="forum.php?forum='.$forum['id'].'">'.$forum['nazwa'].'</a>
</span>
<span class="gensmall">
<br>
</span>
<span class="genmed">
'.$forum['opis'].'
<br>
</span>';
if(2 ==2){
echo'<span class="gensmall">
Moderator'.
//<a class="gensmall" style="color: #006600;font-weight: bold; ;" href="groupcp.php?g=4769&sid=19b6554945704f06fa4b836c3c7b417d">~ModTeam</a>
'</span>';
}
echo '</td>
<td class="row2" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="gensmall">'.$forum['tematy'].'</span>
</td>
<td class="row2" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="gensmall">'.$forum['posty'].'</span>
</td>
<td class="row2" align="center" valign="middle" nowrap="nowrap" height="50" onmouseout="ont(this);" onmouseover="onv2(this);" style="">
<span class="gensmall">
'.date("d.m.y, H:i", $forum['czas_ostatniego']).'
<br>
<a class="gensmall" href="profile.php?mode=viewprofile,u,29484">'.$forum['nick_ostatniego'].'</a>
<a href="viewtopic.php?p=717663#717663">
<img width="18" height="9" border="0" title="Ostatni post" alt="Ostatni post" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_latest_reply.gif">
</a>
</span>
</td>
</tr>';

}

}
echo"</table>";
include ("menu/stopka.php");
exit();
}

		  if(!ereg('^[0-9]*$', $_GET['kategoria'])){
		  include ("menu/stopka.php");
		  echo"<script type='text/javascript'>window.alert('ups... coś poszło nie tak!! spróbuj ponownie za chwile');document.location.href = 'index.php?strona=glowna';</script>";
		  }elseif($_GET['kategoria'] != null){
echo'
<table class="forumline" width="150%" cellspacing="1" cellpadding="2" border="0">
<tbody>
<tr>
<th width="100%" nowrap="nowrap" colspan="2">&nbsp;FORUM&nbsp;</th>
<th width="50" nowrap="nowrap">&nbsp;Tematy&nbsp;</th>
<th width="50" nowrap="nowrap">&nbsp;Posty&nbsp;</th>
<th width="150" nowrap="nowrap">&nbsp;Ostatni post&nbsp;</th>
</tr>
<tr>';
$kategoria2 = mysql_query("select * from forum_kategoria where id='".$_GET['kategoria']."'");

while($kategoria=mysql_fetch_array($kategoria2)){
echo '
<td class="cat" width="100%" colspan="2">
<span class="cattitle">
<a class="cattitle" href="index.php?kategoria='.$kategoria['id'].'">'.$kategoria['nazwa'].'</a>
</span>
</td>
<td class="rowpic" align="right" colspan="3">&nbsp;</td>
</tr>';

$forum2 = mysql_query("select * from forum_forum where id_kategori='".$kategoria['id']."'");
while($forum=mysql_fetch_array($forum2)){
if(1==1){
echo '<tr>
<td class="row1" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv(this);">
<img width="46" height="25" title="Brak nowych postów" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/folder_big.gif">
</td>';
}
echo '<td class="row1" width="100%" height="50" colspan="1" onmouseout="ont(this);" onmouseover="onv(this);" style="">
<span class="forumlink">
<a class="forumlink" style="color: #0000FF" href="forum.php?forum='.$forum['id'].'">'.$forum['nazwa'].'</a>
</span>
<span class="gensmall">
<br>
</span>
<span class="genmed">
'.$forum['opis'].'
<br>
</span>';
if(2 ==2){
echo'<span class="gensmall">
Moderator'.
//<a class="gensmall" style="color: #006600;font-weight: bold; ;" href="groupcp.php?g=4769&sid=19b6554945704f06fa4b836c3c7b417d">~ModTeam</a>
'</span>';
}
echo '</td>
<td class="row2" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="gensmall">'.$forum['tematy'].'</span>
</td>
<td class="row2" align="center" valign="middle" height="50" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="gensmall">'.$forum['posty'].'</span>
</td>
<td class="row2" align="center" valign="middle" nowrap="nowrap" height="50" onmouseout="ont(this);" onmouseover="onv2(this);" style="">
<span class="gensmall">
'.date("d.m.y, H:i", $forum['czas_ostatniego']).'
<br>
<a class="gensmall" href="profile.php?mode=viewprofile,u,29484">'.$forum['nick_ostatniego'].'</a>
<a href="viewtopic.php?p=717663#717663">
<img width="18" height="9" border="0" title="Ostatni post" alt="Ostatni post" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_latest_reply.gif">
</a>
</span>
</td>
</tr>';

}

}
echo"</table>";
include ("menu/stopka.php");
exit();	  
}

?>


		<?php
		if($_GET['aktywacja'] == "konta"){
		$kod=$_GET['kod'];
		$nick_aktywowanego = mysql_fetch_assoc(mysql_query("SELECT * from aktywacja where kod_aktywacyjny = '$kod'"));
		$aktywacja_udana = "UPDATE konta SET aktywne = '1' WHERE login='".$nick_aktywowanego['login']."' and email = '".$nick_aktywowanego['email']."' ";
		$aktywacja_udana2 = mysql_query($aktywacja_udana);
		if($kod == null){
		header("Location:  index.php?strona=glowna");
		}
		if($nick_aktywowanego == null){
		echo $lang_ind['14'];
		}elseif($aktywacja_udana2){ 
                echo $lang_ind['15'];  
            }	
		$usuwanie_kodu = mysql_query("DELETE FROM aktywacja WHERE login='".$nick_aktywowanego['login']."' and email = '".$nick_aktywowanego['email']."' ");

		include ("menu/stopka.php");
exit();
}
		
		
		echo'<center>';
if($_GET['rejestruj'] == "sie"){

   if ($_SERVER['REMOTE_ADDR'] == '')
   {
      $ip = $_SERVER['REMOTE_ADDR'];
   } else $ip = $_SERVER['REMOTE_ADDR'];
 
		


$rank = mysql_fetch_array(mysql_query("SELECT rejestracja FROM config WHERE login='admin'"));
$profil = mysql_fetch_assoc(mysql_query("SELECT opis_rejestracja FROM config WHERE login='admin' "));
if($rank['rejestracja'] != '0'){
	echo "<h1><center><font color='gold'>";
	echo "" . $profil['opis_rejestracja'] . "<br></font>";
	echo "</h1></center>";

	
include ("menu/stopka.php");
  exit();
}

			$niczek = $_GET['user'];	
include("konfiguracja/mysql_connect.php");
if($_POST['regulamin'] == 'nie'){
echo"NIE ZAAKCEPTOWAŁEŚ REGULAMINU!!!!!";
}elseif(isset($_POST['ok1'])){ 

        $name = htmlspecialchars($_POST['name']); 
        $password = $_POST['pass']; 
		$password = md5($password);
        $password_2 = $_POST['pass2'];
		$password_2 = md5($password_2);
        $plec = $_POST['plec'];  
		$email = $_POST['email2'];
		$email_2 = $_POST['email3'];
		$polecil = $_POST['polecil'];
		$serwer = $_POST['serwer'];
		$serwer_poczty = strstr($email, "@");
		//nick zakodowany z md5
		$aktywacja = md5($name);
		$sprawdzanie_poczty = mysql_fetch_array(mysql_query("select   `id` from `serwery_pocztowe` where `serwer` = '$serwer_poczty'")); 
		if($serwer == '1'){
	if(strstr($name, "--")!==False or strstr($name, "'")!==False or strstr($name, '"')!==False ){
	echo "Nie poprawnie uzupełniono pole Login";
include ("menu/stopka.php");
exit();
	}elseif(strstr($polecil, "--")!==False or strstr($polecil, "'")!==False or strstr($polecil, '"')!==False ){
	echo "Nie poprawnie uzupełniono pole Polecił(nick)";
include ("menu/stopka.php");
exit();
	}elseif($name != NULL AND $password != NULL AND $password_2 != NULL AND $plec != NULL AND $email != NULL AND $email_2 != NULL){ 
            if($password !== $password_2){
				echo$lang_ind['16'];
				include("menu/stopka.php");
                exit();
			} 
			if($email != $email_2){ 
			echo$lang_ind['17'];
			include("menu/stopka.php");
                exit(); 
            } 
            $mysql = mysql_fetch_array(mysql_query("select   `ID` from `konta` where `login` = '$name'")); 
            if($mysql != NULL){ 
			echo$lang_ind['18'];
			include("menu/stopka.php");
                exit(); 
            }
			 $ilosc = "SELECT COUNT(*) FROM konta WHERE ip='$ip' ";
			 if(!$result = mysql_query($ilosc)){
			echo($lang_ind['19']);
			}
			if(!$online = mysql_fetch_row($result)){
			echo($lang_ind['19']);
			}
			if($online[0] >= 5){
			echo$lang_ind['20'];
			include("menu/stopka.php");
			exit();
			}
			if($sprawdzanie_poczty == NULL){
			echo"Twoja skrzynka nie jest obsługiwana!! Pisz do suportu lub utwórz wątek na forum";
			include("menu/stopka.php");
			exit();
			}
			 $mysql = mysql_fetch_array(mysql_query("select   `ID` from `konta` where `email` = '$email'")); 
            if($mysql != NULL){ 
			echo$lang_ind['21'];
			include("menu/stopka.php");
                exit(); 
            }
            $rejestracja = "insert into `konta` (`login`, `password`, `email`, `plec` , `ip`, `dataRejestracji`) VALUES ('$name', '$password', '$email', '$plec', '$ip', now())"; 
			$kod_aktywacyjny = mysql_query("insert into `aktywacja` (`kod_aktywacyjny` , `login`, `email`) VALUES ('$aktywacja', '$name', '$email')"); 
            
			$rejestracja2 = mysql_query($rejestracja); 
            if($rejestracja2){ 
                echo $lang_ind['22'];  
        		}
				
// ---------------- WYSYłANIE E-MAILA ----------------				
	include("konfiguracja/smtp.php");	
	 
	$mail->From = "drive-faster@o2.pl";  
	$mail->FromName = "Admin";
	// Temat
	$mail->Subject = $lang_ind['23'];;
	
$messages.= $lang_ind['25'];
$messages.= ' Wejdz na : <a href="'.$adressgry.'/index.php?aktywacja=konta&kod='.$aktywacja.'">Kliknij tu!</a> <br> ';;
$messages.= $lang_ind['27'];
$messages.= $lang_ind['28'];
	$mail->Body = $messages;
		
	$mail->AddAddress($email);
			
	if($mail->Send())
		echo "E-mail został wysłany <br>";
	else
		echo "E-mail nie mógł zostać wysłany, przyczyna :".$mail->ErrorInfo;
					
	$mail->SmtpClose();	
//dotąd
}
			if($polecil < '0'){
			}else{
			$polecil2 = "insert into `polecil` values ('$polecil', '$name')"; 
            $polecil3 = mysql_query($polecil2); 
			}
            if($polecil3){ 
                
            } 			
        }elseif($serwer == '2'){
		echo'Ten serwer jest nie czynny!';
		}   
	
	}
	 
if($_POST['regulamin'] == 'nie' or $_POST['regulamin'] == NULL)
{
 echo   '<font color="red"><form action="" method="post"> 
        '.$lang_ind['31'].' <input type="text" name="name" value="'.$_POST['name'].'" /><br>
        '.$lang_ind['32'].' <input type="password" name="pass" value="'.$_POST['pass'].'" /><br>
        '.$lang_ind['33'].' <input type="password" name="pass2" value="'.$_POST['pass2'].'" /><br>
		'.$lang_ind['34'].' <input type="email" name="email2" value="'.$_POST['email2'].'" /><br>
		'.$lang_ind['35'].' <input type="email" name="email3" value="'.$_POST['email3'].'" /><br>
        '.$lang_ind['36'].' <select name="plec" > 
            <option value="M">'.$lang_ind['37'].'</option> 
            <option value="K">'.$lang_ind['38'].'</option> 
        </select><br>';
		if($niczek != NULL){ 
		echo $lang_ind['39'].'<input type="text" name="polecil" disabled="disabled" value="'.$niczek.'"><br>';
		}else{
		echo $lang_ind['39'].'<input type="text" name="polecil" "><br>';
		}
		echo $lang_ind['40'].'<select name="serwer"> 
            <option value="1">'.$lang_ind['41'].'</option> 
            <option value="2">'.$lang_ind['42'].'</option> 
        </select><br>';
       echo' 
	   Czy akceptujesz <a href="index.php?pokaz=zasady" target="_blank">regulamin</a> ?<br>
		<input type="radio" name="regulamin" value="tak" >Tak<br>
		<input type="radio" name="regulamin" value="nie" checked>Nie<br>
	   <input type="submit" name="ok1" value="'.$lang_ind['43'].'" /> <br>
    </form></font>'; 

     }
echo'</center>';

include ("menu/stopka.php");
exit();
}?>
<?php
include ("menu/stopka.php");
ob_end_flush();
?>
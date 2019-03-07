<?php 
ob_start(); 
session_start(); 
	//	if($_COOKIE["jezyk"] == null){
	//	setcookie("jezyk", "pl", time()+2678400);
	//	echo $lang_ind['62'];
	//	}
include_once("css/wyglad.php"); 
include_once("1/www/js/licznik.js");
include_once("lang/".$jezyk."/lang_index.php");
?>
<?php
if($_GET['pokaz'] == "galeria"){
echo"Oto kilka screenshotów z gry. Niedługo zostanie dodane więcej<br>";
echo'<a href="www/images/obrazek1.bmp"  rel="lightbox[screenshot]" ><img src="www/images/obrazek1_miniature.bmp"  width="180" height="100" /></a>';
echo'<a href="www/images/obrazek2.bmp"  rel="lightbox[screenshot]" ><img src="www/images/obrazek2_miniature.bmp"  width="180" height="100" /></a>';
echo'<a href="www/images/obrazek3.bmp"  rel="lightbox[screenshot]" ><img src="www/images/obrazek3_miniature.bmp"  width="180" height="100" /></a>';
echo'<a href="www/images/obrazek4.bmp"  rel="lightbox[screenshot]" ><img src="www/images/obrazek4_miniature.bmp"  width="180" height="100" /></a>';
include("menu/stopka.php");
exit();
}
?>
<?php
if($_GET['pokaz'] == "konkurs"){
echo"Odpowiedzi należy dodawać na forum w specjalnej kategori o nazwie konkurs. Każdy może dodać tylko 1 propozycje aby dać szanse wygrać innym.<br>
Gracz po dodaniu wątku i za akceptowaniu go przez moderatora nie może już edytować postu.";
echo"<br><br>Nagrodami w konkursach są unikatowe części, ubrania, auta, konta premium oraz PP";
echo"<br><br><font color='blue'>KONKURS 1</font>";
echo"<br>W dniu 05.01.2012<br> 
		Do 05.04.2012<br>
Administracja gry ogłasza konkurs na 20 nazw samochodów.<br>
Nagrody będą przeznaczone dla 3 zwycięzców.<br>
Nagrody to (do wyboru):<br><br>
<font color='red'>1 miejsce</font> - 50 PP, konto administratora lub moderatora gry na okres 6 miesięcy, <br>
konto premium na 6 miesięcy, zestaw unikatowych cześci przystosowanych do lvlu,<br>
zestaw unikatowych ubrań przystosowanych do lvlu,<br>
unikatowe auto przystosowane do lvlu.<br><br>

<font color='red'>2 miejsce</font> - 30 PP, konto premium na 3 miesiące,<br>
zestaw unikatowych ubrań przystosowanych do lvlu,<br>
zestaw unikatowych cześci przystosowanych do lvlu<br><br>

<font color='red'>3 miejsce</font> - 10 PP, konto premium na 1 miesiąc,<br>
zestaw unikatowych ubrań przystosowanych do lvlu,<br><br>
";
include("menu/stopka.php");
exit();
}
?>

<?php
if($_GET['pokaz'] == "o_grze"){
echo"<h1>Drive Faster</h1><br><br>

Drive Faster to internetowa gra MMORPG. <br>
Będziesz ścigać się z innymi graczami,  kupować i sprzedawać samochody, części do samochodów oraz wiele więcej.<br><br>
Właściwości gry<br><br>

    Narazie 20 lvl<br>
    Teamy<br>
    Wyzywanie graczy<br>
    Słabe obrazki aut<br>
    Sprzedaż i zakup samochodów i części<br>
    Trening<br>
	Centrum treningowe<br>
    ... i wiele więcej ...
";
include("menu/stopka.php");
exit();
}
?>


		<?php
	//	if($_GET['jezyk'] == "polski"){
	//	setcookie("jezyk", "pl", time()+2678400);
	//	echo $lang_ind['62'];
	//	}
	//	if($_GET['jezyk'] == "angielski"){
	//	setcookie("jezyk", "en", time()+2678400);
	//	echo $lang_ind['63'];
	//	}

if($_GET['strona'] == "glowna"){
//default:
$limit = 5; // Ilość pozycji na stronie.
	if(!isset($pg)) {
	   $l1 = 0;
        $l2 = $limit; 
	} else {
    				
           $l1 = $limit * $pg - $limit;
    	   $l2 = $limit;
			
        }
echo "<h2><center>".$lang_ind['5']."</center><br></h2>";

$zapytanie = mysql_query("SELECT konta.login, konta.lvl, konta.exp, auta_gracze.nazwa, auta_gracze.vmax, auta_gracze.bak_max, auta_gracze.do100 FROM konta, auta_gracze WHERE  auta_gracze.nick = konta.login and konta.samochodID = auta_gracze.id ORDER BY lvl DESC, exp DESC limit 5");


   echo'<center><table rules="rows" frame="below" width="80%">
		<tr background="images/bg1.png">
			<td bgcolor="#7FFFD4">'.$lang_ind['6'].'</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['7'].'</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['8'].'</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['9'].'</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['10'].'</td>
			<td bgcolor="#7FFFD4">Lvl</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['11'].'</td>
			<td bgcolor="#7FFFD4">'.$lang_ind['12'].'</td>
		</tr>';
$miejsce = 1;
while($ranking = mysql_fetch_assoc($zapytanie)){
	echo 	"	<tr><td>" . $miejsce++ . "</td>" .
				"<td>" . $ranking['login'] . "</td>" . 
				"<td>" . $ranking['nazwa'] . "</td>" .
				"<td>" . $ranking['vmax'] . " km/h</td>" . 
				"<td>" . $ranking['bak_max'] . " l.</td>" .
				"<td>" . $ranking['lvl'] . "</td>" . 
				"<td>" . $ranking['exp'] . "</td>" . 
				"<td>" . $ranking['do100'] . " s.</td></tr>
				";
}

echo'</table></center><br>';
echo'<h2><center>'.$lang_ind['13'].'</center></h2>';
include("comnews/pokaz.php");
include("menu/stopka.php");
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
if($_GET['support'] == "1"){

 
    if(isset($_POST['ok2'])){ 
        $temat = $_POST['temat12'];
		$email4 = $_POST['email12'];
		$tresc = $_POST['tresc12'];
		$typ = $_POST['typ12']; 
		$data = date('d.m.Y');
		if($temat != NULL AND $tresc != NULL AND $typ != NULL){ 
	
   if(strstr($temat, "--")!==False or strstr($temat, "'")!==False or strstr($temat, '"')!==False )
   echo "Wprowadzono niepoprawny temat";
   elseif(strstr($tresc, "--")!==False or strstr($tresc, "'")!==False or strstr($tresc, '"')!==False )
   echo "Wprowadzono niepoprawną treść";
   else{
            $mysql = "insert into `support` values ('$emai4l', '$ip', '1', '$typ', '$tresc', 'admin', '$data')"; 
            $query = mysql_query($mysql); 
            if($query){ 
                echo $lang_ind['44']; 
            } 
	}
        } 
    } 
    else { 
echo
    '<font color="red"><form action="" method="post"> 
		'.$lang_ind['64'].'<input type="email" name="email12" /><br>
        '.$lang_ind['65'].'<input type="text" name="temat12" /><br>
		'.$lang_ind['66'].'<select name="typ12"> <br>
            <option value="bug">'.$lang_ind['45'].'</option> 
            <option value="czity">'.$lang_ind['46'].'</option>             
			<option value="rozna_obraza">'.$lang_ind['47'].'</option> 
            <option value="przypom_hasla">'.$lang_ind['48'].'</option> 
			<option value="odwolanie">'.$lang_ind['49'].'</option> 
			<option value="nie_zalog">'.$lang_ind['50'].'</option> 
            <option value="inne">'.$lang_ind['51'].'</option> 
			<option value="naruszenie">'.$lang_ind['52'].'</option> 
        </select> <br>
		'.$lang_ind['67'].'<br> <textarea rows="5" cols="30" name="tresc12" ></textarea><br>
        <input type="submit" name="ok2" value="'.$lang_ind['53'].'" /> <br>
    </form></font>' ;
	

    } 

include ("menu/stopka.php");
exit();

}?>	
<?php
if($_GET['pokaz'] == "zasady"){
include("zasady.html");
include ("menu/stopka.php");
exit();
}
?>

<?php
if($_GET['ban'] == "gracz"){
$teraz = time();
$login = $_SESSION['login'];
$gracz = mysql_fetch_array(mysql_query("SELECT ban, opis_ban FROM konta WHERE login='$login'"));
  $czas_w_sekundach = $gracz['ban'] - $teraz ;
if($gracz['ban'] >= $teraz){

  echo $lang_ind['55'].$gracz['opis_ban'];
echo " <span id='zegar'></span>";
echo " <script type=text/javascript>liczCzas(".$czas_w_sekundach.")</script></font>";
} 

include ("menu/stopka.php");
exit();
}
?>
<?php

   if ($_SERVER['REMOTE_ADDR'] == '')
   {
      $ip1 = $_SERVER['REMOTE_ADDR'];
   } else $ip1 = $_SERVER['REMOTE_ADDR'];
$ip = mysql_fetch_array(mysql_query("SELECT ip, nick, powod, data_bana, czas_bana FROM ban_ip WHERE ip='$ip1'"));
if($_GET['ban'] == "ip"){
echo $lang_ind['56'].$ip['powod'].$lang_ind['57'].$ip['ip'];
$czas_w_sekundach = $ip['czas_bana'] - $teraz ;
echo " <span id='zegar'></span>";
echo " <script type=text/javascript>liczCzas(".$czas_w_sekundach.")</script>";
echo $lang_ind['58'].$ip['nick'].$lang_ind['59'].$ip['data_bana']."</font>";

include ("menu/stopka.php");
exit();
}
?>
<?php
if($_GET['sesja'] == "wygasla"){
echo$lang_ind['60'];

include ("menu/stopka.php");
header("Refresh:5; URL=index.php?strona=glowna");
exit();
}
?>

<?php
if($_GET['wyloguj'] == "sie"){
 $login = $_SESSION['login'];
$query = "UPDATE konta SET online='0' WHERE login='$login' ";
	
if(!$result = mysql_query($query)){
	@mysql_close();
	echo($lang_ind['19']);
}
session_unset();
session_destroy();
echo $lang_ind['61'];
session_start();
header("Refresh:5; URL=index.php?strona=glowna");

include ("menu/stopka.php");
exit();
}
$Wylacz_gre = mysql_fetch_array(mysql_query("SELECT gra FROM config WHERE login='admin'"));
if($Wylacz_gre['gra'] == '0'){
header("Location: index.php?strona=glowna");
}
include ("menu/stopka.php");
ob_end_flush();
?>
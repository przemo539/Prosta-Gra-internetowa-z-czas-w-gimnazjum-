<?php
ob_start();
session_start();
include("css/wyglad.php");
include("lang/".$jezyk."/lang_reszta.php");?>
<?php 
    
    if(isset($_POST['ok']) AND isset($_POST['login']) AND isset($_POST['pass'])){   
        $login = $_POST['login'];
		$_SESSION["login"] = $login;
        $pass = $_POST['pass']; 
		$pass2 = md5($pass);	
		$serwer = $_POST['serwer'];
		$teraz = time();
		if($serwer == '1'){
		include('1/konfiguracja/mysql_connect.php');
		//ban na ip
		if ($_SERVER['REMOTE_ADDR'] == '')
		{
		$ip = $_SERVER['REMOTE_ADDR'];
		} else $ip = $_SERVER['REMOTE_ADDR'];

		$czas   = time(); 
		$ip1 = mysql_fetch_array(mysql_query("SELECT ip, nick, powod, data_bana, czas_bana FROM ban_ip WHERE ip='$ip'"));
		if($ip1['ip'] == $ip ){
		if($ip1['czas_bana'] >= $czas){
		header("Location: index.php?ban=ip");
		}
		}
		//dotąd
		//ban na nick
		$czas   = time(); 
		$ban = mysql_fetch_array(mysql_query("SELECT ban FROM konta WHERE login='$login'"));
		if($ban['ban'] >= $czas){
		header("Location: index.php?ban=gracz");
		}
		//dotąd
		$mysql = mysql_fetch_array(mysql_query("select ID, aktywne from `konta` where `login` = '$login' AND `password` = '$pass2' limit 1")); 
		$mysql2 = mysql_fetch_array(mysql_query("select urlop from `konta` where `login` = '$login'")); 
	if(strstr($login, "--")!==False or strstr($login, "'")!==False or strstr($login, '"')!==False ){
	include "menu/stopka.php";
	echo "<script type='text/javascript'>window.alert('Nie poprawnie uzupełniono pole Login');document.location.href = 'index.php';</script>"; 
	}elseif($mysql == NULL){
			echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
            include "menu/stopka.php";
			echo "<script type='text/javascript'>window.alert('".$lang_resz['23']."');document.location.href = 'index.php';</script>"; 
          }elseif($mysql['aktywne'] == 0){
		     $_SESSION["login"] = $login; 
            header("Location: aktywacja.php"); 
        }elseif($mysql2[0] >= $teraz){
		     $_SESSION["login"] = $login; 
            header("Location: urlop.php"); 
        }elseif($mysql != NULL){ 
            $_SESSION["login"] = $login; 
            header("Location: 1/index2.php"); 
        }
		}elseif($serwer == '2'){
		echo'<center>';
		echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		include "menu/stopka.php";
		echo "<script type='text/javascript'>window.alert('".$lang_resz['24']."');document.location.href = 'index.php';</script>";
		echo'</center>';
		}
    }else{
		header("Location: index.php");
		} 
		ob_end_flush();
 ?> 
 <?php include "menu/stopka.php"; ?>  
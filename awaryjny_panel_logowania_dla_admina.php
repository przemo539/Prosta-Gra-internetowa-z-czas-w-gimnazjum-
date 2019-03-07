<?php
$jezyk = 'pl';
include("lang/".$jezyk."/lang_reszta.php");
	ob_start();
	session_start(); 
    if(isset($_POST['ok']) AND isset($_POST['login']) AND isset($_POST['pass'])){   
        $login = $_POST['login'];
		$_SESSION["login"] = $login;
        $pass = $_POST['pass']; 
		$pass2 = md5($pass);	
		$serwer = $_POST['serwer'];
		$teraz = time();
		if($serwer == '1'){
		include'konfiguracja/mysql_connect.php';
		$mysql = mysql_fetch_array(mysql_query("select ID, admin from `konta` where `login` = '$login' AND `password` = '$pass2' limit 1")); 
		if($mysql['admin'] != '1'){
		    echo$lang_resz['25'];
        }elseif($mysql != NULL){ 
            $_SESSION["login"] = $login; 
            header("Location: 1/index2.php"); 
        }
		}elseif($serwer == '2'){
		echo'<center>';
		echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		include "menu/stopka.php";
		echo"<script type='text/javascript'>window.alert('".$lang_resz['24']."');document.location.href = 'index.php;</script>";
		echo'</center>';
		}
    } ?>
     <form action="awaryjny_panel_logowania_dla_admina.php" method="POST"> 
       <?echo $lang_resz['26'];?><input type="text" name="login"> <br>
       <?echo $lang_resz['27'];?><input type="password" name="pass"> <br>
		 <select name="serwer"> 
            <option value="1"><?echo $lang_resz['28'];?></option> 
            <option value="2"><?echo $lang_resz['29'];?></option> 
        </select>
        <input type="submit" name="ok" value="<?php echo$lang_resz['30']?>"> 
    </form>
	<?
	ob_end_flush();?>
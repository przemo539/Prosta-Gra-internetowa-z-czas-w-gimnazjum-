<?
$rank = mysql_fetch_array(mysql_query("SELECT gra FROM config WHERE login='admin'"));
if($rank['gra'] != '0'){
echo'
		<li><a href="index.php?strona=glowna&haslo='.$_GET['haslo'].'">Strona główna</a></li>
		<li><a href="index.php?rejestruj=sie&haslo='.$_GET['haslo'].'">Rejestracja</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="index.php?pokaz=zasady&haslo='.$_GET['haslo'].'">Regulamin</a></li>
		<li><a href="index.php?pokaz=galeria&&haslo='.$_GET['haslo'].'">Galeria</a></li>
		<li><a href="index.php?pokaz=konkurs&haslo='.$_GET['haslo'].'">Konkursy</a></li>
		<li><a href="index.php?pokaz=o_grze&haslo='.$_GET['haslo'].'">O grze</a></li>
		<li><a href="index.php?support=1&haslo='.$_GET['haslo'].'">Support</a></li>';
}elseif($_GET['loguj'] == 'fb'){
echo'
		<li><a href="index.php?strona=glowna&loguj='.$_GET['loguj'].'">Strona główna</a></li>
		<li><a href="index.php?rejestruj=sie&loguj='.$_GET['loguj'].'">Rejestracja</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="index.php?pokaz=zasady&loguj='.$_GET['loguj'].'">Regulamin</a></li>
		<li><a href="index.php?pokaz=galeria&loguj='.$_GET['loguj'].'">Galeria</a></li>
		<li><a href="index.php?pokaz=konkurs&loguj='.$_GET['loguj'].'">Konkursy</a></li>
		<li><a href="index.php?pokaz=o_grze&loguj='.$_GET['loguj'].'">O grze</a></li>
		<li><a href="index.php?support=1&loguj='.$_GET['loguj'].'">Support</a></li>';
}else{
echo'	<li><a href="index.php?strona=glowna">Strona główna</a></li>
		<li><a href="index.php?rejestruj=sie">Rejestracja</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="index.php?pokaz=zasady">Regulamin</a></li>
		<li><a href="index.php?pokaz=galeria">Galeria</a></li>
		<li><a href="index.php?pokaz=konkurs">Konkursy</a></li>
		<li><a href="index.php?pokaz=o_grze">O grze</a></li>
		<li><a href="index.php?support=1">Support</a></li>';
}
?>
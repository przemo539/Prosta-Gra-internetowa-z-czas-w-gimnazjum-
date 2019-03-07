<?
 require("config.inc.php");
 import_request_variables("GPC","");
 $login='root';
 $haslo='qwerty';
 if ($login==$poprawny_login && $haslo==$poprawne_haslo)
 {
  setcookie("haslo",$haslo);
  setcookie("login",$login);
  Header("Location: admin.php");
 } else
 {
  include("head.inc");
  echo("<BR><BR><CENTER><FONT color=red><B>Błędy login i/lub hasło</B> !</FONT><BR><BR><BR>\n");
  echo("<A href='index.php'>Powrót do strony logowania</A></CENTER>");

  include("stopka.inc");
 }

?>

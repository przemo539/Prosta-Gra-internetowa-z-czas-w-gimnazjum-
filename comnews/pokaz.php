<?

 require("config.inc.php");

 $dane = file($katalog."data.txt");

 if(isset($a))
 {
  if ($a=="archiwum")  $ile = count($dane);
 }
 
  for ($i=0; $i<$ile; $i++)
 {
 $linijka = explode("|",$dane[$i]);
 $linijka[1] = stripslashes($linijka[1]);
 $linijka[2] = stripslashes($linijka[2]);
 $linijka[3] = stripslashes($linijka[3]);
 $linijka[4] = stripslashes($linijka[4]);

 include($katalog."wpis.inc.php");
 }
?>

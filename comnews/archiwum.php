<?

 require("config.inc.php");

 $dane = file("data.txt");
 $ile = count($dane);
 
  for ($i=0; $i<$ile; $i++)
 {
 $linijka = explode("|",$dane[$i]);
 include("wpis.inc.php");
 }

 include("comnews.inc");

?>

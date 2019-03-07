<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
</html>
<?
ob_start();
  require("config.inc.php");
  import_request_variables("GPC","");
  if (/*$haslo==$poprawne_haslo && $login==$poprawny_login*/1==1)
  {
   include("head.inc");
   echo '<BR><CENTER><A href="admin.php">Dodaj newsa</A> | <A href="admin.php?akcja=edytuj">Edytuj</A> | <A href="admin.php?akcja=skasuj">Skasuj</A> | <A href="../1/index2.php">Wróć</A></CENTER><BR><BR>';
   
   if(!isset($akcja))
   {
   $miesiac = date("m");                                               
   $nazwym = array(                                                    
   "stycznia",                                                         
   "lutego",                                                           
   "marca",                                                            
   "kwietnia",                                                         
   "maja",                                                             
   "czerwca",                                                          
   "lipca",                                                            
   "sierpnia",                                                         
   "września",                                                         
   "października",                                                     
   "listopada",                                                        
   "grudnia");                                                         
                                                                       
   $dzisiaj = date("j")." ".$nazwym[$miesiac-1]." ".date("Y")."r.";    

   echo '<CENTER><B>Dodawnie nowego newsa</B><BR><BR>';
   echo '<FORM action="admin.php" method="post"><TABLE border=0>';
   echo '<TR><TD align=right>Tytuł newsa:</TD><TD><INPUT type="text" name="tytul"></TD></TR>';
   echo '<TR><TD align=right>Autor:</TD><TD><INPUT type="text" name="autor"></TD></TR>';
   echo '<TR><TD align=right>Data:</TD><TD><INPUT type="text" name="data" value="'.$dzisiaj.'"></TD></TR>';
   echo '<TR><TD align=right>Treść:</TD><TD><TEXTAREA name="tresc" rows=5 cols=30></TEXTAREA></TD></TR>';
   echo '</TABLE><INPUT type="hidden" name="akcja" value="dodawanie"><BR><INPUT type="submit" value="Dodaj newsa !"></CENTER></FORM>';
   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="dodawanie")
   {
   
    $dane = file("data.txt");
    $dane2 = explode("|",$dane[0]);

    $numer = $dane2[0] + 1;

    $tresc = str_replace("\n","<BR>",$tresc);
    $tytul = str_replace("\n"," ",$tytul);
    $linia=$numer."|".$tytul."|".$autor."|".$data."|".$tresc."|"."\n";

    $plik = fopen("data.txt","w+");
    flock($plik,2);
    fputs($plik,$linia);

    foreach($dane as $zapis)
    {
     if ($zapis!="\n"&&$zapis!="")
     {
      fputs($plik,$zapis);
     }
    }

    flock($plik,3);
    fclose($plik);
    
    $ostatni = fopen("last.inc","w+");
    flock($ostatni,2);
    fputs($ostatni,$data);
    flock($ostatni,3);
    fclose($ostatni);
    
    
    $linijka[0] = $numer;
    $linijka[1] = $tytul;
    $linijka[2] = $autor;
    $linijka[3] = $data;
    $linijka[4] = $tresc;

    $linijka[1] = stripslashes($linijka[1]);
    $linijka[2] = stripslashes($linijka[2]);
    $linijka[3] = stripslashes($linijka[3]);
    $linijka[4] = stripslashes($linijka[4]);

    echo('<BR><BR><CENTER><B>News numer <I>'.$numer.'</I> został pomyślnie dodany. Wygląda to tak:<BR><BR>');
    include("wpis.inc.php");
   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="skasuj")
   {
    $dane = file("data.txt");
    $ile = count($dane);
    for ($i=0; $i<$ile; $i++)
    {
     $linijka = explode("|",$dane[$i]);
     echo '<CENTER><FONT color=red>Wpis numer <B>'.$linijka[0].'</B></FONT> - <A href="admin.php?akcja=kasowanie&id='.$linijka[0].'">SKASUJ</A></CENTER>';
     include("wpis.inc.php");
    }

   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="kasowanie")
   {
   
    $dane = file("data.txt");
    $plik = fopen("data.txt","w+");
    flock($plik,2);
    fputs($plik,$linijka);

    foreach($dane as $zapis)
    {
    $tablica = explode("|",$zapis);

    if ($zapis!="\n"&&$zapis!="")
     {
       if ($tablica[0]!=$id)
       { fputs($plik,$zapis); }
     }

    }


   echo '<BR><BR><CENTER><B>News numer <I>'.$id.'</I> został pomyślnie skasowany.<BR><BR>' ;

   include("stopka.inc");
   
   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="edytuj")
   {

    $dane = file("data.txt");
    $ile = count($dane);
    for ($i=0; $i<$ile; $i++)
    {
     $linijka = explode("|",$dane[$i]);
     echo '<CENTER><FONT color=red>Wpis numer <B>'.$linijka[0].'</B></FONT> - <A href="admin.php?akcja=edycja&id='.$linijka[0].'">EDYTUJ</A></CENTER>';
     include("wpis.inc.php");
    }
    
   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="edycja")
   {
    $dane = file("data.txt");
    foreach($dane as $linia)
    {
     $linijka = explode("|",$linia);
     if ($linijka[0]==$id)
     {
      $tytul = $linijka[1];
      $autor = $linijka[2];
      $data = $linijka[3];
      $tresc = $linijka[4];
     }
    }
    
     echo '<CENTER><B>Edycja newsa numer '.$id.'</B><BR><BR>';
     echo '<FORM action="admin.php" method="post"><TABLE border=0>';
     echo '<TR><TD align=right>Tytuł newsa:</TD><TD><INPUT type="text" name="tytul" value="'.$tytul.'"></TD></TR>';
     echo '<TR><TD align=right>Autor:</TD><TD><INPUT type="text" name="autor" value="'.$autor.'"></TD></TR>';
     echo '<TR><TD align=right>Data:</TD><TD><INPUT type="text" name="data" value="'.$data.'"></TD></TR>';
     echo '<TR><TD align=right>Treść:</TD><TD><TEXTAREA name="tresc" rows=5 cols=30 >'.$tresc.'</TEXTAREA></TD></TR>';
     echo '</TABLE><INPUT type="hidden" name="akcja" value="edytowanie">
     <INPUT type="hidden" name="id" value="'.$id.'"><BR><INPUT type="submit" value="Zapisz zmiany !"></CENTER></FORM>';
   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="edytowanie")
   {

    $tresc = str_replace("\n","<BR>",$tresc);
    $tytul = str_replace("\n"," ",$tytul);
    $dane = file("data.txt");
    $plik = fopen("data.txt","w+");
    flock($plik,2);
    fputs($plik,$linijka);

    $linia=$id."|".$tytul."|".$autor."|".$data."|".$tresc."|"."\n";

    foreach($dane as $zapis)
    {
    $tablica = explode("|",$zapis);

    if ($zapis!="\n"&&$zapis!="")
     {
       if ($tablica[0]!=$id)
       {
       fputs($plik,"$tablica[0]|$tablica[1]|$tablica[2]|$tablica[3]|$tablica[4]|\n");
       } else
       {
       fputs($plik,$linia);
       }
     }

    }


   echo '<BR><BR><CENTER><B>Zmiany w newsie numer <I>'.$id.'</I> zostały pomyślnie zapisane.<BR><BR>' ;

   } else //////////////////////////////////////////////////////////////////////////////////
   if ($akcja=="info")
   {
   
   }
   
  } else
  {
  echo"WAL SIE";
  }
ob_end_flush();
?>

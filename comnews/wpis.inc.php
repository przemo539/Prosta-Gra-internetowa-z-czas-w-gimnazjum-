<?

 // Edytuj�c ten plik mo�esz zmieni� wygl�d pokedy�czego wpisu. Wystarczy znajomos� HTMLa.
 // Oto co oznaczaj� poszczeg�lne zmienne:
 // $linika[1] - Tytu� newsa
 // $linika[2] - Autor
 // $linika[3] - Data dodania
 // $linika[4] - tre��
 // Je�eli chcesz, mo�esz tak�e skorzysta� ze zmiennej $linijka[0] kt�ra jest numerem newsa.

 echo '<center><TABLE border=0 width=80% style="font-family: Verdana; font-size: 11">';
 echo '<TR><TD align=center colspan=2 style="font-size: 16" bgcolor=#7FFFD4><B>'.$linijka[1].'</B></TD></TR>';
 echo '<TR><TD width=50% bgcolor=#7FFFD4>Autor: <B>'.$linijka[2].'</B></TD><TD width=80% align=right bgcolor=#7FFFD4>Dodano: <B>'.$linijka[3].'</B></TD></TR>';
 echo '<TR><TD colspan=2 bgcolor=#7FFFD4>&nbsp;&nbsp;&nbsp;'.stripslashes($linijka[4]).'</TD></TR>';
 echo '</TABLE><BR><HR width=80%></center>';

?>

<?php session_start();
ob_start();
include("css/wyglad.php"); ?>
<table align="center" width="80%"> 
<tr>	<td colspan="3"><center><img src="1/www/images/logo.gif" height="120" width="750" ><br>
	    </td></tr> 
				<center>
		<a href="index.php?jezyk=polski"><img src="http://www.flagipanstw.eu/images/flaga-polski.png" height="90" alt="Język Polski" /></a>
		<a href="index.php?jezyk=angielski"><img src="http://www.flagipanstw.eu/images/flaga-stanow-zjednoczonych.png" height="90" alt="Język angielski" /></a>
		</center>
		<tr>
		<td width="100%" colspan="3"><?php include "menu/gorne_menu.php"; ?></td>
<tr>
        <td width="10%"></td>
        <td width="80%">
		<?php header("Location: /forum/"); ?></td>

        <td width="10%"><?php include "loguj.php"; ?></td></tr>
<tr>
		<td width="100%" colspan="3"><?php include "menu/stopka.php"; ?></td>
     
</table>
<?ob_end_flush();?>
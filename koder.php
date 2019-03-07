<?php include("css/wyglad.php"); ?>
<table align="center" width="80%"> 
<<tr>	<td colspan="3"><center><img src="1/www/images/logo.gif" height="120" width="750" ><br>
	    </td></tr> 
		<tr>
		<td width="100%" colspan="3"><?php include "menu/gorne_menu.php"; ?></td>
<tr>
        <td width="10%"></td>
<?php 
$tekst = $_POST['pass']; 
echo md5($tekst); ?>
    <form action="" method="POST"> 
        Hasło do zakodowania: <input type="password" name="pass"> <br>
        <input type="submit" name="ok" value="koduj"> 
    </form>
</td>
<td width="10%"><?php include "loguj.php"; ?></td></tr>
<tr>
		<td width="100%" colspan="3"><?php include "menu/stopka.php"; ?></td>   
</table>
</body>
</html>
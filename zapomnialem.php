<?php include("css/wyglad.php");
include("lang/".$jezyk."/lang_reszta.php"); ?>
		<?php echo $lang_resz['1'];?>
<form name="form1" method="post" action="przyphasla.php">
<input name="email_to" type="text" id="mail_to" size="25">
<input type="submit" name="Submit" value="<?php echo $lang_resz['2'];?>">
</form>
<?php include "menu/stopka.php"; ?>
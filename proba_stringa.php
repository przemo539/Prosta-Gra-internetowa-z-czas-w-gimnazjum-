<?php
include "css/wyglad.php";
ob_start();
?>
<form method="post">
Last name: <input type="text" name="lname" /><br />
  <input type="submit" value="Submit" />
</form>


<?php
$asd=$_POST['lname'];
		ob_end_flush();

if(strstr($asd, "--")!==False or strstr($asd, "'")!==False or strstr($asd, '"')!==False )
   echo "Email ma w sobie słowo 'polska'";
   

 ?> 
 
 <html>
<head>
<title>Rejestracja</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<meta http-equiv="content-language" content="pl"> 
</head>

<body>
<form action="" method="POST">

<b>Nick: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <input type="text" name="username" /><i>&nbsp;&nbsp; Potrzebny aby się zalogować na konto.</i> <br></br>
<b>Hasło: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="password" name="haslo" /> <i>&nbsp;&nbsp; Zapamiętaj je i nie podawaj <u>nikomu</u>, Administracja nigdy nie będzie cię prosić o hasło.</i><br></br>
<b>Powtórz hasło:&nbsp;&nbsp;&nbsp;&nbsp;</b> <input type="password" name="haslo2" /> <br> </br>
<b>E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <input type="email" name="email" /> <i>&nbsp;&nbsp; Wymagane do weryfikacji konta.</i>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Zarejestruj się." /> </br>

</form>
Lub jeśli masz już konto <a href="logowanie.php"/><font color="blue"/>Zaloguj się !</font></a>
</body>

</html>

<?php 
include ('db.php');

$name = $_POST['username'];
$password = $_POST['haslo'];
$password2 = $_POST['haslo2'];
$email =  $_POST['email'];

if($name != NULL and $password !=NULL and $email!=NULL){

$mysql = 1;//mysql_fetch_array(mysql_query("select username from reg where username = $name"));
$mysql2 = 1;//mysql_fetch_array(mysql_query("select email from reg where email = $email"));
if($mysql2 == null){
echo"Podany adres email został już zarejestrowany!!";
}elseif($mysql == null){
echo"Podany nick jest już zarejestrowany!!";
}elseif($password == $password2){
$rejestracja = "insert into `reg` (`username`, `email`, `haslo`) VALUES ('$name', '$email', '$password')"; 
$rejestracja2 = mysql_query($rejestracja); 
if($rejestracja2){ 
echo "Zostałeś poprawnie zarejestrowany"; 
}else{
echo"ups.. wystąpił jakiś problem sprubuj ponownie za chwile";
}
}else{
echo"Podałeś róźne hasła!!";
}
}
?>
 <?php include "menu/stopka.php"; ?>  
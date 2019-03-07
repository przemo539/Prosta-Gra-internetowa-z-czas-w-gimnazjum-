<?php 
	session_start(); 
	require 'facebook_connect.php';
	
	// pobranie danych z Facebooka
	$facebook = connectToFacebook();
	$me = getUser($facebook);
	
	// w przypadku otrzymania danych z Facebooka nestępuje automatyczne przekierowanie do skryptu logującego użytkownika
	// aby zapewnić możliwość wylogowania z facebooka z dowolnego miejsca w serwisie zapiywany będzie do sesji wygenerowany link
	if ($me) {
		$_SESSION['logoutUrl'] = $facebook->getLogoutUrl();
		header('Location: zaloguj.php');
		exit;
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<meta http-equiv="Content-Language" content="pl" /> 
	<meta name="AUTHOR" content="Mikołaj Gnaciński@www.weeby.pl" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<title>Logowanie za pomocą Facebook Connect</title> 
</head> 
<body> 
	<div id="header">
		<h1>Logowanie</h1>
	</div>
	
	<div id="content">
		<?php 
			// użytkownik zalogowany nie może się ponownie logować
			if ($SESSION['id'] != null): 
		?>
			<h2>Jesteś już zalogowany</h2>
		<?php 
			// wyświetlenie formularza logowania
			else: 
			
			// w przypadku błędnego logowania wyświetlenie komunikatu
			if ($_SESSION['isLogin'] == 2) {
				echo '<h2>Błędny login lub hasło!</h2>';
				$_SESSION['isLogin'] = 0;
			}
			//
			else if ($_SESSION['isLogin'] == 3) {
				echo '<h2>Nieudana rejestracja nowego użytkownika!</h2>';
				$_SESSION['isLogin'] = 0;
			}
		?>
			<form enctype="application/x-www-form-urlencoded" method="post" action="zaloguj.php">
				E-mail:<br /><input type="text" name="email" />
				<br />
				Hasło: <br /><input type="password" name="haslo" />
				<br />
				<input type="submit" value="Zaloguj" />
			</form>
			
			<br />
			<a href="<?php echo $facebook->getLoginUrl() ?>" class="facebook_login">
				<img src="http://static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif">
			</a>
		<?php endif; ?>
	</div>
</body> 
</html> 
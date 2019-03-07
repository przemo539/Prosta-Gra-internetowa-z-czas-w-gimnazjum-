<?php session_start(); ?>

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
		<h1>Strona główna</h1>
	</div>
	
	<div id="content">
		<?php 
			// zawartość dostępna po zalogowaniu
			if ($_SESSION['id'] != null): 
			
				// wyświetlenie komunikatu o poprawnym zalogowaniu
				if ($_SESSION['isLogin'] == 1) {
					echo '<h2>Zalogowano poprawnie</h2>';
					$_SESSION['isLogin'] = 0;
				}
		?>
			<!-- wyświetlanie danych użytkownika po zalogowaniu -->
			<b>Zalogowany jako <?php echo $_SESSION['imie'] . ' ' . $_SESSION['nazwisko'] ?></b> | <a href="logout.php">Wyloguj się</a>
		<?php 
			// linki do rejestracji oraz logowania
			else: 
		?>
			<a href="logowanie.php">Zaloguj się</a>
		<?php endif; ?>
	</div>
</body> 
</html> 
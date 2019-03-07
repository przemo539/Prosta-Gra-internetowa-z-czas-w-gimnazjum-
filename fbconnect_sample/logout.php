<?php
	session_start();
	
	// je�eli w sesji istnieje zapisany link wylogowuj�cy nale�y tak�e wylogowa� u�ytkownika z Facebooka
	if (!empty($_SESSION['logoutUrl']) )
		$logout = 'Location: ' . $_SESSION['logoutUrl'];
	
	// wyczyszczenie sesji serwisu
	session_destroy();
	
	
	if (isset($logout) )
		header($logout);
	else
		header('Location: logowanie.php');
		
		
	exit;
?>
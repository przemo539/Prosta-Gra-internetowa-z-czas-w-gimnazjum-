<?php
	// połączenie z bazą danych
	$conn = @new mysqli("localhost","","",""); 

	if (mysqli_connect_errno() != 0) 
	{ 
		echo 'Błąd połączenia z bazą'; 
		exit; 
	} 

?>
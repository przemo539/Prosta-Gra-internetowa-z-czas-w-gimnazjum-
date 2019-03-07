<?php
	session_start();
	
	// połączenie z bazą danych
	require 'db_conn.php';
	
	
	// weryfikacja danych formularza podczas zwykłego logowania
	if (trim($_POST['email']) != '' && trim($_POST['haslo']) != '')
	{
		// odpytanie bazy o użytkownika
		$select = 'SELECT * FROM users WHERE email = "' . $_POST['email'] . '" and haslo = "' . $_POST['haslo'] . '"'; 
		$result = $conn->query($select);
		$count = $result->num_rows; 

		// odnaleziono użytkownika, ustawienie zmiennych sesji, przekierowanie na stronę główną
		if ($count == 1)
		{
			while ( ($user = $result->fetch_assoc()) !== null){
				$_SESSION['id'] = $user['id'];
				$_SESSION['imie'] = $user['imie'];
				$_SESSION['nazwisko'] = $user['nazwisko'];
				$_SESSION['isLogin'] = 1;
			}
			
			$result->close();
			$conn->close();
		
			header( 'Location: index.php');
			exit;
		}
		else	// błędna kombinacja hasła i emaila
		{
			$conn->close();
			
			$_SESSION['isLogin'] = 2;
			header( 'Location: logowanie.php');
			exit;
		}
	}
	
	// logowanie do serwisu za pomocą facebook connect
	require 'facebook_connect.php';
	
	$facebook = connectToFacebook();
	if ($me = getUser($facebook) )
	{
		// w pierwszej kolejności należy sprawdzić czy taki użytkownik istnieje już w bazie
		// najbezpieczniej będzie, aby tabela z użytkownikami zawierała dodatkowe pole zawierające 
		// identyfikator użytkownika na Facebooku
		$select = 'SELECT * FROM users WHERE fb_id = "' . $me['id'] . '"'; 
		$result = $conn->query($select);
		$count = $result->num_rows; 

		// jeżeli użytkownik nie istnieje jeszcze w bazie dokonujemy jego rejestracji
		if ($count == 0)
		{
			// aby uniknąć zamieszania należy obsłużyć sytuację, gdzie wystąpił błąd podczas rejestracji nowego użytkownika
			// w tym przykładnie podczas takiej sytuacji użytkownik zostanie wylogowany z facebooka oraz zostanie wyświetlony odpowiedni komunikat
			if(!registerNewUser($me) ) {
				$_SESSION['isLogin'] = 3;
				$location = 'Location: ' . $_SESSION['logoutUrl'];
				header($location);
				exit;
			}
		}
					
		// teraz wystarczy tylko dodać odpowiednie zmienne do sesji, tak jak to miało miejsce przy zwykłym logowaniu
		$_SESSION['id'] = $me['id'];
		$_SESSION['imie'] = $me['first_name'];
		$_SESSION['nazwisko'] = $me['last_name'];
		$_SESSION['isLogin'] = 1;
		header( 'Location: index.php');
		exit;
		
		
	}

	
?>
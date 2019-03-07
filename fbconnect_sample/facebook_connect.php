<?php

// załączenie biblioteki facebook.php
require 'biblioteka/facebook.php';


/**
 * Połączenie z Facebook
 * */
function connectToFacebook()
{
	// utworzenie obiektu $facebook
	$facebook = new Facebook(array(
	  'appId'  => '', // application id
	  'secret' => '', // secret
	  'cookie' => true,
	));
	
	return $facebook;
}


/**
 * pobranie danych użytkownika
 * */
function getUser($facebook)
{
	// pobranie sesji
	$session = $facebook->getSession();
	
	// utworzenie pustego obiektu użytkownika
	$me = null;

	// jeżeli użytkownik jest zalogowany na Facebooku
	// do zmiennej $uid zostanie zapisany identyfikator użytkownika
	// do zmiennej $me zostaną zapisane dane użytkownika
	if ($session) {
	  try {
		$uid = $facebook->getUser();
		$me = $facebook->api('/me');
	  } catch (FacebookApiException $e) {
		error_log($e);
	  }
	}
	
	return $me;
}

/**
 * rejestracja nowego użytkownika
 * */
function registerNewUser($me)
{
	require 'db_conn.php';

	$insert = "INSERT INTO konta (login, imie, email, haslo, dataRejestracji, fb_id) VALUES (" .
				"'" . $me['username'] . "', " .
				"'" . $me['first_name'] . "', " . 
				"'" . $me['email'] . "', " .
				"'" . sha1(time() ) . "', " .
					"now(), " .				// generowanie losowego hasła
				"'" . $me['id'] . "')";
	
	$result = $conn->query($insert);
		
	$affected = $conn->affected_rows;
	$conn->close();
	
	if ($affected == 1)
		return true;
	else
		return false;
}


/**
 * pobranie adresu url
 * */
function getUrl($me)
{
	// url do wylogowania/zalogowania użytkownika z Facebooka
	if ($me) {
	  $linkUrl = $facebook->getLogoutUrl();
	} else {
	  $linkUrl = $facebook->getLoginUrl();
	}
	
	return $linkUrl;
}
?>
W celu poprawnego uruchomienia nalezy skonfugurowac polaczenie z baza danych pliku db_conn.php
Nastepnie trzeba utworzyc tabele 'users':

CREATE TABLE IF NOT EXISTS `users` (
  
	`id` int(11) NOT NULL auto_increment,
  
	`imie` varchar(45) collate utf8_unicode_ci NOT NULL,
  
	`nazwisko` varchar(45) collate utf8_unicode_ci NOT NULL,
  
	`email` varchar(45) collate utf8_unicode_ci NOT NULL,
  
	`haslo` varchar(45) collate utf8_unicode_ci NOT NULL,
  
	`fb_id` bigint(20) default NULL,
  
	PRIMARY KEY  (`id`)

) 
ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

UWAGA
Biblioteka facebook wymaga w³¹czonej biblioteki cURL
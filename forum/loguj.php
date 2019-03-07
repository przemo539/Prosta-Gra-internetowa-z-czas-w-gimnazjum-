<script src="http://connect.facebook.net/pl_PL/all.js#xfbml=1"></script>
<fb:like href="www.cs-bysina.bmmo.eu" show_faces="false" width="100"></fb:like>


<?
include("../konfiguracja/mysql_connect.php");
echo'<br>';

// laczymy sie z plikiem: facebook_connect.php
//include("fbconnect_sample/facebook_connect.php");
// uruchamiamy polaczenie z facebookiem
//asd$facebook = connectToFacebook();
// okreslamy kim jestesmy
//asd$me = getUser($facebook);  
//sprawdz czy uzutkownik ma potwierdzona aplikacje na facebooku oraz czy jest zalogowany
            if($me) {
                //pobierz dane na podstawie tabeli z użytkownikami i sprawdź czy użytkownik o podanym fb_id istnieje
                $zaloguj2 = mysql_fetch_array(mysql_query("SELECT login FROM forum_konta WHERE fb_id='".$me['id']."' LIMIT 1")); 
                if(empty($zaloguj2['login'])) {    
                    //jezeli uzytkownik nieistnieje wyswietl formularz zmiany nicku i potwierdzajacy proces zakladania konta
                    $_SESSION['logoutUrl'] = $facebook->getLogoutUrl();
                    echo "<form action='' method='post' name='rejestruj' enctype='multipart/form-data'>
                        Login
                            <input type='text' name='logins' value='".$me['username']."'><br>
                        E-mail</strong>
                            <input type='text' disabled='disabled' value='".$me['email']."'><br>
						ID</strong>
                            <input type='text' disabled='disabled' value='".$me['id']."'>
                            <input type='hidden' name='mail' value='".$me['email']."'>        
                        <input type='hidden' name='fb' value='".$me['id']."'>    
                        <button type='rejestruj.submit()' name='rejestruj'>Zarejestruj</button>        
                    </form>";
                } else {    
                    //jezeli uzytkownik istnieje otoworz sesje i wyslij zmienne
                    $_SESSION = array();
                    $_SESSION['login'] = $zaloguj2['login'];
                    header('location: 1/index2.php');
                }                
            } else {
			include_once("../lang/".$jezyk."/lang_loguj.php");

			//$Wylacz_gre2 = mysql_fetch_array(mysql_query("SELECT gra FROM config WHERE login='admin'"));
			if($Wylacz_gre2['gra'] != '0'){
			echo'
			<form action="serwer.php?haslo='.$_GET['haslo'].'" method="POST"> 
					'.$lang['3'].' <input type="text" name="login"> <br>
					'.$lang['4'].' <input type="password" name="pass"> <br>
			<input type="submit" name="ok" value="'.$lang['5'].'"> 
               <a href="'./*$facebook->getLoginUrl().*/'"><img src="http://static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif"></a>
                    './/<button type="logowanie.submit()" name="logowanie">Zaloguj</button>    
                '</form>
<a href="zapomnialem.php">'.$lang['6'].'</a>';
}else{
   echo' 
   
   <form action="serwer.php" method="POST"> 
        '.$lang['3'].' <input type="text" name="login"> <br>
        '.$lang['4'].' <input type="password" name="pass"> <br>
		    <input type="submit" name="ok" value="'.$lang['5'].'"> 
               <a href="'.$facebook->getLoginUrl().'"><img src="http://static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif"></a>
                    './/<button type="logowanie.submit()" name="logowanie">Zaloguj</button>    
                '</form>
<a href="zapomnialem.php">'.$lang['6'].'</a>';

}
            }  
			
			        //powyzej znajduje sie nasze sprawdzenie danych gracza
        //laczymy sie z FB
        //asd$facebook = connectToFacebook();
        //sprawdzamy czy gracz potwierdzil polaczenie z aplikacja
    if(1!=1 /* $me = getUser($facebook)*/) {
        //sprawdzamy czy jest konto z takim fb_id    
        $zaloguj1 = mysql_fetch_array(mysql_query("SELECT login FROM forum_konta WHERE fb_id='".$me['id']."' LIMIT 1")); 
        if(empty($zaloguj1['login'])) {    
            //jezeli nie wysylamy zmienne do formularza aby zmienic login
            $_SESSION['logoutUrl'] = $facebook->getLogoutUrl();
        } else {    
            //jezeli tak logujemy uzytkownika
            $_SESSION = array();
            $_SESSION['login'] = $zaloguj1['login'];
            header('location: 1/index2.php');
        }
    }  


?>
</div>	
<?php
//$SESSION['login'] = 1;
			if($SESSION['login'] == null or $SESSION['login'] == 0){
			echo'	<div id="sidebarr" class="s">
		<h2>Logowanie</h2>
		<ul class="links">';
			include "loguj.php"; 
			}else{
			echo'
	<div id="sidebarr" class="s">
		<h2>Dane</h2>
		<ul class="links">';		
			

				echo"<a href='index.php?wyloguj-sie'>Wyloguj sie</a>";
				
				}
				
				?>

		</ul>
		
		<h2>Toplisty</h2>
		<ul class="links">
			<li>1</li>
			<a href="http://toplista.gammo.pl/"><img src="http://toplista.gammo.pl/button.php?u=przemekxxx" alt="Toplista MMO - Wypromuj strone związaną z tematyką gier MMO - Polskie Centrum Gier MMO" border="0" /></a>
			<li>2</li>
			<a href="http://toplista.i-rpg.pl/index.php?a=in&u=przemekxxx"><img src="http://toplista.i-rpg.pl/button.php?u=przemekxxx"; alt="Internetowe RPG - Toplista gier przeglądarkowych" border="0" /></a>
			<li>3</li>
			<a href='http://top.togra.pl?p=vote&id=235' target='_blank'><img src='http://top.togra.pl/st.php?id=235' title='TOP GRY INTERNETOWE'  border='0' width='120' height='40'/></a>
			<li>4</li>
			<a href="http://mmotop.toplista.pl/?we=przemekxxx"><img src="http://img151.imageshack.us/img151/2657/buttonkj.png" width=119 height=73 border=0 alt="Top Lista Gier MMORPG, MMO via www, PBF, FPS/TPS"></a>
			<li>5</li>
			<a id="play4now top lista gry online nr 0" href="http://www.play4now.pl/in/149" target="_blank" title="Play4now - Top lista gry online - MMORPG - MMO"><img src="http://www.play4now.pl/img/149/0" alt="Gry w przeglądarce" width="152" height="52" border="0" title="Gry internetowe" /></a>
			<li></li>
		</ul>
		
	</div>
	
	<div id="footer">
		Gra stworzona przez Przemo zapożyczenia z RACE wygląd by <a href="http://forums.clantemplates.com/member.php?u=154219">Subleme</a> i 
		<a href="http://forums.clantemplates.com/member.php?u=35406">Vi5</a>@<a href="http://clantemplates.com/">clantemplates.com</a>.</div>
		</div><?php include("reklamy_niewidoczne.php");?>


</body>
</html>
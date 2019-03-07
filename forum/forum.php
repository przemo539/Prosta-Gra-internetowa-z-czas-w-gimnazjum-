<?php
include_once("css/wyglad.php"); 
include_once("../konfiguracja/mysql_connect.php"); 
?>

<?php
		  if(!ereg('^[0-9]*$', $_GET['forum'])){
		  include ("menu/stopka.php");
		  echo"<script type='text/javascript'>window.alert('ups... coś poszło nie tak!! spróbuj ponownie za chwile');document.location.href = 'index.php?strona=glowna';</script>";
		  }elseif($_GET['forum'] != null and $_GET['post']=='nowy'){
		  		  
		  echo'<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tbody>
<tr>
<th class="thHead" height="25" colspan="2">
<b>Napisz nowy temat</b>
</th>
</tr>
<tr>
<td class="row1" width="22%">
<table width="100%" border="0">
<tbody>
<tr>
<td align="left">
<span class="gen">
<b>Temat</b>
</span>
</td>
<td align="right">&nbsp; </td>
</tr>
</tbody>
</table>
</td>
<td class="row2" width="78%">
<span class="gen">
<input class="post" type="text" value="" onblur="NotActive(this)" onfocus="Active(this)" tabindex="2" style="width:550px" maxlength="60" size="45" name="subject">
</span>
</td>
</tr>
<tr>
<td class="row1" width="22%">
<span class="gen">
<b>Opis tematu</b>
</span>
<span class="gensmall">(nieobowiązkowy)</span>
</td>
<td class="row2" width="78%">
<span class="gen">
<input class="post" type="text" value="" onblur="NotActive(this)" onfocus="Active(this)" tabindex="2" style="width:550px;height:17px;font-size:9px;" maxlength="100" size="45" name="subject_e">
</span>
</td>
</tr>
<tr>
<td class="row1" valign="middle">
<span class="gen">
<b>Ikona Tematu/Postu</b>
</span>
</td>
<td class="row2">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td>
<span class="gensmall">
<input type="radio" value="1" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon1.gif">
<input type="radio" value="2" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon2.gif">
<input type="radio" value="3" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon3.gif">
<input type="radio" value="4" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon4.gif">
<input type="radio" value="5" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon5.gif">
<input type="radio" value="6" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon6.gif">
<input type="radio" value="7" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon7.gif">
<input type="radio" value="8" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon8.gif">
<input type="radio" value="9" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon9.gif">
<input type="radio" value="10" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon10.gif">
<input type="radio" value="11" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon11.gif">
<input type="radio" value="12" name="msg_icon">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/eserwis_v2/images/ranks/icon/icon12.gif">
<input type="radio" checked="checked" value="0" name="msg_icon">
</span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td class="row1" valign="top">
<table width="100%" cellspacing="0" cellpadding="1" border="0">
<tbody>
<tr>
<td>
<span class="gen">
<b>Treść wiadomości</b>
</span>
</td>
</tr>
<tr>
<td align="center" valign="middle">
<br>
<table width="100" cellspacing="0" cellpadding="5" border="0">
<tbody>
<tr align="center">
<td class="gensmall" colspan="4">
<b>Ikony Emocji</b>
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-) ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_smile.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" ;-) ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_wink.gif">
</td>
<td>
<!--<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-> ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_smile2.gif">-->
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-D ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_biggrin.gif">
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-P ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_razz.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-o ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_surprised.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :mrgreen: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_mrgreen.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :lol: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_lol.gif">
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-( ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_sad.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-| ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_neutral.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-/ ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_curve.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-? ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_confused.gif">
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-x ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_mad.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :shock: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_eek.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :cry: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_cry.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :oops: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_redface.gif">
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" 8-) ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_cool.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :evil: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_evil.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :roll: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_rolleyes.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :!: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_exclaim.gif">
</td>
</tr>
<tr align="center" valign="middle">
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :?: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_question.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :idea: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_idea.gif">
</td>
<td>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :arrow: ");" onmouseover="this.style.cursor="hand";" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_arrow.gif">
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td align="center">
</tr>
</tbody>
</table>
</td>
<td class="row2" valign="top">
<table width="550" cellspacing="0" cellpadding="2" border="0">
<tbody>
<tr align="left" valign="middle">
<td>
<span class="genmed">
<input class="button" type="button" onmouseover="helpline("b")" onclick="bbstyle(0)" style="font-weight:bold; width: 30px" value=" B " name="addbbcode0" accesskey="b">
<input class="button" type="button" onmouseover="helpline("i")" onclick="bbstyle(2)" style="font-style:italic; width: 30px" value=" i " name="addbbcode2" accesskey="i">
<input class="button" type="button" onmouseover="helpline("u")" onclick="bbstyle(4)" style="text-decoration: underline; width: 30px" value=" u " name="addbbcode4" accesskey="u">
<input class="button" type="button" onmouseover="helpline("q")" onclick="bbstyle(6)" style="width: 50px" value="Quote" name="addbbcode6" accesskey="q">
<input class="button" type="button" onmouseover="helpline("c")" onclick="bbstyle(8)" style="width: 40px; text-indent: -2px;" value="Code" name="addbbcode8" accesskey="c">
<input class="button" type="button" onmouseover="helpline("l")" onclick="bbstyle(10)" style="width: 40px" value="List" name="addbbcode10" accesskey="l">
<input class="button" type="button" onmouseover="helpline("p")" onclick="imgcode(this.form,"img","http://")" style="width: 40px" value="Img" name="addbbcode14" accesskey="p">
<input class="button" type="button" onmouseover="helpline("w")" onclick="namedlink(this.form,"URL")" style="text-decoration: underline; width: 40px" value="URL" name="addbbcode18" accesskey="w">
<input class="button" type="button" onmouseover="helpline("y")" onclick="bbstyle(26)" style="width: 60px" value=" Center " name="addbbcode26" accesskey="y">
<input class="button" type="button" onmouseover="helpline("e")" onclick="bbstyle(20)" style="width: 40px; text-indent: -2px;" value="Fade" name="addbbcode20" accesskey="e">
<input class="button" type="button" onmouseover="helpline("k")" onclick="bbstyle(22)" style="width: 40px; text-indent: -2px;" value="Scroll" name="addbbcode22" accesskey="k">
<input class="button" type="button" onmouseover="helpline("h")" onclick="bbstyle(28)" style="width: 40px" value="Hide" name="addbbcode28" accesskey="h">
</span>
</td>
</tr>
<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td>
<table border="0" style="width:550px">
<tbody>
<tr>
<td> Kolor: </td>
<td>
<select class="post" onmouseover="helpline("s")" onchange="bbfontstyle("[color=" + this.form.addbbcode30.options[this.form.addbbcode30.selectedIndex].value + "]", "[/color]"); this.form.addbbcode30.value="444444";" name="addbbcode30">
<option class="genmed" value="444444" style="444444;">Domyślny</option>
<option class="genmed" value="darkred" style="color:darkred;">Ciemnoczerwony</option>
<option class="genmed" value="red" style="color:red;">Czerwony</option>
<option class="genmed" value="orange" style="color:orange;">Pomarańczowy</option>
<option class="genmed" value="brown" style="color:brown;">Brązowy</option>
<option class="genmed" value="yellow" style="color:yellow;">Żółty</option>
<option class="genmed" value="green" style="color:green;">Zielony</option>
<option class="genmed" value="olive" style="color:olive;">Oliwkowy</option>
<option class="genmed" value="cyan" style="color:cyan;">Błękitny</option>
<option class="genmed" value="blue" style="color:blue;">Niebieski</option>
<option class="genmed" value="darkblue" style="color:darkblue;">Ciemnoniebieski</option>
<option class="genmed" value="indigo" style="color:indigo;">Purpurowy</option>
<option class="genmed" value="violet" style="color:violet;">Fioletowy</option>
<option class="genmed" value="white" style="color:white;">Biały</option>
<option class="genmed" value="black" style="color:black;">Czarny</option>
</select>
</td>
<td align="right">
<span style="filter: shadow(color=red); height:20">Cień:</span>
</td>
<td>
<select onmouseover="helpline("s2")" onchange="bbfontstyle("[shadow=" + this.form.addbbcode34.options[this.form.addbbcode34.selectedIndex].value + "]", "[/shadow]"); this.form.addbbcode34.value="444444";" name="addbbcode34">
<option class="genmed" value="444444" style="444444;">Domyślny</option>
<option class="genmed" value="darkred" style="color:darkred;">Ciemnoczerwony</option>
<option class="genmed" value="red" style="color:red;">Czerwony</option>
<option class="genmed" value="orange" style="color:orange;">Pomarańczowy</option>
<option class="genmed" value="brown" style="color:brown;">Brązowy</option>
<option class="genmed" value="yellow" style="color:yellow;">Żółty</option>
<option class="genmed" value="green" style="color:green;">Zielony</option>
<option class="genmed" value="olive" style="color:olive;">Oliwkowy</option>
<option class="genmed" value="cyan" style="color:cyan;">Błękitny</option>
<option class="genmed" value="blue" style="color:blue;">Niebieski</option>
<option class="genmed" value="darkblue" style="color:darkblue;">Ciemnoniebieski</option>
<option class="genmed" value="indigo" style="color:indigo;">Purpurowy</option>
<option class="genmed" value="violet" style="color:violet;">Fioletowy</option>
<option class="genmed" value="white" style="color:white;">Biały</option>
<option class="genmed" value="black" style="color:black;">Czarny</option>
</select>
</td>
<td align="right">
<span style="filter: glow(color=blue); height:20">Ogień:</span>
</td>
<td align="right">
<select onmouseover="helpline("g")" onchange="bbfontstyle("[glow=" + this.form.addbbcode29.options[this.form.addbbcode29.selectedIndex].value + "]", "[/glow]"); this.form.addbbcode29.value="444444";" name="addbbcode29">
<option class="genmed" value="444444" style="444444;">Domyślny</option>
<option class="genmed" value="darkred" style="color:darkred;">Ciemnoczerwony</option>
<option class="genmed" value="red" style="color:red;">Czerwony</option>
<option class="genmed" value="orange" style="color:orange;">Pomarańczowy</option>
<option class="genmed" value="brown" style="color:brown;">Brązowy</option>
<option class="genmed" value="yellow" style="color:yellow;">Żółty</option>
<option class="genmed" value="green" style="color:green;">Zielony</option>
<option class="genmed" value="olive" style="color:olive;">Oliwkowy</option>
<option class="genmed" value="cyan" style="color:cyan;">Błękitny</option>
<option class="genmed" value="blue" style="color:blue;">Niebieski</option>
<option class="genmed" value="darkblue" style="color:darkblue;">Ciemnoniebieski</option>
<option class="genmed" value="indigo" style="color:indigo;">Purpurowy</option>
<option class="genmed" value="violet" style="color:violet;">Fioletowy</option>
<option class="genmed" value="white" style="color:white;">Biały</option>
<option class="genmed" value="black" style="color:black;">Czarny</option>
</select>
</td>
</tr>
<tr>
<td> Rozmiar: </td>
<td>
<select onmouseover="helpline("f")" onchange="bbfontstyle("[size=" + this.form.addbbcode32.options[this.form.addbbcode32.selectedIndex].value + "]", "[/size]"); this.form.addbbcode32.value="12";" name="addbbcode32">
<option class="genmed" value="7">Minimalny</option>
<option class="genmed" value="9">Mały</option>
<option class="genmed" selected="" value="12">Normalny</option>
<option class="genmed" value="18">Duży</option>
<option class="genmed" value="24">Ogromny</option>
</select>
</td>
<td align="right" colspan="4"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td>
<span class="genmed"> </span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td nowrap="nowrap">
<input class="button" type="button" onmouseover="helpline("a")" onclick="bbstyle(-1)" style="width: 84px; text-indent: -2px;" value="Zamknij Tagi" name="addbbcode-1">
<span class="gensmall">
<input class="helpline" type="text" value="Rada: Style mogą być stosowane szybko do zaznaczonego tekstu" style="width:420px; font-size:10px" maxlength="100" size="45" name="helpbox">
</span>
<input class="button" type="button" onclick="change_size(document.forms.post.message, -1);" value="-" style="width: 18px; height: 18px; text-indent: -2px;">
<input class="button" type="button" onclick="change_size(document.forms.post.message, 1);" value="+" style="width: 18px; height: 18px; text-indent : 0px;">
</td>
</tr>
<tr>
<td>
<span class="gen">
<textarea id="message" class="post" onkeyup="storeCaret(this);" onclick="storeCaret(this);" onselect="storeCaret(this);" onblur="NotActive(this)" onfocus="Active(this)" tabindex="3" style="width: 550px; height: 200px;" cols="35" rows="15" name="message2"></textarea>
</span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<!--<td class="row1" valign="top">
<span class="gen">
<b>Czas ważności postu/tematu</b>
</span>
<br>
<span class="gensmall">Wybierz, po ilu dniach post ma być automatycznie usunięty. Jeśli jest to nowy temat, zostanie usunięty w całości.</span>

</td>
<td class="row2">
<select class="post" name="msg_expire">
<option class="genmed" value="0">Bez limitu</option>
<option class="genmed" value="1">1 Dzień</option>
<option class="genmed" value="2">2 Dni</option>
<option class="genmed" value="3">3 Dni</option>
<option class="genmed" value="4">4 Dni</option>
<option class="genmed" value="5">5 Dni</option>
<option class="genmed" value="6">6 Dni</option>
<option class="genmed" value="7">7 Dni</option>
<option class="genmed" value="14">2 Tygodnie</option>
<option class="genmed" value="30">1 Miesiąc</option>
<option class="genmed" value="90">3 Miesiące</option>
</select>
</td>
</tr>
<tr>
<td class="row1" valign="top">
<span class="gen">
<b>Freak &amp; Letter styles</b>
</span>
<br>
<span class="gensmall">Ctrl+Z aby cofnąć</span>
</td>
<td class="row2">
<input class="button" type="button" onclick="filter_freak()" value="FrEaK" name="freak">
<input class="button" type="button" onclick="filter_l33t()" value="l33t" name="freak">
</td>-->
</tr>
<tr>
<td class="row1" valign="top">
<span class="gen">
<b>Opcje</b>
</span>
<br>
<span class="gensmall">
HTML:
<u>NIE</u>
<br>
<a target="_phpbbcode" href="faq.php?mode=bbcode">BBCode</a>
:
<u>NIE</u>
<br>
Uśmieszki:
<u>NIE</u>
</span>
</td>
<td class="row2">
<table cellspacing="0" cellpadding="1" border="0">
<tbody>
<tr>
<!--<td>
<input type="checkbox" name="disable_bbcode">
</td>
<td>
<span class="gen">Wyłącz BBCode w tym poście</span>
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="disable_smilies">
</td>
<td>
<span class="gen">Wyłącz Uśmieszki w tym poście</span>
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="notify">
</td>
<td>
<span class="gen">Powiadom mnie gdy ktoś odpowie</span>
</td>-->
</tr>
<tr>
<td></td>
<td>
<span class="gen"></span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>
<input type="hidden" value="0" name="add_attachment_body">
<input type="hidden" value="0" name="posted_attachments_body">
</td>
</tr>
<!--
<tr>
<th class="thHead" colspan="2">Załącz plik</th>
</tr>
<tr>
<td class="row1" colspan="2">
<span class="gensmall">
Jeśli nie chcesz załączać pliku do tego postu, pozostaw to pole puste
<br>
<a target="_blank" href="./attach_rules.php?f=2">Dozwolone rozszerzenia i rozmiary</a>
</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Nazwa załącznika</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<input class="post" type="file" onblur="NotActive(this)" onfocus="Active(this)" value="" maxlength="262144" size="40" name="fileupload">
</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Komentarz załącznika</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<textarea class="post" onblur="NotActive(this)" onfocus="Active(this)" cols="35" rows="3" name="filecomment"></textarea>
<input class="liteoption" type="submit" value="Dodaj załącznik" name="add_attachment">
</span>
</td>
</tr>
<tr>
<th class="thHead" colspan="2">Dodaj Ankietę</th>
</tr>
<tr>
<td class="row1" colspan="2">
<span class="gensmall">Jeżeli nie chcesz dodawać ankiety do tego tematu, pozostaw pola puste</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Pytanie do ankiety</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<input class="post" type="text" value="" onblur="NotActive(this)" onfocus="Active(this)" maxlength="255" size="50" name="poll_title">
</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Opcja ankiety</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<input class="post" type="text" value="" onblur="NotActive(this)" onfocus="Active(this)" maxlength="255" size="50" name="add_poll_option_text">
</span>
<input class="liteoption" type="submit" value="Dodaj opcję" name="add_poll_option">
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Maksimum "zaznaczeń"</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<input class="post" type="text" onblur="NotActive(this)" onfocus="Active(this)" value="1" maxlength="3" size="3" name="max_vote">
</span>
<span class="gen">
<b>Opcje</b>
</span>
<span class="gensmall">[ Wpisz 1 lub pozostaw puste dla jednego "zaznaczenia" ]</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Czas trwania</b>
</span>
</td>
<td class="row2">
<span class="genmed">
<input class="post" type="text" onblur="NotActive(this)" onfocus="Active(this)" value="" maxlength="3" size="3" name="poll_length">
</span>
<span class="gen">
<b>Dni</b>
</span>
<span class="genmed">
<input class="post" type="text" onblur="NotActive(this)" onfocus="Active(this)" value="" maxlength="3" size="3" name="poll_length_h">
</span>
<span class="gen">
<b>Godzin</b>
</span>
<span class="gensmall">[ Wpisz 0 lub pozostaw puste dla niekończącej się ankiety ]</span>
</td>
</tr>
<tr>
<td class="row1">
<span class="gen">
<b>Ukryj</b>
</span>
</td>

<td class="row2">
<input type="checkbox" name="hide_vote">
<span class="gen">
<b>Wynik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
(&nbsp;&nbsp;
</span>
<input type="checkbox" name="tothide_vote">
<span class="gen">
<b>Sumę głosów</b>
&nbsp;)
</span>
<span class="gensmall"> [ Ukrycie do czasu zakończenia ankiety ]</span>
</td>-->
</tr>
<tr>
<td class="catBottom" align="center" height="28" colspan="2">
<input type="hidden" value="newtopic" name="mode">
<input type="hidden" value="0" name="post_parent">
<input type="hidden" value="2" name="f">
<input class="mainoption" type="submit" value="Podgląd" name="preview" tabindex="5">
<input class="mainoption" type="submit" value="Wyślij" name="post" tabindex="6" accesskey="s">
</td>
</tr>
</tbody>
</table>';
		  
		  }elseif($_GET['forum'] != null){
		  $wazne2 = mysql_query("select * from forum_temat where id_forum =".$_GET['forum']." and wazne='1'");
	echo'<table class="forumline" width="150%" cellspacing="1" cellpadding="4" border="0">
	<tr>
<a href="forum.php?forum='.$_GET['forum'].'&post=nowy"">
<img width="82" height="25" border="0" alt="Napisz nowy temat" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/lang_polish/post.gif">
</a>
	</tr>
	<tr>
<th class="thCornerL" align="center" nowrap="nowrap" height="25" title="Ukryj" style="cursor: pointer" onclick="javascript:ShowHide('.'imp_topics_14','imp_topics2_14','imp_topics3_14'.');" colspan="2">&nbsp;Ważne tematy&nbsp;</th>
<th class="thTop" align="center" width="50" nowrap="nowrap">&nbsp;Odpowiedzi&nbsp;</th>
<th class="thTop" align="center" width="100" nowrap="nowrap">&nbsp;Autor&nbsp;</th>
<th class="thTop" align="center" width="50" nowrap="nowrap">&nbsp;Wyświetleń&nbsp;</th>
<th class="thCornerR" align="center" width="150" nowrap="nowrap">&nbsp;Ostatni post&nbsp;</th>
</tr>';	  
		  while($wazne = mysql_fetch_array($wazne2)){
		  echo'
<tr>
<td class="row1" align="center" width="20" valign="middle">
<img width="19" height="18" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/folder_announce.gif">
</td>
<td class="row1" width="100%" onmouseout="ont(this);" onmouseover="onv(this);" style="">
<span class="topictitle">
<a class="topictitle" href="forum.php?temat='.$wazne['id'].'">'.$wazne['nazwa'].'</a>
</span>
<span class="gensmall">
<br>
'.$wazne['opis'].'
</span>
<span class="gensmall"></span>
<span class="gensmall">
<br>
</span>
</td>
<td class="row2" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="postdetails">'.$wazne['odpowiedzi'].'</span>
</td>
<td class="row1" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv(this);">
<span class="name">
<a class="genmed" href="profile.php?mode=viewprofile,u,826">'.$wazne['autor'].'</a>
</span>
</td>
<td class="row2" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv2(this);" style="">
<span class="postdetails">'.$wazne['wyswietlen'].'</span>
</td>
<td class="row1" align="center" valign="middle" nowrap="nowrap" onmouseout="ont(this);" onmouseover="onv(this);">
<span class="postdetails">
'.date("d.m.y, H:i", $wazne['czas_ostatni']).'
<br>
<a class="gensmall" style="color:#FF881C" href="profile.php?mode=viewprofile,u,177">
<b>'.$wazne['nick_ostatni'].'</b>
</a>
<a href="viewtopic.php?p=303693#303693">
<img width="18" height="9" border="0" title="Ostatni post" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_latest_reply.gif">
</a>
</span>
</td>
</tr>

';
}		  
echo "</table><br><br>";		  
		  $temat2 = mysql_query("select * from forum_temat where id_forum =".$_GET['forum']." and wazne='0'");
		  echo'<table class="forumline" width="150%" cellspacing="1" cellpadding="4" border="0">
<tbody>
<tr>
<th class="thCornerL" align="center" nowrap="nowrap" style="height: 24px;" colspan="2">&nbsp;Tematy&nbsp;</th>
<th class="thTop" align="center" width="50" nowrap="nowrap" style="height: 24px;">&nbsp;Odpowiedzi&nbsp;</th>
<th class="thTop" align="center" width="100" nowrap="nowrap" style="height: 24px;">&nbsp;Autor&nbsp;</th>
<th class="thTop" align="center" width="50" nowrap="nowrap" style="height: 24px;">&nbsp;Wyświetleń&nbsp;</th>
<th class="thCornerR" align="center" width="150" nowrap="nowrap" style="height: 24px;">&nbsp;Ostatni post&nbsp;</th>
</tr>';
		  while($temat = mysql_fetch_array($temat2)){
		  echo'<tr>
<td class="row1" align="center" width="20" valign="middle">
<img width="19" height="18" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/folder_hot.gif">
</td>
<td class="row1" width="100%" onmouseout="ont(this);" onmouseover="onv(this);" style="">
<span class="topictitle">
<a class="topictitle" onmouseout="nd();" href="forum.php?temat='.$temat['id'].'">'.$temat['nazwa'].'</a>
</span>
<span class="gensmall"><br>'.$temat['opis'].'</span>
<span class="gensmall"></span>
<span class="gensmall">
<br>
[
<img width="12" height="9" title="Idź do strony" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_minipost.gif">
Idź do strony:
<a href="viewtopic.php?t=11998,start,0">1</a>
...
<a href="viewtopic.php?t=11998,start,30">3</a>
,
<a href="viewtopic.php?t=11998,start,45">4</a>
,
<a href="viewtopic.php?t=11998,start,60">5</a>
]
</span>
</td>
<td class="row2" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="postdetails">'.$temat['odpowiedzi'].'</span>
</td>
<td class="row1" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv(this);" style="">
<span class="name">
<a class="genmed" href="profile.php?mode=viewprofile,u,121">'.$temat['autor'].'</a>
</span>
</td>
<td class="row2" align="center" valign="middle" onmouseout="ont(this);" onmouseover="onv2(this);">
<span class="postdetails">'.$temat['wyswietlen'].'</span>
</td>
<td class="row1" align="center" valign="middle" nowrap="nowrap" onmouseout="ont(this);" onmouseover="onv(this);">
<span class="postdetails">
'.date("d.m.y, H:i", $temat['czas_ostatni']).'
<br>
<a class="gensmall" href="profile.php?mode=viewprofile,u,37104">'.$temat['nick_ostatni'].'</a>
<a href="viewtopic.php?p=668065#668065">
</span>
</td>
</tr>';  
		  }
echo"</table>";		  
		  }elseif(!ereg('^[0-9]*$', $_GET['temat'])){
		  include ("menu/stopka.php");
		  echo"<script type='text/javascript'>window.alert('ups... coś poszło nie tak!! spróbuj ponownie za chwile');document.location.href = 'index.php?strona=glowna';</script>";
		  }elseif($_GET['temat'] != null){
		  $nazwa = mysql_fetch_array(mysql_query("select nazwa, id from forum_temat where id = ".$_GET['temat'].""));
		  echo'<table class="forumline" width="150%" cellspacing="1" cellpadding="3" border="0">
<tbody>
<tr align="right">
<td class="catHead" align="right" height="28" colspan="2">
<a class="nav" href="forum.php?temat='.$nazwa['id'].'">'.$nazwa['nazwa'].'</a>
</td>
</tr>
<tr>
<th class="thLeft" width="150" nowrap="nowrap" height="26">Autor</th>
<th class="thRight" nowrap="nowrap">Wiadomość</th>
</tr>';
		$post2 = mysql_query("select * from forum_posty where id_tematu = '".$_GET['temat']."'");
while($post = mysql_fetch_array($post2)){
$autor = mysql_fetch_array(mysql_query("select * from forum_konta where id = '".$post['autor_id']."'"));
echo'<tr>
<td class="row1" align="left" width="150" valign="top" nowrap="nowrap">
<span class="name">
<a name="646641"> </a>
<b>
<a class="gensmall" style="color:#006600; font-weight: bold; ; font-size: 12" title="Zobacz profil autora" href="profile.php?mode=viewprofile,u,19643">'.$autor['login'].'</a>
</b>
'.$autor['plec'].'<!--<img width="11" height="11" border="0" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_minigender_male.gif">-->
<br>
</span>
<span class="postdetails">
<img border="0" title="zasłużony" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/ranks/rank_ZASLUZONY.gif">
<br>
<img border="0" alt="'.$autor['avatar'].'" src="">
<br>
<br>
<b>Pomógł:</b>
'.$autor['pomogl'].' razy
<br>
Posty: '.$autor['posty'].'
<br>
</span>
</td>
<td class="row1" width="100%" valign="top">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td align="left" valign="top">
<a href="viewtopic.php?p=646641#646641">
<img width="12" height="9" border="0" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/icon_minipost.gif">
</a>
<span class="postdetails">
Wysłany: '.date("d.m.y, H:i", $post['data_wyslania']).'&nbsp; &nbsp;
<!--<br>
<b>Adres forum:</b>
--->
</span>
</td>
<td align="right" valign="top" nowrap="nowrap">

<span class="postdetails">
<br>
</span>
</td>
</tr>
<tr>
<td colspan="2">
<span class="gensmall">
<hr>
</span>
'.$post['opis'].'
</td>
</tr>
<tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td class="row1" align="left" valign="middle">

</td>
<td class="row1" width="100%" valign="top" nowrap="nowrap">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td valign="top" nowrap="nowrap">
<a href="profil.php?id='.'">
<img width="59" height="18" border="0" title="Zobacz profil autora" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/lang_polish/icon_profile.gif">
</a>
<a href="profil.php?id='.'">
<img width="59" height="18" border="0" title="Wyślij prywatną wiadomość" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/lang_polish/icon_pm.gif">
</a>
<a href="profil.php?id='.'">
<img width="59" height="18" border="0" title="Wyślij email" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/lang_polish/icon_email.gif">
</a>
</td>
<td align="left" width="177" valign="top">
<table cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse">
<tbody>
<tr>
<td>&nbsp;</td>
<td width="59" valign="top" height="19">
<div style="position:relative">
<div style="position:absolute;left:3px;top:-1px"></div>
</div>
</td>
<td>&nbsp;</td>
<td nowrap="nowrap"> </td>
</tr>
</tbody>
</table>
</td>
<td align="right" width="100%">
<span class="nav">
<img alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/user_agent/icon_windows_98_nt_2000.gif">
<img title="Mozilla/5.0 (Windows; U; Win98; pl; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/user_agent/icon_firefox.gif">
</span>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td class="spaceRow" height="1" colspan="2">
<img width="1" height="1" alt="" src="http://www.przemo.org/phpBB2/forum/templates/subSilver/images/spacer.gif">
</td>
</tr>
<tr>
<td class="row1" align="center"></td>
<td class="row1" align="left">

</td>
</tr>
</tbody>
</table>';
}





echo'<table width="30%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td class="row1" valign="top">
<textarea class="post" onkeyup="storeCaret(this);" onclick="storeCaret(this);" onselect="storeCaret(this);" onblur="NotActive(this)" onfocus="Active(this)" tabindex="3" cols="60" rows="10" name="message"></textarea>
<br>
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-) ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_smile.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" ;-) ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_wink.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-D ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_biggrin.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-P ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_razz.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-o ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_surprised.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :mrgreen: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_mrgreen.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :lol: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_lol.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-( ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_sad.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-| ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_neutral.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-/ ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_curve.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-? ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_confused.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :-x ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_mad.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :shock: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_eek.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :cry: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_cry.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :oops: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_redface.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" 8-) ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_cool.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :evil: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_evil.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :roll: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_rolleyes.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :!: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_exclaim.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :?: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_question.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :idea: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_idea.gif">
<img width="15" height="15" border="0" alt="" onclick="emoticon(" :arrow: ");" onmouseover="cp(this);" src="http://www.przemo.org/phpBB2/forum/images/smiles/icon_arrow.gif">
<br>
<input class="button" type="button" onclick="window.open("posting.php?mode=smilies", "_phpbbsmilies", "HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250");" value="Wszystkie emotikony" name="SmilesButt">
<!--<input class="button" type="button" onmouseover="selectedText = document.selection? document.selection.createRange().text : document.getSelection();" onclick="if (document.post && document.post.message) quoteSelection(); return false" value="Cytowanie selektywne" name="quoteselected">-->
<!--<span class="gensmall">
Wygaśnie za
<select class="post" name="msg_expire">
<option class="genmed" value="0">0</option>
<option class="genmed" value="1">1</option>
<option class="genmed" value="2">2</option>
<option class="genmed" value="3">3</option>
<option class="genmed" value="4">4</option>
<option class="genmed" value="5">5</option>
<option class="genmed" value="6">6</option>
<option class="genmed" value="7">7</option>
<option class="genmed" value="14">14</option>
<option class="genmed" value="30">30</option>
<option class="genmed" value="90">90</option>
</select>
Dni
</span>-->
</td>
<td class="row1" width="30%" valign="top">
<table>
<tbody>
<tr>
<td>
<input class="button" type="button" onclick="bbcode("[b]", "[/b]")" style="width: 38px; text-indent: -2px;" value="B">
</td>
</tr>
<tr>
<td>
<input class="button" type="button" onclick="bbcode("[i]", "[/i]")" style="width: 38px; text-indent: -2px;" value="I">
</td>
</tr>
<tr>
<td>
<input class="button" type="button" onclick="bbcode("[u]", "[/u]")" style="width: 38px; text-indent: -2px;" value="U">
</td>
</tr>
<tr>
<td>
<input class="button" type="button" onclick="imgcode(this.form,"img","http://")" style="width: 38px; text-indent: -2px;" value="IMG">
</td>
</tr>
<tr>
<td>
<input class="button" type="button" onclick="bbcode("[code]", "[/code]")" style="width: 38px; text-indent: -2px;" value="Code">
</td>
</tr>
<tr>
<td>
<input class="button" type="button" onclick="bbcode("[quote]", "[/quote]")" style="width: 38px; text-indent: -3px;" value="Quote">
</td>
</tr>
</td>
<br>
</table>
<tr>
<td class="row2" valign="top">
<!--<span class="gen">
<b>Opcje</b>
<br>
<input type="checkbox" checked="checked" name="attach_sig">
Dodaj podpis (może być zmieniony w profilu)
<br>
<input type="checkbox" name="notify">
Powiadom mnie gdy ktoś odpowie
</span>-->
</td>
</tr>
<tr>
<td class="catBottom" align="center" height="18" colspan="2">
<input type="hidden" value="reply" name="mode">
<input type="hidden" value="1" name="disable_html">
<input type="hidden" value="659" name="t">
<input type="hidden" value="" name="last_msg">
<input class="mainoption" type="submit" value="Podgląd" name="preview">
<input class="mainoption" type="submit" value="Wyślij" name="post">
</td>
</tr>
</table>';	
		  }else{
		  echo"UPS.. coś poszło nie tak spróbuj ponownie później";
		  }
?>


<?php 
include ("menu/stopka.php");
?>
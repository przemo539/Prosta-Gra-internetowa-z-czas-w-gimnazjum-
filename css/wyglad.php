<!DOCTYPE HTML PUBLIC "- / / W3C / / DTD HTML 4.01 / / EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<html itemscope itemtype="http://schema.org/Gra via www">
<meta itemprop="name" content="Drive-Faster">
<meta itemprop="description" content="To najlepsza gra via www o tematyce wyścigowej!!">
<meta itemprop="image" content="http://cs-bysina.bmmo.eu/1/www/images/logo.gif">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="description" content="Drive Faster">
<meta name="keywords" content="http://www.cs-bysina.bmmo.eu/">
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="http://cs-bysina.bmmo.eu/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 7.0]><link rel="stylesheet" type="text/css" href="css/style_ie.css" /><![endif]-->
<title><?
include_once("konfiguracja/mysql_connect.php");
echo$nazwagry?></title>
<?php

require_once("phpmailer/class.phpmailer.php");
$jezyk = 'pl';
$haslo_gdy_gra_wylaczona = 'monitor1';
$kod_panelu_hasla = 'admin';

$pass = $_GET['haslo']; 
$rank = mysql_fetch_array(mysql_query("SELECT gra FROM config WHERE login='admin'"));
$profil = mysql_fetch_assoc(mysql_query("SELECT opis_gra FROM config WHERE login='admin' "));
if($rank['gra'] != '0'){
if($haslo_gdy_gra_wylaczona  == $pass){
echo "gra została wyłączona";
}else {
	echo "<h1><center>";
	echo " <font color='red'>Gra została wyłączona z powodu: " . $profil['opis_gra'] . "<br>";
	include("../menu/reklamy_niewidoczne.php");
	if($_GET['admin'] == $kod_panelu_hasla){
	echo "Aby przejść dalej podaj hasło dostępowe(znają je tylko admini)";
	echo'<form action="index.php?strona=glowna&haslo=" method="GET"> 
        Hasło: <input type="password" name="haslo"> <br>
        <input type="submit" name="" value="Zaloguj"> 
    </form></font>';
	}
	echo "</h1></center>";
  exit();
} 
  
}
?>
</head>

<body class="oneColFixLtHdr">

<script type="text/javascript">
var mmoCSS = ' body {margin:0; padding:0;} #mmonetbar { background:transparent url(www/images/netbar.bg.png) repeat-x; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; height:32px; left:0; padding:0; position:absolute; text-align:center; top:0; width:100%; z-index:3000; } #mmonetbar #cos6 { height:32px; margin:0 auto; width:1024px; position: relative; } #mmonetbar .mmosmallbar {width:585px !important;} #mmonetbar .mmosmallbar div.mmoBoxMiddle { width: 290px; } #mmonetbar .cos8 {width:800px !important;} #mmonetbar .mmouseronlineout {width:768px !important;} #mmonetbar .mmolangout {width:380px !important;} #mmonetbar .mmolangout .cos4 { width: 265px; } #mmonetbar #cos6.mmoingame { width: 533px; } #mmonetbar #cos6.mmoingame .cos4 { width: auto; } #mmonetbar a { color:#666; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; outline: none; text-decoration:none; white-space:nowrap; } #mmonetbar select { background-color:#3a3530 !important; border:1px solid #686051 !important; color:#d3c8b4 !important; font:normal 11px Verdana, Arial, Helvetica, sans-serif; height:18px; margin-top:3px; width:100px; } #mmonetbar .cos4s select {width:80px;} #mmonetbar option { background-color:#3a3530 !important; color:#d3c8b4 !important; } #mmonetbar option:hover { background-color:#4d4740 !important; } #mmonetbar select#mmoCountry {width:120px;} #mmonetbar .mmoSelectbox { background-color:#3a3530; float:left; margin:3px 0 0 3px; position:relative; } * html #mmonetbar .mmoSelectbox {position:static;} *+html #mmonetbar .mmoSelectbox {position:static;} #mmonetbar #mmoOneGame {cursor:default; height:14px; margin-top:3px; padding-left:5px; width:80px;} #mmonetbar .label {float:left; font-weight:bold; margin-right:4px; overflow:hidden !important;} #mmonetbar #mmoUsers .label {font-size:10px;} #mmonetbar .mmoBoxLeft, #mmonetbar .mmoBoxRight { background:transparent url(www/images/netbar.sprites.png) no-repeat -109px -4px; float:left; width:5px; height:24px; } #mmonetbar .mmoBoxRight {background-position:-126px -4px;} #mmonetbar .mmoBoxMiddle { background:transparent url(www/images/netbar.bg.png) repeat-x 0 -36px; color:#d3c8b4 !important; float:left; height:24px; line-height:22px; text-align:left; white-space:nowrap; position: relative; z-index: 10000; } #mmonetbar #mmoGames, #mmonetbar #mmoLangs {margin:0px 4px 0 0;} #mmonetbar #mmoNews, #mmonetbar #mmoUsers, #mmonetbar #cos4, #mmonetbar .nojsGame {margin:4px 4px 0 0;} #mmonetbar #mmoLogo { background:transparent url(www/images/netbar.sprites.png) no-repeat top left; float:left; display:block; height:32px; width:108px; text-indent: -9999px; position: relative; z-index: 1 } #mmonetbar #mmoNews {float:left; width:252px;} #mmonetbar #mmoNews #mmoNewsContent {text-align:left; width:200px;} #mmonetbar #mmoNews #mmoNewsticker {overflow:hidden; width:240px;} #mmonetbar #mmoNews #mmoNewsticker ul { margin: 0; padding: 0; list-style: none; } #mmonetbar #mmoNews #mmoNewsticker ul li { font:normal 11px/22px Tahoma, Arial, Helvetica, sans-serif !important; color:#d3c8b4 !important; padding: 0; margin: 0; background: none; display: none; } #mmonetbar #mmoNews #mmoNewsticker ul li.mmoTickShow { display: block; } #mmonetbar #mmoNews #mmoNewsticker ul li a img {border:0;} #mmonetbar #mmoNews #mmoNewsticker ul li a {color:#d3c8b4 !important;display:block;height:24px;line-height:23px;} #mmonetbar #mmoNews #mmoNewsticker ul li a:hover {text-decoration:underline;} #mmonetbar #mmoUsers {float:left; width:178px;} #mmonetbar #mmoUsers .mmoBoxLeft {width:17px;} #mmonetbar #mmoUsers .mmoBoxMiddle {padding-left:3px; width:150px;} #mmonetbar .cos4 {display:none; float:left; width:432px;} #mmonetbar .cos4 #mmoGames {float:left; width:206px;} #mmonetbar .cos4#mmoLangs {float:left; margin:0; width:252px;} #mmonetbar .cos4 label { color:#d3c8b4 !important; float:left; font-weight:400 !important; line-height:22px; margin:0px; text-align:right !important; width:110px; font-size: 11px !important; } #mmonetbar .nojsGame {display:block; width:470px;} #mmonetbar .nojsGame .mmoBoxMiddle {width:450px;} #mmonetbar .nojsGame .mmoSelectbox {margin:0px 0 0 3px;} *+html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} * html #mmonetbar .nojsGame .mmoSelectbox {margin:2px 0 0 3px;} #mmonetbar .nojsGame .mmoGameBtn { background:transparent url(www/images/netbar.sprites.png) no-repeat -162px -7px; border:none; cursor:pointer; float:left; height:18px; margin:3px 0 0 7px; padding:0; width:18px; } #mmonetbar .mmoSelectArea { border:1px solid #686051; color:#d3c8b4 !important; display:block !important; float:none; font-weight:400 !important; font-size:11px; height:16px; line-height:13px; overflow:hidden !important; width:90px; } #mmonetbar #mmoLangSelect .mmoSelectArea {width:129px;} #mmonetbar #mmoLangSelect .mmoOptionsDivVisible {min-width:129px;} #mmonetbar .mmoSelectArea .mmoSelectButton { background: url(www/images/netbar.sprites.png) no-repeat -141px -8px; float:right; width:17px; height:16px; } #mmonetbar .mmoSelectText {cursor:pointer; float:left; overflow:hidden; padding:1px 2px; width:68px;} #mmonetbar #mmoLangSelect .mmoSelectText {width:107px;} #mmonetbar #mmoOneLang {cursor:default; height:14px;} #mmonetbar div.mmoOneLang { background: none; } #mmonetbar div.mmoOneLang #mmoOneLang { border: none; padding: 2px 3px; } #mmonetbar .mmoOptionsDivInvisible, #mmonetbar .mmoOptionsDivVisible { background-color: #3a3530 !important; border: 1px solid #686051; position: absolute; min-width:90px; z-index: 3100; } * html #mmonetbar .mmoOptionsDivVisible .highlight {background-color:#4d4740 !important} #mmonetbar .mmoOptionsDivInvisible {display: none;} #mmonetbar .mmoOptionsDivVisible ul { border:0; font:normal 11px Tahoma, Arial, Helvetica, sans-serif; list-style: none; margin:0; padding:2px; overflow:auto; overflow-x:hidden; } #mmonetbar #mmoLangs .mmoOptionsDivVisible ul {min-width:125px;} #mmonetbar .mmoOptionsDivVisible ul li { background-color: #3a3530; height:14px; padding:2px 0; } #mmonetbar .mmoOptionsDivVisible a { color: #d3c8b4 !important; display: block; font-weight:400 !important; height:16px !important; min-width:80px; text-decoration: none; white-space:nowrap; width:100%; } #mmonetbar #cos6 .mmoLangList a {min-width:102px;} #mmonetbar .mmoOptionsDivVisible li:hover {background-color: #4d4740;} #mmonetbar .mmoOptionsDivVisible li a:hover {color: #d3c8b4 !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive {background-color: #4d4740 !important;} #mmonetbar .mmoOptionsDivVisible li.mmoActive a {color: #d3c8b4 !important;} #mmonetbar .mmoOptionsDivVisible ul.mmoListHeight {height:240px} #mmonetbar .mmoOptionsDivVisible ul.mmoLangList.mmoListHeight li {padding-right:15px !important; width:100%;} #mmonetbar #mmoGameSelect ul.mmoListHeight a {min-width:85px;} #mmonetbar #mmoLangSelect ul.mmoListHeight a {min-width:105px;} #mmonetbar #cos7 {position:absolute;left:-2000px;top:-2000px;} #mmonetbar #mmoLangs .mmoSelectText span, #mmonetbar #mmoLangs .mmoflag { background: transparent url(www/images/mmoflags.png) no-repeat; height:14px !important; padding-left:23px; } .mmo_AE {background-position:left 0px !important} .mmo_AR {background-position:left -14px !important} .mmo_BE {background-position:left -28px !important} .mmo_BG {background-position:left -42px !important} .mmo_BR {background-position:left -56px !important} .mmo_BY {background-position:left -70px !important} .mmo_CA {background-position:left -84px !important} .mmo_CH {background-position:left -98px !important} .mmo_CL {background-position:left -112px !important} .mmo_CN {background-position:left -126px !important} .mmo_CO {background-position:left -140px !important} .mmo_CZ {background-position:left -154px !important} .mmo_DE {background-position:left -168px !important} .mmo_DK {background-position:left -182px !important} .mmo_EE {background-position:left -196px !important} .mmo_EG {background-position:left -210px !important} .mmo_EN {background-position:left -224px !important} .mmo_ES {background-position:left -238px !important} .mmo_EU {background-position:left -252px !important} .mmo_FI {background-position:left -266px !important} .mmo_FR {background-position:left -280px !important} .mmo_GR {background-position:left -294px !important} .mmo_HK {background-position:left -308px !important} .mmo_HR {background-position:left -322px !important} .mmo_HU {background-position:left -336px !important} .mmo_ID {background-position:left -350px !important} .mmo_IL {background-position:left -364px !important} .mmo_IN {background-position:left -378px !important} .mmo_INTL {background-position:left -392px !important} .mmo_IR {background-position:left -406px !important} .mmo_IT {background-position:left -420px !important} .mmo_JP {background-position:left -434px !important} .mmo_KE {background-position:left -448px !important} .mmo_KR {background-position:left -462px !important} .mmo_LT {background-position:left -476px !important} .mmo_LV {background-position:left -490px !important} .mmo_ME {background-position:left -504px !important} .mmo_MK {background-position:left -518px !important} .mmo_MX {background-position:left -532px !important} .mmo_NL {background-position:left -546px !important} .mmo_NO {background-position:left -560px !important} .mmo_PE {background-position:left -574px !important} .mmo_PH {background-position:left -588px !important} .mmo_PK {background-position:left -602px !important} .mmo_PL {background-position:left -616px !important} .mmo_PT {background-position:left -630px !important} .mmo_RO {background-position:left -644px !important} .mmo_RS {background-position:left -658px !important} .mmo_RU {background-position:left -672px !important} .mmo_SE {background-position:left -686px !important} .mmo_SI {background-position:left -700px !important} .mmo_SK {background-position:left -714px !important} .mmo_TH {background-position:left -728px !important} .mmo_TR {background-position:left -742px !important} .mmo_TW {background-position:left -756px !important} .mmo_UA {background-position:left -770px !important} .mmo_UK {background-position:left -784px !important} .mmo_US {background-position:left -798px !important} .mmo_VE {background-position:left -812px !important} .mmo_VN {background-position:left -826px !important} .mmo_YU {background-position:left -840px !important} .mmo_ZA {background-position:left -854px !important} .mmo_WW {background-position:left -392px !important} div#mmonetbar a:active { top: 0; } div#mmoGamesOverviewPanel { width: 582px; position: absolute; top: 0; right: 0; font: 12px Arial, sans-serif; } div#mmoGamesOverviewPanel h4, div#mmoGamesOverviewPanel h5 { margin: 0; font-size: 12px; font-weight: bold; text-align: left; } div#mmoGamesOverviewPanel a { text-decoration: none; } div#mmoGamesOverviewPanel a img { border: none; } div#cos2 { width: 168px; padding: 4px 0 4px 414px; } div#cos2 h4 { height: 18px; position: relative; background: url(www/images/netbar.bg.png) repeat-x 0 -36px; top: 0px; padding: 3px 20px; } div#cos2 h4 a { display: block; width: 116px; height: 16px; line-height: 14px; text-align: left; font-weight: normal; outline: none; color: #d3c8b4 !important; font-size: 11px !important; position: relative; border: 1px solid #686051; padding: 0 0 0 10px; background: #3a3530; } div#cos2 h4 a.gameCountZero { cursor: default; text-align: center; padding: 0; width: 126px; } div#cos2 h4 a span.cos5 { display: block; position: absolute; top: 0; right: 0; width: 17px; height: 16px; background: url(www/images/netbar.sprites.png) no-repeat -141px -8px; } span.iconTriangle { display: block; position: absolute; top: 5px; right: 10px; width: 0px; border: 5px solid transparent; border-bottom-color: #d3c8b4; } div#cos2 h4 a.toggleHidden { } div#cos2 h4 a.toggleHidden span.iconTriangle { top: 10px; border: 5px solid transparent; border-top-color: #d3c8b4; } div#cos2 h4 span.mmoNbBoxEdge { display: block; width: 5px; height: 24px; background: url(www/images/netbar.sprites.png) no-repeat -109px -4px; position: absolute; top: 0; } div#cos2 h4 span.mmoNbBoxEdge_left { left: 0; } div#cos2 h4 span.mmoNbBoxEdge_right { right: 0; background-position: -126px -4px; } div#cos3 { clear: both; background: #3a3530; width: 580px; border: 1px solid #686051; float: left; position: relative; top: 0px; } div#cos3 h5 { clear: both; width: 544px; margin: 0; padding: 0 18px; height: 27px; line-height: 27px; color: #d3c8b4; border-bottom: 1px solid #686051; background: url(www/images/netbar.bg.png) repeat-x 0 -3px; font-family: inherit; } #cos3 #mmoGamesOverview_featured li { width: auto; } #cos3 #mmoGamesOverview_featured span { display: block; width: 560px; height: 180px; margin: 0; } #cos3 #mmoGamesOverview_featured span.gameName { display: none; } #mmoGamesOverview_featured img { display: block; } div#cos3 ul { margin: 0; padding: 5px 5px; list-style: none; width: 570px; float: left; text-align: left; } div#cos3 ul li { margin: 0; padding: 0; list-style: none; width: 190px; float: left; background: none; } div#cos3 ul li a { display: block; padding: 5px; font-weight: bold; line-height: 1; color: #d3c8b4 !important; font-size: 11px !important; } div#cos3 ul li a:focus, div#cos3 ul li a:hover { background-color: #4d4740; } div#cos3 ul li a span.cos { display: block; width: 180px; height: 90px; background: none; margin: 0 0 4px 0; } div#cos3 ul li a span img { display: block; } div#cos3 div#mmoGamesOverviewCountry { width: 20px; height: 14px; position: absolute; top: 6px; right: 12px; background-image: url(www/images/mmoflags.png); background-repeat: no-repeat; } #mmonetbar div.nojsGame { width: 432px !important; } #mmonetbar div.nojsGame div.mmoBoxMiddle { width: 422px; } #mmonetbar div.nojsGame label { width: 105px; } div#mmoPFstaticWrap { position: absolute; top: 0; left: 0; z-index: 999999; } div#mmoPFstaticWrap.mmoPageFoldStatic_rtl { left: auto; right: 0; } div#mmoPageFoldStatic a#mmoPFSfold { display: block; width: 110px; height: 95px; background: url(obrazek2) no-repeat; _background-image: url(www/images/bg_light_sprite.gif); text-indent: -9999px; outline: none; text-decoration: none; } div#mmoPageFoldStatic.mmoPageFoldStatic_dark a#mmoPFSfold { background-image: url(środek obrazka ); _background-image: url(www/images/bg_dark_sprite.gif); } div#mmoPageFoldStatic a#mmoPFSfold.hover { width: 414px; height: 419px; background-position: 0 -129px !important; } div.mmoPFS_extra { position: absolute; background: url(ramka obrazka ) no-repeat; _background: url(www/images/bg_light_sprite.gif) no-repeat; } .mmoPageFoldStatic_rtl div#mmoPageFoldStatic a#mmoPFSfold, .mmoPageFoldStatic_rtl div#mmoPageFoldStatic.mmoPageFoldStatic_dark a#mmoPFSfold, .mmoPageFoldStatic_rtl div.mmoPFS_extra { background-position: top right; background-image: url(www/images/bg_light_sprite_rtl.png); _background-image: url(www/images/bg_light_sprite_rtl.gif); } .mmoPageFoldStatic_rtl div#mmoPageFoldStatic.mmoPageFoldStatic_dark a#mmoPFSfold { background-image: url(www/images/bg_dark_sprite_rtl.png); _background-image: url(www/images/bg_dark_sprite_rtl.gif); } div.mmoPFS_extra_h { left: 0; } div.mmoPFS_extra_v { top: 0; } div#mmoPFS_extra1 { width: 110px; height: 10px; top: 95px; background-position: 0 -95px; } div#mmoPFS_extra2 { width: 40px; height: 10px; top: 105px; background-position: 0 -105px; } div#mmoPFS_extra3 { width: 10px; height: 14px; top: 115px; background-position: 0 -115px; } div#mmoPFS_extra4 { width: 5px; height: 95px; left: 110px; background-position: -110px 0; } div#mmoPFS_extra5 { width: 13px; height: 15px; left: 115px; background-position: -115px 0; } .mmoPageFoldStatic_rtl div#mmoPFS_extra1 { background-position: 100% -95px; left: auto; right: 0; } .mmoPageFoldStatic_rtl div#mmoPFS_extra2 { background-position: 100% -105px; left: auto; right: 0; } .mmoPageFoldStatic_rtl div#mmoPFS_extra3 { background-position: 100% -115px; left: auto; right: 0; } .mmoPageFoldStatic_rtl div#mmoPFS_extra4 { background-position: -299px 0; left: auto; right: 110px; } .mmoPageFoldStatic_rtl div#mmoPFS_extra5 { background-position: -286px 0; left: auto; right: 115px; } a#hoverlink { display: block; width: 110px; height: 95px; position: absolute; top: 0; left: 0; outline: none; } .mmoPageFoldStatic_rtl a#hoverlink { left: auto; right: 0; } ';
var mmostyle = document.createElement('style');
if (navigator.appName == "Microsoft Internet Explorer") {
	mmostyle.setAttribute("type", "text/css");
	mmostyle.styleSheet.cssText = mmoCSS;
} else {
	var mmostyleTxt = document.createTextNode(mmoCSS);
	mmostyle.type = 'text/css';
	mmostyle.appendChild(mmostyleTxt);
}
document.getElementsByTagName('head')[0].appendChild(mmostyle);
</script>



<div id="mmonetbar" >
<script type="text/javascript">
function mmoEl(name){if(document.getElementById){return document.getElementById(name);}
else if(document.all){return document.all[name];}
else if(document.layers){return document.layers[name];}
return false;}
function mmoJump(el){window.location.href=el.options[el.selectedIndex].value;}
var mmo_tickDly=3000;var mmo_tickFadeDly=50;var mmo_tickFadeTicks=10;var mmoTickEl=null;var mmoTickItems=null;var mmoTickIdx=0;var mmoTickState=0;var mmoTickFade=1;var mmoTickHalt=false;function mmoTicker(){var f=0;try{mmoTickEl=mmoEl('mmoNewsticker');if(mmoTickEl){mmoTickItems=mmoTickEl.getElementsByTagName("li");if(mmoTickItems){f=1;}}}catch(e){f=0;}
if(!f){setTimeout(mmoTicker,10);return;}
setTimeout(mmoTicknext,0);}
function mmoTicknext(){if(mmoTickHalt){mmoTickAlphaFor(mmoTickEl,100);setTimeout(mmoTicknext,500);return;}
if(mmoTickState==0){mmoTickFade=mmoTickFade-1;mmoTickAlpha();if(mmoTickFade<=0){mmoTickState=1;setTimeout(mmoTicknext,0);return;}
setTimeout(mmoTicknext,mmo_tickFadeDly);return;}
if(mmoTickState==1){mmoTickItems[mmoTickIdx].className="";mmoTickIdx++;if(mmoTickIdx>=mmoTickItems.length)mmoTickIdx=0;mmoTickItems[mmoTickIdx].className="mmoTickShow";setTimeout(mmoTicknext,mmo_tickFadeDly);mmoTickState=2;return;}
if(mmoTickState==2){mmoTickFade=mmoTickFade+1;mmoTickAlpha();if(mmoTickFade>=mmo_tickFadeTicks){if(mmoTickItems.length<2)return;mmoTickState=0;setTimeout(mmoTicknext,mmo_tickDly);return;}
setTimeout(mmoTicknext,mmo_tickFadeDly);return;}}
function mmoTickAlpha(){var a=(100/mmo_tickFadeTicks)*mmoTickFade;mmoTickAlphaFor(mmoTickEl,a);}
function mmoTickAlphaFor(el,a){el.style.filter='Alpha(opacity='+a+')';el.style.opacity=a/100;el.style.MozOpacity=a/100;el.style.KhtmlOpacity=a/100;}
var mmoActive_select=null;function mmoInitSelect(){if(!document.getElementById)return false;document.getElementById('mmonetbar').style.display='block';document.getElementById('cos4').style.display='block';document.getElementById('cos7').onkeyup=function(e){mmo_selid=mmoActive_select.id.replace('mmoOptionsDiv','');var e=e||window.event;if(e.keyCode)var thecode=e.keyCode;else if(e.which)var thecode=e.which;mmoSelectMe(mmo_selid,thecode);}}
function mmoSelectMe(selid,thecode){var mmolist=document.getElementById('mmoList'+selid);var mmoitems=mmolist.getElementsByTagName('li');switch(thecode){case 13:mmoShowOptions(selid);window.location=mmoActive_select.url;break;case 38:mmoActive_select.activeit.className='';var minus=((mmoActive_select.activeid-1)<=0)?'0':(mmoActive_select.activeid-1);mmoActive_select=mmoSetActive(selid,minus);break;case 40:mmoActive_select.activeit.className='';var plus=((mmoActive_select.activeid+1)>=mmoitems.length)?(mmoitems.length-1):(mmoActive_select.activeid+1);mmoActive_select=mmoSetActive(selid,plus);break;default:thecode=String.fromCharCode(thecode);var found=false;for(var i=0;i<mmoitems.length;i++){var _a=mmoitems[i].getElementsByTagName('a');if(navigator.appName.indexOf("Explorer")>-1){}
else{txtContent=_a[0].textContent;}
if(!found&&(thecode.toLowerCase()==txtContent.charAt(0).toLowerCase())){mmoActive_select.activeit.className='';mmoActive_select=mmoSetActive(selid,i);found=true;}}
break;}}
function mmoSetActive(selid,itemid){mmoActive_select=null;var mmolist=document.getElementById('mmoList'+selid);var mmoitems=mmolist.getElementsByTagName('li');mmoActive_select=document.getElementById('mmoOptionsDiv'+selid);;mmoActive_select.selid=selid;if(itemid!=undefined){var _a=mmoitems[itemid].getElementsByTagName('a');var textVar=document.getElementById("mmoMySelectText"+selid);textVar.innerHTML=_a[0].innerHTML;if(selid==1)textVar.className=_a[0].className;mmoitems[itemid].className='mmoActive';}
for(var i=0;i<mmoitems.length;i++){if(mmoitems[i].className=='mmoActive'){mmoActive_select.activeit=mmoitems[i];mmoActive_select.activeid=i;mmoActive_select.url=(mmoitems[i].getElementsByTagName('a'))?mmoitems[i].getElementsByTagName('a')[0].href:null;}}
return mmoActive_select;}
function mmoShowOptions(g){var _elem=document.getElementById("mmoOptionsDiv"+g);if((mmoActive_select)&&(mmoActive_select!=_elem)){mmoActive_select.className="mmoOptionsDivInvisible";document.getElementById('mmonetbar').focus();}
if(_elem.className=="mmoOptionsDivInvisible"){document.getElementById('cos7').focus();mmoActive_select=mmoSetActive(g);if(document.documentElement){document.documentElement.onclick=mmoHideOptions;}else{window.onclick=mmoHideOptions;}
_elem.className="mmoOptionsDivVisible";}else if(_elem.className=="mmoOptionsDivVisible"){_elem.className="mmoOptionsDivInvisible";document.getElementById('mmonetbar').focus();}}
function mmoHideOptions(e){if(mmoActive_select){if(!e)e=window.event;var _target=(e.target||e.srcElement);if((_target.id.indexOf('mmoOptionsDiv')!=-1))return false;if(mmoisElementBefore(_target,'mmoSelectArea')==0&&(mmoisElementBefore(_target,'mmoOptionsDiv')==0)){mmoActive_select.className="mmoOptionsDivInvisible";mmoActive_select=null;}}else{if(document.documentElement)document.documentElement.onclick=function(){};else window.onclick=null;}}
function mmoisElementBefore(_el,_class){var _parent=_el;do _parent=_parent.parentNode;while(_parent&&(_parent.className!=null)&&(_parent.className.indexOf(_class)==-1))
return(_parent.className&&(_parent.className.indexOf(_class)!=-1))?1:0;}
var ua=navigator.userAgent.toLowerCase();var ie6browser=((ua.indexOf("msie 6")>-1)&&(ua.indexOf("opera")<0))?true:false;function highlight(el,mod){if(ie6browser){if(mod==1&&!el.className.match(/highlight/))el.className=el.className+' highlight';else if(mod==0)el.className=el.className.replace(/highlight/g,'');}}
var mmoToggleDisplay={init:function(wrapper){var wrapper=document.getElementById(wrapper);if(!wrapper)return;var headline=wrapper.getElementsByTagName("h4")[0],link=headline.getElementsByTagName("a")[0];if(link.className.indexOf("gameCountZero")!=-1)return false;var panel=document.getElementById(link.hash.substr(1));mmoToggleDisplay.hidePanel(panel,link);link.onclick=function(e){mmoToggleDisplay.loadImages();mmoToggleDisplay.toggle(this,panel);return false;};mmoToggleDisplay.outerClick(wrapper,link,panel);var timeoutID=null,delay=8000;wrapper.onmouseout=function(e){if(!e){var e=window.event;}
var reltg=(e.relatedTarget)?e.relatedTarget:e.toElement;if(reltg==wrapper||mmoToggleDisplay.isChildOf(reltg,wrapper)){return;}
timeoutID=setTimeout(function(){mmoToggleDisplay.hidePanel(panel,link);},delay);};wrapper.onmouseover=function(e){if(timeoutID){clearTimeout(timeoutID);}};},isChildOf:function(child,parent){while(child&&child!=parent){child=child.parentNode;}
if(child==parent){return true;}else{return false;}},hidePanel:function(panel,link){panel.style.display="none";link.className="toggleHidden";},toggle:function(link,panel){panel.style.display=panel.style.display=="none"?"block":"none";link.className=link.className=="toggleHidden"?"":"toggleHidden";},outerClick:function(wrapper,link,panel){document.body.onclick=function(e){if(!e){e=window.event};if(!(mmoToggleDisplay.isChildOf((e.target||e.srcElement),wrapper))&&panel.style.display!="none"){mmoToggleDisplay.toggle(link,panel);}}},loadImages:function(){var script=document.createElement("script");script.type="text/javascript";var jsonGameData_browser='{"kingsage":"kingsage\/default\/big.png"}',jsonGameData_client='{"airrivals":"airrivals\/default\/big.png"}',jsonGameData_featured='{"wizard101":"wizard101\/default\/netbar.teaser.png"}';script.text='';script.text+=' mmoToggleDisplay.callback('+jsonGameData_featured+', "featured");';script.text+=' mmoToggleDisplay.callback('+jsonGameData_client+', "client");';script.text+='mmoToggleDisplay.callback('+jsonGameData_browser+', "browser");';document.getElementsByTagName("head")[0].appendChild(script);mmoToggleDisplay.loadImages=function(){};},callback:function(data,gamesCat){for(var gameName in data){var gameSpan=document.getElementById("cos_"+gameName);if(!gameSpan){return false;}
var gameImg=document.createElement("img");gameImg.src="";gameSpan.appendChild(gameImg);}}}
var staticPageFold={init:function(opts){var pagefoldHTML='';var pagefoldWrapper=document.createElement("div");pagefoldWrapper.id="mmoPFstaticWrap";if(opts.alignRight){pagefoldWrapper.className="mmoPageFoldStatic_rtl"};pagefoldWrapper.innerHTML=pagefoldHTML;document.getElementById(opts.target).appendChild(pagefoldWrapper);var pagefoldLink=document.getElementById("mmoPFSfold");var extraDivs=staticPageFold.getElementsByClass("mmoPFS_extra");var hoverlink=document.getElementById("hoverlink");hoverlink.onmouseover=function(){for(var i=0;i<extraDivs.length;i++){extraDivs[i].style.display="none";}
this.style.cssText="width: 0px; height: 0px;";pagefoldLink.className="hover";};hoverlink.onmouseout=function(){for(var i=0;i<extraDivs.length;i++){extraDivs[i].style.display="block";}
this.style.cssText="";pagefoldLink.className="";};staticPageFold.adjustNetbar();},adjustNetbar:function(){var logo=document.getElementById("mmoLogo");logo.parentNode.removeChild(logo);var netbarContent=document.getElementById("cos6");switch(netbarContent.className){case"cos8":var newWidth="692px";break;case"mmolangout":var newWidth="272px";break;case"mmosmallbar":var newWidth="477px";break;default:var newWidth="auto";break;}
if(newWidth!="auto"){netbarContent.style.cssText="width: "+newWidth+" !important";}},isNative:function(func){return/native code/.test(func);},getElementsByClass:function(className){if(document.getElementsByClassName&&staticPageFold.isNative(document.getElementsByClassName)){return document.getElementsByClassName(className);}
if(document.all){var allElements=document.all;}else{var allElements=document.getElementsByTagName("*");}
var foundElements=[];for(var i=0;i<allElements.length;i++){if(allElements[i].className.indexOf(className)!=-1){foundElements[foundElements.length]=allElements[i];}}
return foundElements;},addLoadEvent:function(func){var oldonload=window.onload;if(typeof window.onload!="function"){window.onload=func;}else{window.onload=function(){oldonload();func();}}}};</script>
	<div id="cos6" class="cos8">

		<div id="cos4" class="cos4"><!--ważne--></div>


<div id="wal_sie">
    <div id="cos2">
        <h4>

            <a href="#cos3">Więcej gier<span class="cos5"></span></a>

        </h4>
    </div>
    <div id="cos3">
       
        <h5>Gry przeglądarkowe</h5>
        <ul>
<li>
<span class="cos">
<?php echo'<img src="'.$adressgry.'/www/images/brak_gier.png" alt="">';?>
</span>
BRAK GIER
</a>
</li>

        </ul>
    </div>
</div>
        </div>
        <input id="cos7" type="text" size="5" />
    </div>


<script type="text/javascript">
mmoInitSelect();
mmoTicker();mmoToggleDisplay.init("wal_sie");
	staticPageFold.addLoadEvent(function() {

	});
</script>
<br><br><br>

<div id="container">
	<h1 id="header">
		<a href="index.php?strona=glowna">Fast-Driver</a>
	</h1>
	<ul id="nav">
<!--< ?php include("../menu/gorne_menu.php");?>-->
		<li><a href="index.php?strona=glowna">Strona główna</a></li>
		<li><a href="index.php?rejestruj=sie">Rejestracja</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="index.php?pokaz=zasady">Regulamin</a></li>
		<li><a href="index.php?pokaz=galeria">Galeria</a></li>
		<li><a href="index.php?pokaz=konkurs">Konkursy</a></li>
		<li><a href="index.php?pokaz=o_grze">O grze</a></li>
		<li><a href="index.php?support=1">Support</a></li>';
	</ul>
	
	<div id="sidebarl" class="s">
		<h2>Dane</h2>
		<ul class="links">
		<li>Info o stronie</li>
		<?$fn = 'konfiguracja/ilosc_wejsc.txt';
  $counter = file_exists($fn) ? (int)file_get_contents($fn) : 0;
 
  $cookiename = 'Zliczanie_ilosci_wejsc_z_drive_faster';
  if ( ! isset($_COOKIE[$cookiename]))
	{
  file_put_contents($fn, ++$counter);
  setcookie($cookiename, '1', time()+60*60*24);
	}
	echo'Odwiedziło nas: '.$counter.' osób<br>';?>
	Strona istnieje od: 29.12.2011<br>
<?php
$wersja = mysql_fetch_row(mysql_query("SELECT max(id) FROM changelog ORDER BY id DESC LIMIT 0,10"));
$versja = mysql_fetch_array(mysql_query("select * from changelog where id = ".$wersja[0]." "));
echo'
Aktualna wersja gry to: <a href="changelog.php?id='.$versja['id'].'">'.$versja['versja'].'</a>';
?>
		<li>Serwer1:</li>
<?
include_once("lang/".$jezyk."/lang_loguj.php");
$czas_akt = time();
$query = "SELECT COUNT(*) FROM konta WHERE online='1' and last_activ > '$czas_akt' and login!='admin'";
	
if(!$result = mysql_query($query)){
	@mysql_close();
	echo $lang['1'];
}
if(!$online = mysql_fetch_row($result)){
	@mysql_close();
	echo $lang['1'];
}

if($_GET['wyloguj'] == 'sie'){
$online[0] = $online[0] - 1;
}

if($online[0] == 1){
	echo $lang['9'] . $online[0] . $lang['11'];
}
else if($online[0] == 2 || $online[0] == 3 || $online == 4){
	echo $lang['10'] . $online[0] . $lang['12'];
}
else{
	echo $lang['9'] . $online[0] . $lang['13'];
}
echo " / ";
$zarejestrowani = mysql_fetch_array(mysql_query("SELECT count(*) FROM konta where login!='admin'"));
echo $zarejestrowani[0];
echo $lang['2'];?>
<li>Serwer2:</li>
BRAK DANYCH!!
		</ul>
		
		<h2>Partnerzy</h2>
		<ul class="links">
			<li><a href="http://e-kasiora.cba.pl/">http://e-kasiora.cba.pl/</a></li>
			<li><a href="forum.php">Aby dodac pisz na forum</a></li>
		</ul>
	</div>
	<div id="content">
			<h2></h2>
		<div id="subheader"></div>
		<div class="meta">
		</div>
		

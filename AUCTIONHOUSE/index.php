<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Auctionhouse</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
</head>
<body>
<?php 
error_reporting(0);
include ("conf.php"); 
include ("functions.php");
$limit=15;	
$context = stream_context_create(array('http' => array('user_agent' => 'get_browser(null, true)'))); 
$connect = mysql_connect($host, $user, $pass) or die ("Cant connect ".$host."");
mysql_set_charset("utf8");
$typ=mysql_real_escape_string($_POST["typ"]);
if(empty($typ) || $typ==""){$typ=99;}
$start=mysql_real_escape_string($_POST["start"]);
if(empty($start) || $start==""){$start=0;}
$house=mysql_real_escape_string($_POST["house"]);
if(empty($house) || $house==""){$house=2;}
switch ($house):
	case 1:$ah="<span style='color:#6495ED;'>Allianz</span>";$dis1="-disabled";$diss1="disabled";$ahouse="and $chardb.auctionhouse.houseid IN(1,2,3)";break;
	case 2:$ah="<span style='color:#EEC900;'>Neutral</span>";$ahouse="and $chardb.auctionhouse.houseid IN(1,2,3,4,5,6,7)";break;
	case 3:$ah="<span style='color:#B22222;'>Horde</span>";$dis2="-disabled";$diss2="disabled";$ahouse="and $chardb.auctionhouse.houseid IN(4,5,6)";break;
endswitch;	
$split=explode(".",$typ);
if($typ != "" && $typ!=99)
{
if(count($split)<2){$type = " AND $worlddb.item_template.class = ".$split[0]."";}
else{$type = "AND $worlddb.item_template.class = ".$split[0]." AND $worlddb.item_template.subclass = ".$split[1]."";}
}
else{$type = "";}
$query = mysql_query("	
						SELECT
						$chardb.auctionhouse.houseid,
						$chardb.auctionhouse.itemguid,
						$chardb.auctionhouse.itemowner,
						$chardb.auctionhouse.buyoutprice,
						$chardb.auctionhouse.time,
						$chardb.auctionhouse.buyguid,
						$chardb.auctionhouse.lastbid,
						$chardb.auctionhouse.startbid,
						$chardb.auctionhouse.deposit,
						$chardb.auctionhouse.id,
						$chardb.item_instance.guid,
						$chardb.item_instance.itemEntry AS itemID,
						$chardb.item_instance.count AS itemCount,
						$worlddb.item_template.class,
						$worlddb.item_template.name AS itemOrgName,
						$worlddb.item_template.entry,
						$worlddb.item_template.Quality,
						$worlddb.item_template.RequiredLevel,
						$worlddb.locales_item.entry,
						$worlddb.locales_item.name_loc3 AS itemName,
						$chardb.characters.guid AS charGUID,
						$chardb.characters.`name` AS charName
						FROM
						$chardb.auctionhouse ,
						$chardb.item_instance ,
						$worlddb.item_template ,
						$worlddb.locales_item ,
						$chardb.characters 
						WHERE
						$chardb.auctionhouse.itemguid = $chardb.item_instance.guid AND
						$chardb.item_instance.itemEntry = $worlddb.item_template.entry AND
						$chardb.auctionhouse.itemowner = $chardb.characters.guid AND
						$worlddb.locales_item.entry = $worlddb.item_template.entry ".$type."
						".$ahouse."
						ORDER BY
						$worlddb.item_template.Quality ASC,
						$worlddb.item_template.RequiredLevel DESC
						LIMIT $start, $limit
					");					
$query2 = mysql_query("	
						SELECT
						COUNT($chardb.auctionhouse.id)
						FROM
						$chardb.auctionhouse ,
						$chardb.item_instance ,
						$worlddb.item_template ,
						$worlddb.locales_item ,
						$chardb.characters
						WHERE
						$chardb.auctionhouse.itemguid = $chardb.item_instance.guid AND
						$chardb.item_instance.itemEntry = $worlddb.item_template.entry AND
						$chardb.auctionhouse.itemowner = $chardb.characters.guid AND
						$worlddb.locales_item.entry = $worlddb.item_template.entry ".$type."
						".$ahouse."
					");
			
$fetch2 = mysql_fetch_row($query2);
$itemcount=$fetch2[0];
$end=floor($itemcount/$limit);
$seiten=ceil($itemcount/$limit);
$aktuelleseite=($start/$limit)+1;
if($seiten > 0){$seitenausgabe = "<div style='float:right;'><b>Seite ".$aktuelleseite." von ".$seiten." ($start - ".($start+$limit)." von $itemcount)</b></div>";}
else{$seitenausgabe="<div style='float:right;'><b></b></div>";}
//Header
echo"<table align='center' width='90%' border='1' style='height:740px;'>
<tr>
<th align='center' colspan='2' height='10'><b>Auktionshaus</b><br/>
<form action='".$_SERVER["PHP_SELF"]."' method='post'>
<table align='center' border='0' width='150'><tr>
<td><button name='house' type='submit' value='".($house-1)."' ".$diss1."><img src='img/arrowleft".$dis1.".png' height='32' width='32' alt=''/></button></td>
<td><font size='3'>".$ah."</font></td>
<td><button name='house' type='submit' value='".($house+1)."' ".$diss2."><img src='img/arrowright".$dis2.".png' height='32' width='32' alt=''/></button>
<input type='hidden' name='start' value='".$start."'/>
<input type='hidden' name='typ' value='".$typ."'/>
</td></tr>
</table>
</form>
</th>
</tr>
<tr>
<th align='left' colspan='2' height='10'>
<form action='".$_SERVER["PHP_SELF"]."' method='post'>
<input type='hidden' name='start' value='0'/>
<button name='typ' type='submit' value='99'><b>R&uuml;cksetzen</b></button>
".$seitenausgabe." 
</form>
</th>
</tr>
<tr>
<td height='10' align='center' valign='top' width='10%'>";
//
//Menü
echo"<table align='left' border='0' width='200'><form action='".$_SERVER["PHP_SELF"]."' method='post'>";
echo"<tr><td height='10' align='left' valign='top'><button name='typ' type='submit' value='2'> <b>Waffen</b></button></td></tr>";
if($split[0]==2)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.15'> <b>Dolche</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.13'> <b>Faustwaffen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.0'> <b>Einhand&auml;xte</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.4'> <b>Einhandstreitkolben</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.7'> <b>Einhandschwerter</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.6'> <b>Stangenwaffen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.10'> <b>St&auml;be</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.1'> <b>Zweihand&auml;xte</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.5'> <b>Zweihandstreitkolben</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.8'> <b>Zweihandschwerter</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.2'> <b>B&ouml;gen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.18'> <b>Armbr&uuml;ste</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.3'> <b>Schusswaffen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.16'> <b>Wurfwaffen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.19'> <b>Zauberst&auml;be</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.20'> <b>Angelruten</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='2.14'> <b>Verschiedenes</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='4'> <b>R&uuml;stung</b></button></td></tr>";
if($split[0]==4)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.1'> <b>Stoff</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.2'> <b>Leder</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.3'> <b>Schwere R&uuml;stung</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.4'> <b>Platte</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.6'> <b>Schilde</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.0'> <b>Verschiedenes</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.8'> <b>G&ouml;tzen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.7'> <b>Buchb&auml;nde</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.9'> <b>Totems</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='4.10'> <b>Siegel</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='1'> <b>Beh&auml;lter</b></button></td></tr>";
if($split[0]==1)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.0'> <b>Taschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.3'> <b>Verzauberertaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.4'> <b>Ingenieurstaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.5'> <b>Edelsteintaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.2'> <b>Kr&auml;utertaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.8'> <b>Schreibertaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.7'> <b>Lederertaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.6'> <b>Bergbautaschen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='1.1'> <b>Seelentaschen</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='0'> <b>Verbrauchbar</b></button></td></tr>";
if($split[0]==0 && $split[0]!="")
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.7'> <b>Verb&auml;nde</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.0'> <b>Verbrauchbar</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.2'> <b>Elixiere</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.3'> <b>Fl&auml;schchen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.5'> <b>Essen &amp; Trinken</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.6'> <b>Gegenstandsverzauberung</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.1'> <b>Tr&auml;nke</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.4'> <b>Schriftrollen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='0.8'> <b>Anderes</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='16'> <b>Glyphen</b></button></td></tr>";
if($split[0]==16)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.6'> <b>Todesritter</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.11'> <b>Druide</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.3'> <b>J&auml;ger</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.8'> <b>Magier</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.2'> <b>Paladin</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.5'> <b>Priester</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.4'> <b>Schurke</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.7'> <b>Schamane</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.9'> <b>Hexenmeister</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='16.1'> <b>Krieger</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='7'> <b>Handwerkswaren</b></button></td></tr>";
if($split[0]==7)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.14'> <b>R&uuml;stungsverzauberung</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.5'> <b>Stoff</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.3'> <b>Ger&auml;te</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.10'> <b>Elementar</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.12'> <b>Verzauberkunst</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.2'> <b>Sprengstoff</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.9'> <b>Kr&auml;uter</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.4'> <b>Juwelenschleifen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.6'> <b>Leder</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.13'> <b>Materialien</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.8'> <b>Fleisch</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.7'> <b>Metall &amp; Stein</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.1'> <b>Teile</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.15'> <b>Waffenverzauberungen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='7.11'> <b>Anderes</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='6'> <b>Projektile</b></button></td></tr>";
if($split[0]==6)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='6.2'> <b>Pfeile</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='6.3'> <b>Kugeln</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='11'> <b>K&ouml;cher</b></button></td></tr>";
if($split[0]==11)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='11.3'> <b>Munitionsbeutel</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='11.2'> <b>K&ouml;cher</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='9'> <b>Rezepte</b></button></td></tr>";
if($split[0]==9)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.0'> <b>B&uuml;cher</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.6'> <b>Alchemie</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.4'> <b>Schmiedekunst</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.5'> <b>Kochkunst</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.8'> <b>Verzauberkunst</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.3'> <b>Ingenieurskunst</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.7'> <b>Erste Hilfe</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.9'> <b>Angeln</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.11'> <b>Inschriftenkunde</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.10'> <b>Juwelenschleifen</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.1'> <b>Lederverarbeitung</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='9.2'> <b>Schneiderei</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='3'> <b>Edelsteine</b></button></td></tr>";
if($split[0]==3)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.0'> <b>Rot</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.1'> <b>Blau</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.2'> <b>Gelb</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.3'> <b>Violett</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.4'> <b>Gr&uuml;n</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.5'> <b>Orange</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.6'> <b>Meta</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.7'> <b>Einfach</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='3.8'> <b>Prismatisch</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='15'> <b>Verschiedenes</b></button></td></tr>";
if($split[0]==15)
{
echo"
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.3'> <b>Feiertag</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.0'> <b>Plunder</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.1'> <b>Reagenzien</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.5'> <b>Reittiere</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.2'> <b>Haustiere</b></button></td></tr>
<tr><td height='10' align='center' valign='top'><button name='typ' type='submit' value='15.4'> <b>Anderes</b></button></td></tr>
";
}
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='10'> <b>W&auml;hrung</b></button></td></tr>";
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='12'> <b>Quest</b></button></td></tr>";
echo"<tr><td height='10' align='left'><button name='typ' type='submit' value='13'> <b>Schl&uuml;ssel</b></button></td></tr>";
echo"</form></table>";
//
//Tabelle
echo"</td><td height='10' align='center' width='90%' valign='top' style='height:500px;'>
<table align='center' width='100%' border='1' rules='rows'>
<tr>
<th align='left' width='32'></th>
<th align='left'><b>Seltenheit</b></th>
<th align='left' width='20'><b>Stufe</b></th>
<th align='center' width='250'><b>Restzeit</b></th>
<th align='center' width='100'><b>Verk&auml;ufer</b></th>
<th align='center' width='100'><b>Auktioshaus</b></th>
<th align='left' width='200'><b>Gebot</b></th>
</tr>";
$i=0;

while($fetch = mysql_fetch_array($query)) 
{
if($itemcount>0)
{
$i++;
if(empty($fetch["itemName"])){$itemname=$fetch["itemOrgName"];}else{$itemname=$fetch["itemName"];}
if($fetch["RequiredLevel"]==0 || empty($fetch["RequiredLevel"])){$lvl="-";}else{$lvl=$fetch["RequiredLevel"];}
if($fetch["lastbid"]==0)
{$gebot="<b><span style='color:#aaa;float:left;'>Startgebot</span></b>";$gebot2="<b><span style='color:#aaa;float:right;'>".getmoney($fetch["startbid"])."</span></b>";}
else{$gebot="<b><span style='color:#fff;float:left;'>Aktuelles Gebot</span></b>";$gebot2="<span style='color:#fff;float:right;'>".getmoney($fetch["lastbid"])."</span></b>";}
if($fetch["buyoutprice"]>0){$buyout="<b><span style='color:#FFFF00;float:left;'>Sofortverkaufspreis</span></b>";$buyout2="<span style='float:right;'>".getmoney($fetch["buyoutprice"])."</span></b>";}
else{$buyout="";}
if($fetch["itemCount"]>1){$icount="".$fetch["itemCount"]." x ";$ccount=$fetch["itemCount"];}else{$icount="";$ccount="";}
if($fetch["itemCount"]>1 && $fetch["itemCount"]<10){$ccount="&nbsp;&nbsp;&nbsp;".$fetch["itemCount"]."";}
if($fetch["itemCount"]>=10 && $fetch["itemCount"]<100){$ccount="&nbsp;&nbsp;".$fetch["itemCount"]."";}
if($fetch["itemCount"]>=100 && $fetch["itemCount"]<1000){$ccount="&nbsp;".$fetch["itemCount"]."";}
//$time=rest($fetch["time"]); 
$url = "http://de.wowhead.com/item=".$fetch["itemID"].""."&xml";
$itempage = @file_get_contents($url, false, $context);
preg_match("@<icon[^>]*>(.*)</icon>@", $itempage, $icon);
if(empty($icon[0])){$icon[0]="inv_misc_questionmark";}
$pic="<a href='http://de.wowhead.com/item=".$fetch["itemID"]."'><img style='-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;border:2px solid ".quality($fetch["Quality"]).";float:left;'src='http://wow.zamimg.com/images/wow/icons/large/".strtolower($icon[1]).".jpg' width='32' height='32' alt=''/></a>";
echo"
<tr>
<td height='10' align='left'><div style='position: absolute; margin-top: 22px; margin-left: 18px;'><b>".$ccount."</b></div>".$pic."</td>
<td height='10' align='left'><span style='color:".quality($fetch["Quality"]).";'> <b><a href='http://de.wowhead.com/item=".$fetch["itemID"]."'>".$icount."".umlaute($itemname)."</a></b></span></td>
<td height='10' align='center'><b>".$lvl."</b></td>
<td height='10' align='center'><b>".resttext($fetch["time"])."</b></td>
<td height='10' align='center'><b>".$fetch["charName"]."</b></td>
<td height='10' align='center'><b>".houseid($fetch["houseid"])."</b></td>
<td height='10' align='right'><table align='center' width='100%' border='0'><tr><td>".$gebot."</td><td>".$gebot2."</td></tr><tr><td>".$buyout."</td><td>".$buyout2."</td></tr></table></td>
</tr>";
}
}
if($itemcount==0)
{
echo"<tr><td height='10' align='center' valign='top' colspan='7'><b>Keine Items gefunden =(</b></td></tr>";
}
//
//Navbar Buttons
if($itemcount>0 && $start>0 && $itemcount>$limit)
{$prev="<button name='start' type='submit' value='".($start-$limit)."'><img src='img/arrowleft.png' height='32' width='32' alt=''/></button>";}
else{$prev="<button name='start' type='submit' value='".($start-$limit)."' disabled><img src='img/arrowleft-disabled.png' height='32' width='32' alt=''/></button>";}
if($itemcount>0 && $start <= $itemcount && ($start+$i)!=$itemcount)
{$next="<button name='start' type='submit' value='".($start+$limit)."'><img src='img/arrowright.png' height='32' width='32' alt=''/></button>";}
else{$next="<button name='start' type='submit' value='".($start+$limit)."' disabled><img src='img/arrowright-disabled.png' height='32' width='32' alt=''/></button>";}
if($start>0){$startbutton="<button name='start' type='submit' value='0'><img src='img/start.png' height='32' width='32' alt=''/></button>";}
else{$startbutton="<button name='start' type='submit' value='0' disabled><img src='img/start-disabled.png' height='32' width='32' alt=''/></button>";}
if(($start+$i)<$itemcount){$endbutton="<button name='start' type='submit' value='".($end*$limit)."'><img src='img/end.png' height='32' width='32' alt=''/></button>";}
else{$endbutton="<button name='start' type='submit' value='".($end*$limit)."' disabled><img src='img/end-disabled.png' height='32' width='32' alt=''/></button>";}
//
echo"
</table>
</td></tr><tr><td height='32' align='right' colspan='2'>
<form action='".$_SERVER["PHP_SELF"]."' method='post'>
<input type='hidden' name='typ' value='".$typ."'/>";
//Navbar
echo"".$startbutton."".$prev."".$next."".$endbutton."";
//
echo"</form></td></tr></table><p align='center'>&copy; CraniusProjects 2009-".date("Y",time())."</p>";
mysql_close($connect);
?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Talentviewer</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<!--
/////////////////////////////////////////////////////////////////////////// Urheber: CraniusProjects ///////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////// Idee,Code und Design /////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// von CraniusProjects /////////////////////////////////////////////////////////////////////////////
///////////////Das Kopieren von Quell-Code,sowie das ändern, auch zu Teilen,sowie die weitere Verbreitung durch Dritte ohne ausdrückliche Erlaubnis ist untersagt! /////////////
////////////////////////////////////////////////// Diese PHP-Scripte sind und bleiben geistiges Eigentum von CraniusProjects ///////////////////////////////////////////////////
///////////////////// Das Urheberrecht bezieht sich alleine auf den HTML,PHP und CSS Quellcode.Die Rechte an den Bildern liegen bei Blizzard Entertainment /////////////////////
-->
<?php
echo"
<table align='center' border='0' width='850' style='height:500px;filter:alpha(opacity=100);opacity:1.0;-moz-opacity:1.0;-khtml-opacity:1.0;-opera-opacity:1.0;'>
<tr><th height='50' align='center' colspan='2'><u>Talentviewer f&uuml;r die Version 3.3.12340</u></th></tr>
<tr>
<td align='center'><img src='img/talentview.png' width='450' height='460' alt=''/></td>
<td align='center'><b><u>How-To</u><br/>Aufruf der talents.php mit &Uuml;bergabe des Parameters:<br/></br>=> talents.php?name=xxx <=</br></br>xxx = Character-Name</b>
</br></br>Beispiel:";
include("conf.php");
$connect = mysql_connect($host,$user,$pass) or die ("Can't connect to MYSQL-Server.");
mysql_select_db($chardb) or die ("Can't choose database.");	
$sql = @mysql_query("SELECT name from characters limit 1");
$fetch=@mysql_fetch_assoc($sql);
mysql_close();
echo"&nbsp;talents.php?name=".$fetch["name"]."</td>
</tr>
</table>
<p align='center'>Idee,Script,Design und Umsetzung von <a href='http://craniusprojects.no-ip.org'>CraniusProjects</a>.</br>&copy; 2010 - ".date("Y",time())."</p>";
?>
</body>
</html>
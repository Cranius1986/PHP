<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Talentviewer 3.3.5a (3.3.5.12340)</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<?php include("version.php"); ?>
<!--
/////////////////////////////////////////////////////////////////////////// Urheber: CraniusProjects ///////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////// Idee,Code und Design /////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// von CraniusProjects /////////////////////////////////////////////////////////////////////////////
////////////// Das Kopieren von Quell-Code,sowie das ändern, auch zu Teilen,sowie die weitere Verbreitung durch Dritte ohne ausdrückliche Erlaubnis ist untersagt! /////////////
////////////////////////////////////////////////// Diese PHP-Scripte sind und bleiben geistiges Eigentum von CraniusProjects ///////////////////////////////////////////////////
///////////////////// Das Urheberrecht bezieht sich alleine auf den HTML,PHP und CSS Quellcode.Die Rechte an den Bildern liegen bei Blizzard Entertainment /////////////////////
-->
<?php
//ERROR-REPORTING SETTINGS
error_reporting(0);
//INCLUDES
include("conf.php");
////////////////////////////////MYSQL-CONNECT////////////////////////////////
$connect = mysql_connect($host,$user,$pass) or die ("Can't connect to MYSQL-Server.");
@mysqli_set_charset ("utf8");
//INPUT VARIABLES
$name_var=@mysql_real_escape_string($_GET["name"]);
$spec_var=@mysql_real_escape_string($_POST["spec"]);
////////////////////////////////SECURITY-CHECK////////////////////////////////
$forbidden = array("$", "%", "#", "<", ">", "|", "scriptparent.", "\'", "();", "<script>", "</script>", ";", "%3C", "%3E");
if(stripos($_SERVER["QUERY_STRING"],$forbidden))
	{
		//SEARCHING VOR FORBIDDEN SIGNS OR STRINGS AND REMOVING THEM
		$name=str_replace($forbidden, "", $name_var);
		$spec=(int)str_replace($forbidden, "", $spec_var);
	}
else
	{
		//IF INPUTVARIABLES ARE OKAY
		$name=$name_var;
		$spec=(int)$spec_var;
	}	
if (preg_match('/(mysql|insert|update|delete|select|flush|root|;)/',$_SERVER["QUERY_STRING"]) || !is_int($spec) || $spec < 0 || $spec > 1)
	{
		//ERROR MESSAGE IF QUERY STRING MATCHES ONE FROM MYSQL-COMMANDS OR SEMICOLON, 
		//AND IF $SPEC IS NOT NUMERIC,LOWER THAN 0 OR GREATER THAN 1
		die ("<p align='center'>Ein Fehler ist aufgetreten!</p><p align='center'>&copy; by CraniusProjects 2010-".date("Y",time())."</p>");
	}	
////////////////////////////////QUERY////////////////////////////////
//CHECK FOR RESULT WITH OLD QUERY
mysql_select_db($chardb) or die ("Can't choose database.");	
$sql = @mysql_query("SELECT guid,name,level,class,activespec,speccount from characters where name = '".$name."'");
$sql_glyph=@mysql_query("SELECT glyph1,glyph2,glyph3,glyph4,glyph5,glyph6 from character_glyphs where guid=".$fetch["guid"]." and spec=".$spec."");
$fetch = @mysql_fetch_assoc($sql);
if($fetch==false)//CHECK FOR EMPTY QUERY RESULT
	{	
		////////////////////////////////FIX FOR NEW CORES////////////////////////////////
		//IF OLD QUERY RESULT IS EMPTY
		$sql = @mysql_query("SELECT guid,name,level,class,talentGroupsCount,activeTalentGroup from characters where name = '".$name."'");
		$fetch = @mysql_fetch_assoc($sql);
		//CHECK FOR RESULT WITH NEW QUERY
		if($fetch==true)
			{	
				//IF TRUE
				$new=1;
				$activespec=$fetch["activeTalentGroup"];
				$scount=$fetch["talentGroupsCount"];
				$sql_glyph=@mysql_query("SELECT glyph1,glyph2,glyph3,glyph4,glyph5,glyph6 from character_glyphs where guid=".$fetch["guid"]." and talentGroup=".$spec."");
			}
		else	
			{
				//IF FALSE
				$new=2;
			}				
	}
else
	{	
		//IF OLD QUERY RESULT IS OKAY
		$new=0;
		$activespec=$fetch["activespec"];
		$scount=$fetch["speccount"];
	}
//////////////////////////////////////Glyphs//////////////////////////////////////	
while($glyphs=mysql_fetch_array($sql_glyph))
{
mysql_select_db($customdb);
	for($j=1;$j<=6;$j++)
		{
		$glyphnumber="glyph".$j."";	
		$glyph_data[$j]=mysql_query("Select glyphID,itemID,GlyphName from glyphs_info where glyphID=".$glyphs[$glyphnumber]."");
		$glyph[$j]=mysql_fetch_assoc($glyph_data[$j]);
		$Glyphe1=$glyph[1];$Glyphe2=$glyph[2];$Glyphe3=$glyph[3];$Glyphe4=$glyph[4];$Glyphe5=$glyph[5];$Glyphe6=$glyph[6];
		}
}
mysql_select_db($chardb);	
//////////////////////////////////////////////////////////////////////////////////		
if($new==0)
	{	
		//OLD QUERY -> GET TALENTS FROM PLAYER
		if($spec=="")
			{
				//GET TALENTS FROM PLAYER ACTIVE SPEC
				$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and spec = ".$activespec."");
			}
			else
			{
				//GET TALENTS FROM PLAYER CHOOSEN SPEC
				$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and spec = ".$spec."");
			}	
	}
elseif($new==1)
	{
		//NEW QUERY -> GET TALENTS FROM PLAYER
		if($spec=="")
		{
			//GET TALENTS FROM PLAYER ACTIVE SPEC
			$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and talentGroup = ".$activespec."");
		}
	else
		{
			//GET TALENTS FROM PLAYER CHOOSEN SPEC
			$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and talentGroup = ".$spec."");
		}	
	}	
else 
		{
		//IF OLD QUERY AND NEW QUERY RESULT IS EMPTY
		$new=2;
		}
		
if($new==2)
	{
		//IF OLD QUERY AND NEW QUERY RESULT IS EMPTY ERROR MESSAGE
		echo"<p align='center'>Dieses Script ist mit dieser Datenbank inkompatibel.
		Wenden sie sich an <a href='mailto:wombat1111@hotmail.de'><u>Cranius</u></a> oder besuchen sie die <a href='http://craniusprojects.ddns.net'><u>Homepage.</u></a></p>
		<p align='center'>&copy; by CraniusProjects 2010-".date("Y",time())."</p>";exit;
	}
/////////////////////////////////////DUAL-SPEC/////////////////////////////////////
			if($spec==0)
				{	//TREE 1 ACTIVE
					$c1="#AAAAAA";$d1="disabled";$a1="aktiv";$cur1="cursor";
				}
			else
				{	//TREE 1 NOT ACTIVE
					$c1="#FFD700";$d1="";$a1="";$cur1="cursor1";
				}
			if($spec==1)
				{
					//TREE 2 ACTIVE
					$c2="#AAAAAA";$d2="disabled";$a2="aktiv";$cur2="cursor";
				}
			else
				{
					//TREE 2 NOT ACTIVE
					$c2="#FFD700";$d2="";$a2="";$cur2="cursor1";
				}
			if($spec=="" && $activespec==0)
				{
					//TREE 1 BUTTON ACTIVE AND DISABLED
					$c1="#AAAAAA";$c2="#FFD700";$d1="disabled";$d2="";$a1="aktiv";$a2="";$cur1="cursor";
				}
			if($spec=="" && $activespec==1)
				{
					//TREE 2 BUTTON ACTIVE AND DISABLED
					$c1="#FFD700";$c2="#AAAAAA";$d1="";$d2="disabled";$a1="";$a2="aktiv";$cur2="cursor1";
				}
			if($scount==2)
				{
				//BUTTON GENERATING IF DUAL SPEC IS TRUE	
				echo"<form action='".$_SERVER["PHP_SELF"]."?name=".$name."' method='post'><p align='center'>
				<button style='background-color:inherit;border:none;outline:0 none;cursor:url(img/".$cur1.".png), move;' name='spec' type='submit' value='0' ".$d1."/>
				<span style='color:".$c1.";'>Talentbaum 1 ".$a1."</span></button>
				<button style='background-color:inherit;border:none;outline:0 none;cursor:url(img/".$cur2.".png), move;' name='spec' type='submit' value='1' ".$d2."/>
				<span style='color:".$c2.";'>Talentbaum 2 ".$a2."</span></button></form>";
				}	
/////////////////////////////////////INCLUDE CLASS SCRIPT/////////////////////////////////////
if($fetch["class"] && $fetch["name"]!="")
	{
		//INCLUDE TOOLTIP-SCRIPT AND CLASS-SCRIPT IF CLASS RESULT IS NUMERIC AND NAME IS NOT EMPTY	
			switch ($fetch["class"]):
				case 1:	include("tooltip/tooltip_warrior.php");include("class_warrior.php");break;				//WARRIOR
				case 2:	include("tooltip/tooltip_paladin.php");include("class_paladin.php");break;				//PALADIN
				case 3:	include("tooltip/tooltip_hunter.php");include("class_hunter.php");break;				//HUNTER
				case 4:	include("tooltip/tooltip_rogue.php");include("class_rogue.php");break;					//ROGUE
				case 5:	include("tooltip/tooltip_priest.php");include("class_priest.php");break;				//PRIEST
				case 6:	include("tooltip/tooltip_deathknight.php");include("class_deathknight.php");break;		//DEATHKNIGHT
				case 7:	include("tooltip/tooltip_shaman.php");include ("class_shaman.php");break;				//SHAMAN
				case 8:	include("tooltip/tooltip_mage.php");include("class_mage.php");break;					//MAGE
				case 9:	include("tooltip/tooltip_warlock.php");include("class_warlock.php");break;				//WARLOCK
				case 11:include("tooltip/tooltip_druid.php");include("class_druid.php");break;					//DRUID		
			endswitch;	
		//INCLUDE TABLE	
		include("table.php");
		echo"<p align='center'><font size='1'>&copy; by CraniusProjects 2010-".date("Y",time())."</font></p>
		<p align='center'><font size='1'>Version ".$version." </font></p>";	
	}
else
	{
		//ERROR MESSAGE IF CLASS RESULT AND NAME IS EMPTY OR IF SCRIPT COULD NOT BE INCLUDED
		die ("<p align='center'><font size='1'>Ein Fehler ist aufgetreten!</font></p><p align='center'><font size='1'>&copy; by CraniusProjects 2010-".date("Y",time())."</font></p>
		<p align='center'><font size='1'>Version ".$version." </font></p>");
	}
/////////////////////////////////////CLOSE MYSQL CONNECTION/////////////////////////////////////
mysql_close($connect);
?>
</body>
</html>
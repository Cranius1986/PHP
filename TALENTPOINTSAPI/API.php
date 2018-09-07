<?php
/*
/////////////////////////////////////////////////////////////////////////// Urheber: CraniusProjects ///////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////// Idee,Code und Design /////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// von CraniusProjects /////////////////////////////////////////////////////////////////////////////
////////////// Das Kopieren von Quell-Code,sowie das ändern, auch zu Teilen,sowie die weitere Verbreitung durch Dritte ohne ausdrückliche Erlaubnis ist untersagt! /////////////
////////////////////////////////////////////////// Diese PHP-Scripte sind und bleiben geistiges Eigentum von CraniusProjects ///////////////////////////////////////////////////
///////////////////// Das Urheberrecht bezieht sich alleine auf den HTML,PHP und CSS Quellcode.Die Rechte an den Bildern liegen bei Blizzard Entertainment /////////////////////
*/
//ERROR-REPORTING SETTINGS
error_reporting(0);
function talentpoints($CHAR)
{
//INCLUDES
include("conf.php");	
////////////////////////////////MYSQL-CONNECT////////////////////////////////
$connect = mysql_connect($host,$user,$pass) or die ("Can't connect to MYSQL-Server.");
@mysql_set_charset ("utf8");
//INPUT VARIABLES
$name_var=@mysql_real_escape_string($CHAR);
////////////////////////////////SECURITY-CHECK////////////////////////////////
$forbidden = array("$", "%", "#", "<", ">", "|", "scriptparent.", "\'", "();", "<script>", "</script>", ";", "%3C", "%3E");
if(stripos($_SERVER["QUERY_STRING"],$forbidden_characters))
	{
		//SEARCHING VOR FORBIDDEN SIGNS OR STRINGS AND REMOVING THEM
		$name=str_replace($forbidden, "", $name_var);
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
//////////////////////////////////////////////////////////////////////////////////		
if($new==0)
	{	
		//OLD QUERY -> GET TALENTS FROM PLAYER
		//GET TALENTS FROM PLAYER ACTIVE SPEC
		$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and spec = ".$activespec."");			
	}
elseif($new==1)
	{
		//NEW QUERY -> GET TALENTS FROM PLAYER
		//GET TALENTS FROM PLAYER ACTIVE SPEC
		$sql2 = @mysql_query("Select spell from character_talent where guid=".$fetch["guid"]." and talentGroup = ".$activespec."");		
	}	
else 
		{
		//IF OLD QUERY AND NEW QUERY RESULT IS EMPTY
		$new=2;
		}		

/////////////////////////////////////INCLUDE CLASS SCRIPT/////////////////////////////////////
if($fetch["class"] && $fetch["name"]!="")
	{
		//INCLUDE TOOLTIP-SCRIPT AND CLASS-SCRIPT IF CLASS RESULT IS NUMERIC AND NAME IS NOT EMPTY	
			switch ($fetch["class"]):
				case 1:	include("lib/class_warrior.php");break;				//WARRIOR
				case 2:	include("lib/class_paladin.php");break;				//PALADIN
				case 3:	include("lib/class_hunter.php");break;				//HUNTER
				case 4:	include("lib/class_rogue.php");break;				//ROGUE
				case 5:	include("lib/class_priest.php");break;				//PRIEST
				case 6:	include("lib/class_deathknight.php");break;			//DEATHKNIGHT
				case 7:	include ("lib/class_shaman.php");break;				//SHAMAN
				case 8:	include("lib/class_mage.php");break;				//MAGE
				case 9:	include("lib/class_warlock.php");break;				//WARLOCK
				case 11:include("lib/class_druid.php");break;				//DRUID		
			endswitch;	
	}
/////////////////////////////////////CLOSE MYSQL CONNECTION/////////////////////////////////////
mysql_close($connect);
if (isset($CHAR) && !empty($fetch["class"]) && $new!=2)
	{
		return "<img style='vertical-align:middle;' src='img/icon-class/".$path."-1.gif' alt=''/>".$sum1."
		<img style='vertical-align:middle;' src='img/icon-class/".$path."-2.gif' alt=''/>".$sum2."
		<img style='vertical-align:middle;' src='img/icon-class/".$path."-3.gif' alt=''/>".$sum3."";
	}
elseif (empty($CHAR) or $new==2 or empty($fetch["class"]))	
	{
		return"Error!";
	}
}
?>
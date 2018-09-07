<?php
function umlaute($entry)
{
	$entry = str_replace("ä","&auml;",$entry);
	$entry = str_replace("Ä","&Auml;",$entry);
	$entry = str_replace("ü","&uuml;",$entry);
	$entry = str_replace("Ü","&Uuml;",$entry);
	$entry = str_replace("ö","&ouml;",$entry);
	$entry = str_replace("Ö","&Ouml;",$entry);
	$entry = str_replace("ß","&szlig;",$entry);					
	return $entry; 
}
function getmoney($cash) 
{
	$gold = (int) ($cash/10000);
	$cash = $cash - ($gold*10000);
	$silver = (int) ($cash/100);
	$cash = $cash - ($silver*100);
	$copper = (int) ($cash/1);	
	$g = "".$gold."<img style='vertical-align: middle;' src='img/g.png' alt=''/>";
	$s = "".$silver."<img style='vertical-align: middle;' src='img/s.png' alt=''/>";
	$c = "".$copper."<img style='vertical-align: middle;' src='img/k.png' alt=''/>";	
	if($copper>0){$output=$c;}
	if($silver>0){$output="".$s."&nbsp;".$c."";}
	if($gold>0){$output="".$g."&nbsp;".$s."&nbsp;".$c."";}
	if($gold==0 && $silver==0 && $copper==0){$output="";}
	return $output; 
}
function rest($rest)
{
  $total=$rest-time();
  $hour = (int)($total/3600);
  $total = $total - ($hour*3600);
  $minute = (int)($total/60);  
  if($hour == 1){$h="";}else{$h="n";}
  if($minute == 1){$m="";}else{$m="n";} 	
    if($minute>0){$out = $minute. " Minute".$m."";}
	if($hour>0&& $minute>0){$out = $hour. " Stunde".$h." " .$minute. " Minute".$m."";}
  if($total>0){return "(".$out.")";}else {return "";}
}
function resttext($resttime)
{
  $totaltime=$resttime-time();
  $hour = (int)($totaltime/3600);
  $totaltime = $totaltime - ($hour*3600);
  $minute = (int)($totaltime/60);
  $outt="";
  //kurz <30m
  if($minute<=30 && $hour<1){$outt="Kurz";}
  //mittel 30m -2h
  if($hour<=2){$outt="Mittel";}
  //lang 2h-12h
  if($hour>2 && $hour<=12){$outt="Lang";}
  //sehr lang >48h
  if($hour>12){$outt="Sehr lang";}
  if($totaltime>=0){return $outt;}else{return "Auktion abgelaufen";}
}
function quality($quality) 
{
	switch ($quality) :
		case 0: return "#BEBEBE";break;
		case 1: return "#FFFFFF";break;
		case 2: return "#00FF00";break;
		case 3: return "#3300FF";break;
		case 4: return "#9932CC";break;
		case 5: return "#FF7F24";break;
		case 6: return "#FFD39B";break;
		case 7: return "#FFD700";break;
	endswitch;
}
function houseid($house) 
{
	switch ($house) :
		//Allianz
		case 1: return "<span style='color:#6495ED;'>Allianz</span>";break;
		case 2: return "<span style='color:#6495ED;'>Allianz</span>";break;
		case 3: return "<span style='color:#6495ED;'>Allianz</span>";break;
		//Horde
		case 4: return "<span style='color:#B22222;'>Horde</span>";break;
		case 5: return "<span style='color:#B22222;'>Horde</span>";break;
		case 6: return "<span style='color:#B22222;'>Horde</span>";break;
		//Neutral
		case 7: return "<span style='color:#EEC900;'>Neutral</span>";break;
	endswitch;
}
?>

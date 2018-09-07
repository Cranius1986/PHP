<?php
/*
/////////////////////////////////////////////////////////////////////////// Urheber: CraniusProjects ///////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////// Idee,Code und Design /////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// von CraniusProjects /////////////////////////////////////////////////////////////////////////////
///////////////Das Kopieren von Quell-Code,sowie das ändern, auch zu Teilen,sowie die weitere Verbreitung durch Dritte ohne ausdrückliche Erlaubnis ist untersagt! /////////////
////////////////////////////////////////////////// Diese PHP-Scripte sind und bleiben geistiges Eigentum von CraniusProjects ///////////////////////////////////////////////////
///////////////////// Das Urheberrecht bezieht sich alleine auf den HTML,PHP und CSS Quellcode.Die Rechte an den Bildern liegen bei Blizzard Entertainment /////////////////////
*/
//DEATHKNIGHT
$path="deathknight";
$points=array();
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{
	//Tree 1
		if($char_talents["spell"]==48979 || $char_talents["spell"]==49483)
			{
				switch ($char_talents["spell"]):
				case 48979:$points[1][1]=1;break;
				case 49483:$points[1][1]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==48997 || $char_talents["spell"]==49490 || $char_talents["spell"]==49491)
			{
				switch ($char_talents["spell"]):
				case 48997:$points[1][2]=1;break;
				case 49490:$points[1][2]=2;break;
				case 49491:$points[1][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49182 || $char_talents["spell"]==49500 || $char_talents["spell"]==49501 || $char_talents["spell"]==55225 || $char_talents["spell"]==55226)
			{
				switch ($char_talents["spell"]):
				case 49182:$points[1][3]=1;break;
				case 49500:$points[1][3]=2;break;
				case 49501:$points[1][3]=3;break;
				case 55225:$points[1][3]=4;break;
				case 55226:$points[1][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==48978 || $char_talents["spell"]==49390 || $char_talents["spell"]==49391 || $char_talents["spell"]==49392 || $char_talents["spell"]==49393)
			{
				switch ($char_talents["spell"]):
				case 48978:$points[1][5]=1;break;
				case 49390:$points[1][5]=2;break;
				case 49391:$points[1][5]=3;break;
				case 49392:$points[1][5]=4;break;
				case 49393:$points[1][5]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49004 || $char_talents["spell"]==49508 || $char_talents["spell"]==49509)
			{
				switch ($char_talents["spell"]):
				case 49004:$points[1][6]=1;break;
				case 49508:$points[1][6]=2;break;
				case 49509:$points[1][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55107 || $char_talents["spell"]==55108)
			{
				switch ($char_talents["spell"]):
				case 55107:$points[1][7]=1;break;
				case 55108:$points[1][7]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==48982)
			{
				$points[1][9]=1;				
			}

		if($char_talents["spell"]==48987 || $char_talents["spell"]==49477 || $char_talents["spell"]==49478 || $char_talents["spell"]==49479 || $char_talents["spell"]==49480)
			{
				switch ($char_talents["spell"]):
				case 48987:$points[1][10]=1;break;
				case 49477:$points[1][10]=2;break;
				case 49478:$points[1][10]=3;break;
				case 49479:$points[1][10]=4;break;
				case 49480:$points[1][10]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49467 || $char_talents["spell"]==50033 || $char_talents["spell"]==50034)
			{
				switch ($char_talents["spell"]):
				case 49467:$points[1][11]=1;break;
				case 50033:$points[1][11]=2;break;
				case 50034:$points[1][11]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==48985 || $char_talents["spell"]==49488 || $char_talents["spell"]==49489)
			{
				switch ($char_talents["spell"]):
				case 48985:$points[1][13]=1;break;
				case 49488:$points[1][13]=2;break;
				case 49489:$points[1][13]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49145 || $char_talents["spell"]==49495 || $char_talents["spell"]==49497)
			{
				switch ($char_talents["spell"]):
				case 49145:$points[1][15]=1;break;
				case 49495:$points[1][15]=2;break;
				case 49497:$points[1][15]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49015 || $char_talents["spell"]==50154 || $char_talents["spell"]==55136)
			{
				switch ($char_talents["spell"]):
				case 49015:$points[1][16]=1;break;
				case 50154:$points[1][16]=2;break;
				case 55136:$points[1][16]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==48977 || $char_talents["spell"]==49394 || $char_talents["spell"]==49395)
			{
				switch ($char_talents["spell"]):
				case 48977:$points[1][17]=1;break;
				case 49394:$points[1][17]=2;break;
				case 49395:$points[1][17]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49006 || $char_talents["spell"]==49526 || $char_talents["spell"]==50029)
			{
				switch ($char_talents["spell"]):
				case 49006:$points[1][19]=1;break;
				case 49526:$points[1][19]=2;break;
				case 50029:$points[1][19]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49005)
			{
				$points[1][20]=1;				
			}

		if($char_talents["spell"]==48988 || $char_talents["spell"]==49503 || $char_talents["spell"]==49504)
			{
				switch ($char_talents["spell"]):
				case 48988:$points[1][22]=1;break;
				case 49503:$points[1][22]=2;break;
				case 49504:$points[1][22]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==53137 || $char_talents["spell"]==53138)
			{
				switch ($char_talents["spell"]):
				case 53137:$points[1][23]=1;break;
				case 53138:$points[1][23]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49027 || $char_talents["spell"]==49542 || $char_talents["spell"]==49543)
			{
				switch ($char_talents["spell"]):
				case 49027:$points[1][25]=1;break;
				case 49542:$points[1][25]=2;break;
				case 49543:$points[1][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49016)
			{
				$points[1][26]=1;				
			}

		if($char_talents["spell"]==50365 || $char_talents["spell"]==50371)
			{
				switch ($char_talents["spell"]):
				case 50365:$points[1][27]=1;break;
				case 50371:$points[1][27]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==62905 || $char_talents["spell"]==62908)
			{
				switch ($char_talents["spell"]):
				case 62905:$points[1][29]=1;break;
				case 62908:$points[1][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49018 || $char_talents["spell"]==49529 || $char_talents["spell"]==49530)
			{
				switch ($char_talents["spell"]):
				case 49018:$points[1][30]=1;break;
				case 49529:$points[1][30]=2;break;
				case 49530:$points[1][30]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55233)
			{
				$points[1][31]=1;				
			}

		if($char_talents["spell"]==49189 || $char_talents["spell"]==50149 || $char_talents["spell"]==50150)
			{
				switch ($char_talents["spell"]):
				case 49189:$points[1][33]=1;break;
				case 50149:$points[1][33]=2;break;
				case 50150:$points[1][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55050)
			{
				$points[1][34]=1;				
			}

		if($char_talents["spell"]==49023 || $char_talents["spell"]==49533 || $char_talents["spell"]==49534)
			{
				switch ($char_talents["spell"]):
				case 49023:$points[1][35]=1;break;
				case 49533:$points[1][35]=2;break;
				case 49534:$points[1][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==61154 || $char_talents["spell"]==61155 || $char_talents["spell"]==61156 || $char_talents["spell"]==61157 || $char_talents["spell"]==61158)
			{
				switch ($char_talents["spell"]):
				case 61154:$points[1][38]=1;break;
				case 61155:$points[1][38]=2;break;
				case 61156:$points[1][38]=3;break;
				case 61157:$points[1][38]=4;break;
				case 61158:$points[1][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49028)
			{
				$points[1][42]=1;				
			}

	//Tree 2
		if($char_talents["spell"]==49175 || $char_talents["spell"]==50031 || $char_talents["spell"]==51456)
			{
				switch ($char_talents["spell"]):
				case 49175:$points[2][1]=1;break;
				case 50031:$points[2][1]=2;break;
				case 51456:$points[2][1]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49455 || $char_talents["spell"]==50147)
			{
				switch ($char_talents["spell"]):
				case 49455:$points[2][2]=1;break;
				case 50147:$points[2][2]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49042 || $char_talents["spell"]==49786 || $char_talents["spell"]==49787 || $char_talents["spell"]==49788 || $char_talents["spell"]==49789)
			{
				switch ($char_talents["spell"]):
				case 49042:$points[2][3]=1;break;
				case 49786:$points[2][3]=2;break;
				case 49787:$points[2][3]=3;break;
				case 49788:$points[2][3]=4;break;
				case 49789:$points[2][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==55061 || $char_talents["spell"]==55062)
			{
				switch ($char_talents["spell"]):
				case 55061:$points[2][6]=1;break;
				case 55062:$points[2][6]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49140 || $char_talents["spell"]==49661 || $char_talents["spell"]==49662 || $char_talents["spell"]==49663 || $char_talents["spell"]==49664)
			{
				switch ($char_talents["spell"]):
				case 49140:$points[2][7]=1;break;
				case 49661:$points[2][7]=2;break;
				case 49662:$points[2][7]=3;break;
				case 49663:$points[2][7]=4;break;
				case 49664:$points[2][7]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49226 || $char_talents["spell"]==50137 || $char_talents["spell"]==50138)
			{
				switch ($char_talents["spell"]):
				case 49226:$points[2][8]=1;break;
				case 50137:$points[2][8]=2;break;
				case 50138:$points[2][8]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==50880 || $char_talents["spell"]==50884 || $char_talents["spell"]==50885 || $char_talents["spell"]==50886 || $char_talents["spell"]==50887)
			{
				switch ($char_talents["spell"]):
				case 50880:$points[2][9]=1;break;
				case 50884:$points[2][9]=2;break;
				case 50885:$points[2][9]=3;break;
				case 50886:$points[2][9]=4;break;
				case 50887:$points[2][9]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49039)
			{
				$points[2][10]=1;				
			}

		if($char_talents["spell"]==51468 || $char_talents["spell"]==51472 || $char_talents["spell"]==51473)
			{
				switch ($char_talents["spell"]):
				case 51468:$points[2][11]=1;break;
				case 51472:$points[2][11]=2;break;
				case 51473:$points[2][11]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51123 || $char_talents["spell"]==51127 || $char_talents["spell"]==51128 || $char_talents["spell"]==51129 || $char_talents["spell"]==51130)
			{
				switch ($char_talents["spell"]):
				case 51123:$points[2][14]=1;break;
				case 51127:$points[2][14]=2;break;
				case 51128:$points[2][14]=3;break;
				case 51129:$points[2][14]=4;break;
				case 51130:$points[2][14]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49149 || $char_talents["spell"]==50115)
			{
				switch ($char_talents["spell"]):
				case 49149:$points[2][15]=1;break;
				case 50115:$points[2][15]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49137 || $char_talents["spell"]==49657)
			{
				switch ($char_talents["spell"]):
				case 49137:$points[2][16]=1;break;
				case 49657:$points[2][16]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49186 || $char_talents["spell"]==51108 || $char_talents["spell"]==51109)
			{
				switch ($char_talents["spell"]):
				case 49186:$points[2][18]=1;break;
				case 51108:$points[2][18]=2;break;
				case 51109:$points[2][18]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49471 || $char_talents["spell"]==49790 || $char_talents["spell"]==49791)
			{
				switch ($char_talents["spell"]):
				case 49471:$points[2][19]=1;break;
				case 49790:$points[2][19]=2;break;
				case 49791:$points[2][19]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49796)
			{
				$points[2][20]=1;				
			}

		if($char_talents["spell"]==55610)
			{
				$points[2][21]=1;				
			}

		if($char_talents["spell"]==49024 || $char_talents["spell"]==49538)
			{
				switch ($char_talents["spell"]):
				case 49024:$points[2][22]=1;break;
				case 49538:$points[2][22]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49188 || $char_talents["spell"]==56822 || $char_talents["spell"]==59057)
			{
				switch ($char_talents["spell"]):
				case 49188:$points[2][23]=1;break;
				case 56822:$points[2][23]=2;break;
				case 59057:$points[2][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==50040 || $char_talents["spell"]==50041 || $char_talents["spell"]==50043)
			{
				switch ($char_talents["spell"]):
				case 50040:$points[2][25]=1;break;
				case 50041:$points[2][25]=2;break;
				case 50043:$points[2][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49203)
			{
				$points[2][26]=1;				
			}

		if($char_talents["spell"]==50384 || $char_talents["spell"]==50385)
			{
				switch ($char_talents["spell"]):
				case 50384:$points[2][27]=1;break;
				case 50385:$points[2][27]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==65661 || $char_talents["spell"]==66191 || $char_talents["spell"]==66192)
			{
				switch ($char_talents["spell"]):
				case 65661:$points[2][29]=1;break;
				case 66191:$points[2][29]=2;break;
				case 66192:$points[2][29]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==54639 || $char_talents["spell"]==54638 || $char_talents["spell"]==54637)
			{
				switch ($char_talents["spell"]):
				case 54639:$points[2][30]=1;break;
				case 54638:$points[2][30]=2;break;
				case 54637:$points[2][30]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51271)
			{
				$points[2][31]=1;
			}

		if($char_talents["spell"]==49200 || $char_talents["spell"]==50151 || $char_talents["spell"]==50152)
			{
				switch ($char_talents["spell"]):
				case 49200:$points[2][33]=1;break;
				case 50151:$points[2][33]=2;break;
				case 50152:$points[2][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49143)
			{
				$points[2][34]=1;
			}

		if($char_talents["spell"]==50187 || $char_talents["spell"]==50190 || $char_talents["spell"]==50191)
			{
				switch ($char_talents["spell"]):
				case 50187:$points[2][35]=1;break;
				case 50190:$points[2][35]=2;break;
				case 50191:$points[2][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49202 || $char_talents["spell"]==50127 || $char_talents["spell"]==50128 || $char_talents["spell"]==50129 || $char_talents["spell"]==50130)
			{
				switch ($char_talents["spell"]):
				case 49202:$points[2][38]=1;break;
				case 50127:$points[2][38]=2;break;
				case 50128:$points[2][38]=3;break;
				case 50129:$points[2][38]=4;break;
				case 50130:$points[2][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49184)
			{
				$points[2][42]=1;
			}

	//Tree 3
		if($char_talents["spell"]==51745 || $char_talents["spell"]==51746)
			{
				switch ($char_talents["spell"]):
				case 51745:$points[3][1]=1;break;
				case 51746:$points[3][1]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==48962 || $char_talents["spell"]==49567 || $char_talents["spell"]==49568)
			{
				switch ($char_talents["spell"]):
				case 48962:$points[3][2]=1;break;
				case 49567:$points[3][2]=2;break;
				case 49568:$points[3][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55129 || $char_talents["spell"]==55130 || $char_talents["spell"]==55131 || $char_talents["spell"]==55132 || $char_talents["spell"]==55133)
			{
				switch ($char_talents["spell"]):
				case 55129:$points[3][3]=1;break;
				case 55130:$points[3][3]=2;break;
				case 55131:$points[3][3]=3;break;
				case 55132:$points[3][3]=4;break;
				case 55133:$points[3][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49036 || $char_talents["spell"]==49562)
			{
				switch ($char_talents["spell"]):
				case 49036:$points[3][5]=1;break;
				case 49562:$points[3][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==48963 || $char_talents["spell"]==49564 || $char_talents["spell"]==49565)
			{
				switch ($char_talents["spell"]):
				case 48963:$points[3][6]=1;break;
				case 49564:$points[3][6]=2;break;
				case 49565:$points[3][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49588 || $char_talents["spell"]==49589)
			{
				switch ($char_talents["spell"]):
				case 49588:$points[3][7]=1;break;
				case 49589:$points[3][7]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==48965 || $char_talents["spell"]==49571 || $char_talents["spell"]==49572)
			{
				switch ($char_talents["spell"]):
				case 48965:$points[3][8]=1;break;
				case 49571:$points[3][8]=2;break;
				case 49572:$points[3][8]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49013 || $char_talents["spell"]==55236 || $char_talents["spell"]==55237)
			{
				switch ($char_talents["spell"]):
				case 49013:$points[3][9]=1;break;
				case 55236:$points[3][9]=2;break;
				case 55237:$points[3][9]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51459 || $char_talents["spell"]==51462 || $char_talents["spell"]==51463 || $char_talents["spell"]==51464 || $char_talents["spell"]==51465)
			{
				switch ($char_talents["spell"]):
				case 51459:$points[3][10]=1;break;
				case 51462:$points[3][10]=2;break;
				case 51463:$points[3][10]=3;break;
				case 51464:$points[3][10]=4;break;
				case 51465:$points[3][10]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49158)
			{
				$points[3][11]=1;
			}

		if($char_talents["spell"]==49146 || $char_talents["spell"]==51267)
			{
				switch ($char_talents["spell"]):
				case 49146:$points[3][14]=1;break;
				case 51267:$points[3][14]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49219 || $char_talents["spell"]==49627 || $char_talents["spell"]==49628)
			{
				switch ($char_talents["spell"]):
				case 49219:$points[3][15]=1;break;
				case 49627:$points[3][15]=2;break;
				case 49628:$points[3][15]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55620 || $char_talents["spell"]==55623)
			{
				switch ($char_talents["spell"]):
				case 55620:$points[3][16]=1;break;
				case 55623:$points[3][16]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49194)
			{
				$points[3][17]=1;
			}

		if($char_talents["spell"]==49220 || $char_talents["spell"]==49633 || $char_talents["spell"]==49635 || $char_talents["spell"]==49636 || $char_talents["spell"]==49638)
			{
				switch ($char_talents["spell"]):
				case 49220:$points[3][18]=1;break;
				case 49633:$points[3][18]=2;break;
				case 49635:$points[3][18]=3;break;
				case 49636:$points[3][18]=4;break;
				case 49638:$points[3][18]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49223 || $char_talents["spell"]==49599)
			{
				switch ($char_talents["spell"]):
				case 49223:$points[3][19]=1;break;
				case 49599:$points[3][19]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==55666 || $char_talents["spell"]==55667)
			{
				switch ($char_talents["spell"]):
				case 55666:$points[3][21]=1;break;
				case 55667:$points[3][21]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==49224 || $char_talents["spell"]==49610 || $char_talents["spell"]==49611)
			{
				switch ($char_talents["spell"]):
				case 49224:$points[3][22]=1;break;
				case 49610:$points[3][22]=2;break;
				case 49611:$points[3][22]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49208 || $char_talents["spell"]==56834 || $char_talents["spell"]==56835)
			{
				switch ($char_talents["spell"]):
				case 49208:$points[3][23]=1;break;
				case 56834:$points[3][23]=2;break;
				case 56835:$points[3][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==52143)
			{
				$points[3][24]=1;
			}

		if($char_talents["spell"]==66799 || $char_talents["spell"]==66814 || $char_talents["spell"]==66815 || $char_talents["spell"]==66816 || $char_talents["spell"]==66817)
			{
				switch ($char_talents["spell"]):
				case 66799:$points[3][25]=1;break;
				case 66814:$points[3][25]=2;break;
				case 66815:$points[3][25]=3;break;
				case 66816:$points[3][25]=4;break;
				case 66817:$points[3][25]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51052)
			{
				$points[3][26]=1;
			}

		if($char_talents["spell"]==50391 || $char_talents["spell"]==50392)
			{
				switch ($char_talents["spell"]):
				case 50391:$points[3][27]=1;break;
				case 50392:$points[3][27]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==63560)
			{
				$points[3][28]=1;
			}

		if($char_talents["spell"]==49032 || $char_talents["spell"]==49631 || $char_talents["spell"]==49632)
			{
				switch ($char_talents["spell"]):
				case 49032:$points[3][30]=1;break;
				case 49631:$points[3][30]=2;break;
				case 49632:$points[3][30]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==49222)
			{
				$points[3][31]=1;
			}

		if($char_talents["spell"]==49217 || $char_talents["spell"]==49654 || $char_talents["spell"]==49655)
			{
				switch ($char_talents["spell"]):
				case 49217:$points[3][33]=1;break;
				case 49654:$points[3][33]=2;break;
				case 49655:$points[3][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51099 || $char_talents["spell"]==51160 || $char_talents["spell"]==51161)
			{
				switch ($char_talents["spell"]):
				case 51099:$points[3][34]=1;break;
				case 51160:$points[3][34]=2;break;
				case 51161:$points[3][34]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55090)
			{
				$points[3][35]=1;
			}

		if($char_talents["spell"]==50117 || $char_talents["spell"]==50118 || $char_talents["spell"]==50119 || $char_talents["spell"]==50120 || $char_talents["spell"]==50121)
			{
				switch ($char_talents["spell"]):
				case 50117:$points[3][38]=1;break;
				case 50118:$points[3][38]=2;break;
				case 50119:$points[3][38]=3;break;
				case 50120:$points[3][38]=4;break;
				case 50121:$points[3][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==49206)
			{
				$points[3][42]=1;
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
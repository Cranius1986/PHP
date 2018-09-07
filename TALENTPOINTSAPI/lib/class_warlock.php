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
//WARLOCK
$path="warlock";
$points=array();
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{
	//Tree 1
		if($char_talents["spell"]==18827 || $char_talents["spell"]==18829)
			{
				switch ($char_talents["spell"]):
				case 18827:$points[1][1]=1;break;
				case 18829:$points[1][1]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18174 || $char_talents["spell"]==18175 || $char_talents["spell"]==18176)
			{
				switch ($char_talents["spell"]):
				case 18174:$points[1][2]=1;break;
				case 18175:$points[1][2]=2;break;
				case 18176:$points[1][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==17810 || $char_talents["spell"]==17811 || $char_talents["spell"]==17812 || $char_talents["spell"]==17813 || $char_talents["spell"]==17814)
			{
				switch ($char_talents["spell"]):
				case 17810:$points[1][3]=1;break;
				case 17811:$points[1][3]=2;break;
				case 17812:$points[1][3]=3;break;
				case 17813:$points[1][3]=4;break;
				case 17814:$points[1][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18179 || $char_talents["spell"]==18180)
			{
				switch ($char_talents["spell"]):
				case 18179:$points[1][5]=1;break;
				case 18180:$points[1][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18213 || $char_talents["spell"]==18372)
			{
				switch ($char_talents["spell"]):
				case 18213:$points[1][6]=1;break;
				case 18372:$points[1][6]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18182 || $char_talents["spell"]==18183)
			{
				switch ($char_talents["spell"]):
				case 18182:$points[1][7]=1;break;
				case 18183:$points[1][7]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17804 || $char_talents["spell"]==17805)
			{
				switch ($char_talents["spell"]):
				case 17804:$points[1][8]=1;break;
				case 17805:$points[1][8]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==53754 || $char_talents["spell"]==53759)
			{
				switch ($char_talents["spell"]):
				case 53754:$points[1][9]=1;break;
				case 53759:$points[1][9]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17783 || $char_talents["spell"]==17784 || $char_talents["spell"]==17785)
			{
				switch ($char_talents["spell"]):
				case 17783:$points[1][10]=1;break;
				case 17784:$points[1][10]=2;break;
				case 17785:$points[1][10]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18288)
			{
				$points[1][11]=1;
			}

		if($char_talents["spell"]==18218 || $char_talents["spell"]==18219)
			{
				switch ($char_talents["spell"]):
				case 18218:$points[1][13]=1;break;
				case 18219:$points[1][13]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18094 || $char_talents["spell"]==18095)
			{
				switch ($char_talents["spell"]):
				case 18094:$points[1][14]=1;break;
				case 18095:$points[1][14]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==32381 || $char_talents["spell"]==32382 || $char_talents["spell"]==32383)
			{
				switch ($char_talents["spell"]):
				case 32381:$points[1][16]=1;break;
				case 32382:$points[1][16]=2;break;
				case 32383:$points[1][16]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==32385 || $char_talents["spell"]==32387 || $char_talents["spell"]==32392 || $char_talents["spell"]==32393 || $char_talents["spell"]==32394)
			{
				switch ($char_talents["spell"]):
				case 32385:$points[1][17]=1;break;
				case 32387:$points[1][17]=2;break;
				case 32392:$points[1][17]=3;break;
				case 32393:$points[1][17]=4;break;
				case 32394:$points[1][17]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==63108)
			{
				$points[1][18]=1;
			}

		if($char_talents["spell"]==18223)
			{
				$points[1][19]=1;
			}

		if($char_talents["spell"]==54037 || $char_talents["spell"]==54038)
			{
				switch ($char_talents["spell"]):
				case 54037:$points[1][21]=1;break;
				case 54038:$points[1][21]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18271 || $char_talents["spell"]==18272 || $char_talents["spell"]==18273 || $char_talents["spell"]==18274 || $char_talents["spell"]==18275)
			{
				switch ($char_talents["spell"]):
				case 18271:$points[1][22]=1;break;
				case 18272:$points[1][22]=2;break;
				case 18273:$points[1][22]=3;break;
				case 18274:$points[1][22]=4;break;
				case 18275:$points[1][22]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47195 || $char_talents["spell"]==47196 || $char_talents["spell"]==47197)
			{
				switch ($char_talents["spell"]):
				case 47195:$points[1][25]=1;break;
				case 47196:$points[1][25]=2;break;
				case 47197:$points[1][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30060 || $char_talents["spell"]==30061 || $char_talents["spell"]==30062 || $char_talents["spell"]==30063 || $char_talents["spell"]==30064)
			{
				switch ($char_talents["spell"]):
				case 30060:$points[1][26]=1;break;
				case 30061:$points[1][26]=2;break;
				case 30062:$points[1][26]=3;break;
				case 30063:$points[1][26]=4;break;
				case 30064:$points[1][26]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18220)
			{
				$points[1][27]=1;
			}

		if($char_talents["spell"]==30054 || $char_talents["spell"]==30057)
			{
				switch ($char_talents["spell"]):
				case 30054:$points[1][29]=1;break;
				case 30057:$points[1][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==32477 || $char_talents["spell"]==32483 || $char_talents["spell"]==32484)
			{
				switch ($char_talents["spell"]):
				case 32477:$points[1][31]=1;break;
				case 32483:$points[1][31]=2;break;
				case 32484:$points[1][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47198 || $char_talents["spell"]==47199 || $char_talents["spell"]==47200)
			{
				switch ($char_talents["spell"]):
				case 47198:$points[1][33]=1;break;
				case 47199:$points[1][33]=2;break;
				case 47200:$points[1][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30108)
			{
				$points[1][34]=1;
			}

		if($char_talents["spell"]==58435)
			{
				$points[1][35]=1;
			}

		if($char_talents["spell"]==47201 || $char_talents["spell"]==47202 || $char_talents["spell"]==47203 || $char_talents["spell"]==47204 || $char_talents["spell"]==47205)
			{
				switch ($char_talents["spell"]):
				case 47201:$points[1][38]=1;break;
				case 47202:$points[1][38]=2;break;
				case 47203:$points[1][38]=3;break;
				case 47204:$points[1][38]=4;break;
				case 47205:$points[1][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==48181)
			{
				$points[1][42]=1;
			}

	//Tree 2
		if($char_talents["spell"]==18692 || $char_talents["spell"]==18693)
			{
				switch ($char_talents["spell"]):
				case 18692:$points[2][1]=1;break;
				case 18693:$points[2][1]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18694 || $char_talents["spell"]==18695 || $char_talents["spell"]==18696)
			{
				switch ($char_talents["spell"]):
				case 18694:$points[2][2]=1;break;
				case 18695:$points[2][2]=2;break;
				case 18696:$points[2][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18697 || $char_talents["spell"]==18698 || $char_talents["spell"]==18699)
			{
				switch ($char_talents["spell"]):
				case 18697:$points[2][3]=1;break;
				case 18698:$points[2][3]=2;break;
				case 18699:$points[2][3]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47230 || $char_talents["spell"]==47231)
			{
				switch ($char_talents["spell"]):
				case 47230:$points[2][4]=1;break;
				case 47231:$points[2][4]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18703 || $char_talents["spell"]==18704)
			{
				switch ($char_talents["spell"]):
				case 18703:$points[2][5]=1;break;
				case 18704:$points[2][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18705 || $char_talents["spell"]==18706 || $char_talents["spell"]==18707)
			{
				switch ($char_talents["spell"]):
				case 18705:$points[2][6]=1;break;
				case 18706:$points[2][6]=2;break;
				case 18707:$points[2][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18731 || $char_talents["spell"]==18743 || $char_talents["spell"]==18744)
			{
				switch ($char_talents["spell"]):
				case 18731:$points[2][7]=1;break;
				case 18743:$points[2][7]=2;break;
				case 18744:$points[2][7]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18754 || $char_talents["spell"]==18755 || $char_talents["spell"]==18756)
			{
				switch ($char_talents["spell"]):
				case 18754:$points[2][9]=1;break;
				case 18755:$points[2][9]=2;break;
				case 18756:$points[2][9]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==19028)
			{
				$points[2][10]=1;
			}

		if($char_talents["spell"]==18708)
			{
				$points[2][11]=1;
			}

		if($char_talents["spell"]==30143 || $char_talents["spell"]==30144 || $char_talents["spell"]==30145)
			{
				switch ($char_talents["spell"]):
				case 30143:$points[2][12]=1;break;
				case 30144:$points[2][12]=2;break;
				case 30145:$points[2][12]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18769 || $char_talents["spell"]==18770 || $char_talents["spell"]==18771 || $char_talents["spell"]==18772 || $char_talents["spell"]==18773)
			{
				switch ($char_talents["spell"]):
				case 18769:$points[2][14]=1;break;
				case 18770:$points[2][14]=2;break;
				case 18771:$points[2][14]=3;break;
				case 18772:$points[2][14]=4;break;
				case 18773:$points[2][14]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18709 || $char_talents["spell"]==18710)
			{
				switch ($char_talents["spell"]):
				case 18709:$points[2][15]=1;break;
				case 18710:$points[2][15]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30326)
			{
				$points[2][17]=1;
			}

		if($char_talents["spell"]==18767 || $char_talents["spell"]==18768)
			{
				switch ($char_talents["spell"]):
				case 18767:$points[2][19]=1;break;
				case 18768:$points[2][19]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==23785 || $char_talents["spell"]==23822 || $char_talents["spell"]==23823 || $char_talents["spell"]==23824 || $char_talents["spell"]==23825)
			{
				switch ($char_talents["spell"]):
				case 23785:$points[2][22]=1;break;
				case 23822:$points[2][22]=2;break;
				case 23823:$points[2][22]=3;break;
				case 23824:$points[2][22]=4;break;
				case 23825:$points[2][22]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47245 || $char_talents["spell"]==47246 || $char_talents["spell"]==47247)
			{
				switch ($char_talents["spell"]):
				case 47245:$points[2][23]=1;break;
				case 47246:$points[2][23]=2;break;
				case 47247:$points[2][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30319 || $char_talents["spell"]==30320 || $char_talents["spell"]==30321)
			{
				switch ($char_talents["spell"]):
				case 30319:$points[2][25]=1;break;
				case 30320:$points[2][25]=2;break;
				case 30321:$points[2][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47193)
			{
				$points[2][26]=1;
			}

		if($char_talents["spell"]==35691 || $char_talents["spell"]==35692 || $char_talents["spell"]==35693)
			{
				switch ($char_talents["spell"]):
				case 35691:$points[2][27]=1;break;
				case 35692:$points[2][27]=2;break;
				case 35693:$points[2][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30242 || $char_talents["spell"]==30245 || $char_talents["spell"]==30246 || $char_talents["spell"]==30247 || $char_talents["spell"]==30248)
			{
				switch ($char_talents["spell"]):
				case 30242:$points[2][30]=1;break;
				case 30245:$points[2][30]=2;break;
				case 30246:$points[2][30]=3;break;
				case 30247:$points[2][30]=4;break;
				case 30248:$points[2][30]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==63156 || $char_talents["spell"]==63158)
			{
				switch ($char_talents["spell"]):
				case 63156:$points[2][31]=1;break;
				case 63158:$points[2][31]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==54347 || $char_talents["spell"]==54348 || $char_talents["spell"]==54349)
			{
				switch ($char_talents["spell"]):
				case 54347:$points[2][33]=1;break;
				case 54348:$points[2][33]=2;break;
				case 54349:$points[2][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30146)
			{
				$points[2][34]=1;
			}

		if($char_talents["spell"]==63117 || $char_talents["spell"]==63121  || $char_talents["spell"]==63123)
			{
				switch ($char_talents["spell"]):
				case 63117:$points[2][35]=1;break;
				case 63121:$points[2][35]=2;break;
				case 63123:$points[2][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47236 || $char_talents["spell"]==47237 || $char_talents["spell"]==47238 || $char_talents["spell"]==47239 || $char_talents["spell"]==47240)
			{
				switch ($char_talents["spell"]):
				case 47236:$points[2][38]=1;break;
				case 47237:$points[2][38]=2;break;
				case 47238:$points[2][38]=3;break;
				case 47239:$points[2][38]=4;break;
				case 47240:$points[2][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==59672)
			{
				$points[2][42]=1;
			}

	//Tree 3
		if($char_talents["spell"]==17793 || $char_talents["spell"]==17796 || $char_talents["spell"]==17801 || $char_talents["spell"]==17802 || $char_talents["spell"]==17803)
			{
				switch ($char_talents["spell"]):
				case 17793:$points[3][2]=1;break;
				case 17796:$points[3][2]=2;break;
				case 17801:$points[3][2]=3;break;
				case 17802:$points[3][2]=4;break;
				case 17803:$points[3][2]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==17788 || $char_talents["spell"]==17789 || $char_talents["spell"]==17790 || $char_talents["spell"]==17791 || $char_talents["spell"]==17792)
			{
				switch ($char_talents["spell"]):
				case 17788:$points[3][3]=1;break;
				case 17789:$points[3][3]=2;break;
				case 17790:$points[3][3]=3;break;
				case 17791:$points[3][3]=4;break;
				case 17792:$points[3][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18119 || $char_talents["spell"]==18120)
			{
				switch ($char_talents["spell"]):
				case 18119:$points[3][5]=1;break;
				case 18120:$points[3][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==63349 || $char_talents["spell"]==63350 || $char_talents["spell"]==63351)
			{
				switch ($char_talents["spell"]):
				case 63349:$points[3][6]=1;break;
				case 63350:$points[3][6]=2;break;
				case 63351:$points[3][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==17778 || $char_talents["spell"]==17779 || $char_talents["spell"]==17780)
			{
				switch ($char_talents["spell"]):
				case 17778:$points[3][7]=1;break;
				case 17779:$points[3][7]=2;break;
				case 17780:$points[3][7]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18126 || $char_talents["spell"]==18127)
			{
				switch ($char_talents["spell"]):
				case 18126:$points[3][9]=1;break;
				case 18127:$points[3][9]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17877)
			{
				$points[3][10]=1;
			}

		if($char_talents["spell"]==17959 || $char_talents["spell"]==59738 || $char_talents["spell"]==59739 || $char_talents["spell"]==59740 || $char_talents["spell"]==59741)
			{
				switch ($char_talents["spell"]):
				case 17959:$points[3][11]=1;break;
				case 59738:$points[3][11]=2;break;
				case 59739:$points[3][11]=3;break;
				case 59740:$points[3][11]=4;break;
				case 59741:$points[3][11]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18135 || $char_talents["spell"]==18136)
			{
				switch ($char_talents["spell"]):
				case 18135:$points[3][13]=1;break;
				case 18136:$points[3][13]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17917 || $char_talents["spell"]==17918)
			{
				switch ($char_talents["spell"]):
				case 17917:$points[3][14]=1;break;
				case 17918:$points[3][14]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17927 || $char_talents["spell"]==17929 || $char_talents["spell"]==17930)
			{
				switch ($char_talents["spell"]):
				case 17927:$points[3][16]=1;break;
				case 17929:$points[3][16]=2;break;
				case 17930:$points[3][16]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==34935 || $char_talents["spell"]==34938 || $char_talents["spell"]==34939)
			{
				switch ($char_talents["spell"]):
				case 34935:$points[3][17]=1;break;
				case 34938:$points[3][17]=2;break;
				case 34939:$points[3][17]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==17815 || $char_talents["spell"]==17833 || $char_talents["spell"]==17834)
			{
				switch ($char_talents["spell"]):
				case 17815:$points[3][18]=1;break;
				case 17833:$points[3][18]=2;break;
				case 17834:$points[3][18]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18130)
			{
				$points[3][19]=1;
			}

		if($char_talents["spell"]==30299 || $char_talents["spell"]==30301 || $char_talents["spell"]==30302)
			{
				switch ($char_talents["spell"]):
				case 30299:$points[3][21]=1;break;
				case 30301:$points[3][21]=2;break;
				case 30302:$points[3][21]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==17954 || $char_talents["spell"]==17955 || $char_talents["spell"]==17956 || $char_talents["spell"]==17957 || $char_talents["spell"]==17958)
			{
				switch ($char_talents["spell"]):
				case 17954:$points[3][23]=1;break;
				case 17955:$points[3][23]=2;break;
				case 17956:$points[3][23]=3;break;
				case 17957:$points[3][23]=4;break;
				case 17958:$points[3][23]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==17962)
			{
				$points[3][26]=1;
			}

		if($char_talents["spell"]==30293 || $char_talents["spell"]==30295 || $char_talents["spell"]==30296)
			{
				switch ($char_talents["spell"]):
				case 30293:$points[3][27]=1;break;
				case 30295:$points[3][27]=2;break;
				case 30296:$points[3][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18096 || $char_talents["spell"]==18073 || $char_talents["spell"]==63245)
			{
				switch ($char_talents["spell"]):
				case 18096:$points[3][28]=1;break;
				case 18073:$points[3][28]=2;break;
				case 63245:$points[3][28]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30288 || $char_talents["spell"]==30289 || $char_talents["spell"]==30290 || $char_talents["spell"]==30291 || $char_talents["spell"]==30292)
			{
				switch ($char_talents["spell"]):
				case 30288:$points[3][30]=1;break;
				case 30289:$points[3][30]=2;break;
				case 30290:$points[3][30]=3;break;
				case 30291:$points[3][30]=4;break;
				case 30292:$points[3][30]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==54117 || $char_talents["spell"]==54118)
			{
				switch ($char_talents["spell"]):
				case 54117:$points[3][31]=1;break;
				case 54118:$points[3][31]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==47258 || $char_talents["spell"]==47259 || $char_talents["spell"]==47260)
			{
				switch ($char_talents["spell"]):
				case 47258:$points[3][33]=1;break;
				case 47259:$points[3][33]=2;break;
				case 47260:$points[3][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30283)
			{
				$points[3][34]=1;
			}

		if($char_talents["spell"]==47220 || $char_talents["spell"]==47221 || $char_talents["spell"]==47223)
			{
				switch ($char_talents["spell"]):
				case 47220:$points[3][35]=1;break;
				case 47221:$points[3][35]=2;break;
				case 47223:$points[3][35]=3;break;
				endswitch;
			}
 
		if($char_talents["spell"]==47266 || $char_talents["spell"]==47267 || $char_talents["spell"]==47268 || $char_talents["spell"]==47269 || $char_talents["spell"]==47270)
			{
				switch ($char_talents["spell"]):
				case 47266:$points[3][38]=1;break;
				case 47267:$points[3][38]=2;break;
				case 47268:$points[3][38]=3;break;
				case 47269:$points[3][38]=4;break;
				case 47270:$points[3][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==50796)
			{
				$points[3][42]=1;
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
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
//ROGUE
$path="rogue";
$points=array();
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{
	//Tree 1
		if($char_talents["spell"]==14162 || $char_talents["spell"]==14163 || $char_talents["spell"]==14164)
			{
				switch ($char_talents["spell"]):
				case 14162:$points[1][1]=1;break;
				case 14163:$points[1][1]=2;break;
				case 14164:$points[1][1]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14144 || $char_talents["spell"]==14148)
			{
				switch ($char_talents["spell"]):
				case 14144:$points[1][2]=1;break;
				case 14148:$points[1][2]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14138 || $char_talents["spell"]==14139 || $char_talents["spell"]==14140 || $char_talents["spell"]==14141 || $char_talents["spell"]==14142)
			{
				switch ($char_talents["spell"]):
				case 14138:$points[1][3]=1;break;
				case 14139:$points[1][3]=2;break;
				case 14140:$points[1][3]=3;break;
				case 14141:$points[1][3]=4;break;
				case 14142:$points[1][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==14156 || $char_talents["spell"]==14160 || $char_talents["spell"]==14161)
			{
				switch ($char_talents["spell"]):
				case 14156:$points[1][5]=1;break;
				case 14160:$points[1][5]=2;break;
				case 14161:$points[1][5]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51632 || $char_talents["spell"]==51633)
			{
				switch ($char_talents["spell"]):
				case 51632:$points[1][6]=1;break;
				case 51633:$points[1][6]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13733|| $char_talents["spell"]==13865 || $char_talents["spell"]==13866)
			{
				switch ($char_talents["spell"]):
				case 13733:$points[1][8]=1;break;
				case 13865:$points[1][8]=2;break;
				case 13866:$points[1][8]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14983)
			{
				$points[1][9]=1;
			}

		if($char_talents["spell"]==14168 || $char_talents["spell"]==14169)
			{
				switch ($char_talents["spell"]):
				case 14168:$points[1][10]=1;break;
				case 14169:$points[1][10]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14128 || $char_talents["spell"]==14132 || $char_talents["spell"]==14135 || $char_talents["spell"]==14136 || $char_talents["spell"]==14137)
			{
				switch ($char_talents["spell"]):
				case 14128:$points[1][11]=1;break;
				case 14132:$points[1][11]=2;break;
				case 14135:$points[1][11]=3;break;
				case 14136:$points[1][11]=4;break;
				case 14137:$points[1][11]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16513|| $char_talents["spell"]==16514 || $char_talents["spell"]==16515)
			{
				switch ($char_talents["spell"]):
				case 16513:$points[1][14]=1;break;
				case 16514:$points[1][14]=2;break;
				case 16515:$points[1][14]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14113 || $char_talents["spell"]==14114 || $char_talents["spell"]==14115 || $char_talents["spell"]==14116 || $char_talents["spell"]==14117)
			{
				switch ($char_talents["spell"]):
				case 14113:$points[1][15]=1;break;
				case 14114:$points[1][15]=2;break;
				case 14115:$points[1][15]=3;break;
				case 14116:$points[1][15]=4;break;
				case 14117:$points[1][15]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==31208 || $char_talents["spell"]==31209)
			{
				switch ($char_talents["spell"]):
				case 31208:$points[1][17]=1;break;
				case 31209:$points[1][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14177)
			{
				$points[1][18]=1;
			}

		if($char_talents["spell"]==14174 || $char_talents["spell"]==14175 || $char_talents["spell"]==14176)
			{
				switch ($char_talents["spell"]):
				case 14174:$points[1][19]=1;break;
				case 14175:$points[1][19]=2;break;
				case 14176:$points[1][19]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==31244 || $char_talents["spell"]==31245)
			{
				switch ($char_talents["spell"]):
				case 31244:$points[1][20]=1;break;
				case 31245:$points[1][20]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14186 || $char_talents["spell"]==14190 || $char_talents["spell"]==14193 || $char_talents["spell"]==14194 || $char_talents["spell"]==14195)
			{
				switch ($char_talents["spell"]):
				case 14186:$points[1][22]=1;break;
				case 14190:$points[1][22]=2;break;
				case 14193:$points[1][22]=3;break;
				case 14194:$points[1][22]=4;break;
				case 14195:$points[1][22]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==14158 || $char_talents["spell"]==14159)
			{
				switch ($char_talents["spell"]):
				case 14158:$points[1][23]=1;break;
				case 14159:$points[1][23]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51625 || $char_talents["spell"]==51626)
			{
				switch ($char_talents["spell"]):
				case 51625:$points[1][25]=1;break;
				case 51626:$points[1][25]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==58426)
			{
				$points[1][26]=1;
			}

		if($char_talents["spell"]==31380 || $char_talents["spell"]==31382 || $char_talents["spell"]==31383)
			{
				switch ($char_talents["spell"]):
				case 31380:$points[1][27]=1;break;
				case 31382:$points[1][27]=2;break;
				case 31383:$points[1][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51634 || $char_talents["spell"]==51635 || $char_talents["spell"]==51636)
			{
				switch ($char_talents["spell"]):
				case 51634:$points[1][29]=1;break;
				case 51635:$points[1][29]=2;break;
				case 51636:$points[1][29]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==31234 || $char_talents["spell"]==31235 || $char_talents["spell"]==31236)
			{
				switch ($char_talents["spell"]):
				case 31234:$points[1][31]=1;break;
				case 31235:$points[1][31]=2;break;
				case 31236:$points[1][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==31226 || $char_talents["spell"]==31227 || $char_talents["spell"]==58410)
			{
				switch ($char_talents["spell"]):
				case 31226:$points[1][33]=1;break;
				case 31227:$points[1][33]=2;break;
				case 58410:$points[1][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==1329)
			{
				$points[1][34]=1;
			}

		if($char_talents["spell"]==51627 || $char_talents["spell"]==51628 || $char_talents["spell"]==51629)
			{
				switch ($char_talents["spell"]):
				case 51627:$points[1][35]=1;break;
				case 51628:$points[1][35]=2;break;
				case 51629:$points[1][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51664 || $char_talents["spell"]==51665 || $char_talents["spell"]==51667 || $char_talents["spell"]==51668 || $char_talents["spell"]==51669)
			{
				switch ($char_talents["spell"]):
				case 51664:$points[1][38]=1;break;
				case 51665:$points[1][38]=2;break;
				case 51667:$points[1][38]=3;break;
				case 51668:$points[1][38]=4;break;
				case 51669:$points[1][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51662)
			{
				$points[1][42]=1;
			}

	//Tree 2
		if($char_talents["spell"]==13741 || $char_talents["spell"]==13793 || $char_talents["spell"]==13792)
			{
				switch ($char_talents["spell"]):
				case 13741:$points[2][1]=1;break;
				case 13793:$points[2][1]=2;break;
				case 13792:$points[2][1]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13732 || $char_talents["spell"]==13863)
			{
				switch ($char_talents["spell"]):
				case 13732:$points[2][2]=1;break;
				case 13863:$points[2][2]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13715 || $char_talents["spell"]==13848 || $char_talents["spell"]==13849 || $char_talents["spell"]==13851 || $char_talents["spell"]==13852)
			{
				switch ($char_talents["spell"]):
				case 13715:$points[2][3]=1;break;
				case 13848:$points[2][3]=2;break;
				case 13849:$points[2][3]=3;break;
				case 13851:$points[2][3]=4;break;
				case 13852:$points[2][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==14165 || $char_talents["spell"]==14166)
			{
				switch ($char_talents["spell"]):
				case 14165:$points[2][5]=1;break;
				case 14166:$points[2][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13713 || $char_talents["spell"]==13853 || $char_talents["spell"]==13854)
			{
				switch ($char_talents["spell"]):
				case 13713:$points[2][6]=1;break;
				case 13852:$points[2][6]=2;break;
				case 13854:$points[2][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13705 || $char_talents["spell"]==13832 || $char_talents["spell"]==13843 || $char_talents["spell"]==13844 || $char_talents["spell"]==13845)
			{
				switch ($char_talents["spell"]):
				case 13705:$points[2][8]=1;break;
				case 13832:$points[2][8]=2;break;
				case 13843:$points[2][8]=3;break;
				case 13844:$points[2][8]=4;break;
				case 13845:$points[2][8]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==13742 || $char_talents["spell"]==13872)
			{
				switch ($char_talents["spell"]):
				case 13742:$points[2][9]=1;break;
				case 13872:$points[2][9]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14251)
			{
				$points[2][10]=1;
			}

		if($char_talents["spell"]==13706 || $char_talents["spell"]==13804 || $char_talents["spell"]==13804 || $char_talents["spell"]==13806 || $char_talents["spell"]==13807)
			{
				switch ($char_talents["spell"]):
				case 13706:$points[2][11]=1;break;
				case 13804:$points[2][11]=2;break;
				case 13805:$points[2][11]=3;break;
				case 13806:$points[2][11]=4;break;
				case 13807:$points[2][11]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==13754 || $char_talents["spell"]==13867)
			{
				switch ($char_talents["spell"]):
				case 13754:$points[2][13]=1;break;
				case 13867:$points[2][13]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13743 || $char_talents["spell"]==13875)
			{
				switch ($char_talents["spell"]):
				case 13743:$points[2][14]=1;break;
				case 13875:$points[2][14]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13712 || $char_talents["spell"]==13788 || $char_talents["spell"]==13789)
			{
				switch ($char_talents["spell"]):
				case 13712:$points[2][15]=1;break;
				case 13788:$points[2][15]=2;break;
				case 13789:$points[2][15]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==18427 || $char_talents["spell"]==18428 || $char_talents["spell"]==18429 || $char_talents["spell"]==61330 || $char_talents["spell"]==61331)
			{
				switch ($char_talents["spell"]):
				case 18427:$points[2][16]=1;break;
				case 18428:$points[2][16]=2;break;
				case 18429:$points[2][16]=3;break;
				case 61330:$points[2][16]=4;break;
				case 61331:$points[2][16]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==13709 || $char_talents["spell"]==13800 || $char_talents["spell"]==13801 || $char_talents["spell"]==13802 || $char_talents["spell"]==13803)
			{
				switch ($char_talents["spell"]):
				case 13709:$points[2][17]=1;break;
				case 13800:$points[2][17]=2;break;
				case 13801:$points[2][17]=3;break;
				case 13802:$points[2][17]=4;break;
				case 13803:$points[2][17]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==13877)
			{
				$points[2][18]=1;
			}

		if($char_talents["spell"]==13960 || $char_talents["spell"]==13961 || $char_talents["spell"]==13962 || $char_talents["spell"]==13963|| $char_talents["spell"]==13964)
			{
				switch ($char_talents["spell"]):
				case 13960:$points[2][19]=1;break;
				case 13961:$points[2][19]=2;break;
				case 13962:$points[2][19]=3;break;
				case 13963:$points[2][19]=4;break;
				case 13964:$points[2][19]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==30919 || $char_talents["spell"]==30920)
			{
				switch ($char_talents["spell"]):
				case 30919:$points[2][22]=1;break;
				case 30920:$points[2][22]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==31124 || $char_talents["spell"]==31126)
			{
				switch ($char_talents["spell"]):
				case 31124:$points[2][23]=1;break;
				case 31126:$points[2][23]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==31122 || $char_talents["spell"]==31123 || $char_talents["spell"]==61329)
			{
				switch ($char_talents["spell"]):
				case 31122:$points[2][25]=1;break;
				case 31123:$points[2][25]=2;break;
				case 61329:$points[2][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13750)
			{
				$points[2][26]=1;
			}

		if($char_talents["spell"]==31130 || $char_talents["spell"]==31131)
			{
				switch ($char_talents["spell"]):
				case 31130:$points[2][27]=1;break;
				case 31131:$points[2][27]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==5952 || $char_talents["spell"]==51679)
			{
				switch ($char_talents["spell"]):
				case 5952:$points[2][29]=1;break;
				case 51679:$points[2][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==35541 || $char_talents["spell"]==35550 || $char_talents["spell"]==35551 || $char_talents["spell"]==35552 || $char_talents["spell"]==35553)
			{
				switch ($char_talents["spell"]):
				case 35541:$points[2][31]=1;break;
				case 35550:$points[2][31]=2;break;
				case 35551:$points[2][31]=3;break;
				case 35552:$points[2][31]=4;break;
				case 35553:$points[2][31]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51672 || $char_talents["spell"]==51674)
			{
				switch ($char_talents["spell"]):
				case 51672:$points[2][33]=1;break;
				case 51674:$points[2][33]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==32601)
			{
				$points[2][34]=1;
			}

		if($char_talents["spell"]==51682 || $char_talents["spell"]==58413)
			{
				switch ($char_talents["spell"]):
				case 51682:$points[2][35]=1;break;
				case 58413:$points[2][35]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51685 || $char_talents["spell"]==51686 || $char_talents["spell"]==51687 || $char_talents["spell"]==51688 || $char_talents["spell"]==51689)
			{
				switch ($char_talents["spell"]):
				case 51685:$points[2][38]=1;break;
				case 51686:$points[2][38]=2;break;
				case 51687:$points[2][38]=3;break;
				case 51688:$points[2][38]=4;break;
				case 51689:$points[2][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51690)
			{
				$points[2][42]=1;
			}

	//Tree 3
		if($char_talents["spell"]==14179 || $char_talents["spell"]==58422 || $char_talents["spell"]==58423 || $char_talents["spell"]==58424 || $char_talents["spell"]==58425)
			{
				switch ($char_talents["spell"]):
				case 14179:$points[3][1]=1;break;
				case 58422:$points[3][1]=2;break;
				case 58423:$points[3][1]=3;break;
				case 58424:$points[3][1]=4;break;
				case 58425:$points[3][1]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==13958 || $char_talents["spell"]==13970 || $char_talents["spell"]==13971)
			{
				switch ($char_talents["spell"]):
				case 13958:$points[3][2]=1;break;
				case 13970:$points[3][2]=2;break;
				case 13971:$points[3][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14057 || $char_talents["spell"]==14072)
			{
				switch ($char_talents["spell"]):
				case 14057:$points[3][3]=1;break;
				case 14072:$points[3][3]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30892 || $char_talents["spell"]==30893)
			{
				switch ($char_talents["spell"]):
				case 30892:$points[3][5]=1;break;
				case 30893:$points[3][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14076 || $char_talents["spell"]==14094)
			{
				switch ($char_talents["spell"]):
				case 14076:$points[3][6]=1;break;
				case 14094:$points[3][6]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==13975 || $char_talents["spell"]==14062 || $char_talents["spell"]==14063)
			{
				switch ($char_talents["spell"]):
				case 13975:$points[3][7]=1;break;
				case 14062:$points[3][7]=2;break;
				case 14063:$points[3][7]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13981 || $char_talents["spell"]==14066)
			{
				switch ($char_talents["spell"]):
				case 13981:$points[3][9]=1;break;
				case 14066:$points[3][9]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14278)
			{
				$points[3][10]=1;
			}

		if($char_talents["spell"]==14171 || $char_talents["spell"]==14172 || $char_talents["spell"]==14173)
			{
				switch ($char_talents["spell"]):
				case 14171:$points[3][11]=1;break;
				case 14172:$points[3][11]=2;break;
				case 14173:$points[3][11]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13983 || $char_talents["spell"]==14070 || $char_talents["spell"]==14071)
			{
				switch ($char_talents["spell"]):
				case 13983:$points[3][13]=1;break;
				case 14070:$points[3][13]=2;break;
				case 14071:$points[3][13]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==13976 || $char_talents["spell"]==13979 || $char_talents["spell"]==13980)
			{
				switch ($char_talents["spell"]):
				case 13976:$points[3][14]=1;break;
				case 13979:$points[3][14]=2;break;
				case 13980:$points[3][14]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14079 || $char_talents["spell"]==14080)
			{
				switch ($char_talents["spell"]):
				case 14079:$points[3][15]=1;break;
				case 14080:$points[3][15]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30894 || $char_talents["spell"]==30895)
			{
				switch ($char_talents["spell"]):
				case 30894:$points[3][17]=1;break;
				case 30895:$points[3][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14185)
			{
				$points[3][18]=1;
			}

		if($char_talents["spell"]==14082 || $char_talents["spell"]==14083)
			{
				switch ($char_talents["spell"]):
				case 14082:$points[3][19]=1;break;
				case 14083:$points[3][19]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==16511)
			{
				$points[3][20]=1;
			}

		if($char_talents["spell"]==31221 || $char_talents["spell"]==31222 || $char_talents["spell"]==31223)
			{
				switch ($char_talents["spell"]):
				case 31221:$points[3][21]=1;break;
				case 31222:$points[3][21]=2;break;
				case 31223:$points[3][21]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30902 || $char_talents["spell"]==30903 || $char_talents["spell"]==30904 || $char_talents["spell"]==30905 || $char_talents["spell"]==30906)
			{
				switch ($char_talents["spell"]):
				case 30902:$points[3][23]=1;break;
				case 30903:$points[3][23]=2;break;
				case 30904:$points[3][23]=3;break;
				case 30905:$points[3][23]=4;break;
				case 30906:$points[3][23]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==31211|| $char_talents["spell"]==31212 || $char_talents["spell"]==31213)
			{
				switch ($char_talents["spell"]):
				case 31211:$points[3][25]=1;break;
				case 31212:$points[3][25]=2;break;
				case 31213:$points[3][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14183)
			{
				$points[3][26]=1;
			}

		if($char_talents["spell"]==31228 || $char_talents["spell"]==31229 || $char_talents["spell"]==31230)
			{
				switch ($char_talents["spell"]):
				case 31228:$points[3][27]=1;break;
				case 31229:$points[3][27]=2;break;
				case 31230:$points[3][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==31216 || $char_talents["spell"]==31217 || $char_talents["spell"]==31218 || $char_talents["spell"]==31219 || $char_talents["spell"]==31220)
			{
				switch ($char_talents["spell"]):
				case 31216:$points[3][30]=1;break;
				case 31217:$points[3][30]=2;break;
				case 31218:$points[3][30]=3;break;
				case 31219:$points[3][30]=4;break;
				case 31220:$points[3][30]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51692 || $char_talents["spell"]==51696)
			{
				switch ($char_talents["spell"]):
				case 51692:$points[3][31]=1;break;
				case 51696:$points[3][31]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51698 || $char_talents["spell"]==51700 || $char_talents["spell"]==51701)
			{
				switch ($char_talents["spell"]):
				case 51698:$points[3][33]=1;break;
				case 51700:$points[3][33]=2;break;
				case 51701:$points[3][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==36554)
			{
				$points[3][34]=1;
			}

		if($char_talents["spell"]==58414 || $char_talents["spell"]==58415)
			{
				switch ($char_talents["spell"]):
				case 58414:$points[3][35]=1;break;
				case 58415:$points[3][35]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51708 || $char_talents["spell"]==51709 || $char_talents["spell"]==51710 || $char_talents["spell"]==51711|| $char_talents["spell"]==51712)
			{
				switch ($char_talents["spell"]):
				case 51708:$points[3][38]=1;break;
				case 51709:$points[3][38]=2;break;
				case 51710:$points[3][38]=3;break;
				case 51711:$points[3][38]=4;break;
				case 51712:$points[3][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51713)
			{
				$points[3][42]=1;
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
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
//PRIEST
$path="priest";
$points=array();
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{
	//Tree 1
		if($char_talents["spell"]==14522 || $char_talents["spell"]==14788 || $char_talents["spell"]==14789 || $char_talents["spell"]==14790 || $char_talents["spell"]==14791)
			{
				switch ($char_talents["spell"]):
				case 14522:$points[1][2]=1;break;
				case 14788:$points[1][2]=2;break;
				case 14789:$points[1][2]=3;break;
				case 14790:$points[1][2]=4;break;
				case 14791:$points[1][2]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47586 || $char_talents["spell"]==47587 || $char_talents["spell"]==47588 || $char_talents["spell"]==52802 || $char_talents["spell"]==52803)
			{
				switch ($char_talents["spell"]):
				case 47586:$points[1][3]=1;break;
				case 47587:$points[1][3]=2;break;
				case 47588:$points[1][3]=3;break;
				case 52802:$points[1][3]=4;break;
				case 52803:$points[1][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==14523 || $char_talents["spell"]==14784 || $char_talents["spell"]==14785)
			{
				switch ($char_talents["spell"]):
				case 14523:$points[1][5]=1;break;
				case 14784:$points[1][5]=2;break;
				case 14785:$points[1][5]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14747 || $char_talents["spell"]==14770 || $char_talents["spell"]==14771)
			{
				switch ($char_talents["spell"]):
				case 14747:$points[1][6]=1;break;
				case 14770:$points[1][6]=2;break;
				case 14771:$points[1][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14749 || $char_talents["spell"]==14767)
			{
				switch ($char_talents["spell"]):
				case 14749:$points[1][7]=1;break;
				case 14767:$points[1][7]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14531 || $char_talents["spell"]==14774)
			{
				switch ($char_talents["spell"]):
				case 14531:$points[1][8]=1;break;
				case 14774:$points[1][8]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14521 || $char_talents["spell"]==14776 || $char_talents["spell"]==14777)
			{
				switch ($char_talents["spell"]):
				case 14521:$points[1][9]=1;break;
				case 14776:$points[1][9]=2;break;
				case 14777:$points[1][9]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14751)
			{
				$points[1][10]=1;
			}

		if($char_talents["spell"]==14748 || $char_talents["spell"]==14768 || $char_talents["spell"]==14769)
			{
				switch ($char_talents["spell"]):
				case 14748:$points[1][11]=1;break;
				case 14768:$points[1][11]=2;break;
				case 14769:$points[1][11]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==33167|| $char_talents["spell"]==33171 || $char_talents["spell"]==33172)
			{
				switch ($char_talents["spell"]):
				case 33167:$points[1][13]=1;break;
				case 33171:$points[1][13]=2;break;
				case 33172:$points[1][13]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14520 || $char_talents["spell"]==14780 || $char_talents["spell"]==14781)
			{
				switch ($char_talents["spell"]):
				case 14520:$points[1][14]=1;break;
				case 14780:$points[1][14]=2;break;
				case 14781:$points[1][14]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14750 || $char_talents["spell"]==14772)
			{
				switch ($char_talents["spell"]):
				case 14750:$points[1][16]=1;break;
				case 14772:$points[1][16]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==33201 || $char_talents["spell"]==33202)
			{
				switch ($char_talents["spell"]):
				case 33201:$points[1][17]=1;break;
				case 33202:$points[1][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==18551 || $char_talents["spell"]==18552 || $char_talents["spell"]==18553 || $char_talents["spell"]==18554 || $char_talents["spell"]==18555)
			{
				switch ($char_talents["spell"]):
				case 18551:$points[1][18]=1;break;
				case 18552:$points[1][18]=2;break;
				case 18553:$points[1][18]=3;break;
				case 18554:$points[1][18]=4;break;
				case 18555:$points[1][18]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==63574)
			{
				$points[1][19]=1;
			}

		if($char_talents["spell"]==33186 || $char_talents["spell"]==33190)
			{
				switch ($char_talents["spell"]):
				case 33186:$points[1][21]=1;break;
				case 33190:$points[1][21]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==34908 || $char_talents["spell"]==34909 || $char_talents["spell"]==34910)
			{
				switch ($char_talents["spell"]):
				case 34908:$points[1][23]=1;break;
				case 34909:$points[1][23]=2;break;
				case 34910:$points[1][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==45234 || $char_talents["spell"]==45243 || $char_talents["spell"]==45244)
			{
				switch ($char_talents["spell"]):
				case 45234:$points[1][25]=1;break;
				case 45243:$points[1][25]=2;break;
				case 45244:$points[1][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==10060)
			{
				$points[1][26]=1;
			}

		if($char_talents["spell"]==63504 || $char_talents["spell"]==63505 || $char_talents["spell"]==63506)
			{
				switch ($char_talents["spell"]):
				case 63504:$points[1][27]=1;break;
				case 63505:$points[1][27]=2;break;
				case 63506:$points[1][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==57470 || $char_talents["spell"]==57472)
			{
				switch ($char_talents["spell"]):
				case 57470:$points[1][29]=1;break;
				case 57472:$points[1][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==47535 || $char_talents["spell"]==47536 || $char_talents["spell"]==47537)
			{
				switch ($char_talents["spell"]):
				case 47535:$points[1][30]=1;break;
				case 47536:$points[1][30]=2;break;
				case 47537:$points[1][30]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47507 || $char_talents["spell"]==47508)
			{
				switch ($char_talents["spell"]):
				case 47507:$points[1][31]=1;break;
				case 47508:$points[1][31]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==47509 || $char_talents["spell"]==47511 || $char_talents["spell"]==47515)
			{
				switch ($char_talents["spell"]):
				case 47509:$points[1][33]=1;break;
				case 47511:$points[1][33]=2;break;
				case 47515:$points[1][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==33206)
			{
				$points[1][34]=1;
			}

		if($char_talents["spell"]==47516 || $char_talents["spell"]==47517)
			{
				switch ($char_talents["spell"]):
				case 47516:$points[1][35]=1;break;
				case 47517:$points[1][35]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==52795 || $char_talents["spell"]==52797 || $char_talents["spell"]==52798 || $char_talents["spell"]==52799 || $char_talents["spell"]==52800)
			{
				switch ($char_talents["spell"]):
				case 52795:$points[1][38]=1;break;
				case 52797:$points[1][38]=2;break;
				case 52798:$points[1][38]=3;break;
				case 52799:$points[1][38]=4;break;
				case 52800:$points[1][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47540)
			{
				$points[1][42]=1;
			}

	//Tree 2
		if($char_talents["spell"]==14913 || $char_talents["spell"]==15012)
			{
				switch ($char_talents["spell"]):
				case 14913:$points[2][1]=1;break;
				case 15012:$points[2][1]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14908 || $char_talents["spell"]==15020 || $char_talents["spell"]==17191)
			{
				switch ($char_talents["spell"]):
				case 14908:$points[2][2]=1;break;
				case 15020:$points[2][2]=2;break;
				case 17191:$points[2][2]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14889 || $char_talents["spell"]==15008 || $char_talents["spell"]==15009 || $char_talents["spell"]==15010 || $char_talents["spell"]==15011)
			{
				switch ($char_talents["spell"]):
				case 14889:$points[2][3]=1;break;
				case 15008:$points[2][3]=2;break;
				case 15009:$points[2][3]=3;break;
				case 15010:$points[2][3]=4;break;
				case 15011:$points[2][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==27900 || $char_talents["spell"]==27901 || $char_talents["spell"]==27902 || $char_talents["spell"]==27903 || $char_talents["spell"]==27904)
			{
				switch ($char_talents["spell"]):
				case 27900:$points[2][6]=1;break;
				case 27901:$points[2][6]=2;break;
				case 27902:$points[2][6]=3;break;
				case 27903:$points[2][6]=4;break;
				case 27904:$points[2][6]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==18530 || $char_talents["spell"]==18531 || $char_talents["spell"]==18533 || $char_talents["spell"]==18534 || $char_talents["spell"]==18535)
			{
				switch ($char_talents["spell"]):
				case 18530:$points[2][7]=1;break;
				case 18531:$points[2][7]=2;break;
				case 18533:$points[2][7]=3;break;
				case 18534:$points[2][7]=4;break;
				case 18535:$points[2][7]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==19236)
			{
				$points[2][9]=1;
			}

		if($char_talents["spell"]==27811 || $char_talents["spell"]==27815 || $char_talents["spell"]==27816)
			{
				switch ($char_talents["spell"]):
				case 27811:$points[2][10]=1;break;
				case 27815:$points[2][10]=2;break;
				case 27816:$points[2][10]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14892 || $char_talents["spell"]==15362 || $char_talents["spell"]==15363)
			{
				switch ($char_talents["spell"]):
				case 14892:$points[2][12]=1;break;
				case 15362:$points[2][12]=2;break;
				case 15363:$points[2][12]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==27789 || $char_talents["spell"]==27790)
			{
				switch ($char_talents["spell"]):
				case 27789:$points[2][13]=1;break;
				case 27790:$points[2][13]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14912 || $char_talents["spell"]==15013 || $char_talents["spell"]==15014)
			{
				switch ($char_talents["spell"]):
				case 14912:$points[2][14]=1;break;
				case 15013:$points[2][14]=2;break;
				case 15014:$points[2][14]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14909 || $char_talents["spell"]==15017)
			{
				switch ($char_talents["spell"]):
				case 14909:$points[2][15]=1;break;
				case 15017:$points[2][15]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14911 || $char_talents["spell"]==15018)
			{
				switch ($char_talents["spell"]):
				case 14911:$points[2][17]=1;break;
				case 15018:$points[2][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==20711)
			{
				$points[2][18]=1;
			}

		if($char_talents["spell"]==14901 || $char_talents["spell"]==15028 || $char_talents["spell"]==15029 || $char_talents["spell"]==15030 || $char_talents["spell"]==15031)
			{
				switch ($char_talents["spell"]):
				case 14901:$points[2][19]=1;break;
				case 15028:$points[2][19]=2;break;
				case 15029:$points[2][19]=3;break;
				case 15030:$points[2][19]=4;break;
				case 15031:$points[2][19]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==33150 || $char_talents["spell"]==33154)
			{
				switch ($char_talents["spell"]):
				case 33150:$points[2][21]=1;break;
				case 33154:$points[2][21]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==14898 || $char_talents["spell"]==15349 || $char_talents["spell"]==15354 || $char_talents["spell"]==15355 || $char_talents["spell"]==15356)
			{
				switch ($char_talents["spell"]):
				case 14898:$points[2][23]=1;break;
				case 15349:$points[2][23]=2;break;
				case 15354:$points[2][23]=3;break;
				case 15355:$points[2][23]=4;break;
				case 15356:$points[2][23]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==34753 || $char_talents["spell"]==34859 || $char_talents["spell"]==34860)
			{
				switch ($char_talents["spell"]):
				case 34753:$points[2][25]=1;break;
				case 34859:$points[2][25]=2;break;
				case 34860:$points[2][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==724)
			{
				$points[2][26]=1;
			}

		if($char_talents["spell"]==33142 || $char_talents["spell"]==33145 || $char_talents["spell"]==33146)
			{
				switch ($char_talents["spell"]):
				case 33142:$points[2][27]=1;break;
				case 33145:$points[2][27]=2;break;
				case 33146:$points[2][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==64127 || $char_talents["spell"]==64129)
			{
				switch ($char_talents["spell"]):
				case 64127:$points[2][29]=1;break;
				case 64129:$points[2][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==33158 || $char_talents["spell"]==33159 || $char_talents["spell"]==33160 || $char_talents["spell"]==33161 || $char_talents["spell"]==33162)
			{
				switch ($char_talents["spell"]):
				case 33158:$points[2][30]=1;break;
				case 33159:$points[2][30]=2;break;
				case 33160:$points[2][30]=3;break;
				case 33161:$points[2][30]=4;break;
				case 33162:$points[2][30]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==63730 || $char_talents["spell"]==63733 || $char_talents["spell"]==63737)
			{
				switch ($char_talents["spell"]):
				case 63730:$points[2][31]=1;break;
				case 63733:$points[2][31]=2;break;
				case 63737:$points[2][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==63534 || $char_talents["spell"]==63542 || $char_talents["spell"]==63543)
			{
				switch ($char_talents["spell"]):
				case 63534:$points[2][33]=1;break;
				case 63542:$points[2][33]=2;break;
				case 63543:$points[2][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==34861)
			{
				$points[2][34]=1;
			}

		if($char_talents["spell"]==47558 || $char_talents["spell"]==47559 || $char_talents["spell"]==47560)
			{
				switch ($char_talents["spell"]):
				case 47588:$points[2][35]=1;break;
				case 47599:$points[2][35]=2;break;
				case 47560:$points[2][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47562 || $char_talents["spell"]==47564 || $char_talents["spell"]==47565 || $char_talents["spell"]==47566 || $char_talents["spell"]==47567)
			{
				switch ($char_talents["spell"]):
				case 47562:$points[2][38]=1;break;
				case 47564:$points[2][38]=2;break;
				case 47565:$points[2][38]=3;break;
				case 47566:$points[2][38]=4;break;
				case 47567:$points[2][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47788)
			{
				$points[2][42]=1;
			}

	//Tree 3
		if($char_talents["spell"]==15270 || $char_talents["spell"]==15335 || $char_talents["spell"]==15336)
			{
				switch ($char_talents["spell"]):
				case 15270:$points[3][1]=1;break;
				case 15335:$points[3][1]=2;break;
				case 15336:$points[3][1]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==15337 || $char_talents["spell"]==15338)
			{
				switch ($char_talents["spell"]):
				case 15337:$points[3][2]=1;break;
				case 15338:$points[3][2]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==15259 || $char_talents["spell"]==15307 || $char_talents["spell"]==15308 || $char_talents["spell"]==15309 || $char_talents["spell"]==15310)
			{
				switch ($char_talents["spell"]):
				case 15259:$points[3][3]=1;break;
				case 15307:$points[3][3]=2;break;
				case 15308:$points[3][3]=3;break;
				case 15309:$points[3][3]=4;break;
				case 15310:$points[3][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==15318 || $char_talents["spell"]==15272 || $char_talents["spell"]==15320)
			{
				switch ($char_talents["spell"]):
				case 15318:$points[3][5]=1;break;
				case 15272:$points[3][5]=2;break;
				case 15320:$points[3][5]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==15275 || $char_talents["spell"]==15317)
			{
				switch ($char_talents["spell"]):
				case 15275:$points[3][6]=1;break;
				case 15317:$points[3][6]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==15260 || $char_talents["spell"]==15327 || $char_talents["spell"]==15328)
			{
				switch ($char_talents["spell"]):
				case 15260:$points[3][7]=1;break;
				case 15327:$points[3][7]=2;break;
				case 15328:$points[3][7]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==15392 || $char_talents["spell"]==15448)
			{
				switch ($char_talents["spell"]):
				case 15392:$points[3][9]=1;break;
				case 15448:$points[3][9]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==15273 || $char_talents["spell"]==15312 || $char_talents["spell"]==15313 || $char_talents["spell"]==15314 || $char_talents["spell"]==15316)
			{
				switch ($char_talents["spell"]):
				case 15273:$points[3][10]=1;break;
				case 15312:$points[3][10]=2;break;
				case 15313:$points[3][10]=3;break;
				case 15314:$points[3][10]=4;break;
				case 15316:$points[3][10]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==15407)
			{
				$points[3][11]=1;
			}

		if($char_talents["spell"]==15274 || $char_talents["spell"]==15311)
			{
				switch ($char_talents["spell"]):
				case 15274:$points[3][14]=1;break;
				case 15311:$points[3][14]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17322 || $char_talents["spell"]==17323)
			{
				switch ($char_talents["spell"]):
				case 17322:$points[3][15]=1;break;
				case 17323:$points[3][15]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==15257 || $char_talents["spell"]==15331 || $char_talents["spell"]==15332)
			{
				switch ($char_talents["spell"]):
				case 15257:$points[3][16]=1;break;
				case 15331:$points[3][16]=2;break;
				case 15332:$points[3][16]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==15487)
			{
				$points[3][17]=1;
			}

		if($char_talents["spell"]==15286)
			{
				$points[3][18]=1;
			}

		if($char_talents["spell"]==27839 || $char_talents["spell"]==27840)
			{
				switch ($char_talents["spell"]):
				case 27839:$points[3][19]=1;break;
				case 27840:$points[3][19]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==33213 || $char_talents["spell"]==33214 || $char_talents["spell"]==33215)
			{
				switch ($char_talents["spell"]):
				case 33213:$points[3][20]=1;break;
				case 33214:$points[3][20]=2;break;
				case 33215:$points[3][20]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==14910 || $char_talents["spell"]==33371)
			{
				switch ($char_talents["spell"]):
				case 14910:$points[3][21]=1;break;
				case 33371:$points[3][21]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==63625 || $char_talents["spell"]==63626 || $char_talents["spell"]==63627)
			{
				switch ($char_talents["spell"]):
				case 63625:$points[3][23]=1;break;
				case 63626:$points[3][23]=2;break;
				case 63627:$points[3][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==15473)
			{
				$points[3][26]=1;
			}

		if($char_talents["spell"]==33221 || $char_talents["spell"]==33222 || $char_talents["spell"]==33223 || $char_talents["spell"]==33224 || $char_talents["spell"]==33225)
			{
				switch ($char_talents["spell"]):
				case 33221:$points[3][27]=1;break;
				case 33222:$points[3][27]=2;break;
				case 33223:$points[3][27]=3;break;
				case 33224:$points[3][27]=4;break;
				case 33225:$points[3][27]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47569 || $char_talents["spell"]==47570)
			{
				switch ($char_talents["spell"]):
				case 47569:$points[3][29]=1;break;
				case 47570:$points[3][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==33191 || $char_talents["spell"]==33192 || $char_talents["spell"]==33193)
			{
				switch ($char_talents["spell"]):
				case 33191:$points[3][31]=1;break;
				case 33192:$points[3][31]=2;break;
				case 33193:$points[3][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==64044)
			{
				$points[3][33]=1;
			}

		if($char_talents["spell"]==34914)
			{
				$points[3][34]=1;
			}

		if($char_talents["spell"]==47580 || $char_talents["spell"]==47581 || $char_talents["spell"]==47582)
			{
				switch ($char_talents["spell"]):
				case 47580:$points[3][35]=1;break;
				case 47581:$points[3][35]=2;break;
				case 47582:$points[3][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==47573 || $char_talents["spell"]==47577 || $char_talents["spell"]==47578 || $char_talents["spell"]==51166|| $char_talents["spell"]==51167)
			{
				switch ($char_talents["spell"]):
				case 47573:$points[3][39]=1;break;
				case 47577:$points[3][39]=2;break;
				case 47578:$points[3][39]=3;break;
				case 51166:$points[3][39]=4;break;
				case 51167:$points[3][39]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==47585)
			{
				$points[3][42]=1;
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
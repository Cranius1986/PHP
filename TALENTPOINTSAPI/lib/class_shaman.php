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
//SHAMAN
$path="shaman";
$points=array();
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{
	//Tree 1
		if($char_talents["spell"]==16039|| $char_talents["spell"]==16109 || $char_talents["spell"]==16110 || $char_talents["spell"]==16111 || $char_talents["spell"]==16112)
			{
				switch ($char_talents["spell"]):
				case 16039:$points[1][2]=1;break;
				case 16109:$points[1][2]=2;break;
				case 16110:$points[1][2]=3;break;
				case 16111:$points[1][2]=4;break;
				case 16112:$points[1][2]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16035 || $char_talents["spell"]==16105 || $char_talents["spell"]==16106 || $char_talents["spell"]==16107 || $char_talents["spell"]==16108)
			{
				switch ($char_talents["spell"]):
				case 16035:$points[1][3]=1;break;
				case 16105:$points[1][3]=2;break;
				case 16106:$points[1][3]=3;break;
				case 16107:$points[1][3]=4;break;
				case 16108:$points[1][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16038 || $char_talents["spell"]==16160 || $char_talents["spell"]==16161)
			{
				switch ($char_talents["spell"]):
				case 16038:$points[1][5]=1;break;
				case 16160:$points[1][5]=2;break;
				case 16161:$points[1][5]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==28996 || $char_talents["spell"]==28997 || $char_talents["spell"]==28998)
			{
				switch ($char_talents["spell"]):
				case 28996:$points[1][6]=1;break;
				case 28997:$points[1][6]=2;break;
				case 28998:$points[1][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30160 || $char_talents["spell"]==29179 || $char_talents["spell"]==29180)
			{
				switch ($char_talents["spell"]):
				case 30160:$points[1][7]=1;break;
				case 29179:$points[1][7]=2;break;
				case 29180:$points[1][7]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16040 || $char_talents["spell"]==16113 || $char_talents["spell"]==16114 || $char_talents["spell"]==16115 || $char_talents["spell"]==16116)
			{
				switch ($char_talents["spell"]):
				case 16040:$points[1][9]=1;break;
				case 16113:$points[1][9]=2;break;
				case 16114:$points[1][9]=3;break;
				case 16115:$points[1][9]=4;break;
				case 16116:$points[1][9]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16164)
			{
				$points[1][10]=1;
			}

		if($char_talents["spell"]==16089 || $char_talents["spell"]==60184 || $char_talents["spell"]==60185 || $char_talents["spell"]==60187 || $char_talents["spell"]==60188)
			{
				switch ($char_talents["spell"]):
				case 16089:$points[1][11]=1;break;
				case 60184:$points[1][11]=2;break;
				case 60185:$points[1][11]=3;break;
				case 60187:$points[1][11]=4;break;
				case 60188:$points[1][11]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16086 || $char_talents["spell"]==16544)
			{
				switch ($char_talents["spell"]):
				case 16086:$points[1][13]=1;break;
				case 16544:$points[1][13]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==29062 || $char_talents["spell"]==29064 || $char_talents["spell"]==29065)
			{
				switch ($char_talents["spell"]):
				case 29062:$points[1][16]=1;break;
				case 29064:$points[1][16]=2;break;
				case 29065:$points[1][16]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==28999 || $char_talents["spell"]==29000)
			{
				switch ($char_talents["spell"]):
				case 28999:$points[1][17]=1;break;
				case 29000:$points[1][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==16041)
			{
				$points[1][18]=1;
			}

		if($char_talents["spell"]==30664 || $char_talents["spell"]==30665 || $char_talents["spell"]==30666)
			{
				switch ($char_talents["spell"]):
				case 30664:$points[1][20]=1;break;
				case 30665:$points[1][20]=2;break;
				case 30666:$points[1][20]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30672 || $char_talents["spell"]==30673 || $char_talents["spell"]==30674)
			{
				switch ($char_talents["spell"]):
				case 30672:$points[1][21]=1;break;
				case 30673:$points[1][21]=2;break;
				case 30674:$points[1][21]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16578 || $char_talents["spell"]==16579 || $char_talents["spell"]==16580 || $char_talents["spell"]==16581 || $char_talents["spell"]==16582)
			{
				switch ($char_talents["spell"]):
				case 16578:$points[1][23]=1;break;
				case 16579:$points[1][23]=2;break;
				case 16580:$points[1][23]=3;break;
				case 16581:$points[1][23]=4;break;
				case 16582:$points[1][23]=5;break;
				endswitch;
			}


		if($char_talents["spell"]==16166)
			{
				$points[1][26]=1;
			}

		if($char_talents["spell"]==51483 || $char_talents["spell"]==51485 || $char_talents["spell"]==51486)
			{
				switch ($char_talents["spell"]):
				case 51483:$points[1][27]=1;break;
				case 51485:$points[1][27]=2;break;
				case 51486:$points[1][27]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==63370 || $char_talents["spell"]==63372)
			{
				switch ($char_talents["spell"]):
				case 63370:$points[1][29]=1;break;
				case 63372:$points[1][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51466 || $char_talents["spell"]==51470)
			{
				switch ($char_talents["spell"]):
				case 51466:$points[1][30]=1;break;
				case 51470:$points[1][30]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30675 || $char_talents["spell"]==30678 || $char_talents["spell"]==30679)
			{
				switch ($char_talents["spell"]):
				case 30675:$points[1][31]=1;break;
				case 30678:$points[1][31]=2;break;
				case 30679:$points[1][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51474 || $char_talents["spell"]==51478 || $char_talents["spell"]==51479)
			{
				switch ($char_talents["spell"]):
				case 51474:$points[1][33]=1;break;
				case 51478:$points[1][33]=2;break;
				case 51479:$points[1][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30706)
			{
				$points[1][34]=1;
			}

		if($char_talents["spell"]==51480 || $char_talents["spell"]==51481 || $char_talents["spell"]==51482)
			{
				switch ($char_talents["spell"]):
				case 51480:$points[1][35]=1;break;
				case 51481:$points[1][35]=2;break;
				case 51482:$points[1][35]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==62097 || $char_talents["spell"]==62098 || $char_talents["spell"]==62099 || $char_talents["spell"]==62100 || $char_talents["spell"]==62101)
			{
				switch ($char_talents["spell"]):
				case 62097:$points[1][38]=1;break;
				case 62098:$points[1][38]=2;break;
				case 62099:$points[1][38]=3;break;
				case 62100:$points[1][38]=4;break;
				case 62101:$points[1][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51490)
			{
				$points[1][42]=1;
			}

	//Tree 2
		if($char_talents["spell"]==16259 || $char_talents["spell"]==16295 || $char_talents["spell"]==52456)
			{
				switch ($char_talents["spell"]):
				case 16259:$points[2][1]=1;break;
				case 16295:$points[2][1]=2;break;
				case 52456:$points[2][1]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16043 || $char_talents["spell"]==16130)
			{
				switch ($char_talents["spell"]):
				case 16043:$points[2][2]=1;break;
				case 16130:$points[2][2]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==17485 || $char_talents["spell"]==17486 || $char_talents["spell"]==17487 || $char_talents["spell"]==17488 || $char_talents["spell"]==17489)
			{
				switch ($char_talents["spell"]):
				case 17485:$points[2][3]=1;break;
				case 17486:$points[2][3]=2;break;
				case 17487:$points[2][3]=3;break;
				case 17488:$points[2][3]=4;break;
				case 17489:$points[2][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16258 || $char_talents["spell"]==16293)
			{
				switch ($char_talents["spell"]):
				case 16258:$points[2][5]=1;break;
				case 16293:$points[2][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==16255 || $char_talents["spell"]==16302 || $char_talents["spell"]==16303 || $char_talents["spell"]==16304 || $char_talents["spell"]==16305)
			{
				switch ($char_talents["spell"]):
				case 16255:$points[2][6]=1;break;
				case 16302:$points[2][6]=2;break;
				case 16303:$points[2][6]=3;break;
				case 16304:$points[2][6]=4;break;
				case 16305:$points[2][6]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16262 || $char_talents["spell"]==16287)
			{
				switch ($char_talents["spell"]):
				case 16262:$points[2][7]=1;break;
				case 16287:$points[2][7]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==16261 || $char_talents["spell"]==16290 || $char_talents["spell"]==51881)
			{
				switch ($char_talents["spell"]):
				case 16261:$points[2][8]=1;break;
				case 16290:$points[2][8]=2;break;
				case 51881:$points[2][8]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16266 || $char_talents["spell"]==29079 || $char_talents["spell"]==29080)
			{
				switch ($char_talents["spell"]):
				case 16266:$points[2][9]=1;break;
				case 29079:$points[2][9]=2;break;
				case 29080:$points[2][9]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==43338)
			{
				$points[2][11]=1;
			}

		if($char_talents["spell"]==16254 || $char_talents["spell"]==16271 || $char_talents["spell"]==16272)
			{
				switch ($char_talents["spell"]):
				case 16254:$points[2][12]=1;break;
				case 16271:$points[2][12]=2;break;
				case 16272:$points[2][12]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16256 || $char_talents["spell"]==16281 || $char_talents["spell"]==16282 || $char_talents["spell"]==16283 || $char_talents["spell"]==16284)
			{
				switch ($char_talents["spell"]):
				case 16256:$points[2][14]=1;break;
				case 16281:$points[2][14]=2;break;
				case 16282:$points[2][14]=3;break;
				case 16283:$points[2][14]=4;break;
				case 16284:$points[2][14]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16252 || $char_talents["spell"]==16306 || $char_talents["spell"]==16307 || $char_talents["spell"]==16308 || $char_talents["spell"]==16309)
			{
				switch ($char_talents["spell"]):
				case 16252:$points[2][15]=1;break;
				case 16306:$points[2][15]=2;break;
				case 16307:$points[2][15]=3;break;
				case 16308:$points[2][15]=4;break;
				case 16309:$points[2][15]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==29192 || $char_talents["spell"]==29193)
			{
				switch ($char_talents["spell"]):
				case 29192:$points[2][17]=1;break;
				case 29193:$points[2][17]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==16268)
			{
				$points[2][18]=1;
			}

		if($char_talents["spell"]==51883 || $char_talents["spell"]==51884 || $char_talents["spell"]==51885)
			{
				switch ($char_talents["spell"]):
				case 51883:$points[2][19]=1;break;
				case 51884:$points[2][19]=2;break;
				case 51885:$points[2][19]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30802 || $char_talents["spell"]==30808 || $char_talents["spell"]==30809)
			{
				switch ($char_talents["spell"]):
				case 30802:$points[2][21]=1;break;
				case 30808:$points[2][21]=2;break;
				case 30809:$points[2][21]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==29082 || $char_talents["spell"]==29084 || $char_talents["spell"]==29086)
			{
				switch ($char_talents["spell"]):
				case 29082:$points[2][23]=1;break;
				case 29084:$points[2][23]=2;break;
				case 29086:$points[2][23]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==63373 || $char_talents["spell"]==63374)
			{
				switch ($char_talents["spell"]):
				case 63373:$points[2][24]=1;break;
				case 63374:$points[2][24]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30816 || $char_talents["spell"]==30818 || $char_talents["spell"]==30819)
			{
				switch ($char_talents["spell"]):
				case 30816:$points[2][25]=1;break;
				case 30818:$points[2][25]=2;break;
				case 30819:$points[2][25]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30798)
			{
				$points[2][26]=1;
			}

		if($char_talents["spell"]==17364)
			{
				$points[2][27]=1;
			}

		if($char_talents["spell"]==51525 || $char_talents["spell"]==51526 || $char_talents["spell"]==51527)
			{
				switch ($char_talents["spell"]):
				case 51525:$points[2][29]=1;break;
				case 51526:$points[2][29]=2;break;
				case 51527:$points[2][29]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==60103)
			{
				$points[2][30]=1;
			}

		if($char_talents["spell"]==51521 || $char_talents["spell"]==51522)
			{
				switch ($char_talents["spell"]):
				case 51521:$points[2][31]=1;break;
				case 51522:$points[2][31]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30812 || $char_talents["spell"]==30813 || $char_talents["spell"]==30814)
			{
				switch ($char_talents["spell"]):
				case 30812:$points[2][33]=1;break;
				case 30813:$points[2][33]=2;break;
				case 30814:$points[2][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==30823)
			{
				$points[2][34]=1;
			}

		if($char_talents["spell"]==51523 || $char_talents["spell"]==51524)
			{
				switch ($char_talents["spell"]):
				case 51523:$points[2][35]=1;break;
				case 51524:$points[2][35]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51528 || $char_talents["spell"]==51529 || $char_talents["spell"]==51530 || $char_talents["spell"]==51531 || $char_talents["spell"]==51532)
			{
				switch ($char_talents["spell"]):
				case 51528:$points[2][38]=1;break;
				case 51529:$points[2][38]=2;break;
				case 51530:$points[2][38]=3;break;
				case 51531:$points[2][38]=4;break;
				case 51532:$points[2][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==51533)
			{
				$points[2][42]=1;
			}

	//Tree 3
		if($char_talents["spell"]==16182 || $char_talents["spell"]==16226 || $char_talents["spell"]==16227 || $char_talents["spell"]==16228 || $char_talents["spell"]==16229)
			{
				switch ($char_talents["spell"]):
				case 16182:$points[3][2]=1;break;
				case 16226:$points[3][2]=2;break;
				case 16227:$points[3][2]=3;break;
				case 16228:$points[3][2]=4;break;
				case 16229:$points[3][2]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16173 || $char_talents["spell"]==16222 || $char_talents["spell"]==16223 || $char_talents["spell"]==16224 || $char_talents["spell"]==16225)
			{
				switch ($char_talents["spell"]):
				case 16173:$points[3][3]=1;break;
				case 16222:$points[3][3]=2;break;
				case 16223:$points[3][3]=3;break;
				case 16334:$points[3][3]=4;break;
				case 16225:$points[3][3]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16184 || $char_talents["spell"]==16209)
			{
				switch ($char_talents["spell"]):
				case 16184:$points[3][5]=1;break;
				case 16209:$points[3][5]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==29187 || $char_talents["spell"]==29189 || $char_talents["spell"]==29191)
			{
				switch ($char_talents["spell"]):
				case 29187:$points[3][6]=1;break;
				case 29189:$points[3][6]=2;break;
				case 29191:$points[3][6]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16179 || $char_talents["spell"]==16214 || $char_talents["spell"]==16215 || $char_talents["spell"]==16216 || $char_talents["spell"]==16217)
			{
				switch ($char_talents["spell"]):
				case 16179:$points[3][7]=1;break;
				case 16214:$points[3][7]=2;break;
				case 16215:$points[3][7]=3;break;
				case 16216:$points[3][7]=4;break;
				case 16217:$points[3][7]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16180 || $char_talents["spell"]==16196 || $char_talents["spell"]==16198)
			{
				switch ($char_talents["spell"]):
				case 16180:$points[3][9]=1;break;
				case 16196:$points[3][9]=2;break;
				case 16198:$points[3][9]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16181 || $char_talents["spell"]==16230 || $char_talents["spell"]==16232)
			{
				switch ($char_talents["spell"]):
				case 16181:$points[3][10]=1;break;
				case 16230:$points[3][10]=2;break;
				case 16232:$points[3][10]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==55198)
			{
				$points[3][11]=1;
			}

		if($char_talents["spell"]==16176 || $char_talents["spell"]==16235 || $char_talents["spell"]==16240)
			{
				switch ($char_talents["spell"]):
				case 16176:$points[3][12]=1;break;
				case 16235:$points[3][12]=2;break;
				case 16240:$points[3][12]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16187 || $char_talents["spell"]==16205 || $char_talents["spell"]==16206)
			{
				switch ($char_talents["spell"]):
				case 16187:$points[3][14]=1;break;
				case 16205:$points[3][14]=2;break;
				case 16206:$points[3][14]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16194 || $char_talents["spell"]==16218 || $char_talents["spell"]==16219 || $char_talents["spell"]==16220 || $char_talents["spell"]==16221)
			{
				switch ($char_talents["spell"]):
				case 16194:$points[3][15]=1;break;
				case 16218:$points[3][15]=2;break;
				case 16219:$points[3][15]=3;break;
				case 16220:$points[3][15]=4;break;
				case 16221:$points[3][15]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==29206 || $char_talents["spell"]==29205 || $char_talents["spell"]==29202)
			{
				switch ($char_talents["spell"]):
				case 29206:$points[3][17]=1;break;
				case 29206:$points[3][17]=2;break;
				case 29202:$points[3][17]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16188)
			{
				$points[3][19]=1;
			}

		if($char_talents["spell"]==30864 || $char_talents["spell"]==30865 || $char_talents["spell"]==30866)
			{
				switch ($char_talents["spell"]):
				case 30864:$points[3][20]=1;break;
				case 30865:$points[3][20]=2;break;
				case 30866:$points[3][20]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==16178 || $char_talents["spell"]==16210 || $char_talents["spell"]==16211 || $char_talents["spell"]==16212 || $char_talents["spell"]==16213)
			{
				switch ($char_talents["spell"]):
				case 16178:$points[3][23]=1;break;
				case 16210:$points[3][23]=2;break;
				case 16211:$points[3][23]=3;break;
				case 16212:$points[3][23]=4;break;
				case 16213:$points[3][23]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==30881 || $char_talents["spell"]==30883 || $char_talents["spell"]==30884 || $char_talents["spell"]==30885 || $char_talents["spell"]==30886)
			{
				switch ($char_talents["spell"]):
				case 30881:$points[3][25]=1;break;
				case 30883:$points[3][25]=2;break;
				case 30884:$points[3][25]=3;break;
				case 30885:$points[3][25]=4;break;
				case 30886:$points[3][25]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==16190)
			{
				$points[3][26]=1;
			}

		if($char_talents["spell"]==51886)
			{
				$points[3][27]=1;
			}

		if($char_talents["spell"]==51544 || $char_talents["spell"]==51555)
			{
				switch ($char_talents["spell"]):
				case 51554:$points[3][29]=1;break;
				case 51555:$points[3][29]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30872 || $char_talents["spell"]==30873)
			{
				switch ($char_talents["spell"]):
				case 30872:$points[3][30]=1;break;
				case 30873:$points[3][30]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==30867 || $char_talents["spell"]==30868 || $char_talents["spell"]==30869)
			{
				switch ($char_talents["spell"]):
				case 30867:$points[3][31]=1;break;
				case 30868:$points[3][31]=2;break;
				case 30869:$points[3][31]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==51556 || $char_talents["spell"]==51557 || $char_talents["spell"]==51558)
			{
				switch ($char_talents["spell"]):
				case 51556:$points[3][33]=1;break;
				case 51557:$points[3][33]=2;break;
				case 51558:$points[3][33]=3;break;
				endswitch;
			}

		if($char_talents["spell"]==974)
			{
				$points[3][34]=1;
			}

		if($char_talents["spell"]==51560 || $char_talents["spell"]==51561)
			{
				switch ($char_talents["spell"]):
				case 51560:$points[3][35]=1;break;
				case 51561:$points[3][35]=2;break;
				endswitch;
			}

		if($char_talents["spell"]==51562 || $char_talents["spell"]==51563 || $char_talents["spell"]==51564 || $char_talents["spell"]==51565 || $char_talents["spell"]==51566)
			{
				switch ($char_talents["spell"]):
				case 51562:$points[3][38]=1;break;
				case 51563:$points[3][38]=2;break;
				case 51564:$points[3][38]=3;break;
				case 51565:$points[3][38]=4;break;
				case 51566:$points[3][38]=5;break;
				endswitch;
			}

		if($char_talents["spell"]==61295)
			{
				$points[3][42]=1;
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
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
//HUNTER
$path="hunter";
$tree=array();
$points=array();
//
//EMPTY ICONS
for($i=0;$i<=44;$i++)
{
	if(file_exists("img/".$path."/1/".$i."_grey.jpg"))
		{
			$tree[1][$i] = "<img class='icon' style='border:2px solid #000000;' src='img/".$path."/1/".$i."_grey.jpg' alt=''/>";
		}
	if(file_exists("img/".$path."/2/".$i."_grey.jpg"))
		{
			$tree[2][$i] = "<img class='icon' style='border:2px solid #000000;' src='img/".$path."/2/".$i."_grey.jpg' alt=''/>";
		}
	if(file_exists("img/".$path."/3/".$i."_grey.jpg"))
		{
			$tree[3][$i] = "<img class='icon' style='border:2px solid #000000;' src='img/".$path."/3/".$i."_grey.jpg' alt=''/>";
		}
}		
//
//INIT CLASS SCRIPT
while($char_talents=@mysql_fetch_array($sql2))
{	$color="#32CD32";
	$color2="#FFD700";
	//Tree 1
		if($char_talents["spell"]==19552 || $char_talents["spell"]==19553 || $char_talents["spell"]==19554 || $char_talents["spell"]==19555 || $char_talents["spell"]==19556)
			{
				switch ($char_talents["spell"]):
				case 19552:$points[1][2]=1;break;
				case 19553:$points[1][2]=2;break;
				case 19554:$points[1][2]=3;break;
				case 19555:$points[1][2]=4;break;
				case 19556:$points[1][2]=5;$color=$color2;break;
				endswitch;
				$tree[1][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19583 || $char_talents["spell"]==19584 || $char_talents["spell"]==19585 || $char_talents["spell"]==19586 || $char_talents["spell"]==19587)
			{
				switch ($char_talents["spell"]):
				default:$points[1][3]=1;break;
				case 19583:$points[1][3]=1;break;
				case 19584:$points[1][3]=2;break;
				case 19585:$points[1][3]=3;break;
				case 19586:$points[1][3]=4;break;
				case 19587:$points[1][3]=5;$color=$color2;break;
				endswitch;
				$tree[1][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35029 || $char_talents["spell"]==35030)
			{
				switch ($char_talents["spell"]):
				case 35029:$points[1][5]=1;break;
				case 35030:$points[1][5]=2;$color=$color2;break;
				endswitch;
				$tree[1][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][5]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19549 || $char_talents["spell"]==19550 || $char_talents["spell"]==19551)
			{
				switch ($char_talents["spell"]):
				case 19549:$points[1][6]=1;break;
				case 19550:$points[1][6]=2;break;
				case 19551:$points[1][6]=3;$color=$color2;break;
				endswitch;
				$tree[1][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19609 || $char_talents["spell"]==19610 || $char_talents["spell"]==19612)
			{
				switch ($char_talents["spell"]):
				case 19609:$points[1][7]=1;break;
				case 19610:$points[1][7]=2;break;
				case 19612:$points[1][7]=3;$color=$color2;break;
				endswitch;
				$tree[1][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==24443 || $char_talents["spell"]==19575)
			{
				switch ($char_talents["spell"]):
				case 24443:$points[1][8]=1;break;
				case 19575:$points[1][8]=2;$color=$color2;break;
				endswitch;
				$tree[1][8]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/8.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][8]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19559 || $char_talents["spell"]==19560)
			{
				switch ($char_talents["spell"]):
				case 19559:$points[1][9]=1;break;
				case 19560:$points[1][9]=2;$color=$color2;break;
				endswitch;
				$tree[1][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53265)
			{
				$points[1][10]=1;
				$color=$color2;
				$tree[1][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19616 || $char_talents["spell"]==19617 || $char_talents["spell"]==19618 || $char_talents["spell"]==19619 || $char_talents["spell"]==19620)
			{
				switch ($char_talents["spell"]):
				case 19616:$points[1][11]=1;break;
				case 19617:$points[1][11]=2;break;
				case 19618:$points[1][11]=3;break;
				case 19619:$points[1][11]=4;break;
				case 19620:$points[1][11]=5;$color=$color2;break;
				endswitch;
				$tree[1][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][11]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19572 || $char_talents["spell"]==19573)
			{
				switch ($char_talents["spell"]):
				case 19572:$points[1][14]=1;break;
				case 19573:$points[1][14]=2;$color=$color2;break;
				endswitch;
				$tree[1][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19598 || $char_talents["spell"]==19599 || $char_talents["spell"]==19600 || $char_talents["spell"]==19601 || $char_talents["spell"]==19602)
			{
				switch ($char_talents["spell"]):
				case 19598:$points[1][15]=1;break;
				case 19599:$points[1][15]=2;break;
				case 19600:$points[1][15]=3;break;
				case 19601:$points[1][15]=4;break;
				case 19602:$points[1][15]=5;$color=$color2;break;
				endswitch;
				$tree[1][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][15]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19578 || $char_talents["spell"]==20895)
			{
				switch ($char_talents["spell"]):
				case 19578:$points[1][17]=1;break;
				case 20895:$points[1][17]=2;$color=$color2;break;
				endswitch;
				$tree[1][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19577)
			{
				$points[1][18]=1;
				$color=$color2;
				$tree[1][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19590 || $char_talents["spell"]==19592)
			{
				switch ($char_talents["spell"]):
				case 19590:$points[1][20]=1;break;
				case 19592:$points[1][20]=2;$color=$color2;break;
				endswitch;
				$tree[1][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][20]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34453 || $char_talents["spell"]==34454)
			{
				switch ($char_talents["spell"]):
				case 34453:$points[1][21]=1;break;
				case 34454:$points[1][21]=2;$color=$color2;break;
				endswitch;
				$tree[1][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19621 || $char_talents["spell"]==19622 || $char_talents["spell"]==19623 || $char_talents["spell"]==19624 || $char_talents["spell"]==19625)
			{
				switch ($char_talents["spell"]):
				case 19621:$points[1][23]=1;break;
				case 19622:$points[1][23]=2;break;
				case 19623:$points[1][23]=3;break;
				case 19624:$points[1][23]=4;break;
				case 19625:$points[1][23]=5;$color=$color2;break;
				endswitch;
				$tree[1][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34455 || $char_talents["spell"]==34459 || $char_talents["spell"]==34460)
			{
				switch ($char_talents["spell"]):
				case 34455:$points[1][25]=1;break;
				case 34459:$points[1][25]=2;break;
				case 34460:$points[1][25]=3;$color=$color2;break;
				endswitch;
				$tree[1][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19574)
			{
				$points[1][26]=1;
				$color=$color2;
				$tree[1][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34462 || $char_talents["spell"]==34464 || $char_talents["spell"]==34465)
			{
				switch ($char_talents["spell"]):
				case 34462:$points[1][27]=1;break;
				case 34464:$points[1][27]=2;break;
				case 34465:$points[1][27]=3;$color=$color2;break;
				endswitch;
				$tree[1][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53252 || $char_talents["spell"]==53253)
			{
				switch ($char_talents["spell"]):
				case 53252:$points[1][29]=1;break;
				case 53253:$points[1][29]=2;$color=$color2;break;
				endswitch;
				$tree[1][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][29]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34466 || $char_talents["spell"]==34467 || $char_talents["spell"]==34468 || $char_talents["spell"]==34469 || $char_talents["spell"]==34470)
			{
				switch ($char_talents["spell"]):
				case 34466:$points[1][31]=1;break;
				case 34467:$points[1][31]=2;break;
				case 34468:$points[1][31]=3;break;
				case 34469:$points[1][31]=4;break;
				case 34470:$points[1][31]=5;$color=$color2;break;
				endswitch;
				$tree[1][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][31]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53262 || $char_talents["spell"]==53263 || $char_talents["spell"]==53264)
			{
				switch ($char_talents["spell"]):
				case 53262:$points[1][33]=1;break;
				case 53263:$points[1][33]=2;break;
				case 53264:$points[1][33]=3;$color=$color2;break;
				endswitch;
				$tree[1][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34692)
			{
				$points[1][34]=1;
				$color=$color2;
				$tree[1][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53256 || $char_talents["spell"]==53259 || $char_talents["spell"]==53260)
			{
				switch ($char_talents["spell"]):
				case 53256:$points[1][35]=1;break;
				case 53259:$points[1][35]=2;break;
				case 53260:$points[1][35]=3;$color=$color2;break;
				endswitch;
				$tree[1][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56314 || $char_talents["spell"]==56315 || $char_talents["spell"]==56316 || $char_talents["spell"]==56317 || $char_talents["spell"]==56318)
			{
				switch ($char_talents["spell"]):
				case 56314:$points[1][38]=1;break;
				case 56315:$points[1][38]=2;break;
				case 56316:$points[1][38]=3;break;
				case 56317:$points[1][38]=4;break;
				case 56318:$points[1][38]=5;$color=$color2;break;
				endswitch;
				$tree[1][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53270)
			{
				$points[1][42]=1;
				$color=$color2;
				$tree[1][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 2
		if($char_talents["spell"]==19407 || $char_talents["spell"]==19412)
			{
				switch ($char_talents["spell"]):
				case 19407:$points[2][1]=1;break;
				case 19412:$points[2][1]=2;$color=$color2;break;
				endswitch;
				$tree[2][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][1]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53620 || $char_talents["spell"]==53621 || $char_talents["spell"]==53622)
			{
				switch ($char_talents["spell"]):
				case 53620:$points[2][2]=1;break;
				case 53621:$points[2][2]=2;break;
				case 53622:$points[2][2]=3;$color=$color2;break;
				endswitch;
				$tree[2][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][2]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19426 || $char_talents["spell"]==19427 || $char_talents["spell"]==19429 || $char_talents["spell"]==19430 || $char_talents["spell"]==19431)
			{
				switch ($char_talents["spell"]):
				case 19426:$points[2][3]=1;break;
				case 19427:$points[2][3]=2;break;
				case 19429:$points[2][3]=3;break;
				case 19430:$points[2][3]=4;break;
				case 19431:$points[2][3]=5;$color=$color2;break;
				endswitch;
				$tree[2][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34482 || $char_talents["spell"]==34483 || $char_talents["spell"]==34484)
			{
				switch ($char_talents["spell"]):
				case 34482:$points[2][5]=1;break;
				case 34483:$points[2][5]=2;break;
				case 34484:$points[2][5]=3;$color=$color2;break;
				endswitch;
				$tree[2][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19421 || $char_talents["spell"]==19422 || $char_talents["spell"]==19423)
			{
				switch ($char_talents["spell"]):
				case 19421:$points[2][6]=1;break;
				case 19422:$points[2][6]=2;break;
				case 19423:$points[2][6]=3;$color=$color2;break;
				endswitch;
				$tree[2][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19485 || $char_talents["spell"]==19487 || $char_talents["spell"]==19488 || $char_talents["spell"]==19489 || $char_talents["spell"]==19490)
			{
				switch ($char_talents["spell"]):
				case 19485:$points[2][7]=1;break;
				case 19487:$points[2][7]=2;break;
				case 19488:$points[2][7]=3;break;
				case 19489:$points[2][7]=4;break;
				case 19490:$points[2][7]=5;$color=$color2;break;
				endswitch;
				$tree[2][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][7]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34950 || $char_talents["spell"]==34954)
			{
				switch ($char_talents["spell"]):
				case 34950:$points[2][9]=1;break;
				case 34954:$points[2][9]=2;$color=$color2;break;
				endswitch;
				$tree[2][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19454 || $char_talents["spell"]==19455 || $char_talents["spell"]==19456)
			{
				switch ($char_talents["spell"]):
				case 19454:$points[2][10]=1;break;
				case 19455:$points[2][10]=2;break;
				case 19456:$points[2][10]=3;$color=$color2;break;
				endswitch;
				$tree[2][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][10]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19434)
			{
				$points[2][11]=1;
				$color=$color2;
				$tree[2][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][11]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34948 || $char_talents["spell"]==34949)
			{
				switch ($char_talents["spell"]):
				case 34948:$points[2][12]=1;break;
				case 34949:$points[2][12]=2;$color=$color2;break;
				endswitch;
				$tree[2][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][12]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19464 || $char_talents["spell"]==19465 || $char_talents["spell"]==19466)
			{
				switch ($char_talents["spell"]):
				case 19464:$points[2][14]=1;break;
				case 19465:$points[2][14]=2;break;
				case 19466:$points[2][14]=3;$color=$color2;break;
				endswitch;
				$tree[2][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][14]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19416 || $char_talents["spell"]==19417 || $char_talents["spell"]==19418 || $char_talents["spell"]==19419 || $char_talents["spell"]==19420)
			{
				switch ($char_talents["spell"]):
				case 19416:$points[2][15]=1;break;
				case 19417:$points[2][15]=2;break;
				case 19418:$points[2][15]=3;break;
				case 19419:$points[2][15]=4;break;
				case 19420:$points[2][15]=5;$color=$color2;break;
				endswitch;
				$tree[2][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][15]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35100 || $char_talents["spell"]==35102)
			{
				switch ($char_talents["spell"]):
				case 35100:$points[2][17]=1;break;
				case 35102:$points[2][17]=2;$color=$color2;break;
				endswitch;
				$tree[2][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==23989)
			{
				$points[2][18]=1;
				$color=$color2;
				$tree[2][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19461 || $char_talents["spell"]==19462 || $char_talents["spell"]==24691)
			{
				switch ($char_talents["spell"]):
				case 19461:$points[2][19]=1;break;
				case 19462:$points[2][19]=2;break;
				case 24691:$points[2][19]=3;$color=$color2;break;
				endswitch;
				$tree[2][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][19]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34475 || $char_talents["spell"]==34476)
			{
				switch ($char_talents["spell"]):
				case 34475:$points[2][21]=1;break;
				case 34476:$points[2][21]=2;$color=$color2;break;
				endswitch;
				$tree[2][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19507 || $char_talents["spell"]==19508 || $char_talents["spell"]==19509)
			{
				switch ($char_talents["spell"]):
				case 19507:$points[2][24]=1;break;
				case 19508:$points[2][24]=2;break;
				case 19509:$points[2][24]=3;$color=$color2;break;
				endswitch;
				$tree[2][24]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/24.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][24]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53234 || $char_talents["spell"]==53237 || $char_talents["spell"]==53238)
			{
				switch ($char_talents["spell"]):
				case 53234:$points[2][25]=1;break;
				case 53237:$points[2][25]=2;break;
				case 53238:$points[2][25]=3;$color=$color2;break;
				endswitch;
				$tree[2][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19506)
			{
				$points[2][26]=1;
				$color=$color2;
				$tree[2][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35104 || $char_talents["spell"]==35110 || $char_talents["spell"]==35111)
			{
				switch ($char_talents["spell"]):
				case 35104:$points[2][27]=1;break;
				case 35110:$points[2][27]=2;break;
				case 35111:$points[2][27]=3;$color=$color2;break;
				endswitch;
				$tree[2][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34485 || $char_talents["spell"]==34486 || $char_talents["spell"]==34487 || $char_talents["spell"]==34488 || $char_talents["spell"]==34489)
			{
				switch ($char_talents["spell"]):
				case 34485:$points[2][30]=1;break;
				case 34486:$points[2][30]=2;break;
				case 34487:$points[2][30]=3;break;
				case 34488:$points[2][30]=4;break;
				case 34489:$points[2][30]=5;$color=$color2;break;
				endswitch;
				$tree[2][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][30]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53228 || $char_talents["spell"]==53232)
			{
				switch ($char_talents["spell"]):
				case 53228:$points[2][31]=1;break;
				case 53232:$points[2][31]=2;$color=$color2;break;
				endswitch;
				$tree[2][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][31]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53215 || $char_talents["spell"]==53216 || $char_talents["spell"]==53217)
			{
				switch ($char_talents["spell"]):
				case 53215:$points[2][33]=1;break;
				case 53216:$points[2][33]=2;break;
				case 53217:$points[2][33]=3;$color=$color2;break;
				endswitch;
				$tree[2][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34490)
			{
				$points[2][34]=1;
				$color=$color2;
				$tree[2][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53221 || $char_talents["spell"]==53222 || $char_talents["spell"]==53224)
			{
				switch ($char_talents["spell"]):
				case 53221:$points[2][35]=1;break;
				case 53222:$points[2][35]=2;break;
				case 53224:$points[2][35]=3;$color=$color2;break;
				endswitch;
				$tree[2][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53241 || $char_talents["spell"]==53243 || $char_talents["spell"]==53244 || $char_talents["spell"]==53245 || $char_talents["spell"]==53246)
			{
				switch ($char_talents["spell"]):
				case 53241:$points[2][38]=1;break;
				case 53243:$points[2][38]=2;break;
				case 53244:$points[2][38]=3;break;
				case 53245:$points[2][38]=4;break;
				case 53246:$points[2][38]=5;$color=$color2;break;
				endswitch;
				$tree[2][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53209)
			{
				$points[2][42]=1;
				$color=$color2;
				$tree[2][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 3
		if($char_talents["spell"]==52783 || $char_talents["spell"]==52785 || $char_talents["spell"]==52786 || $char_talents["spell"]==52787 || $char_talents["spell"]==52788)
			{
				switch ($char_talents["spell"]):
				case 52783:$points[3][1]=1;break;
				case 52785:$points[3][1]=2;break;
				case 52786:$points[3][1]=3;break;
				case 52787:$points[3][1]=4;break;
				case 52788:$points[3][1]=5;$color=$color2;break;
				endswitch;
				$tree[3][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][1]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19498 || $char_talents["spell"]==19499 || $char_talents["spell"]==19500)
			{
				switch ($char_talents["spell"]):
				case 19498:$points[3][2]=1;break;
				case 19499:$points[3][2]=2;break;
				case 19500:$points[3][2]=3;$color=$color2;break;
				endswitch;
				$tree[3][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][2]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19159 || $char_talents["spell"]==19160)
			{
				switch ($char_talents["spell"]):
				case 19159:$points[3][3]=1;break;
				case 19160:$points[3][3]=2;$color=$color2;break;
				endswitch;
				$tree[3][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][3]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19290 || $char_talents["spell"]==19294 || $char_talents["spell"]==24283)
			{
				switch ($char_talents["spell"]):
				case 19290:$points[3][5]=1;break;
				case 19294:$points[3][5]=2;break;
				case 24283:$points[3][5]=3;$color=$color2;break;
				endswitch;
				$tree[3][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19184 || $char_talents["spell"]==19387 || $char_talents["spell"]==19388)
			{
				switch ($char_talents["spell"]):
				case 19184:$points[3][6]=1;break;
				case 19387:$points[3][6]=2;break;
				case 19388:$points[3][6]=3;$color=$color2;break;
				endswitch;
				$tree[3][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19376 || $char_talents["spell"]==63457 || $char_talents["spell"]==63458)
			{
				switch ($char_talents["spell"]):
				case 19376:$points[3][7]=1;break;
				case 63457:$points[3][7]=2;break;
				case 63458:$points[3][7]=3;$color=$color2;break;
				endswitch;
				$tree[3][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34494 || $char_talents["spell"]==34496)
			{
				switch ($char_talents["spell"]):
				case 34494:$points[3][8]=1;break;
				case 34496:$points[3][8]=2;$color=$color2;break;
				endswitch;
				$tree[3][8]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/8.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][8]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19255 || $char_talents["spell"]==19256 || $char_talents["spell"]==19257 || $char_talents["spell"]==19258 || $char_talents["spell"]==19259)
			{
				switch ($char_talents["spell"]):
				case 19255:$points[3][9]=1;break;
				case 19256:$points[3][9]=2;break;
				case 19257:$points[3][9]=3;break;
				case 19258:$points[3][9]=4;break;
				case 19259:$points[3][9]=5;$color=$color2;break;
				endswitch;
				$tree[3][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][9]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19503)
			{
				$points[3][10]=1;
				$color=$color2;
				$tree[3][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19295 || $char_talents["spell"]==19297 || $char_talents["spell"]==19298)
			{
				switch ($char_talents["spell"]):
				case 19295:$points[3][11]=1;break;
				case 19297:$points[3][11]=2;break;
				case 19298:$points[3][11]=3;$color=$color2;break;
				endswitch;
				$tree[3][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][11]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19286 || $char_talents["spell"]==19287)
			{
				switch ($char_talents["spell"]):
				case 19286:$points[3][12]=1;break;
				case 19287:$points[3][12]=2;$color=$color2;break;
				endswitch;
				$tree[3][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][12]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56333 || $char_talents["spell"]==56336 || $char_talents["spell"]==56337)
			{
				switch ($char_talents["spell"]):
				case 56333:$points[3][14]=1;break;
				case 56336:$points[3][14]=2;break;
				case 56337:$points[3][14]=3;$color=$color2;break;
				endswitch;
				$tree[3][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][14]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56342 || $char_talents["spell"]==56343 || $char_talents["spell"]==56344)
			{
				switch ($char_talents["spell"]):
				case 56342:$points[3][16]=1;break;
				case 56343:$points[3][16]=2;break;
				case 56344:$points[3][16]=3;$color=$color2;break;
				endswitch;
				$tree[3][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][16]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56339 || $char_talents["spell"]==56340 || $char_talents["spell"]==56341)
			{
				switch ($char_talents["spell"]):
				case 56339:$points[3][17]=1;break;
				case 56340:$points[3][17]=2;break;
				case 56341:$points[3][17]=3;$color=$color2;break;
				endswitch;
				$tree[3][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][17]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19370 || $char_talents["spell"]==19371 || $char_talents["spell"]==19373)
			{
				switch ($char_talents["spell"]):
				case 19370:$points[3][18]=1;break;
				case 19371:$points[3][18]=2;break;
				case 19373:$points[3][18]=3;$color=$color2;break;
				endswitch;
				$tree[3][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][18]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19306)
			{
				$points[3][19]=1;
				$color=$color2;
				$tree[3][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][19]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19168 || $char_talents["spell"]==19180 || $char_talents["spell"]==19181 || $char_talents["spell"]==24296 || $char_talents["spell"]==24297)
			{
				switch ($char_talents["spell"]):
				case 19168:$points[3][21]=1;break;
				case 19180:$points[3][21]=2;break;
				case 19181:$points[3][21]=3;break;
				case 24296:$points[3][21]=4;break;
				case 24297:$points[3][21]=5;$color=$color2;break;
				endswitch;
				$tree[3][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][21]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34491 || $char_talents["spell"]==34492 || $char_talents["spell"]==34493)
			{
				switch ($char_talents["spell"]):
				case 34491:$points[3][23]=1;break;
				case 34492:$points[3][23]=2;break;
				case 34493:$points[3][23]=3;$color=$color2;break;
				endswitch;
				$tree[3][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][23]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34500 || $char_talents["spell"]==34502 || $char_talents["spell"]==34503)
			{
				switch ($char_talents["spell"]):
				case 34500:$points[3][25]=1;break;
				case 34502:$points[3][25]=2;break;
				case 34503:$points[3][25]=3;$color=$color2;break;
				endswitch;
				$tree[3][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==19386)
			{
				$points[3][26]=1;$color=$color2;
				$tree[3][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34497 || $char_talents["spell"]==34498 || $char_talents["spell"]==34499)
			{
				switch ($char_talents["spell"]):
				case 34497:$points[3][27]=1;break;
				case 34498:$points[3][27]=2;break;
				case 34499:$points[3][27]=3;$color=$color2;break;
				endswitch;
				$tree[3][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34506 || $char_talents["spell"]==34507 || $char_talents["spell"]==34508 || $char_talents["spell"]==34838 || $char_talents["spell"]==34839)
			{
				switch ($char_talents["spell"]):
				case 34506:$points[3][29]=1;break;
				case 34507:$points[3][29]=2;break;
				case 34508:$points[3][29]=3;break;
				case 34838:$points[3][29]=4;break;
				case 34839:$points[3][29]=5;$color=$color2;break;
				endswitch;
				$tree[3][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][29]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53295 || $char_talents["spell"]==53296 || $char_talents["spell"]==53297)
			{
				switch ($char_talents["spell"]):
				case 53295:$points[3][30]=1;break;
				case 53296:$points[3][30]=2;break;
				case 53297:$points[3][30]=3;$color=$color2;break;
				endswitch;
				$tree[3][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][30]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53298 || $char_talents["spell"]==53299)
			{
				switch ($char_talents["spell"]):
				case 53298:$points[3][33]=1;break;
				case 53299:$points[3][33]=2;$color=$color2;break;
				endswitch;
				$tree[3][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][33]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==3674)
			{
				$points[3][34]=1;
				$color=$color2;
				$tree[3][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53302 || $char_talents["spell"]==53303 || $char_talents["spell"]==53304)
			{
				switch ($char_talents["spell"]):
				case 53302:$points[3][36]=1;break;
				case 53303:$points[3][36]=2;break;
				case 53304:$points[3][36]=3;$color=$color2;break;
				endswitch;
				$tree[3][36]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/36.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][36]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53290 || $char_talents["spell"]==53291 || $char_talents["spell"]==53292)
			{
				switch ($char_talents["spell"]):
				case 53290:$points[3][39]=1;break;
				case 53291:$points[3][39]=2;break;
				case 53292:$points[3][39]=3;$color=$color2;break;
				endswitch;
				$tree[3][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][39]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53301)
			{
				$points[3][42]=1;
				$color=$color2;
				$tree[3][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}
}
$sum1=@array_sum($points[1])or $sum1=0;
$sum2=@array_sum($points[2])or $sum2=0;
$sum3=@array_sum($points[3])or $sum3=0;
?>
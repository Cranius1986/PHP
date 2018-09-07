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
//MAGE
$path="mage";
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
{
	$color="#32CD32";
	$color2="#FFD700";
	//Tree 1
		if($char_talents["spell"]==11210 || $char_talents["spell"]==12592)
			{
				switch ($char_talents["spell"]):
				case 11210:$points[1][1]=1;break;
				case 12592:$points[1][1]=2;$color=$color2;break;
				endswitch;
				$tree[1][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][1]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11222 || $char_talents["spell"]==12839 || $char_talents["spell"]==12840)
			{
				switch ($char_talents["spell"]):
				case 11222:$points[1][2]=1;break;
				case 12839:$points[1][2]=2;break;
				case 12840:$points[1][2]=3;$color=$color2;break;
				endswitch;
				$tree[1][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][2]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11237 || $char_talents["spell"]==12463 || $char_talents["spell"]==12464 || $char_talents["spell"]==16769 || $char_talents["spell"]==16770)
			{
				switch ($char_talents["spell"]):
				case 11237:$points[1][3]=1;break;
				case 12463:$points[1][3]=2;break;
				case 12464:$points[1][3]=3;break;
				case 16769:$points[1][3]=4;break;
				case 16770:$points[1][3]=5;$color=$color2;break;
				endswitch;
				$tree[1][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==28574 || $char_talents["spell"]==54658 || $char_talents["spell"]==54659)
			{
				switch ($char_talents["spell"]):
				case 28574:$points[1][5]=1;break;
				case 54658:$points[1][5]=2;break;
				case 54659:$points[1][5]=3;$color=$color2;break;
				endswitch;
				$tree[1][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29441 || $char_talents["spell"]==29444)
			{
				switch ($char_talents["spell"]):
				case 29441:$points[1][6]=1;break;
				case 29444:$points[1][6]=2;$color=$color2;break;
				endswitch;
				$tree[1][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11213 || $char_talents["spell"]==12574|| $char_talents["spell"]==12575 || $char_talents["spell"]==12576 || $char_talents["spell"]==12577)
			{
				switch ($char_talents["spell"]):
				case 11213:$points[1][7]=1;break;
				case 12574:$points[1][7]=2;break;
				case 12575:$points[1][7]=3;break;
				case 12576:$points[1][7]=4;break;
				case 12577:$points[1][7]=5;$color=$color2;break;
				endswitch;
				$tree[1][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][7]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11247 || $char_talents["spell"]==12606)
			{
				switch ($char_talents["spell"]):
				case 11247:$points[1][9]=1;break;
				case 12606:$points[1][9]=2;$color=$color2;break;
				endswitch;
				$tree[1][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11242 || $char_talents["spell"]==12467 || $char_talents["spell"]==12469)
			{
				switch ($char_talents["spell"]):
				case 11242:$points[1][10]=1;break;
				case 12467:$points[1][10]=2;break;
				case 12469:$points[1][10]=3;$color=$color2;break;
				endswitch;
				$tree[1][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][10]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44397 || $char_talents["spell"]==44398 || $char_talents["spell"]==44399)
			{
				switch ($char_talents["spell"]):
				case 44397:$points[1][11]=1;break;
				case 44398:$points[1][11]=2;break;
				case 44399:$points[1][11]=3;$color=$color2;break;
				endswitch;
				$tree[1][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][11]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}
		if($char_talents["spell"]==54646)
			{
				$points[1][12]=1;
				$color=$color2;
				$tree[1][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][12]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11252 || $char_talents["spell"]==12605)
			{
				switch ($char_talents["spell"]):
				case 11252:$points[1][13]=1;break;
				case 12605:$points[1][13]=2;$color=$color2;break;
				endswitch;
				$tree[1][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11255 || $char_talents["spell"]==12598)
			{
				switch ($char_talents["spell"]):
				case 11255:$points[1][14]=1;break;
				case 12598:$points[1][14]=2;$color=$color2;break;
				endswitch;
				$tree[1][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==18462 || $char_talents["spell"]==18463 || $char_talents["spell"]==18464)
			{
				switch ($char_talents["spell"]):
				case 18462:$points[1][15]=1;break;
				case 18463:$points[1][15]=2;break;
				case 18464:$points[1][15]=3;$color=$color2;break;
				endswitch;
				$tree[1][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29447 || $char_talents["spell"]==55339 || $char_talents["spell"]==55340)
			{
				switch ($char_talents["spell"]):
				case 29447:$points[1][16]=1;break;
				case 55339:$points[1][16]=2;break;
				case 55340:$points[1][16]=3;$color=$color2;break;
				endswitch;
				$tree[1][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][16]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31569 || $char_talents["spell"]==31570)
			{
				switch ($char_talents["spell"]):
				case 31569:$points[1][17]=1;break;
				case 31570:$points[1][17]=2;$color=$color2;break;
				endswitch;
				$tree[1][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12043)
			{
				$points[1][18]=1;
				$color=$color2;
				$tree[1][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11232 || $char_talents["spell"]==12500 || $char_talents["spell"]==12501 || $char_talents["spell"]==12502 || $char_talents["spell"]==12503)
			{
				switch ($char_talents["spell"]):
				case 11232:$points[1][20]=1;break;
				case 12500:$points[1][20]=2;break;
				case 12501:$points[1][20]=3;break;
				case 12502:$points[1][20]=4;break;
				case 12503:$points[1][20]=5;$color=$color2;break;
				endswitch;
				$tree[1][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][20]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31574 || $char_talents["spell"]==31575 || $char_talents["spell"]==54354)
			{
				switch ($char_talents["spell"]):
				case 31574:$points[1][21]=1;break;
				case 31575:$points[1][21]=2;break;
				case 54354:$points[1][21]=3;$color=$color2;break;
				endswitch;
				$tree[1][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][21]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==15058 || $char_talents["spell"]==15059 || $char_talents["spell"]==15060)
			{
				switch ($char_talents["spell"]):
				case 15058:$points[1][22]=1;break;
				case 15059:$points[1][22]=2;break;
				case 15060:$points[1][22]=3;$color=$color2;break;
				endswitch;
				$tree[1][22]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/22.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][22]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31571 || $char_talents["spell"]==31572)
			{
				switch ($char_talents["spell"]):
				case 31571:$points[1][23]=1;break;
				case 31572:$points[1][23]=2;$color=$color2;break;
				endswitch;
				$tree[1][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][23]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31579 || $char_talents["spell"]==31582 || $char_talents["spell"]==31583)
			{
				switch ($char_talents["spell"]):
				case 31579:$points[1][25]=1;break;
				case 31582:$points[1][25]=2;break;
				case 31583:$points[1][25]=3;$color=$color2;break;
				endswitch;
				$tree[1][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12042)
			{
				$points[1][26]=1;
				$color=$color2;
				$tree[1][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44394 || $char_talents["spell"]==44395 || $char_talents["spell"]==44396)
			{
				switch ($char_talents["spell"]):
				case 44394:$points[1][27]=1;break;
				case 44395:$points[1][27]=2;break;
				case 44396:$points[1][27]=3;$color=$color2;break;
				endswitch;
				$tree[1][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44378 || $char_talents["spell"]==44379)
			{
				switch ($char_talents["spell"]):
				case 44378:$points[1][30]=1;break;
				case 44379:$points[1][30]=2;$color=$color2;break;
				endswitch;
				$tree[1][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][30]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31584 || $char_talents["spell"]==31585 || $char_talents["spell"]==31586 || $char_talents["spell"]==31587 || $char_talents["spell"]==31588)
			{
				switch ($char_talents["spell"]):
				case 31584:$points[1][31]=1;break;
				case 31585:$points[1][31]=2;break;
				case 31586:$points[1][31]=3;break;
				case 31587:$points[1][31]=4;break;
				case 31588:$points[1][31]=5;$color=$color2;break;
				endswitch;
				$tree[1][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][31]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31589)
			{
				$points[1][34]=1;
				$color=$color2;
				$tree[1][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44404 || $char_talents["spell"]==54486 || $char_talents["spell"]==54488 || $char_talents["spell"]==54489 || $char_talents["spell"]==54490)
			{
				switch ($char_talents["spell"]):
				case 44404:$points[1][35]=1;break;
				case 54486:$points[1][35]=2;break;
				case 54488:$points[1][35]=3;break;
				case 54489:$points[1][35]=4;break;
				case 54490:$points[1][35]=5;$color=$color2;break;
				endswitch;
				$tree[1][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][35]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44400 || $char_talents["spell"]==44402 || $char_talents["spell"]==44403)
			{
				switch ($char_talents["spell"]):
				case 44400:$points[1][38]=1;break;
				case 44402:$points[1][38]=2;break;
				case 44403:$points[1][38]=3;$color=$color2;break;
				endswitch;
				$tree[1][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][38]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35578 || $char_talents["spell"]==35581)
			{
				switch ($char_talents["spell"]):
				case 35578:$points[1][39]=1;break;
				case 35581:$points[1][39]=2;$color=$color2;break;
				endswitch;
				$tree[1][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][39]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44425)
			{
				$points[1][42]=1;
				$color=$color2;
				$tree[1][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 2
		if($char_talents["spell"]==11078 || $char_talents["spell"]==11080)
			{
				switch ($char_talents["spell"]):
				case 11078:$points[2][1]=1;break;
				case 11080:$points[2][1]=2;$color=$color2;break;
				endswitch;
				$tree[2][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][1]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==18459 || $char_talents["spell"]==18460 || $char_talents["spell"]==54734)
			{
				switch ($char_talents["spell"]):
				case 18459:$points[2][2]=1;break;
				case 18460:$points[2][2]=2;break;
				case 54734:$points[2][2]=3;$color=$color2;break;
				endswitch;
				$tree[2][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][2]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11069 || $char_talents["spell"]==12338 || $char_talents["spell"]==12339 || $char_talents["spell"]==12340 || $char_talents["spell"]==12341)
			{
				switch ($char_talents["spell"]):
				case 11069:$points[2][3]=1;break;
				case 12338:$points[2][3]=2;break;
				case 12339:$points[2][3]=3;break;
				case 12340:$points[2][3]=4;break;
				case 12341:$points[2][3]=5;$color=$color2;break;
				endswitch;
				$tree[2][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11119 || $char_talents["spell"]==11120 || $char_talents["spell"]==12846 || $char_talents["spell"]==12847 || $char_talents["spell"]==12848)
			{
				switch ($char_talents["spell"]):
				case 11119:$points[2][5]=1;break;
				case 11120:$points[2][5]=2;break;
				case 12846:$points[2][5]=3;break;
				case 12847:$points[2][5]=4;break;
				case 12848:$points[2][5]=5;$color=$color2;break;
				endswitch;
				$tree[2][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][5]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==54747 || $char_talents["spell"]==54749)
			{
				switch ($char_talents["spell"]):
				case 54747:$points[2][7]=1;break;
				case 54749:$points[2][7]=2;$color=$color2;break;
				endswitch;
				$tree[2][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11108 || $char_talents["spell"]==12349 || $char_talents["spell"]==12350)
			{
				switch ($char_talents["spell"]):
				case 11108:$points[2][7]=1;break;
				case 12349:$points[2][7]=2;break;
				case 12350:$points[2][7]=3;$color=$color2;break;
				endswitch;
				$tree[2][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11100 || $char_talents["spell"]==12353)
			{
				switch ($char_talents["spell"]):
				case 11100:$points[2][9]=1;break;
				case 12353:$points[2][9]=2;$color=$color2;break;
				endswitch;
				$tree[2][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11103 || $char_talents["spell"]==12357 || $char_talents["spell"]==12358)
			{
				switch ($char_talents["spell"]):
				case 11103:$points[2][10]=1;break;
				case 12357:$points[2][10]=2;break;
				case 12358:$points[2][10]=3;$color=$color2;break;
				endswitch;
				$tree[2][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][10]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11366)
			{
				$points[2][11]=1;
				$color=$color2;
				$tree[2][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][11]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11083 || $char_talents["spell"]==12351)
			{
				switch ($char_talents["spell"]):
				case 11083:$points[2][12]=1;break;
				case 12351:$points[2][12]=2;$color=$color2;break;
				endswitch;
				$tree[2][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][12]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11095 || $char_talents["spell"]==12872 || $char_talents["spell"]==12873)
			{
				switch ($char_talents["spell"]):
				case 11095:$points[2][13]=1;break;
				case 12357:$points[2][13]=2;break;
				case 12873:$points[2][13]=3;$color=$color2;break;
				endswitch;
				$tree[2][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][13]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11094 || $char_talents["spell"]==13043)
			{
				switch ($char_talents["spell"]):
				case 11094:$points[2][14]=1;break;
				case 13043:$points[2][14]=2;$color=$color2;break;
				endswitch;
				$tree[2][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29074 || $char_talents["spell"]==29075 || $char_talents["spell"]==29076)
			{
				switch ($char_talents["spell"]):
				case 29074:$points[2][16]=1;break;
				case 29075:$points[2][16]=2;break;
				case 29076:$points[2][16]=3;$color=$color2;break;
				endswitch;
				$tree[2][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][16]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31638 || $char_talents["spell"]==31639 || $char_talents["spell"]==31640)
			{
				switch ($char_talents["spell"]):
				case 31638:$points[2][17]=1;break;
				case 31639:$points[2][17]=2;break;
				case 31640:$points[2][17]=3;$color=$color2;break;
				endswitch;
				$tree[2][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][17]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11115 || $char_talents["spell"]==11367 || $char_talents["spell"]==11368)
			{
				switch ($char_talents["spell"]):
				case 11115:$points[2][18]=1;break;
				case 11367:$points[2][18]=2;break;
				case 11368:$points[2][18]=3;$color=$color2;break;
				endswitch;
				$tree[2][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][18]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11113)
			{
				$points[2][19]=1;
				$color=$color2;
				$tree[2][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][19]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31641 || $char_talents["spell"]==31642)
			{
				switch ($char_talents["spell"]):
				case 31641:$points[2][21]=1;break;
				case 31642:$points[2][21]=2;$color=$color2;break;
				endswitch;
				$tree[2][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11124 || $char_talents["spell"]==12378 || $char_talents["spell"]==12398 || $char_talents["spell"]==12399 || $char_talents["spell"]==12400)
			{
				switch ($char_talents["spell"]):
				case 11124:$points[2][23]=1;break;
				case 12378:$points[2][23]=2;break;
				case 12398:$points[2][23]=3;break;
				case 12399:$points[2][23]=4;break;
				case 12400:$points[2][23]=5;$color=$color2;break;
				endswitch;
				$tree[2][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34293 || $char_talents["spell"]==34295 || $char_talents["spell"]==34296)
			{
				switch ($char_talents["spell"]):
				case 34293:$points[2][25]=1;break;
				case 34295:$points[2][25]=2;break;
				case 34296:$points[2][25]=3;$color=$color2;break;
				endswitch;
				$tree[2][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11129)
			{
				$points[2][26]=1;
				$color=$color2;
				$tree[2][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31679 || $char_talents["spell"]==31680)
			{
				switch ($char_talents["spell"]):
				case 31679:$points[2][28]=1;break;
				case 31680:$points[2][28]=2;$color=$color2;break;
				endswitch;
				$tree[2][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][27]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==64353 || $char_talents["spell"]==64357)
			{
				switch ($char_talents["spell"]):
				case 64353:$points[2][29]=1;break;
				case 64357:$points[2][29]=2;$color=$color2;break;
				endswitch;
				$tree[2][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][29]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31656 || $char_talents["spell"]==31657 || $char_talents["spell"]==31658)
			{
				switch ($char_talents["spell"]):
				case 31656:$points[2][31]=1;break;
				case 31657:$points[2][31]=2;break;
				case 31658:$points[2][31]=3;$color=$color2;break;
				endswitch;
				$tree[2][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][31]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44442 || $char_talents["spell"]==44443)
			{
				switch ($char_talents["spell"]):
				case 44442:$points[2][33]=1;break;
				case 44443:$points[2][33]=2;$color=$color2;break;
				endswitch;
				$tree[2][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][33]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31661)
			{
				$points[2][34]=1;
				$color=$color2;
				$tree[2][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44445 || $char_talents["spell"]==44446 || $char_talents["spell"]==44448)
			{
				switch ($char_talents["spell"]):
				case 44445:$points[2][35]=1;break;
				case 44446:$points[2][35]=2;break;
				case 44448:$points[2][35]=3;$color=$color2;break;
				endswitch;
				$tree[2][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44449 || $char_talents["spell"]==44469 || $char_talents["spell"]==44470 || $char_talents["spell"]==44471 || $char_talents["spell"]==44472)
			{
				switch ($char_talents["spell"]):
				case 44449:$points[2][38]=1;break;
				case 44469:$points[2][38]=2;break;
				case 44470:$points[2][38]=3;break;
				case 44471:$points[2][38]=4;break;
				case 44472:$points[2][38]=5;$color=$color2;break;
				endswitch;
				$tree[2][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44457)
			{
				$points[2][42]=1;
				$color=$color2;
				$tree[2][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 3
		if($char_talents["spell"]==11071 || $char_talents["spell"]==12496 || $char_talents["spell"]==12497)
			{
				switch ($char_talents["spell"]):
				case 11071:$points[3][1]=1;break;
				case 12496:$points[3][1]=2;break;
				case 12497:$points[3][1]=3;$color=$color2;break;
				endswitch;
				$tree[3][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][1]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11070 || $char_talents["spell"]==12473 || $char_talents["spell"]==16763 || $char_talents["spell"]==16765 || $char_talents["spell"]==16766)
			{
				switch ($char_talents["spell"]):
				case 11070:$points[3][2]=1;break;
				case 12473:$points[3][2]=2;break;
				case 16763:$points[3][2]=3;break;
				case 16765:$points[3][2]=4;break;
				case 16766:$points[3][2]=5;$color=$color2;break;
				endswitch;
				$tree[3][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31670 || $char_talents["spell"]==31672 || $char_talents["spell"]==55094)
			{
				switch ($char_talents["spell"]):
				case 31670:$points[3][3]=1;break;
				case 31672:$points[3][3]=2;break;
				case 55094:$points[3][3]=3;$color=$color2;break;
				endswitch;
				$tree[3][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11207 || $char_talents["spell"]==12672 || $char_talents["spell"]==15047)
			{
				switch ($char_talents["spell"]):
				case 11207:$points[3][5]=1;break;
				case 12672:$points[3][5]=2;break;
				case 15047:$points[3][5]=3;$color=$color2;break;
				endswitch;
				$tree[3][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11189 || $char_talents["spell"]==28332)
			{
				switch ($char_talents["spell"]):
				case 11189:$points[3][6]=1;break;
				case 28332:$points[3][6]=2;$color=$color2;break;
				endswitch;
				$tree[3][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29438 || $char_talents["spell"]==29439 || $char_talents["spell"]==29440)
			{
				switch ($char_talents["spell"]):
				case 29438:$points[3][7]=1;break;
				case 29439:$points[3][7]=2;break;
				case 29440:$points[3][7]=3;$color=$color2;break;
				endswitch;
				$tree[3][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11175 || $char_talents["spell"]==12569 || $char_talents["spell"]==12571)
			{
				switch ($char_talents["spell"]):
				case 11175:$points[3][8]=1;break;
				case 12569:$points[3][8]=2;break;
				case 12571:$points[3][8]=3;$color=$color2;break;
				endswitch;
				$tree[3][8]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/8.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][8]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11151 || $char_talents["spell"]==12952 || $char_talents["spell"]==12953)
			{
				switch ($char_talents["spell"]):
				case 11151:$points[3][9]=1;break;
				case 12952:$points[3][9]=2;break;
				case 12953:$points[3][9]=3;$color=$color2;break;
				endswitch;
				$tree[3][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][9]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12472)
			{
				$points[3][10]=1;
				$color=$color2;
				$tree[3][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11185 || $char_talents["spell"]==12487 || $char_talents["spell"]==12488)
			{
				switch ($char_talents["spell"]):
				case 11185:$points[3][11]=1;break;
				case 12487:$points[3][11]=2;break;
				case 12488:$points[3][11]=3;$color=$color2;break;
				endswitch;
				$tree[3][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][11]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16757 || $char_talents["spell"]==16758)
			{
				switch ($char_talents["spell"]):
				case 16757:$points[3][13]=1;break;
				case 16758:$points[3][13]=2;$color=$color2;break;
				endswitch;
				$tree[3][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11160 || $char_talents["spell"]==12518 || $char_talents["spell"]==12519)
			{
				switch ($char_talents["spell"]):
				case 11160:$points[3][14]=1;break;
				case 12518:$points[3][14]=2;break;
				case 12519:$points[3][14]=3;$color=$color2;break;
				endswitch;
				$tree[3][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][14]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11170 || $char_talents["spell"]==12982 || $char_talents["spell"]==12983)
			{
				switch ($char_talents["spell"]):
				case 11170:$points[3][15]=1;break;
				case 12982:$points[3][15]=2;break;
				case 12983:$points[3][15]=3;$color=$color2;break;
				endswitch;
				$tree[3][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11958)
			{
				$points[3][18]=1;
				$color=$color2;
				$tree[3][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11190 || $char_talents["spell"]==12489 || $char_talents["spell"]==12490)
			{
				switch ($char_talents["spell"]):
				case 11190:$points[3][19]=1;break;
				case 12489:$points[3][19]=2;break;
				case 12490:$points[3][19]=3;$color=$color2;break;
				endswitch;
				$tree[3][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][19]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31667 || $char_talents["spell"]==31668 || $char_talents["spell"]==31669)
			{
				switch ($char_talents["spell"]):
				case 31667:$points[3][20]=1;break;
				case 31668:$points[3][20]=2;break;
				case 31669:$points[3][20]=3;$color=$color2;break;
				endswitch;
				$tree[3][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][20]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==55091 || $char_talents["spell"]==55092)
			{
				switch ($char_talents["spell"]):
				case 55091:$points[3][21]=1;break;
				case 55092:$points[3][21]=2;$color=$color2;break;
				endswitch;
				$tree[3][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11180 || $char_talents["spell"]==28592 || $char_talents["spell"]==28593)
			{
				switch ($char_talents["spell"]):
				case 11180:$points[3][23]=1;break;
				case 28592:$points[3][23]=2;break;
				case 28593:$points[3][23]=3;$color=$color2;break;
				endswitch;
				$tree[3][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][23]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44745 || $char_talents["spell"]==54787)
			{
				switch ($char_talents["spell"]):
				case 44745:$points[3][25]=1;break;
				case 54787:$points[3][25]=2;$color=$color2;break;
				endswitch;
				$tree[3][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][25]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==11426)
			{
				$points[3][26]=1;
				$color=$color2;
				$tree[3][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][26]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31674 || $char_talents["spell"]==31675 || $char_talents["spell"]==31676 || $char_talents["spell"]==31677 || $char_talents["spell"]==31678)
			{
				switch ($char_talents["spell"]):
				case 31674:$points[3][27]=1;break;
				case 31675:$points[3][27]=2;break;
				case 31676:$points[3][27]=3;break;
				case 31677:$points[3][27]=4;break;
				case 31678:$points[3][27]=5;$color=$color2;break;
				endswitch;
				$tree[3][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][27]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31682 || $char_talents["spell"]==31683)
			{
				switch ($char_talents["spell"]):
				case 31682:$points[3][30]=1;break;
				case 31683:$points[3][30]=2;$color=$color2;break;
				endswitch;
				$tree[3][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][30]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44543 || $char_talents["spell"]==44545)
			{
				switch ($char_talents["spell"]):
				case 44543:$points[3][31]=1;break;
				case 44545:$points[3][31]=2;$color=$color2;break;
				endswitch;
				$tree[3][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][31]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44546 || $char_talents["spell"]==44548 || $char_talents["spell"]==44549)
			{
				switch ($char_talents["spell"]):
				case 44546:$points[3][33]=1;break;
				case 44548:$points[3][33]=2;break;
				case 44549:$points[3][33]=3;$color=$color2;break;
				endswitch;
				$tree[3][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31687)
			{
				$points[3][34]=1;
				$color=$color2;
				$tree[3][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44557 || $char_talents["spell"]==44560 || $char_talents["spell"]==44561)
			{
				switch ($char_talents["spell"]):
				case 44557:$points[3][35]=1;break;
				case 44560:$points[3][35]=2;break;
				case 44561:$points[3][35]=3;$color=$color2;break;
				endswitch;
				$tree[3][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44566 || $char_talents["spell"]==44567 || $char_talents["spell"]==44568 || $char_talents["spell"]==44570 || $char_talents["spell"]==44571)
			{
				switch ($char_talents["spell"]):
				case 44566:$points[3][38]=1;break;
				case 44567:$points[3][38]=2;break;
				case 44568:$points[3][38]=3;break;
				case 44570:$points[3][38]=4;break;
				case 44571:$points[3][38]=5;$color=$color2;break;
				endswitch;
				$tree[3][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==44572)
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
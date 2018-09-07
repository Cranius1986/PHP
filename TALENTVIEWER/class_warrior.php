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
//WARRIOR
$path="warrior";
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
		if($char_talents["spell"]==12282 || $char_talents["spell"]==12663 || $char_talents["spell"]==12664)
			{
				switch ($char_talents["spell"]):
				case 12282:$points[1][1]=1;break;
				case 12663:$points[1][1]=2;break;
				case 12664:$points[1][1]=3;$color=$color2;break;
				endswitch;
				$tree[1][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][1]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16462|| $char_talents["spell"]==16463 || $char_talents["spell"]==16363 || $char_talents["spell"]==16465 || $char_talents["spell"]==16466)
			{
				switch ($char_talents["spell"]):
				case 16462:$points[1][2]=1;break;
				case 16463:$points[1][2]=2;break;
				case 16464:$points[1][2]=3;break;
				case 16465:$points[1][2]=4;break;
				case 16466:$points[1][2]=5;$color=$color2;break;
				endswitch;
				$tree[1][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12286 || $char_talents["spell"]==12658)
			{
				switch ($char_talents["spell"]):
				case 12286:$points[1][3]=1;break;
				case 12658:$points[1][3]=2;$color=$color2;break;
				endswitch;
				$tree[1][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][3]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12285 || $char_talents["spell"]==12697)
			{
				switch ($char_talents["spell"]):
				case 12285:$points[1][5]=1;break;
				case 12697:$points[1][5]=2;$color=$color2;break;
				endswitch;
				$tree[1][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][5]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12300 || $char_talents["spell"]==12959 || $char_talents["spell"]==12960)
			{
				switch ($char_talents["spell"]):
				case 12300:$points[1][6]=1;break;
				case 12959:$points[1][6]=1;break;
				case 12960:$points[1][6]=3;$color=$color2;break;
				endswitch;
				$tree[1][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12295 || $char_talents["spell"]==12676 || $char_talents["spell"]==12677)
			{
				switch ($char_talents["spell"]):
				case 12295:$points[1][7]=1;break;
				case 12676:$points[1][7]=2;break;
				case 12677:$points[1][7]=3;$color=$color2;break;
				endswitch;
				$tree[1][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12290 || $char_talents["spell"]==12963)
			{
				switch ($char_talents["spell"]):
				case 12290:$points[1][9]=1;break;
				case 12963:$points[1][9]=2;$color=$color2;break;
				endswitch;
				$tree[1][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12296)
			{
				$points[1][10]=1;
				$color=$color2;
				$tree[1][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16493 || $char_talents["spell"]==16494)
			{
				switch ($char_talents["spell"]):
				case 16493:$points[1][11]=1;break;
				case 16494:$points[1][11]=2;$color=$color2;break;
				endswitch;
				$tree[1][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][11]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12834 || $char_talents["spell"]==12849 || $char_talents["spell"]==12867)
			{
				switch ($char_talents["spell"]):
				case 12834:$points[1][12]=1;break;
				case 12849:$points[1][12]=2;break;
				case 12867:$points[1][12]=3;$color=$color2;break;
				endswitch;
				$tree[1][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][12]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12163 || $char_talents["spell"]==12711 || $char_talents["spell"]==12712)
			{
				switch ($char_talents["spell"]):
				case 12163:$points[1][14]=1;break;
				case 12711:$points[1][14]=2;break;
				case 12712:$points[1][14]=3;$color=$color2;break;
				endswitch;
				$tree[1][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][14]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56636 || $char_talents["spell"]==56637 || $char_talents["spell"]==56638)
			{
				switch ($char_talents["spell"]):
				case 56636:$points[1][15]=1;break;
				case 56637:$points[1][15]=2;break;
				case 56638:$points[1][15]=3;$color=$color2;break;
				endswitch;
				$tree[1][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12700 || $char_talents["spell"]==12781 || $char_talents["spell"]==12783 || $char_talents["spell"]==12784 || $char_talents["spell"]==12785)
			{
				switch ($char_talents["spell"]):
				case 12700:$points[1][17]=1;break;
				case 12781:$points[1][17]=2;break;
				case 12783:$points[1][17]=3;break;
				case 12784:$points[1][17]=4;break;
				case 12785:$points[1][17]=5;$color=$color2;break;
				endswitch;
				$tree[1][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][17]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12328)
			{
				$points[1][18]=1;
				$color=$color2;
				$tree[1][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12284 || $char_talents["spell"]==12701 || $char_talents["spell"]==12702 || $char_talents["spell"]==12703 || $char_talents["spell"]==12704)
			{
				switch ($char_talents["spell"]):
				case 12284:$points[1][19]=1;break;
				case 12701:$points[1][19]=2;break;
				case 12702:$points[1][19]=3;break;
				case 12703:$points[1][19]=4;break;
				case 12704:$points[1][19]=5;$color=$color2;break;
				endswitch;
				$tree[1][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][19]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12281 || $char_talents["spell"]==12812 || $char_talents["spell"]==12813 || $char_talents["spell"]==12814 || $char_talents["spell"]==12815)
			{
				switch ($char_talents["spell"]):
				case 12281:$points[1][20]=1;break;
				case 12812:$points[1][20]=2;break;
				case 12813:$points[1][20]=3;break;
				case 12814:$points[1][20]=4;break;
				case 12815:$points[1][20]=5;$color=$color2;break;
				endswitch;
				$tree[1][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][20]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20504 || $char_talents["spell"]==20505)
			{
				switch ($char_talents["spell"]):
				case 20504:$points[1][21]=1;break;
				case 20505:$points[1][21]=2;$color=$color2;break;
				endswitch;
				$tree[1][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12289 || $char_talents["spell"]==12668 || $char_talents["spell"]==23695)
			{
				switch ($char_talents["spell"]):
				case 12289:$points[1][23]=1;break;
				case 12668:$points[1][23]=2;break;
				case 23695:$points[1][23]=3;$color=$color2;break;
				endswitch;
				$tree[1][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][23]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46854 || $char_talents["spell"]==46855)
			{
				switch ($char_talents["spell"]):
				case 46854:$points[1][24]=1;break;
				case 46855:$points[1][24]=2;$color=$color2;break;
				endswitch;
				$tree[1][24]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/24.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][24]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29834 || $char_talents["spell"]==29838)
			{
				switch ($char_talents["spell"]):
				case 29834:$points[1][25]=1;break;
				case 29838:$points[1][25]=2;$color=$color2;break;
				endswitch;
				$tree[1][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][25]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12294)
			{
				$points[1][26]=1;
				$color=$color2;
				$tree[1][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46865 || $char_talents["spell"]==46866)
			{
				switch ($char_talents["spell"]):
				case 46865:$points[1][27]=1;break;
				case 46866:$points[1][27]=2;$color=$color2;break;
				endswitch;
				$tree[1][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][27]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12862 || $char_talents["spell"]==12330)
			{
				switch ($char_talents["spell"]):
				case 12862:$points[1][28]=1;break;
				case 12330:$points[1][28]=2;$color=$color2;break;
				endswitch;
				$tree[1][28]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/28.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][28]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==64976)
			{
				$points[1][29]=1;
				$color=$color2;
				$tree[1][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][29]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35446 || $char_talents["spell"]==35448 || $char_talents["spell"]==35449)
			{
				switch ($char_talents["spell"]):
				case 35446:$points[1][30]=1;break;
				case 35448:$points[1][30]=2;break;
				case 35449:$points[1][30]=3;$color=$color2;break;
				endswitch;
				$tree[1][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][30]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46859 || $char_talents["spell"]==46860)
			{
				switch ($char_talents["spell"]):
				case 46859:$points[1][31]=1;break;
				case 46860:$points[1][31]=2;$color=$color2;break;
				endswitch;
				$tree[1][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][31]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29723 || $char_talents["spell"]==29725 || $char_talents["spell"]==29724)
			{
				switch ($char_talents["spell"]):
				case 29723:$points[1][33]=1;break;
				case 29725:$points[1][33]=2;break;
				case 29724:$points[1][33]=3;$color=$color2;break;
				endswitch;
				$tree[1][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29623)
			{
				$points[1][34]=1;
				$color=$color2;
				$tree[1][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29836 || $char_talents["spell"]==29859)
			{
				switch ($char_talents["spell"]):
				case 29836:$points[1][35]=1;break;
				case 29859:$points[1][35]=2;$color=$color2;break;
				endswitch;
				$tree[1][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][35]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46867 || $char_talents["spell"]==56611 || $char_talents["spell"]==56612 || $char_talents["spell"]==56613 || $char_talents["spell"]==56614)
			{
				switch ($char_talents["spell"]):
				case 46867:$points[1][38]=1;break;
				case 56611:$points[1][38]=2;break;
				case 56612:$points[1][38]=3;break;
				case 56613:$points[1][38]=4;break;
				case 56614:$points[1][38]=5;$color=$color2;break;
				endswitch;
				$tree[1][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46924)
			{
				$points[1][42]=1;
				$color=$color2;
				$tree[1][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 2
		if($char_talents["spell"]==61216 || $char_talents["spell"]==61221 || $char_talents["spell"]==61222)
			{
				switch ($char_talents["spell"]):
				case 61216:$points[2][1]=1;break;
				case 61221:$points[2][1]=2;break;
				case 61222:$points[2][1]=3;$color=$color2;break;
				endswitch;
				$tree[2][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][1]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12321 || $char_talents["spell"]==12835)
			{
				switch ($char_talents["spell"]):
				case 12321:$points[2][2]=1;break;
				case 12835:$points[2][2]=2;$color=$color2;break;
				endswitch;
				$tree[2][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][2]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12320 || $char_talents["spell"]==12852 || $char_talents["spell"]==12853 || $char_talents["spell"]==12855 || $char_talents["spell"]==12856)
			{
				switch ($char_talents["spell"]):
				case 12320:$points[2][3]=1;break;
				case 12852:$points[2][3]=2;break;
				case 12853:$points[2][3]=3;break;
				case 12855:$points[2][3]=4;break;
				case 12856:$points[2][3]=5;$color=$color2;break;
				endswitch;
				$tree[2][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12324 || $char_talents["spell"]==12876 || $char_talents["spell"]==12877 || $char_talents["spell"]==12878 || $char_talents["spell"]==12879)
			{
				switch ($char_talents["spell"]):
				case 12324:$points[2][6]=1;break;
				case 12876:$points[2][6]=2;break;
				case 12877:$points[2][6]=3;break;
				case 12878:$points[2][6]=4;break;
				case 12879:$points[2][6]=5;$color=$color2;break;
				endswitch;
				$tree[2][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][6]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12322 || $char_talents["spell"]==12999 || $char_talents["spell"]==13000 || $char_talents["spell"]==13001 || $char_talents["spell"]==13002)
			{
				switch ($char_talents["spell"]):
				case 12322:$points[2][7]=1;break;
				case 12999:$points[2][7]=2;break;
				case 13000:$points[2][7]=3;break;
				case 13001:$points[2][7]=4;break;
				case 13002:$points[2][7]=5;$color=$color2;break;
				endswitch;
				$tree[2][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][7]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12329 || $char_talents["spell"]==12950 || $char_talents["spell"]==20496)
			{
				switch ($char_talents["spell"]):
				case 12329:$points[2][9]=1;break;
				case 12950:$points[2][9]=2;break;
				case 20496:$points[2][9]=3;$color=$color2;break;
				endswitch;
				$tree[2][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][9]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12323)
			{
				$points[2][10]=1;
				$color=$color2;
				$tree[2][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16487 || $char_talents["spell"]==16489 || $char_talents["spell"]==16492)
			{
				switch ($char_talents["spell"]):
				case 16487:$points[2][11]=1;break;
				case 16489:$points[2][11]=2;break;
				case 16492:$points[2][11]=3;$color=$color2;break;
				endswitch;
				$tree[2][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][11]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12318 || $char_talents["spell"]==12857|| $char_talents["spell"]==12858 || $char_talents["spell"]==12860 || $char_talents["spell"]==12861)
			{
				switch ($char_talents["spell"]):
				case 12318:$points[2][12]=1;break;
				case 12857:$points[2][12]=2;break;
				case 12858:$points[2][12]=3;break;
				case 12860:$points[2][12]=4;break;
				case 12861:$points[2][12]=5;$color=$color2;break;
				endswitch;
				$tree[2][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][12]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==23584 || $char_talents["spell"]==23585 || $char_talents["spell"]==23586 || $char_talents["spell"]==23587 || $char_talents["spell"]==23588)
			{
				switch ($char_talents["spell"]):
				case 23584:$points[2][13]=1;break;
				case 23585:$points[2][13]=2;break;
				case 23586:$points[2][13]=3;break;
				case 23587:$points[2][13]=4;break;
				case 23588:$points[2][13]=5;$color=$color2;break;
				endswitch;
				$tree[2][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][13]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20502 || $char_talents["spell"]==20503)
			{
				switch ($char_talents["spell"]):
				case 20502:$points[2][14]=1;break;
				case 20503:$points[2][14]=2;$color=$color2;break;
				endswitch;
				$tree[2][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12317 || $char_talents["spell"]==13045 || $char_talents["spell"]==13046 || $char_talents["spell"]==13047 || $char_talents["spell"]==13048)
			{
				switch ($char_talents["spell"]):
				case 12317:$points[2][15]=1;break;
				case 13045:$points[2][15]=2;break;
				case 13046:$points[2][15]=3;break;
				case 13047:$points[2][15]=4;break;
				case 13048:$points[2][15]=5;$color=$color2;break;
				endswitch;
				$tree[2][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][15]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29590 || $char_talents["spell"]==29591 || $char_talents["spell"]==29592)
			{
				switch ($char_talents["spell"]):
				case 29590:$points[2][17]=1;break;
				case 29591:$points[2][17]=2;break;
				case 29592:$points[2][17]=3;$color=$color2;break;
				endswitch;
				$tree[2][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][17]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12292)
			{
				$points[2][18]=1;
				$color=$color2;
				$tree[2][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29888 || $char_talents["spell"]==29889)
			{
				switch ($char_talents["spell"]):
				case 29888:$points[2][19]=1;break;
				case 29889:$points[2][19]=2;$color=$color2;break;
				endswitch;
				$tree[2][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][19]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20500 || $char_talents["spell"]==20501)
			{
				switch ($char_talents["spell"]):
				case 20500:$points[2][21]=1;break;
				case 20501:$points[2][21]=2;$color=$color2;break;
				endswitch;
				$tree[2][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12319 || $char_talents["spell"]==12971 || $char_talents["spell"]==12972 || $char_talents["spell"]==12973 || $char_talents["spell"]==12974)
			{
				switch ($char_talents["spell"]):
				case 12319:$points[2][23]=1;break;
				case 12971:$points[2][23]=2;break;
				case 12972:$points[2][23]=3;break;
				case 12973:$points[2][23]=4;break;
				case 12974:$points[2][23]=5;$color=$color2;break;
				endswitch;
				$tree[2][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46908 || $char_talents["spell"]==46909 || $char_talents["spell"]==56924)
			{
				switch ($char_talents["spell"]):
				case 46908:$points[2][25]=1;break;
				case 46909:$points[2][25]=2;break;
				case 56924:$points[2][25]=3;$color=$color2;break;
				endswitch;
				$tree[2][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==23881)
			{
				$points[2][26]=1;
				$color=$color2;
				$tree[2][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29721 || $char_talents["spell"]==29776)
			{
				switch ($char_talents["spell"]):
				case 29721:$points[2][28]=1;break;
				case 29776:$points[2][28]=2;$color=$color2;break;
				endswitch;
				$tree[2][28]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/28.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][28]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46910 || $char_talents["spell"]==46911)
			{
				switch ($char_talents["spell"]):
				case 46910:$points[2][29]=1;break;
				case 46911:$points[2][29]=2;$color=$color2;break;
				endswitch;
				$tree[2][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][29]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29759 || $char_talents["spell"]==29760 || $char_talents["spell"]==29761 || $char_talents["spell"]==29762 || $char_talents["spell"]==29763)
			{
				switch ($char_talents["spell"]):
				case 29759:$points[2][32]=1;break;
				case 29760:$points[2][32]=2;break;
				case 29761:$points[2][32]=3;break;
				case 29762:$points[2][32]=4;break;
				case 29763:$points[2][32]=5;$color=$color2;break;
				endswitch;
				$tree[2][32]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/32.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][32]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==60970)
			{
				$points[2][33]=2;
				$color=$color2;
				$tree[2][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][33]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29801)
			{
				$points[2][34]=1;
				$color=$color2;
				$tree[2][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46913 || $char_talents["spell"]==46914 || $char_talents["spell"]==46915)
			{
				switch ($char_talents["spell"]):
				case 46913:$points[2][35]=1;break;
				case 46914:$points[2][35]=2;break;
				case 46915:$points[2][35]=3;$color=$color2;break;
				endswitch;
				$tree[2][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==56927 || $char_talents["spell"]==56929 || $char_talents["spell"]==56930 || $char_talents["spell"]==56931 || $char_talents["spell"]==56932)
			{
				switch ($char_talents["spell"]):
				case 56927:$points[2][38]=1;break;
				case 56929:$points[2][38]=2;break;
				case 56930:$points[2][38]=3;break;
				case 56931:$points[2][38]=4;break;
				case 56932:$points[2][38]=5;$color=$color2;break;
				endswitch;
				$tree[2][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46917)
			{
				$points[2][42]=1;
				$color=$color2;
				$tree[2][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 3
		if($char_talents["spell"]==12301 || $char_talents["spell"]==12818)
			{
				switch ($char_talents["spell"]):
				case 12301:$points[3][1]=1;break;
				case 12818:$points[3][1]=2;$color=$color2;break;
				endswitch;
				$tree[3][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][1]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12298 || $char_talents["spell"]==12724 || $char_talents["spell"]==12725 || $char_talents["spell"]==12726 || $char_talents["spell"]==12727)
			{
				switch ($char_talents["spell"]):
				case 12298:$points[3][2]=1;break;
				case 12724:$points[3][2]=2;break;
				case 12725:$points[3][2]=3;break;
				case 12726:$points[3][2]=4;break;
				case 12727:$points[3][2]=5;$color=$color2;break;
				endswitch;
				$tree[3][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12287 || $char_talents["spell"]==12665 || $char_talents["spell"]==12666)
			{
				switch ($char_talents["spell"]):
				case 12287:$points[3][3]=1;break;
				case 12665:$points[3][3]=2;break;
				case 12666:$points[3][3]=3;$color=$color2;break;
				endswitch;
				$tree[3][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][3]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==50685 || $char_talents["spell"]==50686 || $char_talents["spell"]==50687)
			{
				switch ($char_talents["spell"]):
				case 50685:$points[3][6]=1;break;
				case 50686:$points[3][6]=2;break;
				case 50687:$points[3][6]=3;$color=$color2;break;
				endswitch;
				$tree[3][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12297 || $char_talents["spell"]==12750 || $char_talents["spell"]==12751 || $char_talents["spell"]==12752 || $char_talents["spell"]==12753)
			{
				switch ($char_talents["spell"]):
				case 12297:$points[3][7]=1;break;
				case 12750:$points[3][7]=2;break;
				case 12751:$points[3][7]=3;break;
				case 12752:$points[3][7]=4;break;
				case 12753:$points[3][7]=5;$color=$color2;break;
				endswitch;
				$tree[3][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][7]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12975)
			{
				$points[3][9]=1;
				$color=$color2;
				$tree[3][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][9]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12797 || $char_talents["spell"]==12799)
			{
				switch ($char_talents["spell"]):
				case 12797:$points[3][10]=1;break;
				case 12799:$points[3][10]=2;$color=$color2;break;
				endswitch;
				$tree[3][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][10]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29598 || $char_talents["spell"]==29599)
			{
				switch ($char_talents["spell"]):
				case 29598:$points[3][11]=1;break;
				case 29599:$points[3][11]=2;$color=$color2;break;
				endswitch;
				$tree[3][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][11]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12299 || $char_talents["spell"]==12761 || $char_talents["spell"]==12762 || $char_talents["spell"]==12763 || $char_talents["spell"]==12764)
			{
				switch ($char_talents["spell"]):
				case 12299:$points[3][12]=1;break;
				case 12761:$points[3][12]=2;break;
				case 12762:$points[3][12]=3;break;
				case 12763:$points[3][12]=4;break;
				case 12764:$points[3][12]=5;$color=$color2;break;
				endswitch;
				$tree[3][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][12]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==59088 || $char_talents["spell"]==59089)
			{
				switch ($char_talents["spell"]):
				case 59088:$points[3][13]=1;break;
				case 59089:$points[3][13]=2;$color=$color2;break;
				endswitch;
				$tree[3][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12313 || $char_talents["spell"]==12804)
			{
				switch ($char_talents["spell"]):
				case 12313:$points[3][14]=1;break;
				case 12804:$points[3][14]=2;$color=$color2;break;
				endswitch;
				$tree[3][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12308 || $char_talents["spell"]==12810 || $char_talents["spell"]==12811)
			{
				switch ($char_talents["spell"]):
				case 12308:$points[3][15]=1;break;
				case 12810:$points[3][15]=2;break;
				case 12811:$points[3][15]=3;$color=$color2;break;
				endswitch;
				$tree[3][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12312 || $char_talents["spell"]==12803)
			{
				switch ($char_talents["spell"]):
				case 12312:$points[3][17]=1;break;
				case 12803:$points[3][17]=2;$color=$color2;break;
				endswitch;
				$tree[3][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12809)
			{
				$points[3][18]=1;
				$color=$color2;
				$tree[3][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==12311 || $char_talents["spell"]==12958)
			{
				switch ($char_talents["spell"]):
				case 12311:$points[3][19]=1;break;
				case 12958:$points[3][19]=2;$color=$color2;break;
				endswitch;
				$tree[3][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][19]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16538 || $char_talents["spell"]==16539 || $char_talents["spell"]==16540 || $char_talents["spell"]==16541 || $char_talents["spell"]==16542)
			{
				switch ($char_talents["spell"]):
				case 16538:$points[3][23]=1;break;
				case 16539:$points[3][23]=2;break;
				case 16540:$points[3][23]=3;break;
				case 16541:$points[3][23]=4;break;
				case 16542:$points[3][23]=5;$color=$color2;break;
				endswitch;
				$tree[3][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29593 || $char_talents["spell"]==29594)
			{
				switch ($char_talents["spell"]):
				case 29593:$points[3][25]=1;break;
				case 29594:$points[3][25]=2;$color=$color2;break;
				endswitch;
				$tree[3][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][25]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==50720)
			{
				$points[3][26]=1;
				$color=$color2;
				$tree[3][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29787 || $char_talents["spell"]==29790 || $char_talents["spell"]==29792)
			{
				switch ($char_talents["spell"]):
				case 29787:$points[3][27]=1;break;
				case 29790:$points[3][27]=2;break;
				case 29792:$points[3][27]=3;$color=$color2;break;
				endswitch;
				$tree[3][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==29140 || $char_talents["spell"]==29143 || $char_talents["spell"]==29144)
			{
				switch ($char_talents["spell"]):
				case 29140:$points[3][30]=1;break;
				case 29143:$points[3][30]=2;break;
				case 29144:$points[3][30]=3;$color=$color2;break;
				endswitch;
				$tree[3][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][30]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46945 || $char_talents["spell"]==46949)
			{
				switch ($char_talents["spell"]):
				case 46945:$points[3][31]=1;break;
				case 46949:$points[3][31]=2;$color=$color2;break;
				endswitch;
				$tree[3][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][31]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57499)
			{
				$points[3][33]=1;
				$color=$color2;
				$tree[3][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][33]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20243)
			{
				$points[3][34]=1;
				$color=$color2;
				$tree[3][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==47294 || $char_talents["spell"]==47295 || $char_talents["spell"]==47296)
			{
				switch ($char_talents["spell"]):
				case 47294:$points[3][35]=1;break;
				case 47295:$points[3][35]=2;break;
				case 47296:$points[3][35]=3;$color=$color2;break;
				endswitch;
				$tree[3][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46951 || $char_talents["spell"]==46952 || $char_talents["spell"]==46953)
			{
				switch ($char_talents["spell"]):
				case 46951:$points[3][38]=1;break;
				case 46952:$points[3][38]=2;break;
				case 46953:$points[3][38]=3;$color=$color2;break;
				endswitch;
				$tree[3][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][38]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==58872 || $char_talents["spell"]==58874)
			{
				switch ($char_talents["spell"]):
				case 58872:$points[3][39]=1;break;
				case 58874:$points[3][39]=2;$color=$color2;break;
				endswitch;
				$tree[3][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][39]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==46968)
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
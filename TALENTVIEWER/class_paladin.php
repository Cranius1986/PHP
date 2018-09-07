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
//PALADIN
$path="paladin";
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
		if($char_talents["spell"]==20205 || $char_talents["spell"]==20206 || $char_talents["spell"]==20207 || $char_talents["spell"]==20209 || $char_talents["spell"]==20208)
			{
				switch ($char_talents["spell"]):
				case 20205:$points[1][2]=1;break;
				case 20206:$points[1][2]=2;break;
				case 20207:$points[1][2]=3;break;
				case 20209:$points[1][2]=4;break;
				case 20208:$points[1][2]=5;$color=$color2;break;
				endswitch;
				$tree[1][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20224 || $char_talents["spell"]==20225 || $char_talents["spell"]==20330 || $char_talents["spell"]==20331 || $char_talents["spell"]==20332)
			{
				switch ($char_talents["spell"]):
				case 20224:$points[1][3]=1;break;
				case 20225:$points[1][3]=2;break;
				case 20330:$points[1][3]=3;break;
				case 20331:$points[1][3]=4;break;
				case 20332:$points[1][3]=5;$color=$color2;break;
				endswitch;
				$tree[1][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20237 || $char_talents["spell"]==20238 || $char_talents["spell"]==20239)
			{
				switch ($char_talents["spell"]):
				case 20237:$points[1][5]=1;break;
				case 20238:$points[1][5]=2;break;
				case 20239:$points[1][5]=3;$color=$color2;break;
				endswitch;
				$tree[1][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20257 || $char_talents["spell"]==20258 || $char_talents["spell"]==20259 || $char_talents["spell"]==20260 || $char_talents["spell"]==20261)
			{
				switch ($char_talents["spell"]):
				case 20257:$points[1][6]=1;break;
				case 20258:$points[1][6]=2;break;
				case 20259:$points[1][6]=3;break;
				case 20260:$points[1][6]=4;break;
				case 20261:$points[1][6]=5;$color=$color2;break;
				endswitch;
				$tree[1][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][6]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==9453 || $char_talents["spell"]==25836)
			{
				switch ($char_talents["spell"]):
				case 9453:$points[1][7]=1;break;
				case 25836:$points[1][7]=2;$color=$color2;break;
				endswitch;
				$tree[1][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][7]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31821)
			{
				$points[1][9]=1;
				$color=$color2;
				$tree[1][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][9]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20210 || $char_talents["spell"]==20212 || $char_talents["spell"]==20213 || $char_talents["spell"]==20214 || $char_talents["spell"]==20215)
			{
				switch ($char_talents["spell"]):
				case 20210:$points[1][10]=1;break;
				case 20212:$points[1][10]=2;break;
				case 20213:$points[1][10]=3;break;
				case 20214:$points[1][10]=4;break;
				case 20215:$points[1][10]=5;$color=$color2;break;
				endswitch;
				$tree[1][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][10]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20234 || $char_talents["spell"]==20235)
			{
				switch ($char_talents["spell"]):
				case 20234:$points[1][11]=1;break;
				case 20235:$points[1][11]=2;$color=$color2;break;
				endswitch;
				$tree[1][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][11]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20254|| $char_talents["spell"]==20255 || $char_talents["spell"]==20256)
			{
				switch ($char_talents["spell"]):
				case 20254:$points[1][13]=1;break;
				case 20255:$points[1][13]=2;break;
				case 20256:$points[1][13]=3;$color=$color2;break;
				endswitch;
				$tree[1][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][13]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20244 || $char_talents["spell"]==20245)
			{
				switch ($char_talents["spell"]):
				case 20244:$points[1][15]=1;break;
				case 20245:$points[1][15]=2;$color=$color2;break;
				endswitch;
				$tree[1][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][15]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53660 || $char_talents["spell"]==53661)
			{
				switch ($char_talents["spell"]):
				case 53660:$points[1][16]=1;break;
				case 53661:$points[1][16]=2;$color=$color2;break;
				endswitch;
				$tree[1][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][16]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31822 || $char_talents["spell"]==31823)
			{
				switch ($char_talents["spell"]):
				case 31822:$points[1][17]=1;break;
				case 31823:$points[1][17]=2;$color=$color2;break;
				endswitch;
				$tree[1][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20216)
			{
				$points[1][18]=1;
				$color=$color2;
				$tree[1][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20359 || $char_talents["spell"]==20360 || $char_talents["spell"]==20361)
			{
				switch ($char_talents["spell"]):
				case 20359:$points[1][19]=1;break;
				case 20360:$points[1][19]=2;break;
				case 20361:$points[1][19]=3;$color=$color2;break;
				endswitch;
				$tree[1][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][19]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31825 || $char_talents["spell"]==31826)
			{
				switch ($char_talents["spell"]):
				case 31825:$points[1][21]=1;break;
				case 31826:$points[1][21]=2;$color=$color2;break;
				endswitch;
				$tree[1][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==5923 || $char_talents["spell"]==5924 || $char_talents["spell"]==5925 || $char_talents["spell"]==5926 || $char_talents["spell"]==25829)
			{
				switch ($char_talents["spell"]):
				case 5923:$points[1][23]=1;break;
				case 5924:$points[1][23]=2;break;
				case 5925:$points[1][23]=3;break;
				case 5926:$points[1][23]=4;break;
				case 25829:$points[1][23]=5;$color=$color2;break;
				endswitch;
				$tree[1][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31833 || $char_talents["spell"]==31835 || $char_talents["spell"]==31836)
			{
				switch ($char_talents["spell"]):
				case 31833:$points[1][25]=1;break;
				case 31835:$points[1][25]=2;break;
				case 31836:$points[1][25]=3;$color=$color2;break;
				endswitch;
				$tree[1][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20473)
			{
				$points[1][26]=1;
				$color=$color2;
				$tree[1][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31828 || $char_talents["spell"]==31829 || $char_talents["spell"]==31830)
			{
				switch ($char_talents["spell"]):
				case 31828:$points[1][27]=1;break;
				case 31829:$points[1][27]=2;break;
				case 31830:$points[1][27]=3;$color=$color2;break;
				endswitch;
				$tree[1][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53551 || $char_talents["spell"]==53552 || $char_talents["spell"]==53553)
			{
				switch ($char_talents["spell"]):
				case 53551:$points[1][29]=1;break;
				case 53552:$points[1][29]=2;break;
				case 53553:$points[1][29]=3;$color=$color2;break;
				endswitch;
				$tree[1][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][29]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31837 || $char_talents["spell"]==31838 || $char_talents["spell"]==31839 || $char_talents["spell"]==31840 || $char_talents["spell"]==31841)
			{
				switch ($char_talents["spell"]):
				case 31837:$points[1][31]=1;break;
				case 31838:$points[1][31]=2;break;
				case 31839:$points[1][31]=3;break;
				case 31840:$points[1][31]=4;break;
				case 31841:$points[1][31]=5;$color=$color2;break;
				endswitch;
				$tree[1][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][31]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31842)
			{
				$points[1][33]=1;
				$color=$color2;
				$tree[1][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][33]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53671 || $char_talents["spell"]==53673 || $char_talents["spell"]==54151 || $char_talents["spell"]==54154 || $char_talents["spell"]==54155)
			{
				switch ($char_talents["spell"]):
				case 53671:$points[1][35]=1;break;
				case 53673:$points[1][35]=2;break;
				case 54151:$points[1][35]=3;break;
				case 54154:$points[1][35]=4;break;
				case 54155:$points[1][35]=5;$color=$color2;break;
				endswitch;
				$tree[1][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][35]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53569 || $char_talents["spell"]==53576)
			{
				switch ($char_talents["spell"]):
				case 53569:$points[1][38]=1;break;
				case 53576:$points[1][38]=2;$color=$color2;break;
				endswitch;
				$tree[1][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][38]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53556 || $char_talents["spell"]==53557)
			{
				switch ($char_talents["spell"]):
				case 53556:$points[1][39]=1;break;
				case 53557:$points[1][39]=2;$color=$color2;break;
				endswitch;
				$tree[1][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][39]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53563)
			{
				$points[1][42]=1;
				$color=$color2;
				$tree[1][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 2
		if($char_talents["spell"]==63646 || $char_talents["spell"]==63647 || $char_talents["spell"]==63648 || $char_talents["spell"]==63649 || $char_talents["spell"]==63650)
			{
				switch ($char_talents["spell"]):
				case 63646:$points[2][2]=1;break;
				case 63647:$points[2][2]=2;break;
				case 63648:$points[2][2]=3;break;
				case 63649:$points[2][2]=4;break;
				case 63650:$points[2][2]=5;$color=$color2;break;
				endswitch;
				$tree[2][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20262 || $char_talents["spell"]==20263 || $char_talents["spell"]==20264 || $char_talents["spell"]==20265 || $char_talents["spell"]==20266)
			{
				switch ($char_talents["spell"]):
				case 20262:$points[2][3]=1;break;
				case 20263:$points[2][3]=2;break;
				case 20264:$points[2][3]=3;break;
				case 20265:$points[2][3]=4;break;
				case 20266:$points[2][3]=5;$color=$color2;break;
				endswitch;
				$tree[2][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31844 || $char_talents["spell"]==31845 || $char_talents["spell"]==53519)
			{
				switch ($char_talents["spell"]):
				case 31844:$points[2][5]=1;break;
				case 31845:$points[2][5]=2;break;
				case 53519:$points[2][5]=3;$color=$color2;break;
				endswitch;
				$tree[2][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20174 || $char_talents["spell"]==20175)
			{
				switch ($char_talents["spell"]):
				case 20174:$points[2][6]=1;break;
				case 20175:$points[2][6]=2;$color=$color2;break;
				endswitch;
				$tree[2][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20096 || $char_talents["spell"]==20097 || $char_talents["spell"]==20098 || $char_talents["spell"]==20099 || $char_talents["spell"]==20100)
			{
				switch ($char_talents["spell"]):
				case 20096:$points[2][7]=1;break;
				case 20097:$points[2][7]=2;break;
				case 20098:$points[2][7]=3;break;
				case 20099:$points[2][7]=4;break;
				case 20100:$points[2][7]=5;$color=$color2;break;
				endswitch;
				$tree[2][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][7]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==64205)
			{
				$points[2][9]=1;
				$color=$color2;
				$tree[2][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][9]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20468 || $char_talents["spell"]==20469 || $char_talents["spell"]==20470)
			{
				switch ($char_talents["spell"]):
				case 20468:$points[2][10]=1;break;
				case 20469:$points[2][10]=2;break;
				case 20470:$points[2][10]=3;$color=$color2;break;
				endswitch;
				$tree[2][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][10]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20143 || $char_talents["spell"]==20144 || $char_talents["spell"]==20145 || $char_talents["spell"]==20146 || $char_talents["spell"]==20147)
			{
				switch ($char_talents["spell"]):
				case 20143:$points[2][11]=1;break;
				case 20144:$points[2][11]=2;break;
				case 20145:$points[2][11]=3;break;
				case 20146:$points[2][11]=4;break;
				case 20147:$points[2][11]=5;$color=$color2;break;
				endswitch;
				$tree[2][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][11]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53527 || $char_talents["spell"]==53530)
			{
				switch ($char_talents["spell"]):
				case 53527:$points[2][13]=1;break;
				case 53530:$points[2][13]=2;$color=$color2;break;
				endswitch;
				$tree[2][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20487 || $char_talents["spell"]==20488)
			{
				switch ($char_talents["spell"]):
				case 20487:$points[2][14]=1;break;
				case 20488:$points[2][14]=2;$color=$color2;break;
				endswitch;
				$tree[2][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][14]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20138 || $char_talents["spell"]==20139 || $char_talents["spell"]==20140)
			{
				switch ($char_talents["spell"]):
				case 20138:$points[2][15]=1;break;
				case 20139:$points[2][15]=2;break;
				case 20140:$points[2][15]=3;$color=$color2;break;
				endswitch;
				$tree[2][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20911)
			{
				$points[2][18]=1;
				$color=$color2;
				$tree[2][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20177 || $char_talents["spell"]==20179 || $char_talents["spell"]==20181 || $char_talents["spell"]==20180 || $char_talents["spell"]==20182)
			{
				switch ($char_talents["spell"]):
				case 20177:$points[2][19]=1;break;
				case 20179:$points[2][19]=2;break;
				case 20181:$points[2][19]=3;break;
				case 20180:$points[2][19]=4;break;
				case 20182:$points[2][19]=5;$color=$color2;break;
				endswitch;
				$tree[2][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][19]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31848 || $char_talents["spell"]==31849)
			{
				switch ($char_talents["spell"]):
				case 31848:$points[2][21]=1;break;
				case 31849:$points[2][21]=2;$color=$color2;break;
				endswitch;
				$tree[2][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20196 || $char_talents["spell"]==20197 || $char_talents["spell"]==20198)
			{
				switch ($char_talents["spell"]):
				case 20196:$points[2][23]=1;break;
				case 20197:$points[2][23]=2;break;
				case 20198:$points[2][23]=3;$color=$color2;break;
				endswitch;
				$tree[2][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][23]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31785 || $char_talents["spell"]==33776)
			{
				switch ($char_talents["spell"]):
				case 31785:$points[2][25]=1;break;
				case 33776:$points[2][25]=2;$color=$color2;break;
				endswitch;
				$tree[2][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][25]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20925)
			{
				$points[2][26]=1;
				$color=$color2;
				$tree[2][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31850 || $char_talents["spell"]==31851 || $char_talents["spell"]==31852)
			{
				switch ($char_talents["spell"]):
				case 31850:$points[2][27]=1;break;
				case 31851:$points[2][27]=2;break;
				case 31852:$points[2][27]=3;$color=$color2;break;
				endswitch;
				$tree[2][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20127 || $char_talents["spell"]==20130 || $char_talents["spell"]==20135)
			{
				switch ($char_talents["spell"]):
				case 20127:$points[2][29]=1;break;
				case 20130:$points[2][29]=2;break;
				case 20135:$points[2][29]=3;$color=$color2;break;
				endswitch;
				$tree[2][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][29]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31858 || $char_talents["spell"]==31859 || $char_talents["spell"]==31860)
			{
				switch ($char_talents["spell"]):
				case 31858:$points[2][31]=1;break;
				case 31859:$points[2][31]=2;break;
				case 31860:$points[2][31]=3;$color=$color2;break;
				endswitch;
				$tree[2][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][31]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53590 || $char_talents["spell"]==53591 || $char_talents["spell"]==53592)
			{
				switch ($char_talents["spell"]):
				case 53590:$points[2][33]=1;break;
				case 53591:$points[2][33]=2;break;
				case 53592:$points[2][33]=3;$color=$color2;break;
				endswitch;
				$tree[2][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31935)
			{
				$points[2][34]=1;
				$color=$color2;
				$tree[2][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53583 || $char_talents["spell"]==53585)
			{
				switch ($char_talents["spell"]):
				case 53583:$points[2][35]=1;break;
				case 53585:$points[2][35]=2;$color=$color2;break;
				endswitch;
				$tree[2][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][35]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53709 || $char_talents["spell"]==53710 || $char_talents["spell"]==53711)
			{
				switch ($char_talents["spell"]):
				case 53709:$points[2][38]=1;break;
				case 53710:$points[2][38]=2;break;
				case 53711:$points[2][38]=3;$color=$color2;break;
				endswitch;
				$tree[2][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][38]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53695 || $char_talents["spell"]==53696)
			{
				switch ($char_talents["spell"]):
				case 53695:$points[2][39]=1;break;
				case 53696:$points[2][39]=2;$color=$color2;break;
				endswitch;
				$tree[2][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][39]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53595)
			{
				$points[2][42]=1;
				$color=$color2;
				$tree[2][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 3
		if($char_talents["spell"]==20060 || $char_talents["spell"]==20061 || $char_talents["spell"]==20062 || $char_talents["spell"]==20063 || $char_talents["spell"]==20064)
			{
				switch ($char_talents["spell"]):
				case 20060:$points[3][2]=1;break;
				case 20061:$points[3][2]=2;break;
				case 20062:$points[3][2]=3;break;
				case 20063:$points[3][2]=4;break;
				case 20064:$points[3][2]=5;$color=$color2;break;
				endswitch;
				$tree[3][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20101 || $char_talents["spell"]==20102 || $char_talents["spell"]==20103 || $char_talents["spell"]==20104 || $char_talents["spell"]==20105)
			{
				switch ($char_talents["spell"]):
				case 20101:$points[3][3]=1;break;
				case 20102:$points[3][3]=2;break;
				case 20103:$points[3][3]=3;break;
				case 20104:$points[3][3]=4;break;
				case 20105:$points[3][3]=5;$color=$color2;break;
				endswitch;
				$tree[3][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==25956 || $char_talents["spell"]==25957)
			{
				switch ($char_talents["spell"]):
				case 25956:$points[3][5]=1;break;
				case 25957:$points[3][5]=2;$color=$color2;break;
				endswitch;
				$tree[3][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][5]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20335 || $char_talents["spell"]==20336 || $char_talents["spell"]==20337)
			{
				switch ($char_talents["spell"]):
				case 20335:$points[3][6]=1;break;
				case 20336:$points[3][6]=2;break;
				case 20337:$points[3][6]=3;$color=$color2;break;
				endswitch;
				$tree[3][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20042 || $char_talents["spell"]==20045)
			{
				switch ($char_talents["spell"]):
				case 20042:$points[3][7]=1;break;
				case 20045:$points[3][7]=2;$color=$color2;break;
				endswitch;
				$tree[3][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][7]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==9452 || $char_talents["spell"]==26016)
			{
				switch ($char_talents["spell"]):
				case 9452:$points[3][9]=1;break;
				case 26016:$points[3][9]=2;$color=$color2;break;
				endswitch;
				$tree[3][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20117 || $char_talents["spell"]==20118 || $char_talents["spell"]==20119 || $char_talents["spell"]==20120 || $char_talents["spell"]==20121)
			{
				switch ($char_talents["spell"]):
				case 20117:$points[3][10]=1;break;
				case 20118:$points[3][10]=2;break;
				case 20119:$points[3][10]=3;break;
				case 20120:$points[3][10]=4;break;
				case 20121:$points[3][10]=5;$color=$color2;break;
				endswitch;
				$tree[3][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][10]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20375)
			{
				$points[3][11]=1;
				$color=$color2;
				$tree[3][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][11]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==26022 || $char_talents["spell"]==26023)
			{
				switch ($char_talents["spell"]):
				case 26022:$points[3][12]=1;break;
				case 26023:$points[3][12]=2;$color=$color2;break;
				endswitch;
				$tree[3][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][12]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==9799 || $char_talents["spell"]==25988)
			{
				switch ($char_talents["spell"]):
				case 9799:$points[3][13]=1;break;
				case 25988:$points[3][13]=2;$color=$color2;break;
				endswitch;
				$tree[3][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==32043 || $char_talents["spell"]==35396 || $char_talents["spell"]==35397)
			{
				switch ($char_talents["spell"]):
				case 32043:$points[3][15]=1;break;
				case 35396:$points[3][15]=2;break;
				case 35397:$points[3][15]=3;$color=$color2;break;
				endswitch;
				$tree[3][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31866 || $char_talents["spell"]==31867 || $char_talents["spell"]==31868)
			{
				switch ($char_talents["spell"]):
				case 31866:$points[3][16]=1;break;
				case 31867:$points[3][16]=2;break;
				case 31868:$points[3][16]=3;$color=$color2;break;
				endswitch;
				$tree[3][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][16]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20111 || $char_talents["spell"]==20112 || $char_talents["spell"]==20113)
			{
				switch ($char_talents["spell"]):
				case 20111:$points[3][17]=1;break;
				case 20112:$points[3][17]=2;break;
				case 20113:$points[3][17]=3;$color=$color2;break;
				endswitch;
				$tree[3][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][17]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31869)
			{
				$points[3][19]=1;
				$color=$color2;
				$tree[3][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][19]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20049 || $char_talents["spell"]==20056 || $char_talents["spell"]==20057)
			{
				switch ($char_talents["spell"]):
				case 20049:$points[3][22]=1;break;
				case 20056:$points[3][22]=2;break;
				case 20057:$points[3][22]=3;$color=$color2;break;
				endswitch;
				$tree[3][22]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/22.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][22]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31871 || $char_talents["spell"]==31872)
			{
				switch ($char_talents["spell"]):
				case 31871:$points[3][23]=1;break;
				case 31872:$points[3][23]=2;$color=$color2;break;
				endswitch;
				$tree[3][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][23]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53486 || $char_talents["spell"]==53488)
			{
				switch ($char_talents["spell"]):
				case 53486:$points[3][25]=1;break;
				case 53488:$points[3][25]=2;$color=$color2;break;
				endswitch;
				$tree[3][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][25]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==20066)
			{
				$points[3][26]=1;
				$color=$color2;
				$tree[3][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31876 || $char_talents["spell"]==31877 || $char_talents["spell"]==31878)
			{
				switch ($char_talents["spell"]):
				case 31876:$points[3][27]=1;break;
				case 31877:$points[3][27]=2;break;
				case 31878:$points[3][27]=3;$color=$color2;break;
				endswitch;
				$tree[3][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==31879 || $char_talents["spell"]==31880 || $char_talents["spell"]==31881)
			{
				switch ($char_talents["spell"]):
				case 31879:$points[3][30]=1;break;
				case 31880:$points[3][30]=2;break;
				case 31881:$points[3][30]=3;$color=$color2;break;
				endswitch;
				$tree[3][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][30]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53375 || $char_talents["spell"]==53376)
			{
				switch ($char_talents["spell"]):
				case 53375:$points[3][31]=1;break;
				case 53376:$points[3][31]=2;$color=$color2;break;
				endswitch;
				$tree[3][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][31]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53379 || $char_talents["spell"]==53484 || $char_talents["spell"]==53648)
			{
				switch ($char_talents["spell"]):
				case 53379:$points[3][33]=1;break;
				case 53484:$points[3][33]=2;break;
				case 53648:$points[3][33]=3;$color=$color2;break;
				endswitch;
				$tree[3][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35395)
			{
				$points[3][34]=1;
				$color=$color2;
				$tree[3][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53501 || $char_talents["spell"]==53502 || $char_talents["spell"]==53503)
			{
				switch ($char_talents["spell"]):
				case 53501:$points[3][35]=1;break;
				case 53502:$points[3][35]=2;break;
				case 53503:$points[3][35]=3;$color=$color2;break;
				endswitch;
				$tree[3][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53380 || $char_talents["spell"]==53381 || $char_talents["spell"]==53382)
			{
				switch ($char_talents["spell"]):
				case 53380:$points[3][38]=1;break;
				case 53381:$points[3][38]=2;break;
				case 53382:$points[3][38]=3;$color=$color2;break;
				endswitch;
				$tree[3][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][38]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==53385)
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
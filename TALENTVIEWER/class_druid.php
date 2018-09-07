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
//DRUID
$path="druid";
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
		if($char_talents["spell"]==16814 || $char_talents["spell"]==16815 || $char_talents["spell"]==16816 || $char_talents["spell"]==16817 || $char_talents["spell"]==16818)
			{
				switch ($char_talents["spell"]):
				case 16814:$points[1][2]=1;break;
				case 16815:$points[1][2]=2;break;
				case 16816:$points[1][2]=3;break;
				case 16817:$points[1][2]=4;break;
				case 16818:$points[1][2]=5;$color=$color2;break;
				endswitch;
				$tree[1][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57810 || $char_talents["spell"]==57811 || $char_talents["spell"]==57812 || $char_talents["spell"]==57813 || $char_talents["spell"]==57814)
			{
				switch ($char_talents["spell"]):
				case 57810:$points[1][3]=1;break;
				case 57811:$points[1][3]=2;break;
				case 57812:$points[1][3]=3;break;
				case 57813:$points[1][3]=4;break;
				case 57814:$points[1][3]=5;$color=$color2;break;
				endswitch;
				$tree[1][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16845 || $char_talents["spell"]==16846 || $char_talents["spell"]==16847)
			{
				switch ($char_talents["spell"]):
				case 16845:$points[1][5]=1;break;
				case 16846:$points[1][5]=2;break;
				case 16847:$points[1][5]=3;$color=$color2;break;
				endswitch;
				$tree[1][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==35363 || $char_talents["spell"]==35364)
			{
				switch ($char_talents["spell"]):
				case 35363:$points[1][6]=1;break;
				case 35364:$points[1][6]=2;$color=$color2;break;
				endswitch;
				$tree[1][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16821 || $char_talents["spell"]==16822)
			{
				switch ($char_talents["spell"]):
				case 16821:$points[1][8]=1;break;
				case 16822:$points[1][8]=2;$color=$color2;break;
				endswitch;
				$tree[1][8]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/8.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][8]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16836 || $char_talents["spell"]==16839 || $char_talents["spell"]==16840)
			{
				switch ($char_talents["spell"]):
				case 16836:$points[1][9]=1;break;
				case 16839:$points[1][9]=2;break;
				case 16840:$points[1][9]=3;$color=$color2;break;
				endswitch;
				$tree[1][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][9]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16880 || $char_talents["spell"]==61345 || $char_talents["spell"]==61346)
			{
				switch ($char_talents["spell"]):
				case 16880:$points[1][10]=1;break;
				case 61345:$points[1][10]=2;break;
				case 61346:$points[1][10]=3;$color=$color2;break;
				endswitch;
				$tree[1][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][10]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57865)
			{
				$points[1][11]=1;
				$color=$color2;
				$tree[1][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][11]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16819 || $char_talents["spell"]==16820)
			{
				switch ($char_talents["spell"]):
				case 16819:$points[1][12]=1;break;
				case 16820:$points[1][12]=2;$color=$color2;break;
				endswitch;
				$tree[1][12]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/12.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][12]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16909 || $char_talents["spell"]==16910 || $char_talents["spell"]==16911 || $char_talents["spell"]==16912 || $char_talents["spell"]==16913)
			{
				switch ($char_talents["spell"]):
				case 16909:$points[1][14]=1;break;
				case 16910:$points[1][14]=2;break;
				case 16911:$points[1][14]=3;break;
				case 16912:$points[1][14]=4;break;
				case 16913:$points[1][14]=5;$color=$color2;break;
				endswitch;
				$tree[1][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][14]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16850 || $char_talents["spell"]==16923 || $char_talents["spell"]==16924)
			{
				switch ($char_talents["spell"]):
				case 16850:$points[1][15]=1;break;
				case 16923:$points[1][15]=2;break;
				case 16924:$points[1][15]=3;$color=$color2;break;
				endswitch;
				$tree[1][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33589 || $char_talents["spell"]==33590 || $char_talents["spell"]==33591)
			{
				switch ($char_talents["spell"]):
				case 33589:$points[1][17]=1;break;
				case 33590:$points[1][17]=2;break;
				case 33591:$points[1][17]=3;$color=$color2;break;
				endswitch;
				$tree[1][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][17]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==5570)
			{
				$points[1][18]=1;
				$color=$color2;
				$tree[1][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][18]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57849 || $char_talents["spell"]==57850 || $char_talents["spell"]==57851)
			{
				switch ($char_talents["spell"]):
				case 57849:$points[1][19]=1;break;
				case 57850:$points[1][19]=2;break;
				case 57851:$points[1][19]=3;$color=$color2;break;
				endswitch;
				$tree[1][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][19]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33597 || $char_talents["spell"]==33599 || $char_talents["spell"]==33956)
			{
				switch ($char_talents["spell"]):
				case 33597:$points[1][21]=1;break;
				case 33599:$points[1][21]=2;break;
				case 33956:$points[1][21]=3;$color=$color2;break;
				endswitch;
				$tree[1][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][21]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16896 || $char_talents["spell"]==16897 || $char_talents["spell"]==16899)
			{
				switch ($char_talents["spell"]):
				case 16896:$points[1][22]=1;break;
				case 16897:$points[1][22]=2;break;
				case 16899:$points[1][22]=3;$color=$color2;break;
				endswitch;
				$tree[1][22]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/22.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][22]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33592 || $char_talents["spell"]==33596)
			{
				switch ($char_talents["spell"]):
				case 33592:$points[1][23]=1;break;
				case 33596:$points[1][23]=2;$color=$color2;break;
				endswitch;
				$tree[1][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][23]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==24858)
			{
				$points[1][26]=1;
				$color=$color2;
				$tree[1][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48384 || $char_talents["spell"]==48395 || $char_talents["spell"]==48396)
			{
				switch ($char_talents["spell"]):
				case 48384:$points[1][27]=1;break;
				case 48395:$points[1][27]=2;break;
				case 48396:$points[1][27]=3;$color=$color2;break;
				endswitch;
				$tree[1][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33600 || $char_talents["spell"]==33601 || $char_talents["spell"]==33602)
			{
				switch ($char_talents["spell"]):
				case 33600:$points[1][28]=1;break;
				case 33601:$points[1][28]=2;break;
				case 33602:$points[1][28]=3;$color=$color2;break;
				endswitch;
				$tree[1][28]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/28.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][28]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48389 || $char_talents["spell"]==48392 || $char_talents["spell"]==48393)
			{
				switch ($char_talents["spell"]):
				case 48389:$points[1][29]=1;break;
				case 48392:$points[1][29]=2;break;
				case 48393:$points[1][29]=3;$color=$color2;break;
				endswitch;
				$tree[1][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][29]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33603 || $char_talents["spell"]==33604 || $char_talents["spell"]==33605 || $char_talents["spell"]==33606 || $char_talents["spell"]==33607)
			{
				switch ($char_talents["spell"]):
				case 33603:$points[1][31]=1;break;
				case 33604:$points[1][31]=2;break;
				case 33605:$points[1][31]=3;break;
				case 33606:$points[1][31]=4;break;
				case 33607:$points[1][31]=5;$color=$color2;break;
				endswitch;
				$tree[1][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][31]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48516 || $char_talents["spell"]==48521 || $char_talents["spell"]==48525)
			{
				switch ($char_talents["spell"]):
				case 48516:$points[1][33]=1;break;
				case 48521:$points[1][33]=2;break;
				case 48525:$points[1][33]=3;$color=$color2;break;
				endswitch;
				$tree[1][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==50516)
			{
				$points[1][34]=1;
				$color=$color2;
				$tree[1][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33831)
			{
				$points[1][35]=1;
				$color=$color2;
				$tree[1][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][35]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48488 || $char_talents["spell"]==48514)
			{
				switch ($char_talents["spell"]):
				case 48488:$points[1][36]=1;break;
				case 48514:$points[1][36]=2;$color=$color2;break;
				endswitch;
				$tree[1][36]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/36.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][36]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48506 || $char_talents["spell"]==48510 || $char_talents["spell"]==48511)
			{
				switch ($char_talents["spell"]):
				case 48506:$points[1][38]=1;break;
				case 48510:$points[1][38]=2;break;
				case 48511:$points[1][38]=3;$color=$color2;break;
				endswitch;
				$tree[1][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][38]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48505)
			{
				$points[1][42]=1;
				$color=$color2;
				$tree[1][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/1/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[1][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 2
		if($char_talents["spell"]==16934 || $char_talents["spell"]==16935 || $char_talents["spell"]==16936 || $char_talents["spell"]==16937 || $char_talents["spell"]==16938)
			{
				switch ($char_talents["spell"]):
				case 16934:$points[2][2]=1;break;
				case 16935:$points[2][2]=2;break;
				case 16936:$points[2][2]=3;break;
				case 16937:$points[2][2]=4;break;
				case 16938:$points[2][2]=5;$color=$color2;break;
				endswitch;
				$tree[2][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][2]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16858 || $char_talents["spell"]==16859 || $char_talents["spell"]==16860 || $char_talents["spell"]==16861 || $char_talents["spell"]==16862)
			{
				switch ($char_talents["spell"]):
				case 16858:$points[2][3]=1;break;
				case 16859:$points[2][3]=2;break;
				case 16860:$points[2][3]=3;break;
				case 16861:$points[2][3]=4;break;
				case 16862:$points[2][3]=5;$color=$color2;break;
				endswitch;
				$tree[2][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16947 || $char_talents["spell"]==16948 || $char_talents["spell"]==16949)
			{
				switch ($char_talents["spell"]):
				case 16947:$points[2][5]=1;break;
				case 16948:$points[2][5]=2;break;
				case 16949:$points[2][5]=3;$color=$color2;break;
				endswitch;
				$tree[2][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][5]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16998 || $char_talents["spell"]==16999)
			{
				switch ($char_talents["spell"]):
				case 16998:$points[2][6]=1;break;
				case 16999:$points[2][6]=2;$color=$color2;break;
				endswitch;
				$tree[2][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][6]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16929 || $char_talents["spell"]==16930 || $char_talents["spell"]==16931)
			{
				switch ($char_talents["spell"]):
				case 16929:$points[2][7]=1;break;
				case 16930:$points[2][7]=2;break;
				case 16931:$points[2][7]=3;$color=$color2;break;
				endswitch;
				$tree[2][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17002 || $char_talents["spell"]==24866)
			{
				switch ($char_talents["spell"]):
				case 17002:$points[2][9]=1;break;
				case 24866:$points[2][9]=2;$color=$color2;break;
				endswitch;
				$tree[2][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][9]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==61336)
			{
				$points[2][10]=1;
				$color=$color2;
				$tree[2][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16942 || $char_talents["spell"]==16943 || $char_talents["spell"]==16944)
			{
				switch ($char_talents["spell"]):
				case 16942:$points[2][11]=1;break;
				case 16943:$points[2][11]=2;break;
				case 16944:$points[2][11]=3;$color=$color2;break;
				endswitch;
				$tree[2][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][11]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16966 || $char_talents["spell"]==16968)
			{
				switch ($char_talents["spell"]):
				case 16966:$points[2][13]=1;break;
				case 16968:$points[2][13]=2;$color=$color2;break;
				endswitch;
				$tree[2][13]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/13.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][13]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16972 || $char_talents["spell"]==16974 || $char_talents["spell"]==16975)
			{
				switch ($char_talents["spell"]):
				case 16972:$points[2][14]=1;break;
				case 16974:$points[2][14]=2;break;
				case 16975:$points[2][14]=3;$color=$color2;break;
				endswitch;
				$tree[2][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][14]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==37116 || $char_talents["spell"]==37117)
			{
				switch ($char_talents["spell"]):
				case 37116:$points[2][15]=1;break;
				case 37117:$points[2][15]=2;$color=$color2;break;
				endswitch;
				$tree[2][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][15]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48409 || $char_talents["spell"]==48410)
			{
				switch ($char_talents["spell"]):
				case 48409:$points[2][16]=1;break;
				case 48410:$points[2][16]=2;$color=$color2;break;
				endswitch;
				$tree[2][16]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/16.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][16]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16940 || $char_talents["spell"]==16941)
			{
				switch ($char_talents["spell"]):
				case 16940:$points[2][17]=1;break;
				case 16941:$points[2][17]=2;$color=$color2;break;
				endswitch;
				$tree[2][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][17]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==49377)
			{
				$points[2][19]=1;$color=$color2;
				$tree[2][19]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/19.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][19]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33872 || $char_talents["spell"]==33873)
			{
				switch ($char_talents["spell"]):
				case 33872:$points[2][20]=1;break;
				case 33873:$points[2][20]=2;$color=$color2;break;
				endswitch;
				$tree[2][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][20]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57878 || $char_talents["spell"]==57880 || $char_talents["spell"]==57881)
			{
				switch ($char_talents["spell"]):
				case 57878:$points[2][21]=1;break;
				case 57880:$points[2][21]=2;break;
				case 57881:$points[2][21]=3;$color=$color2;break;
				endswitch;
				$tree[2][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][21]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17003 || $char_talents["spell"]==17004 || $char_talents["spell"]==17005 || $char_talents["spell"]==17006 || $char_talents["spell"]==24894)
			{
				switch ($char_talents["spell"]):
				case 17003:$points[2][22]=1;break;
				case 17004:$points[2][22]=2;break;
				case 17005:$points[2][22]=3;break;
				case 17006:$points[2][22]=4;break;
				case 24894:$points[2][22]=5;$color=$color2;break;
				endswitch;
				$tree[2][22]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/22.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][22]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33853 || $char_talents["spell"]==33855 || $char_talents["spell"]==33856)
			{
				switch ($char_talents["spell"]):
				case 33853:$points[2][23]=1;break;
				case 33855:$points[2][23]=2;break;
				case 33856:$points[2][23]=3;$color=$color2;break;
				endswitch;
				$tree[2][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][23]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17007)
			{
				$points[2][26]=1;
				$color=$color2;
				$tree[2][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34297 || $char_talents["spell"]==34300)
			{
				switch ($char_talents["spell"]):
				case 34297:$points[2][27]=1;break;
				case 34300:$points[2][27]=2;$color=$color2;break;
				endswitch;
				$tree[2][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][27]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33851 || $char_talents["spell"]==33852 || $char_talents["spell"]==33957)
			{
				switch ($char_talents["spell"]):
				case 33851:$points[2][28]=1;break;
				case 33852:$points[2][28]=2;break;
				case 33957:$points[2][28]=3;$color=$color2;break;
				endswitch;
				$tree[2][28]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/28.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][28]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==57873 || $char_talents["spell"]==57876 || $char_talents["spell"]==57877)
			{
				switch ($char_talents["spell"]):
				case 57873:$points[2][29]=1;break;
				case 57876:$points[2][29]=2;break;
				case 57877:$points[2][29]=3;$color=$color2;break;
				endswitch;
				$tree[2][29]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/29.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][29]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33859 || $char_talents["spell"]==33866 || $char_talents["spell"]==33867)
			{
				switch ($char_talents["spell"]):
				case 33859:$points[2][31]=1;break;
				case 33866:$points[2][31]=2;break;
				case 33867:$points[2][31]=3;$color=$color2;break;
				endswitch;
				$tree[2][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][31]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48483 || $char_talents["spell"]==48484 || $char_talents["spell"]==48485)
			{
				switch ($char_talents["spell"]):
				case 48483:$points[2][32]=1;break;
				case 48484:$points[2][32]=2;break;
				case 48485:$points[2][32]=3;$color=$color2;break;
				endswitch;
				$tree[2][32]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/32.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][32]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48492 || $char_talents["spell"]==48494 || $char_talents["spell"]==48495)
			{
				switch ($char_talents["spell"]):
				case 48492:$points[2][33]=1;break;
				case 48494:$points[2][33]=2;break;
				case 48495:$points[2][33]=3;$color=$color2;break;
				endswitch;
				$tree[2][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33917)
			{
				$points[2][34]=1;
				$color=$color2;
				$tree[2][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48532 || $char_talents["spell"]==48489 || $char_talents["spell"]==48491)
			{
				switch ($char_talents["spell"]):
				case 48532:$points[2][35]=1;break;
				case 48489:$points[2][35]=2;break;
				case 48491:$points[2][35]=3;$color=$color2;break;
				endswitch;
				$tree[2][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48432 || $char_talents["spell"]==48433 || $char_talents["spell"]==48434 || $char_talents["spell"]==51268 || $char_talents["spell"]==51269)
			{
				switch ($char_talents["spell"]):
				case 48432:$points[2][38]=1;break;
				case 48433:$points[2][38]=2;break;
				case 48434:$points[2][38]=3;break;
				case 51268:$points[2][38]=4;break;
				case 51269:$points[2][38]=5;$color=$color2;break;
				endswitch;
				$tree[2][38]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/38.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][38]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==63503)
			{
				$points[2][39]=1;
				$color=$color2;
				$tree[2][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][39]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==50334)
			{
				$points[2][42]=1;
				$color=$color2;
				$tree[2][42]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/2/42.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[2][42]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

	//Tree 3
		if($char_talents["spell"]==17050 || $char_talents["spell"]==17051)
			{
				switch ($char_talents["spell"]):
				case 17050:$points[3][1]=1;break;
				case 17051:$points[3][1]=2;$color=$color2;break;
				endswitch;
				$tree[3][1]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/1.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][1]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17063 || $char_talents["spell"]==17065 || $char_talents["spell"]==17066)
			{
				switch ($char_talents["spell"]):
				case 17063:$points[3][2]=1;break;
				case 17065:$points[3][2]=2;break;
				case 17066:$points[3][2]=3;$color=$color2;break;
				endswitch;
				$tree[3][2]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/2.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][2]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17056 || $char_talents["spell"]==17058 || $char_talents["spell"]==17059 || $char_talents["spell"]==17060 || $char_talents["spell"]==17061)
			{
				switch ($char_talents["spell"]):
				case 17056:$points[3][3]=1;break;
				case 17058:$points[3][3]=2;break;
				case 17059:$points[3][3]=3;break;
				case 17060:$points[3][3]=4;break;
				case 17061:$points[3][3]=5;$color=$color2;break;
				endswitch;
				$tree[3][3]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/3.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][3]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17069 || $char_talents["spell"]==17070 || $char_talents["spell"]==17071 || $char_talents["spell"]==17072 || $char_talents["spell"]==17073)
			{
				switch ($char_talents["spell"]):
				case 17069:$points[3][5]=1;break;
				case 17070:$points[3][5]=2;break;
				case 17071:$points[3][5]=3;break;
				case 17072:$points[3][5]=4;break;
				case 17073:$points[3][5]=5;$color=$color2;break;
				endswitch;
				$tree[3][5]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/5.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][5]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17118 || $char_talents["spell"]==17119 || $char_talents["spell"]==17120)
			{
				switch ($char_talents["spell"]):
				case 17118:$points[3][6]=1;break;
				case 17119:$points[3][6]=2;break;
				case 17120:$points[3][6]=3;$color=$color2;break;
				endswitch;
				$tree[3][6]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/6.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][6]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16833 || $char_talents["spell"]==16834 || $char_talents["spell"]==16835)
			{
				switch ($char_talents["spell"]):
				case 16833:$points[3][7]=1;break;
				case 16834:$points[3][7]=2;break;
				case 16835:$points[3][7]=3;$color=$color2;break;
				endswitch;
				$tree[3][7]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/7.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][7]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17106 || $char_talents["spell"]==17107 || $char_talents["spell"]==17108)
			{
				switch ($char_talents["spell"]):
				case 17106:$points[3][9]=1;break;
				case 17107:$points[3][9]=2;break;
				case 17108:$points[3][9]=3;$color=$color2;break;
				endswitch;
				$tree[3][9]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/9.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][9]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==16864)
			{
				$points[3][10]=1;
				$color=$color2;
				$tree[3][10]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/10.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][10]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48411 || $char_talents["spell"]==48412)
			{
				switch ($char_talents["spell"]):
				case 48411:$points[3][11]=1;break;
				case 48412:$points[3][11]=2;$color=$color2;break;
				endswitch;
				$tree[3][11]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/11.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][11]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==24968 || $char_talents["spell"]==24969 || $char_talents["spell"]==24970 || $char_talents["spell"]==24971 || $char_talents["spell"]==24972)
			{
				switch ($char_talents["spell"]):
				case 24968:$points[3][14]=1;break;
				case 24969:$points[3][14]=2;break;
				case 24970:$points[3][14]=3;break;
				case 24971:$points[3][14]=4;break;
				case 24972:$points[3][14]=5;$color=$color2;break;
				endswitch;
				$tree[3][14]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/14.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][14]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17111 || $char_talents["spell"]==17112 || $char_talents["spell"]==17113)
			{
				switch ($char_talents["spell"]):
				case 17111:$points[3][15]=1;break;
				case 17112:$points[3][15]=2;break;
				case 17113:$points[3][15]=3;$color=$color2;break;
				endswitch;
				$tree[3][15]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/15.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][15]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17116)
			{
				$points[3][17]=1;
				$color=$color2;
				$tree[3][17]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/17.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][17]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17104 || $char_talents["spell"]==24943 || $char_talents["spell"]==24944 || $char_talents["spell"]==24945 || $char_talents["spell"]==24946)
			{
				switch ($char_talents["spell"]):
				case 17104:$points[3][18]=1;break;
				case 24943:$points[3][18]=2;break;
				case 24944:$points[3][18]=3;break;
				case 24945:$points[3][18]=4;break;
				case 24946:$points[3][18]=5;$color=$color2;break;
				endswitch;
				$tree[3][18]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/18.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][18]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17123 || $char_talents["spell"]==17124)
			{
				switch ($char_talents["spell"]):
				case 17123:$points[3][20]=1;break;
				case 17124:$points[3][20]=2;$color=$color2;break;
				endswitch;
				$tree[3][20]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/20.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][20]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33879 || $char_talents["spell"]==33880)
			{
				switch ($char_talents["spell"]):
				case 33879:$points[3][21]=1;break;
				case 33880:$points[3][21]=2;$color=$color2;break;
				endswitch;
				$tree[3][21]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/21.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][21]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==17074 || $char_talents["spell"]==17075 || $char_talents["spell"]==17076 || $char_talents["spell"]==17077 || $char_talents["spell"]==17078)
			{
				switch ($char_talents["spell"]):
				case 17074:$points[3][23]=1;break;
				case 17075:$points[3][23]=2;break;
				case 17076:$points[3][23]=3;break;
				case 17077:$points[3][23]=4;break;
				case 17078:$points[3][23]=5;$color=$color2;break;
				endswitch;
				$tree[3][23]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/23.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][23]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==34151 || $char_talents["spell"]==34152 || $char_talents["spell"]==34153)
			{
				switch ($char_talents["spell"]):
				case 34151:$points[3][25]=1;break;
				case 34152:$points[3][25]=2;break;
				case 34153:$points[3][25]=3;$color=$color2;break;
				endswitch;
				$tree[3][25]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/25.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][25]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==18562)
			{
				$points[3][26]=1;
				$color=$color2;
				$tree[3][26]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/26.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][26]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33881 || $char_talents["spell"]==33882 || $char_talents["spell"]==33883)
			{
				switch ($char_talents["spell"]):
				case 33881:$points[3][27]=1;break;
				case 33882:$points[3][27]=2;break;
				case 33883:$points[3][27]=3;$color=$color2;break;
				endswitch;
				$tree[3][27]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/27.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][27]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==33886 || $char_talents["spell"]==33887 || $char_talents["spell"]==33888 || $char_talents["spell"]==33889 || $char_talents["spell"]==33890)
			{
				switch ($char_talents["spell"]):
				case 33886:$points[3][30]=1;break;
				case 33887:$points[3][30]=2;break;
				case 33888:$points[3][30]=3;break;
				case 33889:$points[3][30]=4;break;
				case 33890:$points[3][30]=5;$color=$color2;break;
				endswitch;
				$tree[3][30]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/30.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][30]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48496 || $char_talents["spell"]==48499 || $char_talents["spell"]==48500)
			{
				switch ($char_talents["spell"]):
				case 48496:$points[3][31]=1;break;
				case 48499:$points[3][31]=2;break;
				case 48500:$points[3][31]=3;$color=$color2;break;
				endswitch;
				$tree[3][31]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/31.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][31]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48539 || $char_talents["spell"]==48544 || $char_talents["spell"]==48545)
			{
				switch ($char_talents["spell"]):
				case 48539:$points[3][33]=1;break;
				case 48544:$points[3][33]=2;break;
				case 48545:$points[3][33]=3;$color=$color2;break;
				endswitch;
				$tree[3][33]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/33.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][33]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==65139)
			{
				$points[3][34]=1;
				$color=$color2;
				$tree[3][34]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/34.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][34]."/1</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48535 || $char_talents["spell"]==48536 || $char_talents["spell"]==48537)
			{
				switch ($char_talents["spell"]):
				case 48535:$points[3][35]=1;break;
				case 48536:$points[3][35]=2;break;
				case 48537:$points[3][35]=3;$color=$color2;break;
				endswitch;
				$tree[3][35]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/35.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][35]."/3</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==63410 || $char_talents["spell"]==63411)
			{
				switch ($char_talents["spell"]):
				case 63410:$points[3][37]=1;break;
				case 63411:$points[3][37]=2;$color=$color2;break;
				endswitch;
				$tree[3][37]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/37.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][37]."/2</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==51179 || $char_talents["spell"]==51180 || $char_talents["spell"]==51181 || $char_talents["spell"]==51182 || $char_talents["spell"]==51183)
			{
				switch ($char_talents["spell"]):
				case 51179:$points[3][39]=1;break;
				case 51180:$points[3][39]=2;break;
				case 51181:$points[3][39]=3;break;
				case 51182:$points[3][39]=4;break;
				case 51183:$points[3][39]=5;$color=$color2;break;
				endswitch;
				$tree[3][39]="<a class='tooltip'><img class='icon' style='border:2px solid ".$color.";' src='img/".$path."/3/39.jpg' alt=''/>
				<div><span class='points' style='color:".$color.";border:1px solid ".$color.";'>".$points[3][39]."/5</span>
				<emi>".tooltip($char_talents["spell"])."</emi></div></a>";
			}

		if($char_talents["spell"]==48438)
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
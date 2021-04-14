<?php

# Var initialisation
$Ystart = 2015;
$Mstart = 12;
$Yend = date("Y");
$Mend = date("m");
$banList = [
	"2015-13",
];
$baseImgUrl = "https://raw.githubusercontent.com/lilianbaz/ChickenMusic/master/img/";

# Main
do	{
	# Year generation
	$randYear = random_int($Ystart, $Yend);

	# Month generation
	if($randYear == $Ystart)	{
		$randMonth = random_int($Mstart, 13);
	}
	else if($randYear == $Yend)	{
		$randMonth = random_int(1, $Mend);
	}
	else	{
		$randMonth = random_int(1,13);
	}

	# Concatenate
	$rand = $randYear . "-" . str_pad($randMonth, 2, "0", STR_PAD_LEFT);
	$found = true;

	# Check for banlist
	foreach($banList as $banned)	{
		if($rand == $banned) {
			$found = false;
			break;
		}
	}
} while(!$found);

$url = $baseImgUrl . $rand . ".jpg";

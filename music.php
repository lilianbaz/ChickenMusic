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

	# Month generatoin	
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
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Un peu de musique mon con ?</title>
		<style>
			.rainbow {
  				background-image: -webkit-gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  				background-image: gradient( linear, left top, right top, color-stop(0, #f22), color-stop(0.15, #f2f), color-stop(0.3, #22f), color-stop(0.45, #2ff), color-stop(0.6, #2f2),color-stop(0.75, #2f2), color-stop(0.9, #ff2), color-stop(1, #f22) );
  				color:transparent;
  				-webkit-background-clip: text;
  				background-clip: text;
			}
		</style>
	</head>
	<body>

		<?= "<div style=\"text-align:center\"><img style=\"width:600px\" src=\"$baseImgUrl$rand.jpg\"></div>"; ?>

	</body>
</html>

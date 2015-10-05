<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Powers of 10</title>
</head>

<body>
	<?php
		//Do-While - Divide By 10
		echo "<h1>Do-While - Divide By 10</h1>";
		$waveLength = 1e3;
		do{
			echo "<p>Wave Length = ".$waveLength."/<p>";
			$waveLength/=10;
		}while($waveLength>=1e-12);
		
		
		//For-Loop - Divide By 10
		echo "<h1>For-Loop - Divide By 10</h1>";
		for($waveLength=1e3;$waveLength>1e-12;$waveLength/=10){
			echo "<p>Wave Length = ".$waveLength."/<p>";
		}
		
		//Power of 10
		$ten = 10;
		echo "<h1>For-Loop - Power Function of 10</h1>";
		for($p10=3;$p10>-12;$p10--){
			$waveLength=pow($ten,$p10);
			echo "<p>Wave Length = ".$waveLength."/<p>";
		}
	?>
</body>
</html>
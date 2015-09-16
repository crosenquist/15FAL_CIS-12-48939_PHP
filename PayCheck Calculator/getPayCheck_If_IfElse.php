<!doctype html>
<html>
	<?php 
		/*
		Caleb Rosenquist
		Sept 14th, 2015
		Purpose: If & If-Else Example
		*/
	?>
<head>
<meta charset="utf-8">
<title>PayCheck If & If-Else</title>
</head>
    <body>
        <?php 
			//Declare Variables
			$payRate     = $_GET['payRate'];
            $hoursWorked = $_GET['hoursWorked'];
			$payCheck;
			$straightTime;
			$doubleTime;
			$tripleTime;
			
			//Calculate the Paycheck
			if($hoursWorked <= 20){
				$payCheck = $payRate * $hoursWorked;
			}else if($hoursWorked > 20 && $hoursWorked <=40){
				$straightTime = 20;
				$doubleTime   = $hoursWorked - 20;
				$payCheck = ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime);
			}else{
				$straightTime = 20;
				$doubleTime   = 20;
				$tripleTime   = $hoursWorked - 40;
				$payCheck = ($tripleTime * ($payRate * 3)) + ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime);
			}
			
            echo $payCheck;
        ?>
    </body>
</html>
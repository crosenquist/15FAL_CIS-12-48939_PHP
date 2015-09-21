<!doctype html>
<html>
	<?php 
		/*
		Caleb Rosenquist
		Sept 14th, 2015
		Purpose: Switch Example
		*/
	?>
<head>
<meta charset="utf-8">
<title>PayCheck Switch</title>
</head>
    <body>
        <?php
			//Declare Variables
			$payRate     = $_GET['payRate'];
            $hoursWorked = $_GET['hoursWorked'];
			$payCheck;
			$payTime;
			$straightTime;
			$doubleTime;
			$tripleTime;
			
			//Determine and Allocate Hours
			if($hoursWorked <= 20){
				$payTime      = 1;
				$straightTime = $hoursWorked;
			}else if($hoursWorked > 20 && $hoursWorked <= 40){
				$payTime      = 2;
				$straightTime = 20;
				$doubleTime   = $hoursWorked - 20;
			}else if($hoursWorked > 40){
				$payTime      = 3;
				$straightTime = 20;
				$doubleTime   = 20;
				$tripleTime   = $hoursWorked - 40;
			}else{
				$payTime = 0;
			}
			
			//Calculate the Paycheck
			switch($payTime){
				case 3:  $payCheck = ($tripleTime * ($payRate * 3)) + ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime); break;
				case 2:  $payCheck = ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime); break;
				case 1:  $payCheck = $payRate * $straightTime; break;
				default: $payCheck = "You have not provided valid responses.";
			}
            echo $payCheck;
        ?>
    </body>
</html>
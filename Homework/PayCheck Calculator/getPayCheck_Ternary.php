<!doctype html>
<html>
	<?php 
		/*
		Caleb Rosenquist
		Sept 14th, 2015
		Purpose: Ternary Example
		*/
	?>
<head>
<meta charset="utf-8">
<title>PayCheck Ternary</title>
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
			
			//Determine and Allocate Hours
			if($hoursWorked <= 20){
				$straightTime = $hoursWorked;
			}else if($hoursWorked > 20 && $hoursWorked <=40){
				$straightTime = 20;
				$doubleTime   = $hoursWorked - 20;
			}else{
				$straightTime = 20;
				$doubleTime   = 20;
				$tripleTime   = $hoursWorked - 40;
			}
			
			//Calculate the Paycheck
			$payCheck=(($hoursWorked <= 20)                       ? $payRate * $hoursWorked:
                      (($hoursWorked >  20 && $hoursWorked <= 40) ? ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime):
                      (($hoursWorked >  40)                       ? ($tripleTime * ($payRate * 3)) + ($doubleTime * ($payRate * 2)) + ($payRate * $straightTime):
                      "You have entered an invalid score.")));
            echo $payCheck;
        ?>
    </body>
</html>
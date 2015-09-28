<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ways to Write Functions</title>
    	<?php
			function save1($presentValue, $interestRate, $n){
				for($year=1;$year<=$n;$year++){
					$presentValue*=(1+$interestRate);
				}
				return $presentValue;
			}
			
			function save2($presentValue, $interestRate, $n){
				return $presentValue*pow(1+$interestRate,$n);
			}
			
			function save3($presentValue, $interestRate, $n){
				return $presentValue*exp($n*log(1+$interestRate));
			}
			
			function save4($presentValue,$interestRate, $n){
				if($n<=0)return $presentValue;
				return save4($presentValue,$interestRate,$n-1)*(1+$interestRate);
			}
			
			function save5($presentValue,$n,$interestRate=0.06){
				for($year=1;$year<=$n;$year++){
					$presentValue*=(1+$interestRate);
				}
				return $presentValue;
			}
			
			function save6($presentValue,$interestRate,$n,&$futureValue){
				$futureValue=$presentValue*exp($n*log(1+$interestRate));
			}
			
			function save7($presentValue, $interestRate, $n){
				//Declare an Array
				$fv = array();
				
				//Fill the Array
				$fv[0]=$presentValue;
				for($year=1;$year<=$n;$year++){
					$fv[$year]=$fv[$year-1]*(1+$interestRate);
				}
				return $fv;
			}
			
			function display($fv){
				echo '<table width="200" border="1">';
				echo "<tr><th>Year</th><th>Savings</th></tr>";
				for($year=0;$year<count($fv);$year++){
					echo "<tr>";
					echo "<td>".$year."</td>";
					echo "<td>".number_format($fv[$year],2)."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
    </head>
    
    <body>
    	<?php
			//Declare Variables
			$presentValue=100;  //Present Value $100
			$interestRate=0.06; //Interest Rate %
			$nYears      =12;   //Number of Compounding Years
			
			//Use the Function to calculate the value
			$futureValue1= save1($presentValue,$interestRate,$nYears); 
			$futureValue2= save2($presentValue,$interestRate,$nYears); 
			$futureValue3= save3($presentValue,$interestRate,$nYears); 
			$futureValue4= save4($presentValue,$interestRate,$nYears);
			$futureValue5= save5($presentValue,$nYears); 
			$futureValue6;
			save6($presentValue,$interestRate,$nYears,$futureValue6); 
			$futureValue7= save7($presentValue,$interestRate,$nYears); 
			
			//Display Results
			echo "<p> Present Value:   $".$presentValue."</p>";
			echo "<p> Interest Rate:    ".($interestRate*100)."%</p>";
			echo "<p> Number of Years: $".$nYears."</p>";
			echo "<p> Future Value1:    $".number_format($futureValue1,2)."</p>";
			echo "<p> Future Value2:    $".number_format($futureValue2,2)."</p>";
			echo "<p> Future Value3:    $".number_format($futureValue3,2)."</p>";
			echo "<p> Future Value4:    $".number_format($futureValue4,2)."</p>";
			echo "<p> Future Value5:    $".number_format($futureValue5,2)."</p>";
			echo "<p> Future Value6:    $".number_format($futureValue6,2)."</p>";
			display($futureValue7);
		?>
    </body>
</html>
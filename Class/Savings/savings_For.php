<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Savings: For-Loop</title>
        <?php
			/*
			Caleb Rosenquist
			September 21st, 2015
			Purpose: Demonstrate the potential of looping
			*/
		?>
    </head>
    
    <body>
    	<?php
			//Declare Variables
			$numYears     = 50;   //Number of years in table
			$interestRate = 0.05; //Interest Rate
			$principle    = 100;  //Initial Balance in Dollars
			
			//Creat Table Headings
			echo '<table width="200" border="1">';
			echo '<tr><th>Years</th><th>'.($interestRate*100).'% Savings</th></tr>';
			 
			//Populate Table Using For-Loop Row-by-Row
			for($year=1;$year<=$numYears;$year++){
				//Calculate accrued amount
				$principle*=(1+$interestRate);
				echo '<tr>';
					echo "<td>$year</td>";
					echo '<td>$'.number_format($principle,2).'</td>';
				echo '</tr>';
			}
			//Close out the table
			echo '</table>';
		?>
    </body>
</html>
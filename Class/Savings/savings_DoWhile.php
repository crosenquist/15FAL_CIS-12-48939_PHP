<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Savings: DoWhile-Loop</title>
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
			echo '<table width="00" border="1">';
			echo '<tr>';
				echo '<th>Years</th>';
				echo '<th>'.($interestRate*100).'% Savings</th>';
				echo '<th>'.(($interestRate+0.01)*100).'% Savings</th>';
				echo '<th>'.(($interestRate+0.02)*100).'% Savings</th>';
				echo '<th>'.(($interestRate+0.03)*100).'% Savings</th>';
				echo '<th>'.(($interestRate+0.04)*100).'% Savings</th>';
				echo '<th>'.(($interestRate+0.05)*100).'% Savings</th>';
			echo '</tr>';
			 
			//Populate Table Using DoWhile-Loop Row-by-Row
			$year = 1;
			do{
				//Calculate accrued amount
				$principle*=(1+$interestRate);
				$principle=((int)($principle*100))/100;  //Limiting to pennies with truncation
				echo '<tr>';
					echo "<td>$year</td>";
					echo '<td>$'.number_format($principle,2).'</td>';
				echo '</tr>';
			}while(++$year <= $numYears);
			//Close out the table
			echo '</table>';
		?>
    </body>
</html>
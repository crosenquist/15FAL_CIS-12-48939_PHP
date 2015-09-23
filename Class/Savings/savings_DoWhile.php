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
			$numYears       = 50;   //Number of years in table
			$interestRate5  = 0.05; //Interest Rate
			$interestRate6  = 0.06; //Interest Rate
			$interestRate7  = 0.07; //Interest Rate
			$interestRate8  = 0.08; //Interest Rate
			$interestRate9  = 0.09; //Interest Rate
			$interestRate10 = 0.10; //Interest Rate
			$principle5     = 100;  //Initial Balance in Dollars
			$principle6     = 100;  //Initial Balance in Dollars
			$principle7     = 100;  //Initial Balance in Dollars
			$principle8     = 100;  //Initial Balance in Dollars
			$principle9     = 100;  //Initial Balance in Dollars
			$principle10    = 100;  //Initial Balance in Dollars
			
			//Creat Table Headings
			echo '<table width="00" border="1">';
			echo '<tr>';
				echo '<th>Years</th>';
				echo '<th>'.($interestRate5*100).'% Savings</th>';
				echo '<th>'.($interestRate6*100).'% Savings</th>';
				echo '<th>'.($interestRate7*100).'% Savings</th>';
				echo '<th>'.($interestRate8*100).'% Savings</th>';
				echo '<th>'.($interestRate9*100).'% Savings</th>';
				echo '<th>'.($interestRate10*100).'% Savings</th>';
			echo '</tr>';
			 
			//Populate Table Using DoWhile-Loop Row-by-Row
			$year = 1;
			do{
				//Calculate accrued amount for 0.0% Interest Rate
				$principle5*=(1+$interestRate5);
				$principle5=((int)($principle5*100))/100;  //Limiting to pennies with truncation
				//Calculate accrued amount for 0.06% Interest Rate
				$principle6*=(1+$interestRate6);
				$principle6=((int)($principle6*100))/100;  //Limiting to pennies with truncation
				//Calculate accrued amount for 0.07% Interest Rate
				$principle7*=(1+$interestRate7);
				$principle7=((int)($principle7*100))/100;  //Limiting to pennies with truncation
				//Calculate accrued amount for 0.08% Interest Rate
				$principle8*=(1+$interestRate8);
				$principle8=((int)($principle8*100))/100;  //Limiting to pennies with truncation
				//Calculate accrued amount for 0.09% Interest Rate
				$principle9*=(1+$interestRate9);
				$principle9=((int)($principle9*100))/100;  //Limiting to pennies with truncation
				//Calculate accrued amount for 0.10% Interest Rate
				$principle10*=(1+$interestRate10);
				$principle10=((int)($principle10*100))/100;  //Limiting to pennies with truncation
				
				echo '<tr>';
					echo "<td>$year</td>";
					echo '<td>$'.number_format($principle5,2).'</td>';
					echo '<td>$'.number_format($principle6,2).'</td>';
					echo '<td>$'.number_format($principle7,2).'</td>';
					echo '<td>$'.number_format($principle8,2).'</td>';
					echo '<td>$'.number_format($principle9,2).'</td>';
					echo '<td>$'.number_format($principle10,2).'</td>';
				echo '</tr>';
			}while(++$year <= $numYears);
			//Close out the table
			echo '</table>';
		?>
    </body>
</html>
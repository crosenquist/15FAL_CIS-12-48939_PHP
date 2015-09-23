<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Savings: For-Loop</title>
        <?php
			/*
			Caleb Rosenquist
			September 21st, 2015
			Purpose: Demonstrate the potential of looping through a One Dimensional Array
			*/
		?>
    </head>
    
    <body>
    	<?php
			//Declare Variables
			$numYears      = 50;   //Number of years in table
			$interestRate  = 0.05; //Interest Rate
			$principle     = 100;  //Initial Balance in Dollars
			
			//Declare One Dimensional Parallel Arrays
			$years   = array();
			$savings = array();
			
			//Fill the Arrays
			for($year=0;$year<=$numYears;$year++){
				$years[$year] = $year;
				$savings[$year] = $principle*pow((1+$interestRate),$year);
				$savings[$year] = number_format($savings[$year],2,'.','');
			}
			
			//Creat Table Headings
			echo '<table width="00" border="1">';
			echo '<tr>';
				echo '<th>Years</th>';
				echo '<th>'.($interestRate*100).'% Savings</th>';
			echo '</tr>';
			 
			//Populate Table Using For-Loop Row-by-Row
			for($year=0;$year<=$numYears;$year++){
				//Calculate accrued amount for 0.0% Interest Rate
				echo '<tr>';
					echo "<td>".$years[$year]."</td>";
					echo '<td>$'.$savings[$year].'</td>';
				echo '</tr>';
			}
			//Close out the table
			echo '</table>';
		?>
    </body>
</html>
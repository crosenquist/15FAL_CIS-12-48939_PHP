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
			$numYears  = 50;   //Number of years in table
			$principle = 100;  //Initial Balance in Dollars
			$intBeg    = 0.05; //Beginning Interest Rate
			$intEnd    = 0.10; //Ending Interest Rate
			$intInc    = 0.01; //Interest Increment
			
			//Declare One Dimensional Parallel Array(s)
			$interestRate = array();
			$years   	  = array();
			$savings      = array(); //The Dimension for year
			
			//Fill the Interest Rate Array
			for($index=0,$int=$intBeg;$int<=$intEnd;$index++,$int+=$intInc){
				$interestRate[$index] = $int;
				$savings[$index] = array(); //Creates Savings as a 2-Dimensional Array for interest
			}
			
			//Fill the Arrays
			for($year=0;$year<=$numYears;$year++){
				$years[$year] = $year;
				for($index=0;$index<count($interestRate);$index++){
					$savings[$index][$year] = $principle*pow((1+$interestRate[$index]),$year);
					$savings[$index][$year] = number_format($savings[$index][$year],2,'.','');
				}
			}
			
			//Creat Table Headings
			echo '<table width="00" border="1">';
			  echo '<tr>';
			  echo '<th>Years</th>';
			  for($index=0;$index<count($interestRate);$index++){
				  echo '<th>'.($interestRate[$index]*100).'% Savings</th>';
			  }
			  echo '</tr>'; 
			 
			  //Populate Table Using For-Loop Row-by-Row
			  for($year=0;$year<=$numYears;$year++){
			  	//Calculate accrued amount for 0.0% Interest Rate
				echo '<tr>';
					echo "<td>".$years[$year]."</td>";
					for($index=0;$index<count($interestRate);$index++){
						echo '<td>$'.$savings[$index][$year].'</td>';
					}
				echo '</tr>';
			  }
			//Close out the table
			echo '</table>';
		?>
    </body>
</html>
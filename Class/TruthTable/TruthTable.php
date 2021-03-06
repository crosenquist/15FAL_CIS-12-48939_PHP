<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Truth Table</title>
            <?
            /*
            Caleb Rosenquist
            September 21st, 2015
            Purpose: Logical Operators
            */
            ?>
    </head>
    
    <body>
        <table width="600" border="1">
          <tbody>
            <tr>
              <td>X</td>
              <td>Y</td>
              <td>!X</td>
              <td>!Y</td>
              <td>X&&Y</td>
              <td>X||Y</td>
              <td>X^Y</td>
              <td>X^Y^X</td>
              <td>X^Y^Y</td>
              <td>!(X&&Y)</td>
              <td>!X&&!Y</td>
              <td>!(X||Y)</td>
              <td>!X||!Y</td>
            </tr>
            <tr>
              <?php
				  $x = true;
				  $y = true;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
				  echo "<td>".($x||$y?"T":"F")."</td>";
				  echo "<td>".($x^$y?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$x?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$y?"T":"F")."</td>";
				  echo "<td>".(!($x&&$y)?"T":"F")."</td>";
				  echo "<td>".(!$x&&!$y?"T":"F")."</td>";
				  echo "<td>".(!($x||$y)?"T":"F")."</td>";
				  echo "<td>".(!$x||!$y?"T":"F")."</td>";
			  ?>
            </tr>
            <tr>
              <?php
				  $x = true;
				  $y = false;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
				  echo "<td>".($x||$y?"T":"F")."</td>";
				  echo "<td>".($x^$y?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$x?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$y?"T":"F")."</td>";
				  echo "<td>".(!($x&&$y)?"T":"F")."</td>";
				  echo "<td>".(!$x&&!$y?"T":"F")."</td>";
				  echo "<td>".(!($x||$y)?"T":"F")."</td>";
				  echo "<td>".(!$x||!$y?"T":"F")."</td>";
			  ?>
            </tr>
            <tr>
               <?php
				  $x = false;
				  $y = true;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
				  echo "<td>".($x||$y?"T":"F")."</td>";
				  echo "<td>".($x^$y?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$x?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$y?"T":"F")."</td>";
				  echo "<td>".(!($x&&$y)?"T":"F")."</td>";
				  echo "<td>".(!$x&&!$y?"T":"F")."</td>";
				  echo "<td>".(!($x||$y)?"T":"F")."</td>";
				  echo "<td>".(!$x||!$y?"T":"F")."</td>";
			  ?>
            </tr>
            <tr>
               <?php
				  $x = false;
				  $y = false;
				  echo "<td>".($x?"T":"F")."</td>";
				  echo "<td>".($y?"T":"F")."</td>";
				  echo "<td>".(!$x?"T":"F")."</td>";
				  echo "<td>".(!$y?"T":"F")."</td>";
				  echo "<td>".($x&&$y?"T":"F")."</td>";
				  echo "<td>".($x||$y?"T":"F")."</td>";
				  echo "<td>".($x^$y?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$x?"T":"F")."</td>";
				  echo "<td>".(($x^$y)^$y?"T":"F")."</td>";
				  echo "<td>".(!($x&&$y)?"T":"F")."</td>";
				  echo "<td>".(!$x&&!$y?"T":"F")."</td>";
				  echo "<td>".(!($x||$y)?"T":"F")."</td>";
				  echo "<td>".(!$x||!$y?"T":"F")."</td>";
			  ?>
            </tr>
          </tbody>
        </table>

    </body>
</html>
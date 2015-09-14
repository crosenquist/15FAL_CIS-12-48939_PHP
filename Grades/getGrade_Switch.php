<!doctype html>
<html>
	<?php /*
		RCC Class PHP
		Sept 14th, 2015
		Purpose: Ternary Switch Example
			*/
	?>
<head>
<meta charset="utf-8">
<title>Test Grade</title>
</head>
    <body>
        <?php //Sets the latter grade variable to NULL and sets the score variable from the form data
            $let_grade = "NULL";
            $score=$_GET['score'];
        ?>
        
        <p>With a grade of <?php echo $_GET["score"];?>, your letter grade would be
    
        <?php //Uses Switch Construct
			
			if($score>0 && $score<=100){
				$iScore=(int)($score/10);
				switch($iScore){
					case 10: $grade="A"; break;
					case 9:  $grade="A"; break;
					case 8:  $grade="B"; break;
					case 7:  $grade="C"; break;
					case 6:  $grade="D"; break;
					case 5:  //Blanks divert down to the next case
					case 4:  
					case 3:  
					case 2:  
					case 1:  
					case 0:  $grade="F"; break;
					default: $grade="You have entered an invlaid grade.";
				}
			}else{
				$grade="You have entered an invlaid grade.";
			}
            echo $grade;
        ?>
        .</p>
    </body>
</html>
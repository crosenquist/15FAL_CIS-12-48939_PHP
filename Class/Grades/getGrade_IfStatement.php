<!doctype html>
<html>
	<?php /*
		RCC Class PHP
		Sept 14th, 2015
		Purpose: Ternary Operator Example
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
        
        <p>With a grade of <?php echo $_Get["score"];?>, your letter grade would be
    
        <?php //Uses indpendent If-Statements, implies the test needs to be two sided
            if($score<0)		    	  $grade = "You have entered an invalid grade.";
			if($score>=0  && $score<60)   $grade = "F";
			if($score>=60 && $score<70)   $grade = "D";
			if($score>=70 && $score<80)   $grade = "C";
			if($score>=80 && $score<90)   $grade = "B";
			if($score>=90 && $score<=100) $grade = "A";
			if($score>100)		    	  $grade = "Smart Ass";
			
            echo $grade;
        ?>
        .</p>
    </body>
</html>
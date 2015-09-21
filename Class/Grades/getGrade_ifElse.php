<!doctype html>
<html>
	<?php /*
		RCC Class PHP
		Sept 14th, 2015
		Purpose: Ternary If-Else Example
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
    
        <?php //Uses If-Else Construct
            if($score<0)		 $grade="You have entered an invlaid grade.";
			else if($score<60)  $grade="F";
            else if($score<70)  $grade="D";
            else if($score<80)  $grade="C";
            else if($score<90)  $grade="B";
            else if($score<=100)$grade="A";
			else				 $grade="You have entered an invalid grade.";
                   
            echo $grade;
        ?>
        .</p>
    </body>
</html>
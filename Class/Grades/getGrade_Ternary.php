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
        
        <p>With a grade of <?php echo $_GET["score"];?>, your letter grade would be
    
        <?php //Uses Ternary Operator
            $grade=(($score<60)?"F":
                   (($score<70)?"D":
                   (($score<80)?"C":
                   (($score<90)?"B":
                   (($score<=100)?"A":
                   "You have entered an invalid score.")))));
            echo $grade;
        ?>
        .</p>
    </body>
</html>
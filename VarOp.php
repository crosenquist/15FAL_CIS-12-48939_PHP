<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables and Operators</title>
<?php
/*
	Caleb Rosenquist
	Sept. 9th, 2015
	Purpose: Investirage variables and operators
*/
?>
</head>

<body>
<?php
	//Create variables of all primitive data types
	$ix=(int)(9/5);    //Integer
	$fx=(float)(9/5);  //Float
	$fy=3.12e1;		   //Double Scienetific Notation
	$fz=3120e-2;	//Double Scienetific Notation
	$hx=0xFF;          //Hex
	$ox=077;		   //Octal
	$bx=0b11;		   //Binary
	$boolx=true;	   //Boolean
	$booly=false;      //Boolean
	$sx="This is a great day!";
	$mx=10%3;    	   //Mod Operator
	echo "<p> $ix </p>";
	echo "<p> $fx </p>";
	echo "<p> $fy </p>";
	echo "<p> $fz </p>";
	echo "<p> $hx </p>";
	echo "<p> $ox </p>";
	echo "<p> $bx </p>";
	echo "<p> $boolx $booly </p>";
	echo "<p> $sx </p>";
	echo "<p> $mx </p>";
?>
</body>
</html>
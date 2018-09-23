<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP data-type</title>
</head>
<body>
	<?php
	// string
	$x = "x";

	// int
	$y = 123;

	// float
	$z = 4.56;

	$f = 1.234567891011;

	echo "$x type is: ".gettype($x)."</br>";
	var_dump($x);
	echo "<br>";
	echo "<br>";

	echo "$y type is: ".gettype($y)."</br>";
	var_dump($y);
	echo "<br>";
	echo "<br>";

	echo "$z type is: ".gettype($z)."</br>";
	var_dump($z);
	echo "<br>";
	echo "<br>";
	
	echo "$f type is: ".gettype($f)."</br>";
	var_dump($f);
	echo "<br>";
	echo "<br>";

	// boolean
	$yes = true;
	$no = false;

	var_dump($yes);
	echo "<br>";
	echo "<br>";
	var_dump($no);
	echo "<br>";
	echo "<br>";

	// when define array ,need to use array
	$my_array = array("snooker","beauty","money");
	var_dump($my_array);
	echo "<br>";
	echo "<br>";

	// null is not empty,check null should be use is_null
	$nu = null;
	var_dump($nu);
	echo "<br>";
	echo "<br>";
	?>
</body>
</html>
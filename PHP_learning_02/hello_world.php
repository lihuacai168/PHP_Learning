<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My frist PHP page</title>
</head>
<body>
	<?php 
	#使用</br>换行
	// echo - 可以输出一个或多个字符串
	echo "Hello World </br>";
	
	// 定义变量和使用变量需要加上$符号

	$x = 3;
	$y = 4;
	$z = 5;
	
	$result = ($z*$z == $x*$x + $y*$y) ? yes : no ;
	
	// print - 只允许输出一个字符串，返回值总为 1
	print($result);
	 ?>
</body>
</html>
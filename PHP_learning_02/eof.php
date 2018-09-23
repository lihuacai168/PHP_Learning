<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP EOF</title>
</head>
<body>
	<?php
	echo 
	<<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格
	?>

	<?PHP
	$name = "Rikasai";
	$a= <<<EOF
	"TEST"$name
	"rjweljl"
EOF;
	echo "$a";
	?>
</body>
</html>
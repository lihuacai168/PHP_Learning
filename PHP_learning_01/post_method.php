<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Method</title>
</head>
<body>
	<form name="input" action="post.php" method="post">
		
		<p>用户名: <input type="text" name="username"> </p>
		<p>密码: <input type="password" name=" "></p>
		<p>
			<input name="fav[]" id="fav_id" type="checkbox" value="money">money</input>
			<input name="fav[]" id="fav_id" type="checkbox" value="girl">girl</input>
			<input name="fav[]" id="fav_id" type="checkbox" value="free">free</input>
		</p>
		<input type="submit" value="Submit">

	</form>
  


</body>
</html>



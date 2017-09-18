<?php

if(isset($_REQUEST['submit'])){
	echo $_REQUEST['id'];
	echo $_REQUEST['email'];	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="id"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
	session_start();

	if(isset($_POST['login'])){
		$_SESSION['name'] = "San Pwint Thu";
		$_SESSION['email'] = "sanpwintthu@email.com";

		header("location: select.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<form action="" method="post">
		<input type="submit" name="login">
	</form>
</body>
</html>
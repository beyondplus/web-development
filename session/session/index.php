<?php

session_start();

$_SESSION['email'] = "sanpwintthu@gmail.com";
$_SESSION['phone'] = "09252232135";

print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="logout.php">Logout</a>
</body>
</html>
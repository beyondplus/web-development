<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$_SESSION['name'] = "San Pwint Thu";
	$_SESSION['email'] = "sanpwintthu@email.com";

	// session array
	print_r($_SESSION);

	// session json format
	//echo json_encode($_SESSION);

	// session clear data
	// session_unset();
	// print_r($_SESSION);
?>

</body>
</html>
<?php
include('db.php');
if(isInteger($_GET['id'])) {
	
	$id = $_GET['id'];
	$sql = "DELETE FROM  ebook WHERE id='$id'";
	$result = $conn->query($sql);
	if($result) {
		header("Location: select.php");
	}
} else {
	//echo "wrong number";
}

?>
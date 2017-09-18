<?php
include('./../db.php');
if(!isset($_SESSION['email'])){
	header("location: index.php");
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
	// sql to delete a record
	$sql = "DELETE FROM posts WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	    header( "Location: select.php" );
	} else {
	    echo "Error deleting record: " . $conn->error;
	}	
}


$conn->close();
?>
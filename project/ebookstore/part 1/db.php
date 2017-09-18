<?php
	// Create connection
	$conn = new mysqli('localhost', 'root', 'user123', 'ebookstore');
	if($conn->connect_error) {
		echo "error";
	}
?>
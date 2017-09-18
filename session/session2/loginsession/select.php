<?php

session_start();

if(!isset($_SESSION['email'])){
	header("location: login.php");
}

print_r($_SESSION);
?>
<br> 	
<a href="logout.php">Logout</a>
<?php
session_start();

if($_SESSION['email'] != ""){
	print_r($_SESSION);	
} else {
	header('Location: login.php');
}


?>
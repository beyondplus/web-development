<?php
session_start();

session_unset();
session_destroy();

print_r($_SESSION);

echo "Successfully logout";
?>

<a href="login.php">Login</a>

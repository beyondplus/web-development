<?php
session_start();

session_unset();
session_destroy();

print_r($_SESSION);

echo "Successfully logout";
?>

<a href="index.php">Login</a>

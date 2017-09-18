<?php
$x = "mg mg";

if($x == "mg mg") {
	echo "true";
} else {
	echo "false";
}
echo "<br>";
$mark = "90";
if($mark > "40" && $mark < "80") {
	echo "pass";
} else if ($mark > "80"){
	echo "credit";
} else {
	echo "fail";
}
echo "<br>";
echo ($x == "mg mg")? "true": "false";

$marks = "40";
switch ($marks) {
	case 40:
		echo "Your mark is 40";
		break;
	case 50:
		echo "Your mark is 50";
		break;
	
	default:
		echo "Not Equal";
		break;
}
?>
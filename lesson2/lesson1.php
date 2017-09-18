<?php

echo "Hello <b>World</b>";

$x = 40;
$y = 20;
echo $x/$y;

$first_name = "20";
$last_name = "40";
$full_name = $first_name."/".$last_name;
echo $full_name;

echo "<br><b>".$full_name."</b>";

?>

<br>
<b><?php echo $full_name; ?></b> 
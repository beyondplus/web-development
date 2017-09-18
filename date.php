<?php
date_default_timezone_set("Asia/Yangon");

// echo date("D m y");

// echo date("l jS \of F Y h:i:s A");
// echo "<br>";
// echo date("d/m/Y");

// echo strtotime(date("d/m/Y"));

$startDate = date_create("29-2-2016");
$endDate= date_create("20-2-2016");
$diffDate = date_diff($startDate,$endDate);
print_r($diffDate);
$invert = ($diffDate->invert == 0) ? "+" : "-";
$day = $diffDate->days;
echo $invert.$day;

?>
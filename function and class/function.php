<?php

function test() {
	return "hello";
}

$test = test();
echo "$test World";

function color($color1) {
	return $color1;
}

echo color('red');
echo "<br>";
function colors($color1, $color2) {
	return $color1." and ".$color2;
}

echo colors('red', 'yellow');

function multiplecolors($color1, $color2, $color3, $color4 , $color5) {
	return $color1." and ".$color2;
}

echo multiplecolors('red', 'yellow');

echo "<br>";
// function arraycolors($colors) {
// 	return $colors;
// }

// $colors = ['red', 'blue','green'];
// //print_r(arraycolors($colors));

// foreach(arraycolors(['red', 'blue','green']) as $value) {
// 	echo $value;
// }


function arraycolors($colors) {
	foreach($colors as $value) {
		$output .=  "$value,";
	}
	return $output;
}

$colors = ['red', 'blue','green'];
//print_r(arraycolors($colors));

echo arraycolors($colors);


?>
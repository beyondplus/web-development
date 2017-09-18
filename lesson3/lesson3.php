<?php

$grade = array('grade A','grade B','grade C');
print_r($grade);
echo $grade[2];
echo "<br>";

$grade = array('A' => 'grade A','car'=>'grade B','C' => 'grade C');
echo "<br>";
print_r($grade);
echo $grade['C'];

$grade = ['A' => 'grade A','car'=>'grade B','C' => 'grade C'];
echo "<br>";
print_r($grade);
echo $grade['C'];
echo json_encode($grade);

echo "<br>";
$grade = array(array('grade A','grade B','grade C'),array('grade D','grade E','grade F'),array('grade A','grade B','grade C'));
// print_r($grade);
// print_r($grade['grade']);
echo $grade[1][1];
echo "<br>";

$grade = array('grade A','grade B','grade C');
// $i = 2;
// echo $grade[$i];

for($i=0;$i<3;$i++) {
	echo $grade[$i];
}
echo "<br>";
$grade = array(array('grade A','grade B','grade C'),array('grade D','grade E','grade F'),array('grade A','grade B','grade C'));
for($i=0;$i<3;$i++) {
	for($y=0;$y<3;$y++){
		echo $grade[$i][$y];	
	}
	
}

$grade = array('grade A','grade B','grade C','grade D');

echo sizeof($grade);
for($i=0;$i<sizeof($grade);$i++) {
	echo $grade[$i];
}
echo "<br>";
?>
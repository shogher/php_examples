<?php
/*function maximum($ar) {
	$maximum = $ar[0];
	for ($i = 1; $i < count($ar); $i++) {
		$maximum = ($maximum > $ar[$i]) ? $maximum : $ar[$i];
	}
	return $maximum;
}
function sum($ar) {
	$sum = $ar[0];
	for ($i = 1; $i < count($ar); $i++) {
		$sum += $ar[$i];
	}
	return $sum;
}
function average($ar) {
	$avg = sum($ar) / count($ar);
	return $avg;
}
$array = array(1, 5, 10, 7, 8, 9);
$dict = array("name" => "Shogher", "lastname" => "Baghryan", "age" => 22 );
foreach ($dict as $key => $val) {
	echo $key. " - " . $val."\n";
}
echo "My name is ".$dict["name"]." ".$dict["lastname"].". I am ".$dict["age"]." years old.";
echo "\n";	
echo maximum($array);
echo "\n";
echo sum($array);
echo "\n";
echo average($array);
*/
$array1 = array("one", "thousand", "two", "autumn");
function maxLength($ar) {
	$length = strlen($ar[0]);
	for ($i = 1; $i < count($ar); $i++) {
		$length = ($length > strlen( $ar[$i])) ? $length : strlen($ar[$i]);
}
return $length;
}
echo "\n";
echo maxLength($array1);
echo "\n";
